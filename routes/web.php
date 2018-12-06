<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view('index');
});

Route::post('/validacao', 'usuariosController@login');

Route::get('/home', function(){
    return view('home');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::prefix('produtos')->group(function(){
    Route::get('/cadastrar', function(){
        return view('cadastrar');
    });
    Route::get('/listar', function(){
        return view('listar');
    });
});

Route::prefix('usuario')->group(function(){
    Route::post('/cadastrar', 'usuariosController@cadastrar');
    Route::get('/editar', 'usuariosController@editar');
    Route::get('/remover', 'usuariosController@remover');
    Route::get('/listar  ', 'usuariosController@listar');
});

            // Rotas diretas para a API

    Route::group(['prefix' => '/api'], function () {
        Route::group(['prefix' => '/produtos'], function(){
            Route::get('/', 'ProdutosController@TodosProdutos');
            Route::get('/{id}', 'ProdutosController@Produto');
        });
    });


