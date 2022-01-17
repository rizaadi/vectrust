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

        try {
            $response = \Xendit\Invoice::create($args);

        } catch (\Throwable $e) {
            $response['message'] = $e->getMessage();
        }
        $userid = auth()->id();
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
        // dd($getInvoice);
        return print_r($getInvoice);
    }
}