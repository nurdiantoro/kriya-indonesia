<?php

namespace App\Http\Controllers;

use App\Models\Exhibitor;
use Illuminate\Http\Request;


class Frontend extends Controller
{
    public function index()
    {
        return view("frontend.homepage");
    }

    public function exhibitor_form()
    {
        return view("frontend.exhibitor_form");
    }

    public function exhibitor_list()
    {
        $exhibitors = Exhibitor::all();
        return view("frontend.exhibitor_list", ["exhibitors" => $exhibitors]);
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
