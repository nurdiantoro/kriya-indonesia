<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{


    public function store(Request $request)
    {
        $imageName = "default.png";

        if ($request->hasFile('foto')) {
            $validate = $request->validate(['foto' => 'mimes:jpeg,png,jpg']);
            if ($validate) {
                $imageName = date('y-m-d') . '_' . $request->file('foto')->getClientOriginalName();
                $request->file('foto')->storeAs('images/contact/', $imageName, 'public');
            } else {
                return redirect()->back()->withErrors($validate);
            }
        }

        Contact::create([
            "name" => $request->name,
            "email" => $request->email,
            "email2" => $request->email2,
            "telp" => $request->telp,
            "foto" => $imageName,
            "urutan" => $request->urutan,
        ]);
        return redirect()->back()->with(['pesan' => 'Contact berhasil ditambah']);
    }



    public function update(Request $request)
    {
        $contact = Contact::find($request->id);
        $imageName = $request->foto_lama;

        if ($request->hasFile('foto')) {
            $validate = $request->validate(['foto' => 'mimes:jpeg,png,jpg']);
            if ($validate) {
                // if ($request->foto_lama != 'default.png') {
                //     File::delete(public_path('images/contact/' . $request->foto_lama));
                // }
                $imageName = date('y-m-d') . '_' . $request->file('foto')->getClientOriginalName();
                $request->file('foto')->storeAs('images/contact/', $imageName, 'public');
            } else {
                return redirect()->back()->withErrors($validate);
            }
        }

        Contact::where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'email2' => $request->email2,
            'telp' => $request->telp,
            'foto' => $imageName,
            'urutan' => $request->urutan
        ]);
        return redirect()->back()->with(['pesan' => 'Contact berhasil diubah']);
    }

    public function destroy(Request $request)
    {
        $contact = Contact::find($request->id);
        // if ($contact->foto != 'default.png') {
        //     File::delete(public_path('images/contact/' . $contact->foto));
        // }

        $contact->delete();
        return redirect()->back()->with(['pesan' => 'Contact berhasil dihapus']);
    }
}
