<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Auth\LoginHelper;

class LoginController extends Controller
{
    public function index() 
    {
        return view('pages.auth.login.index');
    }

    public function login(Request $req) 
    {
        $credenciais = $req->validate([
            'username' => 'required',
            'password' => 'required'
        ],[
            'username.required' => 'O campo de usuário é obrigatório',
            'password.required' => 'O campo de senha é obrigatório'
        ]);

        if(Auth::attempt($credenciais))
        {
            return redirect()->route('catalogo');
        }
        else
        {
            return redirect()->route('login');
        }
    }
}
