<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view("login.index");
    }

    public function authentication(LoginRequest $request)
    {
        $credentials = $request->validated();

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('failed-login', 'Login gagal! Sepertinya kamu lupa salah email atau password.');
    }

    public function logout(\Illuminate\Http\Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
