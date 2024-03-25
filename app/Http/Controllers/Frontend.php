<?php

namespace App\Http\Controllers;

use App\Models\Exhibitor;
use App\Models\Exhibitor_form_a;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
