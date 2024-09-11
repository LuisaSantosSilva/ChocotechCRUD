<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller

{
    public function index(Request $req){
        $produto = Produto::all();
        return view('produtos')->with("produto", $produto);
    }

    public function adicionar(Request $req){
        $produto = new Produto;
        $produto->nomeprod = $req->nomeprod;
        $produto->descprod = $req->descprod;
        $produto->valorprod = $req->valorprod;
        $produto->save();
        return redirect()->back();
    }

    public function editar(Request $req){
        $produto = Produto::find($req->id);
        return view('editarprodutos')->with("produto", $produto);
    }

    public function atualizar(Request $req){
        $produto = Produto::find($req->id);
        $produto->update(
            [
                "nomeprod" => $req->nomeprod,
                "descprod" => $req->descprod,
                "valorprod" => $req->valorprod
            ]
        );
        return redirect()->back();

    }

    public function excluir(Request $req){
        $produto = Produto::find($req->id);
        $produto->delete();
        return redirect()->back();
    }
}
