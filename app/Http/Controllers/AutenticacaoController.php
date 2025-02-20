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

            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Login realizado com sucesso!',
                    'nome' => Auth::user()->nome,
                    'eamil' => Auth::user()->email,
                    'token' => $request->user()->createToken('api_token')->plainTextToken
                ], 200);
            }

            $request->session()->regenerate();

            return redirect()->intended("meuPerfilUsuario");
        }

        if ($request->expectsJson()) {
            return response()->json(['message' => 'Usuario ou senha invalida'], 401);
        }

        return redirect()->back()->withErrors(['email'=>'Usuário ou Senha inválidos']);
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        if ($request->expectsJson()) {
            return response()->json(['message' => 'Logout realizado com sucesso!'], 200);
        }

        return redirect("/");
    }
}
