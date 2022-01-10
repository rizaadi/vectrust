<?php

namespace App\Http\Controllers\Checkout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Xendit\Xendit;
use App\Http\Services\Checkout\CheckoutService as Service;

class CheckoutController extends Controller
{
    public function index() {
        return View('cart.index');
    }


    public function onSubmit() {
        $cartItems = \Cart::session(auth()->id())->getContent();
        return View('cart.try-checkout',['cartItems'=>$cartItems]);
    }


    public function create(Request $req) {
        $service = new Service();
        $date = new \DateTime();
        $userid = auth()->user()->id;
        $cartItems = \Cart::session($userid)->getTotal();
        $redirectUrl = '';
        $para = [
            'external_id' => $req->name.'-' . $date->getTimestamp(),
            'amount'=> $cartItems,
            'payer_email' => 'invoice+demo@xendit.co', 
            'description' => $req->totalp,
            'failure_redirect_url' => $redirectUrl, 
            'success_redirect_url' => $redirectUrl ];
            dd($para);

        return $service->createInvoice($req->all(),$para);
    }
    
}
