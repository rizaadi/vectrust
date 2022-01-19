<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Vector;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        //searxing
        $keyword = $request->search;
        $users = Product::where('name', 'like', "%" . $keyword . "%");
        $cartItems = \Cart::session(auth()->id())->getContent();
        // dd($vector);
        return view('subs.index',['cartItems' => $cartItems,]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexSubs()
    {
        $cartItems = \Cart::session(auth()->id())->getContent();
        // dd($vector);
        return view('subs.index',['cartItems' => $cartItems,]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vector = Vector::all();
        $product = Product::all();
        $userProfile = Vector::join('users','vector.id_users','=','users.id')->select('users.name','users.username','users.profile_photo_path')->first();
        $cartItems = \Cart::session(auth()->id())->getContent();
        // dd($userProfile);
        
        return view('dashboard',['allVector' => $vector,
                                'cartItems' => $cartItems,
                                'product'=> $product,
                                'userProfile'=> $userProfile]);
    }

}
