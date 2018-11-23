<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    /**
     * Exibe o formulario de Login/Registro
     *
     * @return \Illuminate\Http\Response
     */
    public function exibir()
    {
        return response('TODO');
    }

    /**
     * Registrar o usuário.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registrar(Request $request)
    {
        //
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request) {
        //
    }
}
