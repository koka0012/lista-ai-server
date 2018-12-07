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

    // API
    
    public function TodosProdutos(){
        return $this->produtos->ListarProdutos();
    }

    public function Produto ($id){
        return $this->produtos->ListarProduto($id);
    }

    public function NomeProduto($name){
        return $this->produtos->NomeProduto($name);
    }

//----------------------------------------------------------------------------------------------
 
    // WEB
    public function ListarTodosProdutos(){
        return $this->produtos->ListarTodosProdutos();
    }

    public function CadastrarProduto(Request $request){
        return $this->produtos->CadastrarProduto($request);
    }

    
}
