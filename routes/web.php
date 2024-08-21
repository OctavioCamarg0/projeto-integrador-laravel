<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get ('/cadastro', function(){
    return view('cadastro');
});

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