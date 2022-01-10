<?php

namespace App\Http\Services\Checkout;

use Xendit\Xendit;
use Illuminate\Http\Request;

class CheckoutService {

    function __construct() {
        Xendit::setApiKey(env('API_KEY'));
    }

    public function createInvoice($args,$para ) {
        
        $data = json_decode(json_encode($args), true);
        $para['failure_redirect_url'] = $data['redirect_url'];
        $para['success_redirect_url'] = $data['redirect_url'];
        $params = array_merge($para, $data);
        dd($params);
        $response = [];

        try {
            $response = \Xendit\Invoice::create($params);
        } catch (\Throwable $e) {
            $response['message'] = $e->getMessage();
        }

        logger($response);
        return $response;
    }
}