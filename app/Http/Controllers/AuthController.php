<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

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
            return redirect()->back()->with(['pesan_error' => 'The email or password you used is incorrect']);
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
            $qr_code = mt_rand(100000000, 999999999);
            // $qr_code = -5938480522;
            $cek_qr = 'terpakai';

            if (!User::where('qr_code', $qr_code)->exists()) {
                if ($qr_code > 0) {
                    $cek_qr = 'tersedia';
                }
            }

            while ($cek_qr == 'terpakai') {
                $qr_code = mt_rand(100000000, 999999999);

                if (!User::where('qr_code', $qr_code)->exists()) {
                    if ($qr_code > 0) {
                        $cek_qr = 'tersedia';
                    }
                }
            }

            $input = User::create([
                "name" => $request->input("name"),
                "email" => $request->input("email"),
                "telp" => $request->input("telp"),
                "password" => $request->input("password"),
                "role_id" => 2,
                "qr_code" => $qr_code,
            ]);
            if ($input) {
                // return redirect()->route("login")->with(["status" => "Registration is successful, please log in"]);
                $data_login = [
                    "email" => $request->email,
                    "password" => $request->password,
                ];

                Auth::attempt($data_login);
                return redirect('profile');
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
            return redirect()->back()->with('pesan_error', 'Email sudah terdaftar');;
        }
    }

    public function cek_qr($qr_code)
    {
        return User::where("qr_code", $qr_code)->first();
    }

    public function forgot_password_view()
    {
        $title = "Forgot Password";
        return view("auth.forgot_password", ["title" => $title]);
    }

    public function forgot_password(Request $request)
    {
        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function reset_password(string $token)
    {
        $title = "Reset Password";
        return view('auth.reset_password', ["title" => $title, 'token' => $token]);
    }

    public function update_password(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|same:password_confirmation',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
