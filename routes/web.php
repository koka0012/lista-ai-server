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


// CHAMA PREVIEW
Route::get('/', function(){
    return view('index');
});
// CHAMA PAGINA DE LOGIN
Route::get('/login', function(){
    return view('login');
});

// CHAMA VALIDAÇÃO DE LOGIN
Route::post('/login/go', 'Auth\LoginController@login');

// CHAMA HOME
Route::get('/home', 'ProdutosController@DadosGeral');

// CHAMA PERFIL
Route::get('/perfil', function () {
    return view('perfil');
});

// CHAMA PRODUTOS ( CADASTRAR OU LISTAR )
Route::prefix('produtos')->group(function(){
    Route::get('/cadastrar', function(){
        return view('cadastrar');
    });
    Route::get('/listar', 'ProdutosController@ListarTodosProdutos');

    Route::post('/cadastrar/go', 'ProdutosController@CadastrarProduto');
});




