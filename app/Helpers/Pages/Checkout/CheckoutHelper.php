<?php

namespace App\Helpers\Pages\Checkout;

use App\Models\Ingressos;

class CheckoutHelper
{
    public static function getFilmeIngresso($id) 
    {
        $ingressos = Ingressos::select('f.*')
            ->join('tb_filmes as f', 'f.id', '=', 'tb_ingressos.id_filme')
            ->where('tb_ingressos.id', '=', $id)
            ->first();

        return $ingressos;
    }

    public static function insertCheckoutIngresso($id) 
    {
        $ingresso = Ingressos::find($id);

        $ingresso->qtd_ingressos = $ingresso->qtd_ingressos - 1;
        $ingresso->updated_at = now();

        $ingresso->save();
    }
}