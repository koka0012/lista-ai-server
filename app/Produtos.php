<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produtos extends Model
{
    public function ListarProdutos(){
        return self::all();
    }

    public function ListarTodosProdutos(){
        $produtos = self::all();
        return view('listar', compact('produtos'));
    }

    public function ListarProduto($id){

        $idTemp = $id;

        $listarproduto = DB::table('produtos')
                            ->where('id', $id)
                            ->inRandomOrder()
                            ->limit(10)
                            ->get();

        return $listarproduto;
    }

    public function NomeProduto($nome){
        $listarprodutonome = DB::table('produtos')
                            ->where('nome', 'LIKE', "%$nome%")
                            ->orderBy('valor', 'asc')
                            ->get();

        return $listarprodutonome;
    }

    public function CadastrarProduto($request){
        $nome = $request->input('name');
        $valor = $request->input('price');
        $desc = $request->input('desc');
        $marca = $request->input('marca');

       DB::table('produtos')->insert(['nome'=>$nome,'valor'=>$valor,'descricao'=>$desc,'marca'=>$marca]);

        return redirect('/produtos/listar');
    }

}
