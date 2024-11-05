<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function index()
    {
        return view("auth.login");
    }


    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->role == "admin") {
                return redirect()->route('admin-page');
            }

            if (Auth::user()->role == "siswa") {
                return redirect('/siswa');
            }
        }


        return back()->withErrors([
            'email' => 'Kredensial ini tidak cocok dengan catatan kami.',
        ])->onlyInput('email');
    }


    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function register()
    {
        return view("auth.register");
    }
}
