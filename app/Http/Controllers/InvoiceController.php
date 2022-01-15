<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Xendit\Xendit;

class InvoiceController extends Controller
{
    function __construct() {
        Xendit::setApiKey(env('API_KEY'));
    }
    public function getInvoice(Request $request){
        $getInvoice=[];
        $id = session(auth()->id());
        try {
            // $para = 'Transaksi-1';
        $params = [
            'external_id'=> 'Transaksi-1'];
        $getInvoice = \Xendit\Invoice::retrieveAll($params);
        } catch (\Throwable $th) {
            $getInvoice['message'] = $th->getMessage();
        }
        
        return $getInvoice;
    }
  
  
}
