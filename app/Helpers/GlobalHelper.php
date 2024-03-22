<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
        $idUser = Auth::id();

        if(isset($idUser) && !empty($idUser))
        {
            $user = User::select('tb_users.*', 'r.role')
            ->join('tb_roles as r', 'tb_users.id_role', '=', 'r.id')
            ->where('tb_users.id', Auth::id())
            ->first();

            return $user;
        }

        return false;
    }
}