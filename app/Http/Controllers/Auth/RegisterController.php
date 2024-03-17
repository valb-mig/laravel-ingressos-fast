<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Auth\RegisterHelper;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('pages.auth.register.index');
    }

    public function stores(Request $request) 
    {
        
    }
}
