<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class usuariosController extends Controller
{
    public function login(Request $request){

        $request->validate([
            'usuario' => 'required',
            'senha' => 'required'
        ]);

        $userpass = $request->only('usuario','senha');

        if(Auth::attempt($userpass)){
            return redirect()->intended('/home');
        }
        else{
            return $userpass;
        }




        //$user = $request->input('usuario');
        //$pass = $request->input('senha');

        // return 'User: '.$user.'Senha: '.$pass;   // Testar valores var's.

        //$dadosUser = DB::table('contas')->where('username', $user)->where('password', $pass)->get();



    }

    public function register(){
        return 'deu certo 2';
    }
}
