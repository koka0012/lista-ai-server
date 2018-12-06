<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produtos extends Model
{
    public function ListarProdutos(){
        return self::all();
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
}
