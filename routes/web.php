<?php

use App\Http\Controllers\PersonalController;
use App\Http\Controllers\Controller;
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


Route::get ('/meuPerfilUsuario', function(){
    return view('meuPerfilUsuario');
});

Route::get ('perfil-personal', function(){
    return view('perfilPersonal');
});
Route::get ('/cadastro_personal', [PersonalController::class, 'create'])->name('cadastro_personal.create');
Route::post('/cadastrar_personal', [PersonalController::class, 'store'])->name('cadastro_personal.store');
Route::get('/meuPerfilUsuario/{id}', [PersonalController::class, 'show'])->name('meuPerfilUsuario.show');
Route::get('/editar-personal/{id}', [PersonalController::class, 'edit'])->name('editar-personal.edit');
Route::post('/editar-personal/{id}', [PersonalController::class, 'update'])->name('editar-personal.update');