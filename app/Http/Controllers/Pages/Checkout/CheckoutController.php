<?php

namespace App\Http\Controllers\Pages\Checkout;

use App\Http\Controllers\Controller;
use App\Helpers\Pages\Checkout\CheckoutHelper;

use App\Models\Ingressos;

class CheckoutController extends Controller
{
    public function index($id) 
    {   
        $ingresso = Ingressos::find($id);

        if(!$ingresso)
        {
            return redirect()->back();
        }

        $filme = CheckoutHelper::getFilmeIngresso($id);

        return view('pages.checkout.index',[
            'filme'    => $filme,
            'ingresso' => $ingresso
        ]);
    }

    public function checkout($id) 
    {   
        $ingresso = Ingressos::find($id);

        if(!$ingresso)
        {
            return redirect()->back();
        }

        CheckoutHelper::insertCheckoutIngresso($id);

        return redirect()->route("filme", [
            "id" => $ingresso->id_filme
        ]);
    }
}
