<?php

namespace App\Http\Controllers\Checkout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Xendit\Xendit;
use App\Http\Services\Checkout\CheckoutService as Service;

class ChekoutContoller extends Controller
{
    public function index() {
        return View::make("cart/index");
    }


    public function onSubmit() {
        return View::make("cart/try-checkout");
    }


    public function create(Request $req) {
        $service = new Service();

        return $service->createInvoice($req->all());
    }
    public function creates() {
        $params = [
            'external_id' => 'demo_147580196270',
            'payer_email' => 'sample_email@xendit.co',
            'description' => 'Trip to Bali',
            'amount' => 32000,
            'for-user-id' => '5c2323c67d6d305ac433ba20'
    ];

    $createInvoice = \Xendit\Invoice::create($params);
    }
}
