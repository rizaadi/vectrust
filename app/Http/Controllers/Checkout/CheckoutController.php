<?php

namespace App\Http\Controllers\Checkout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Xendit\Xendit;
use App\Http\Services\Checkout\CheckoutService as Service;
use App\Models\Product;

class CheckoutController extends Controller
{
    public function index() {
        $cartItems = \Cart::session(auth()->id())->getContent();
        return View('cart.index',['cartItems'=>$cartItems]);
    }


    public function onSubmit() {
        $cartItems = \Cart::session(auth()->id())->getContent();
        
        return View('cart.try-checkout',['cartItems'=>$cartItems]);
    }


    public function create(Request $request) {
        $service = new Service();

        return $service->createInvoice($request->all());
    }

    
}
