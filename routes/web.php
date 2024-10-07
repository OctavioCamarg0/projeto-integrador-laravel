<?php

use App\Http\Controllers\PersonalController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\AutenticacaoController;
use App\Http\Controllers\ListagemPersonal;
use App\Http\Middleware\CheckPersonalRegistration;

// HOME
Route::get('/', [ListagemPersonal::class, 'personais'])->name('index');
Route::get('/cadastro', function () {return view('cadastro');});
Route::post('/cadastro', [CadastroController::class, 'store'])->name('cadastro.store');
Route::get('/perfilPersonal/{id}', [ListagemPersonal::class, 'personal_informacoes'])->name('informacaoPersonal');

Route::middleware(['auth'])->group(function () {
    //ROTAS DO CADASTRO NORMAL
    
    Route::get('/meuPerfilUsuario', [CadastroController::class, 'show'])->name('meuPerfilUsuario.show');

    //Cadastro Personal
    Route::get ('/cadastro_personal', [PersonalController::class, 'create'])->name('cadastro_personal.create')->middleware([CheckPersonalRegistration::class]);
    Route::post('/cadastrar_personal', [PersonalController::class, 'store'])->name('cadastro_personal.store'); 
    Route::put('/editar-personal/{id}', [PersonalController::class, 'update'])->name('editar-personal.update');
    Route::get('/editar-personal/{id}', [PersonalController::class, 'edit'])->name('editar-personal.edit');
    Route::delete('/personal/deletar/{id}', [PersonalController::class, 'destroy'])->name('personal.destroy');
   
});

Route::get('/cadastroForm', [CadastroController::class, 'create'])->name('cadastro.create');
Route::get('/login', [AutenticacaoController::class,'formLogin'])->name('login.form')->middleware('guest');
Route::post('/login', [AutenticacaoController::class, 'login'])->name('login');
Route::get('/logout', [AutenticacaoController::class, 'logout'])->name('logout');


Route::get ('/sobre-nos', function(){
    return view('sobreNos');
});


