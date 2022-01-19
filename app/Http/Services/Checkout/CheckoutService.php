<?php

namespace App\Http\Services\Checkout;

use Xendit\Xendit;
use Illuminate\Http\Request;
use App\Models\Transaction;

class CheckoutService {

    function __construct() {
        Xendit::setApiKey(env('API_KEY'));
    }

    public function createInvoice($args) {
        $response = [];
        $userid = auth()->id();
        $cartItem = \Cart::session($userid)->getContent();
        foreach ($cartItem as $row) {
            $vectorz = Product::find($row->id)->increment('itemSales');
        }

        try {
            $response = \Xendit\Invoice::create($args);

        } catch (\Throwable $e) {
            $response['message'] = $e->getMessage();
        }
        $create = Transaction::create(
            ['id_users'=> $userid,
            'id_transaction'=>$response['id'],
            'transaction'=>$response['external_id'],
            'totalOrder'=>$response['amount'],
            'status'=> $response['status']]
        );
        
        \Cart::session($userid)->clear();
        logger($response);
        return $response;
    }
    
        public function getinvoice(){
        $getInvoice=[];
        $para = [];
        $id = session(auth()->id());
        $dataid = Transaction::all();
        foreach ($dataid as $value) {
            array_push($para,$value->id_transaction);
        }
        try {
            for ($i=0; $i < count($para); $i++) { 
                $getinv = \Xendit\Invoice::retrieve($para[$i]);
                array_push($getInvoice,$getinv);
            }
        } catch (\Throwable $th) {
            $getInvoice['message'] = $th->getMessage();
        }
        // $getInvoice['created']->
        // dd($getInvoice);
        return $getInvoice;
    }
}