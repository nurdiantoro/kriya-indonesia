<?php

namespace App\Http\Controllers;

use App\Exports\ExportExhibitor;
use App\Exports\ExportExhibitorFormA;
use App\Exports\ExportUser;
use App\Exports\ExportVisitor;
use App\Models\Contact;
use App\Models\Exhibitor;
use App\Models\Exhibitor_form_a;
use App\Models\HighlightExhibitor;
use App\Models\User;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class Backend extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view("backend.dashboard", ["user" => $user]);
    }
    public function profile()
    {
        $user = Auth::user();
        return view("backend.profile", ["user" => $user]);
    }
    public function profile_change()
    {
        $user = Auth::user();
        return view("backend.profile_change", ["user" => $user]);
    }
    public function profile_change_password()
    {
        $user = Auth::user();
        return view("backend.profile_change_password", ["user" => $user]);
    }
    public function profile_update(Request $request)
    {
        $user = User::where('id', $request->id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'telp' => $request->telp,
        ]);
        return redirect('dashboard/profile')->with(["pesan" => "Profile berhasil diubah"]);
    }
    public function profile_update_password(Request $request)
    {
        $validasi_password = $request->validate([
            'password' => ['same:confirm_password'],
        ]);

        if ($validasi_password) {
            $id = Auth::user()->id;
            User::where('id', $id)->update([
                'password' => Hash::make($request->input('password')),
            ]);
            return redirect()->back()->with('pesan', 'Password berhasil diubah');
        } else {
            $pesan = 'Password yang anda masukan tidak sesuai';
        }
        return redirect()->back()->with(["pesan" => "Profile berhasil diubah"]);
    }
    public function contact()
    {
        $contacts = Contact::all();
        $user = Auth::user();
        return view("backend.contact", ["user" => $user, "contacts" => $contacts]);
    }

    public function exhibitor()
    {
        $exhibitor = Exhibitor::all();
        $user = Auth::user();
        return view('backend.exhibitor', ["user" => $user, 'exhibitors' => $exhibitor]);
    }

    public function exhibitor_duplicate_to_form_a($id)
    {
        $user = Auth::user();
        $exhibitor = Exhibitor::all();
        $duplicate = Exhibitor::find($id);
        Exhibitor_form_a::create([
            'perusahaan' => $duplicate->perusahaan,
            'alamat' => $duplicate->alamat,
            'telp_kantor' => $duplicate->telp_kantor,
            'no_npwp' => $duplicate->no_npwp,
            'alamat_npwp' => $duplicate->alamat_npwp,
            'email' => $duplicate->email,
            'website' => $duplicate->website,
            'pic' => $duplicate->pic,
            'jabatan' => $duplicate->jabatan,
            'handphone' => $duplicate->handphone,
            'kategori' => $duplicate->kategori,
            'bidang_usaha' => $duplicate->bidang_usaha,
            'hall' => $duplicate->hall,
            'nomor_stand' => $duplicate->nomor_stand,
            'fascia' => $duplicate->fascia,
            'status' => $duplicate->status,
        ]);
        return redirect('dashboard/exhibitor')->with(['success' => 'Exhibitor berhasil diduplikat ke form A.']);
    }

    public function detail_exhibitor($id)
    {
        $exhibitor = Exhibitor::where('id', $id)->first();
        $user = Auth::user();

        if (Exhibitor_form_a::where('perusahaan', $exhibitor->perusahaan)->exists()) {
            $form_a = 'true';
        } else {
            $form_a = 'false';
        }

        return view('backend.exhibitor_detail', [
            'user' => $user,
            'exhibitor' => $exhibitor,
            'form_a' => $form_a,
        ]);
    }

    public function change_exhibitor($id)
    {
        $exhibitor = Exhibitor::where('id', $id)->first();
        $user = Auth::user();
        return view('backend.change_exhibitor', ['user' => $user, 'exhibitor' => $exhibitor]);
    }

    public function delete_exhibitor($id)
    {
        Exhibitor::where('id', $id)->delete();
        return redirect('dashboard/exhibitor/');
    }
    public function update_exhibitor(Request $request)
    {
        $exhibitor = Exhibitor::find($request->id);
        $exhibitor->update(
            $request->all()
        );
        return redirect('dashboard/exhibitor/' . $request->id)->with(['pesan' => 'Data Exhibitor berhasil diubah']);
    }

    public function exhibitor_form_a()
    {
        $exhibitor = Exhibitor_form_a::all();
        $user = Auth::user();
        return view('backend.exhibitor_form_a', ["user" => $user, 'exhibitors' => $exhibitor]);
    }
    public function detail_exhibitor_form_a($id)
    {
        $exhibitor = Exhibitor_form_a::where('id', $id)->first();
        $user = Auth::user();
        return view('backend.exhibitor_form_a_detail', ["user" => $user, 'exhibitor' => $exhibitor]);
    }

    public function change_exhibitor_form_a($id)
    {
        $exhibitor = Exhibitor_form_a::where('id', $id)->first();
        $user = Auth::user();
        return view('backend.change_exhibitor_form_a', ['user' => $user, 'exhibitor' => $exhibitor]);
    }

    public function delete_exhibitor_form_a($id)
    {
        Exhibitor_form_a::where('id', $id)->delete();
        return redirect('dashboard/exhibitor_form_a/')->with(['success' => 'Data Exhibitor berhasil dihapus']);
    }
    public function update_exhibitor_form_a(Request $request)
    {
        $exhibitor = Exhibitor_form_a::find($request->id);
        $exhibitor->update(
            $request->all()
        );
        return redirect('dashboard/exhibitor_form_a/' . $request->id)->with(['success' => 'Data Exhibitor berhasil diubah']);
    }

    public function scan_barcode()
    {
        $user = Auth::user();
        $visitors = Visitor::all();
        $visitor_totals = Visitor::all()->count();
        $visitor_todays = Visitor::whereDate('created_at', Carbon::today())->distinct('email')->count();
        // $visitor_todays = Visitor::whereDate('created_at', [Carbon::createFromDate(2024, 7, 10), Carbon::createFromDate(2024, 7, 14)->endOfDay()])->distinct('email')->count();
        return view('backend.scan_barcode', [
            'user' => $user,
            'visitors' => $visitors,
            'visitor_totals' => $visitor_totals,
            'visitor_todays' => $visitor_todays,
        ]);
    }

    public function data_registration()
    {
        $user = Auth::user();
        $visitors = User::where('role_id', '2')->get();
        return view('backend.data_registration', ['user' => $user, 'visitors' => $visitors]);
    }

    public function data_admin()
    {
        $user = Auth::user();
        $admins = User::where('role_id', '1')->get();
        return view('backend.data_admin', ['user' => $user, 'admins' => $admins]);
    }

    public function settings()
    {
        $user = Auth::user();
        $highlights = HighlightExhibitor::all();
        return view('backend.settings', [
            'user' => $user,
            'highlights' => $highlights,
        ]);
    }

    public function reset_password()
    {
        return view('backend.reset_password', ['title' => 'Reset Password']);
    }

    public function reset_password_submit(Request $request)
    {
        // dd($request->all());

        $user = User::where('email', $request->email)->update(['password' => Hash::make($request->input('password')),]);

        if ($user) {
            $pesan = 'Password berhasil diubah';
        } else {
            $pesan = 'Email tidak ditemukan';
        }
        return redirect()->back()->with(['pesan' => $pesan]);
    }

    public function reset_password_by_admin($qr_code)
    {
        $reset_password = 'kriya2024';

        $user = User::where('qr_code', $qr_code)->update(['password' => Hash::make($reset_password),]);

        if ($user) {
            $pesan = 'Password reset : <strong>' . $reset_password . '</strong>';
        }
        return redirect()->back()->with(['reset_password' => $pesan]);
    }


    // EXPORT ---------------------------------------------------------------------------------------
    public function export_exhibitor()
    {
        $tanggal = date_format(today(), 'd-m-Y');
        return Excel::download(new ExportExhibitor, "Data Exhibitor_$tanggal.xlsx");
    }
    public function export_exhibitor_form_a()
    {
        $tanggal = date_format(today(), 'd-m-Y');
        return Excel::download(new ExportExhibitorFormA, "Data Exhibitor Form A_$tanggal.xlsx");
    }

    public function export_visitor()
    {
        $tanggal = date_format(today(), 'd-m-Y');
        return Excel::download(new ExportVisitor, "Data Visitor_$tanggal.xlsx");
    }
    public function export_user()
    {
        $tanggal = date_format(today(), 'd-m-Y');
        return Excel::download(new ExportUser, "Data Registration_$tanggal.xlsx");
    }
}
