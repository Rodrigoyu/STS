<?php

namespace App\Http\Controllers\categoria;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class categoriaController extends Controller
{
    public function cadastraCategoria(Request $request){
        $userId = Auth::id();


        $data = $request->validate([
            'nome'=> 'required|unique:categorias,nome',
            'descricao'=> 'required',
        ]);

        

        DB::transaction(function() use ($data,$userId){
            $categoria = new Categoria();
            $categoria->user_id = $userId;
            $categoria->nome = $data['nome'];
            $categoria->descricao = $data['descricao'];
            $categoria->save();
        });
        
        return redirect()->back()->with('success', 'cadastrado com sucesso');
    }
}
