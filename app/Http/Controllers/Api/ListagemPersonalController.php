<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Personal;
use App\Models\User;

class ListagemPersonalController extends Controller
{
    public function personais () {
        try {
            $personais = Personal::with('usuario')->get();
            // return view('index', [
            //     'personais' => $personais
            // ]);
            $personais = $personais->map(function($personal) {
                $personal->usuario->imagem = asset("storage/" . $personal->usuario->imagem);
                return $personal;
            });
            return response()->json($personais, 200);
        }catch (Exception $e) {
            return response()->json(['error' => 'Erro ao listar os personais'], 500);
        }
    }

    public function personal_informacoes(string $id) {
        try {
            $user = User::find($id);
            // return view('perfilPersonal', [
            //     'usuario' => $user
            // ]);
            return response()->json($user, 200);
        } catch (Exception $e) {
            return response()->json(['error' => 'Erro ao listar o Personal'], 500);
        }
    }
}
