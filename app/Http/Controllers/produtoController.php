<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\VarianteProduto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Pest\Laravel\session;

class produtoController extends Controller
{
   public function cadastraProdutos(Request $request ){
      $data = $request->validate([
         'nome'=> 'required',//Produto
         'categoria_id'=>'required',
         'marca' => 'required',//Produto
         'descricao'=>'required',
         'preco_custo' => 'required',//variante
         'preco_venda' => 'required',//variante
         'estoque_atual' => 'required',//variante
         'estoque_minimo'=> 'required',//variante
         'cor' => 'required',//variante
         'tamanho' => 'required',//variante
      ]);
         
      DB::transaction(function() use ($data){

         // 1. envia para a tabela Produto
         $produto = new Produto();
         $produto->categoria_id = $data['categoria_id'];
         $produto->nome = $data['nome'];
         $produto->marca = $data['marca'];
         $produto->descricao = $data['descricao'];
         $produto->save();
         //dd('salvou com sucesso'.$produto->id);
               
         //2. Envia para a tabela de variavel
         $variante = new VarianteProduto();
         $variante->produto_id = $produto->id;
         $variante->preco_custo = $data['preco_custo'];
         $variante->preco_venda = $data['preco_venda'];
         $variante->estoque_atual = $data['estoque_atual'];
         $variante->estoque_minimo = $data['estoque_minimo'];
         $variante->cor = $data['cor'];
         $variante->tamanho = $data['tamanho'];
         $variante->save();
               
               
               
      });
         
      return redirect()->route('produto')->with('success','produto cadastrado com sucesso');
   }

   
}
