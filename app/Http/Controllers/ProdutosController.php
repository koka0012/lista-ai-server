<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;

class ProdutosController extends Controller
{
    protected $produto = null;

    public function __construct(Produtos $produto){
        $this->produtos = $produto;
    }

    public function TodosProdutos(){
        return $this->produtos->ListarProdutos();
    }

    public function Produto ($id){
        return $this->produtos->ListarProduto($id);
    }
}
