<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin(): View
    {
        return view('auth.login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate(
            [
                'email' => 'required|email|max:255|min:3',
                'password' => 'required|string|min:5',
            ],
            [
                'email.required' => 'Insira o e-mail.',
                'email.max' => 'O e-mail deve ter no máximo :max caracteres.',
                'email.min' => 'O e-mail deve ter no mínimo :min caracteres.',

                'password.required' => 'Insira a senha.',
                'password.string' => 'Insira uma senha válida.',
                'password.min' => 'A senha deve ter no mínimo :min caracteres.',
            ]
        );

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'As credenciais informadas são inválidas.',
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
