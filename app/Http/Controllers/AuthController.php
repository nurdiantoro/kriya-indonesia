<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_view()
    {
        $title = "Login";
        return view("auth.login", ["title" => $title]);
    }
    public function login(Request $request)
    {
        $data_login = [
            "email" => $request->email,
            "password" => $request->password,
        ];
        if (Auth::attempt($data_login)) {
            if (Auth::user()->role_id == 1) {
                return redirect('dashboard');
            } else {
                return redirect('profile');
            }
        } else {
            return redirect()->back()->with('pesan_error', 'The email or password you used is incorrect');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect("login");
    }

    public function register_view()
    {
        $title = 'Registration';
        return view("auth.register", ["title" => $title]);
    }
    public function register(Request $request)
    {
        $validasi_email = $request->validate([
            'email' => ['unique:users'],
        ]);
        if ($validasi_email) {
            $qr_code = mt_rand(1000000000, 9999999999);
            if ($this->cek_qr($qr_code)) {
                $qr_code = mt_rand(1000000000, 9999999999);
            }

            $input = User::create([
                "name" => $request->input("name"),
                "email" => $request->input("email"),
                "password" => $request->input("password"),
                "role_id" => 2,
                "qr_code" => $qr_code,
            ]);
            if ($input) {
                return redirect()->route("login");
            } else {
            }
        } else {
            return redirect()->back()->with('pesan_error', 'registrasi error');
        }
    }

    public function register_admin()
    {
        $title = "Register Admin";
        return view("auth.register_admin", ["title" => $title]);
    }
    public function input_admin(Request $request)
    {
        $validasi_email = $request->validate([
            'email' => ['unique:users'],
        ]);
        if ($validasi_email) {
            $qr_code = mt_rand(1000000000, 9999999999);
            if ($this->cek_qr($qr_code)) {
                $qr_code = mt_rand(1000000000, 9999999999);
            }

            $input = User::create([
                "name" => $request->input("name"),
                "email" => $request->input("email"),
                "password" => $request->input("password"),
                "role_id" => 1,
                "qr_code" => $qr_code,
            ]);
            if ($input) {
                return redirect()->route("login");
            } else {
                return redirect()->back()->with('pesan_error', 'registrasi error');
            }
        } else {
            return 'validasi false';
        }
    }

    public function cek_qr($qr_code)
    {
        return User::where("qr_code", $qr_code)->first();
    }
}
