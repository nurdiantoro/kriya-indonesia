<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index(Request $request)
    {
        $user = User::where('qr_code', $request->barcode)->first();
        Visitor::create([
            'name' => $user->name,
            'email' => $user->email,
            'telp' => $user->telp,
            'qr_code' => $user->qr_code,
        ]);

        return redirect()->back()->with(['pesan' => 'Data berhasil dikirim']);
    }
}
