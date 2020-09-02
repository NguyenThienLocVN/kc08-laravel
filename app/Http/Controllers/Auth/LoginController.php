<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function post(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/trang-chu');
        }

        return redirect()->back()
            ->withErrors(['password' => 'Incorrect email/password combination!']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/trang-chu');
    }
}
