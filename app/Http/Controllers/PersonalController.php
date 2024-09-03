<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personal;
use App\Models\Academia;
use App\Models\Personais_academia;
use Illuminate\Support\Facades\Auth;


class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd(Auth::user());
        $academias = Academia::all();
        return view('meuPerfilUsuario', [
            'academias' => $academias
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $academias = Academia::all();
        return view('cadastro-personal', [
            'academias' => $academias
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'diploma' => 'required',
            'cref' => 'required',
            'formacoes' => 'required',
            'preco' => 'required',
            'academias' => 'required',
        ]);

        Personal::create([
           'diploma' => $request->diploma,
           'cref' => $request->cref,
           'formacoes' => $request->formacoes,
           'preco' => $request->preco,
           'user_id' => Auth::user()->id
        ]);
        $personal = Personal::where('user_id', Auth::user()->id)->first();
        $personalId = $personal->id;

        foreach ($request->academias as $academia){
            Personais_academia::create([
            'personal_id' => $personalId,
            'academia_id' => $academia
            ]);
        }

        return view('meuPerfilUsuario');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $personal = Personal::find($id);
        $academias_personal = $personal->academias;
        $academias = Academia::all();
        return view('editar-personal', [
            'personal' => $personal,
            'academias_personal' => $academias_personal,
            'academias' => $academias  
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $personal = Personal::find($id);

        $request->validate([
            'diploma' => 'required',
            'cref' => 'required',
            'formacoes' => 'required',
            'preco' => 'required',
            'academias' => 'required',
        ]);

        $personal->update($request->all());
        $selectedAcademias = $request->input('academias', []);

        // Sincroniza as academias associadas ao personal com as academias selecionadas
        $personal->academias()->sync($selectedAcademias);

        // Salva outras alterações, se necessário
        return redirect()->route('meuPerfilUsuario.show', $id)->with('success', 'Dados atualizados com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
