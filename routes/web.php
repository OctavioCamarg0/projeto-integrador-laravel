<?php

use App\Http\Controllers\PersonalController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\AutenticacaoController;

// HOME
Route::get('/', function () {return view('index');})->name('index');
Route::get('/cadastro', function () {return view('cadastro');});
Route::get('/cadastroForm', [CadastroController::class, 'create'])->name('cadastro.create');
Route::post('/cadastro', [CadastroController::class, 'store'])->name('cadastro.store');

Route::middleware(['auth'])->group(function () {
    //ROTAS DO CADASTRO NORMAL
    
    Route::get('/meuPerfilUsuario', [CadastroController::class, 'show'])->name('meuPerfilUsuario.show');

    //Cadastro Personal
    Route::get ('/cadastro_personal', [PersonalController::class, 'create'])->name('cadastro_personal.create');
    Route::post('/cadastrar_personal', [PersonalController::class, 'store'])->name('cadastro_personal.store');
    Route::put('/editar-personal/{id}', [PersonalController::class, 'edit'])->name('editar-personal.edit');
    Route::post('/editar-personal/{id}', [PersonalController::class, 'update'])->name('editar-personal.update');
});

Route::get('/login', [AutenticacaoController::class,'formLogin'])->name('login.form')->middleware('guest');
Route::post('/login', [AutenticacaoController::class, 'login'])->name('login');
Route::get('/logout', [AutenticacaoController::class, 'logout'])->name('logout');


Route::get ('/sobre-nos', function(){
    return view('sobreNos');
});


Route::get ('perfil-personal', function(){
    return view('perfilPersonal');
});


