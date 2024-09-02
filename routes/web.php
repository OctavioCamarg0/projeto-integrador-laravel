<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;

// HOME
Route::get('/', function () {return view('index');})->name('index');


//ROTAS DO CADASTRO NORMAL
Route::get('/cadastro', function () {return view('cadastro');});
Route::get('/cadastroForm', [CadastroController::class, 'create'])->name('cadastro.create');
Route::post('/cadastro', [CadastroController::class, 'store'])->name('cadastro.store');




Route::get ('/sobre-nos', function(){
    return view('sobreNos');
});

Route::get ('/cadastro-personal', function(){
    return view('cadastro-personal');
});

Route::get ('/meuPerfilUsuario', function(){
    return view('meuPerfilUsuario');
});

Route::get ('perfil-personal', function(){
    return view('perfilPersonal');
});