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
                            ->get();

        return $listarproduto;
    }
}
