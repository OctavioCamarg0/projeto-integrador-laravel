<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutenticacaoController extends Controller
{
    public function formLogin() {
        return view('login');
    }

    public function login(Request $request) {
        $dadosUsuario = $request->validate([
            "email" => ["required", "email"],
            "password" => "required"
        ]);

        if(Auth::attempt($dadosUsuario)){
            $request->session()->regenerate();
            return redirect()->intended("meuPerfilUsuario");
        }

        return redirect()->back()->withErrors(['email'=>'Usuário ou Senha inválidos                                                                                                                                                                                                                                                                                                                                                                                                     ']);
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect("/");
    }
}
