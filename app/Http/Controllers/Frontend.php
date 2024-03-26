<?php

namespace App\Http\Controllers;

use App\Models\Exhibitor;
use App\Models\Exhibitor_form_a;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Frontend extends Controller
{
    public function index()
    {
        return view("frontend.homepage", ["title" => "Kriya Indonesia"]);
    }

    public function exhibitor_form()
    {
        return view("frontend.exhibitor_form", ["title" => "Kriya Indonesia - Exhibitor Form"]);
    }

    public function exhibitor_list()
    {
        // $exhibitors = Exhibitor::all();
        return view("frontend.exhibitor_list", ["title" => "Kriya Indonesia - Exhibitor List"]);
    }

    public function about()
    {
        return view("frontend.about", ["title" => "Kriya Indonesia - About"]);
    }

    public function exhibitor_form_a()
    {
        return view("frontend.form_a", ["title" => "Kriya Indonesia - Form A"]);
    }

    public function input_exhibitor(request $request)
    {
        $input = Exhibitor::create([
            "perusahaan" => $request->input("perusahaan"),
            "alamat" => $request->input("alamat"),
            "telp_kantor" => $request->input("telp_kantor"),
            "email" => $request->input("email"),
            "website" => $request->input("website"),
            "pic" => $request->input("pic"),
            "jabatan" => $request->input("jabatan"),
            "handphone" => $request->input("handphone"),
            "kategori" => $request->input("kategori"),
        ]);
        if ($input) {
            return redirect()->back()->with('success', 'Exhibitor has been submitted successfully!');
        } else {
        }
    }
    public function input_exhibitor_form_a(request $request)
    {
        $input = Exhibitor_form_a::create([
            "perusahaan" => $request->input("perusahaan"),
            "alamat" => $request->input("alamat"),
            "telp_kantor" => $request->input("telp_kantor"),
            "no_npwp" => $request->input("no_npwp"),
            "alamat_npwp" => $request->input("alamat_npwp"),
            "email" => $request->input("email"),
            "website" => $request->input("website"),
            "pic" => $request->input("pic"),
            "jabatan" => $request->input("jabatan"),
            "handphone" => $request->input("handphone"),
            "kategori" => $request->input("kategori"),
            "bidang_usaha" => $request->input("bidang_usaha"),
            "hall" => 'Assembly Hall',
            "nomor_stand" => $request->input("nomor_stand"),
            "fascia" => $request->input("fascia"),
        ]);
        if ($input) {
            return redirect()->back()->with('success', 'Exhibitor has been submitted successfully!');
        } else {
        }
    }

    public function profile()
    {
        $user = Auth::user();
        return view('frontend.profile', ['title' => 'Profile', 'user' => $user]);
    }

    public function profile_change()
    {
        $user = Auth::user();
        return view('frontend.profile_change', ['title' => 'Profile', 'user' => $user]);
    }

    public function profile_change_edit(request $request)
    {
        $id = Auth::user()->id;
        User::where('id', $id)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);
        return redirect()->route('profile')->with('pesan', 'Profile berhasil diubah');
    }

    public function password_change()
    {
        return view('frontend.change_password', ['title' => 'Change Password']);
    }

    public function password_change_update(request $request)
    {
        $validasi_password = $request->validate([
            'password' => ['same:confirm_password'],
        ]);

        if ($validasi_password) {
            $id = Auth::user()->id;
            User::where('id', $id)->update([
                'password' => Hash::make($request->input('password')),
            ]);
            return redirect()->route('profile')->with('pesan', 'Password berhasil diubah');
        } else {
            return redirect()->back()->with('pesan', 'Password yang anda masukan tidak sesuai');
        }
    }
}
