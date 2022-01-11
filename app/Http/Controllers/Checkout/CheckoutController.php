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


    public function create(Request $request) {
        $service = new Service();
        $date = new \DateTime();
        $userid = $request->user();
        dd($userid);
        // // // var_dump($userid);
        // $cartItems = \Cart::session($userid)->getTotal();
        $redirectUrl = '';
        $para = [
            'external_id' => $request->name.'-' . $date->getTimestamp(),
            'amount'=> 5000,
            'payer_email' => 'invoice+demo@xendit.co', 
            'description' => $request->totalp,
            'failure_redirect_url' => $redirectUrl, 
            'success_redirect_url' => $redirectUrl ];


        return $service->createInvoice($request->all(),$para);
    }
    
}
