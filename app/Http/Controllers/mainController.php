<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class mainController extends Controller
{
     public function login(){
        return view('login');
    }

    public function dashBoard(){
        return view('dashBoard');
    }

    public function produto(){
        
        
        return view('produto.index');
    }

    public function movimento(){
        return view('stock_movimento.index');
    }

    public function categoria(){
        return view('categoria.index');
    }

    public function usuario(){
        return view('usuario.index');
    }
}
