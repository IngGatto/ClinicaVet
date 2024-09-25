<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Redirigir a la página del administrador
            return redirect()->intended('/admin/dashboard');
        } else {
            // En caso de error
            return back()->withErrors(['email' => 'Las credenciales no coinciden con nuestros registros.']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }
}