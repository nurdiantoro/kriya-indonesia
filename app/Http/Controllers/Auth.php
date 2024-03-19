<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Auth extends Controller
{
    public function login()
    {
        $title = "Login";
        return view("auth.login", ["title" => $title]);
    }
    public function logout(Request $request)
    {
        $user = $request->user();
    }
    public function register_admin()
    {
        $title = "Register Admin";
        return view("auth.register_admin", ["title" => $title]);
    }
    public function input_admin(Request $request)
    {
        $input = User::create([
            "name" => $request->input("name"),
            "email" => $request->input("email"),
            "password" => $request->input("password"),
            "role_id" => $request->input("role_id"),
        ]);
        if ($input) {
            return redirect()->route("login");
        } else {
        }
    }
}
