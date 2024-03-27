<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{


    public function store(Request $request)
    {
        Contact::create([
            "name" => $request->name,
            "email" => $request->email,
            "email2" => $request->email2,
            "telp" => $request->telp,
            "urutan" => $request->urutan,
        ]);
        return redirect()->back()->with(['pesan' => 'Contact berhasil ditambah']);
    }



    public function update(Request $request)
    {
        Contact::where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'email2' => $request->email2,
            'telp' => $request->telp,
            'urutan' => $request->urutan
        ]);
        return redirect()->back()->with(['pesan' => 'Contact berhasil diubah']);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->back()->with(['pesan' => 'Contact berhasil dihapus']);
    }
}
