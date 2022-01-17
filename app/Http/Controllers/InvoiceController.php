<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Xendit\Xendit;
use App\Models\Transaction;

class InvoiceController extends Controller
{
    function __construct() {
        Xendit::setApiKey(env('API_KEY'));
    }
    public function getinvoice(Request $request){
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
        return $getInvoice;
    }
  
  
}
