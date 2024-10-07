<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;
use App\Models\User;

class ListagemPersonal extends Controller
{
    public function personais () {
        $personais = Personal::with('usuario')->get();
        return view('index', [
            'personais' => $personais
        ]);
    }

    public function personal_informacoes(string $id) {
        $user = User::find($id);
        return view('perfilPersonal', [
            'usuario' => $user
        ]);
    }
}
