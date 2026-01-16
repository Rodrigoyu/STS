<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
            //validação
       $user= $request->validate([
                'email'=>'required|email', 
                'password'=>'required|min:6|max:16'
            ],
            [
                'email.required'=>'email e obrigadorio',
                'email.email'=>'Email invalido',
                'password.required'=>'O password e obrigadorio',
                'password.min'=>'Minimo de caracteres é :min',
                'password.max'=>'O maximo de caracteres é :max', 
            ]
            );
            //iniciando o login
            if(Auth::attempt($user,$request->boolean('remember'))){
                $request->session()->regenerate();
                return redirect()->intended('/')->with('success','Seja Bem Vindo!!!');
            }
            //caso o login esteja errado 
            return back()->withErrors(['email' => 'Email ou Senha estão errados'])->onlyInput('email');
            
    }
}
