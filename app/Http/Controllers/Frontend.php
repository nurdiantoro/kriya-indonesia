<?php

namespace App\Http\Controllers;

use App\Models\Exhibitor;
use Illuminate\Http\Request;


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
        $exhibitors = Exhibitor::all();
        return view("frontend.exhibitor_list", ["title" => "Kriya Indonesia - Exhibitor List", "exhibitors" => $exhibitors]);
    }

    public function about()
    {
        return view("frontend.about", ["title" => "Kriya Indonesia - About"]);
    }

    public function login()
    {
        return view("frontend.login", ["title" => "Kriya Indonesia - Login"]);
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
}
