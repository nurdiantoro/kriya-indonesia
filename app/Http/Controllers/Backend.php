<?php

namespace App\Http\Controllers;

use App\Exports\ExportExhibitor;
use App\Exports\ExportExhibitorFormA;
use App\Models\Contact;
use App\Models\Exhibitor_form_a;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\Console\Input\Input;

class Backend extends Controller
{
    public function __construct()
    {
    }
    public function dashboard()
    {
        $user = Auth::user();
        return view("backend.dashboard", ["user" => $user]);
    }
    public function contact()
    {
        $contacts = Contact::all();
        $user = Auth::user();
        return view("backend.contact", ["user" => $user, "contacts" => $contacts]);
    }

    public function exhibitor()
    {
        $exhibitor = Exhibitor_form_a::all();
        $user = Auth::user();
        return view('backend.exhibitor', ["user" => $user, 'exhibitors' => $exhibitor]);
    }
    public function detail_exhibitor($id)
    {
        $exhibitor = Exhibitor_form_a::where('id', $id)->first();
        $user = Auth::user();
        return view('backend.exhibitor_detail', ["user" => $user, 'exhibitor' => $exhibitor]);
    }

    public function change_exhibitor(Request $request, $id)
    {
        return redirect()->back()->with('success', '');
    }

    public function delete_exhibitor($id)
    {
        Exhibitor_form_a::where('id', $id)->delete();
        return redirect('dashboard/exhibitor/');
    }

    public function export_exhibitor()
    {
        return Excel::download(new ExportExhibitor, "Data Exhibitor.xlsx");
    }
    public function export_exhibitor_form_a()
    {
        return Excel::download(new ExportExhibitorFormA, "Data Exhibitor Form A.xlsx");
    }
}
