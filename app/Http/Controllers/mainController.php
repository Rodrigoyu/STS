<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use App\Models\VarianteProduto;


class mainController extends Controller
{
    
     public function login(){
        return view('login');
    }

    public function dashBoard(){
        return view('dashBoard');
    }

    public function produto() {
    // Carrega o produto com a categoria e variantes de uma vez
    $produto = Produto::with(['categoria', 'variante'])->get(); 
    $categorias = Categoria::all(); // Necessário para o modal de cadastro

    return view('produto.index', compact('produto', 'categorias'));
}

    public function movimento(){
        return view('stock_movimento.index');
    }

    public function categoria(){
        $categoria = Categoria::all();

        return view('categoria.index', compact('categoria'));
    }

    public function usuario(){
        return view('usuario.index');
    }

    public function delete($id){
        $id = Produto::find($id);
        
    }
}
