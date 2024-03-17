<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;

class GlobalHelper
{
    public static function getUserLocation() // Constante para testes
    {
        return [
            'uf' => 'PE',
            'cidade' => 'Recife'
        ];
    }

    public static function getUserData()
    {
        return Auth::user();
    }
}