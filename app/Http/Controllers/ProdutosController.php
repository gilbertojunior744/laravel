<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $produtos = produto::paginate();
        //pegar dados do banco de dados
        return view('produtos.index',['produtos' =>$produtos]);   
    }

    public function create(){
        return view('produtos.create');

    }

    /*
    public function show($nome,$valor = null){

        //  a chave 'nome' tem que ser igual a varial da VIEW ou seja $nome
        return view('produtos.show',['nome' =>$nome,'valor' => $valor]);
        /*if($valor){
            return ("Seu produto : $nome , e seu valor é : $valor");
            }else{
                return ("Seu produto : $nome ");
            }

    }
    */

    public function show($id){
        //find filtrar o produto pelo id
        $produto = Produto::find($id);
        return view('produtos.show',['produto' => $produto]);
    }

}
