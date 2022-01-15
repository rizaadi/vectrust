<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Cart;
use Xendit\Xendit;
use App\Http\Services\Checkout\CheckoutService as Service;

class CartController extends Controller
{
    public function fetchCartz(Request $request){

        $date = new \DateTime();
        $currentDate = $date->getTimestamp();
        $userid = $request->user()->id;
        $cartItems = \Cart::session($userid)->getContent();
        $cartTotal = \Cart::session($userid)->getTotal();
        
        foreach($cartItems as $row){
            $dataItems[] = [
                'name'=> $row->name,
                'quantity'=> $row->quantity,
                'price'=> $row->price,
            ];
        }
        
        $redirectUrl = '';
        $datainvo = [
            'external_id'=> 'Transaksi'.'-' . $userid,
            'amount'=> intval($cartTotal) ,
            'payer_email'=> 'wildan@xendit.co',
            'description'=> 'This is a description',
            'currency'=> 'IDR',
            'locale'=> 'id',
            'items'=> $dataItems
            ];
            // dd($datainvo);
            
        return response()->json($datainvo);
    }
    public function fetchCart(){

        $cartItems = \Cart::session(auth()->id())->getContent();
        $cartTotal = \Cart::session(auth()->id())->getTotalQuantity();

        return back();
    }

    public function add(Product $product)
    {
        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'description'=> $product->description,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));
        return back();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItems = \Cart::session(auth()->id())->getContent();

        return view('cart.index', compact('cartItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        \Cart::session(auth()->id())->update($rowId, [
            'quantity' =>[
                'relative' => false,
                'value' =>request('quantity')
            ]
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($itemId)
    {
        \Cart::session(auth()->id())->remove($itemId);

        return back();
    }
}
