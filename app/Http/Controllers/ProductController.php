<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index(Request $request)
    {
        
    }

    /**
     * Show the form for creating a new resource.
     * @param  \App\Models\Product 
     * @return \Illuminate\Http\Response
     */
    public function create(){

        $cartItems = \Cart::session(auth()->id())->getContent();
        
        return view('products.create',[ 'cartItems' => $cartItems]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validator = \Validator::make($request->all(),[
        //     'name' =>'required|string',
        //     'description'=>'required|string',
        //     'itemImage'=>'required|image',
        //     'itemTags'=>'required|string',
        //     'itemSoftware'=>'required|string'
        // ]);
        // if(!$validator->passes()){
        //     return response()->json(['code'=>0,'error'=>$validator->errors()->toArray()]);
        // }else {
            $path = 'files/';
            $file = $request->file('cover_img');
            $file_name = time().'_'.$file->getClientOriginalName();

            //    $upload = $file->storeAs($path, $file_name);
            $upload = $file->storeAs($path, $file_name, 'public');
            $id_users = auth()->id();
               if($upload){
                   Product::insert([
                       'name'=>$request->name,
                       'description'=>$request->description,
                       'price'=>$request->price,
                       'cover_img'=>$request->cover_img, 
                        'id_users'=>$id_users,
                        // timestamp('created_at')->useCurrent(),
                        // timestamp('updated_at')->useCurrent(),
                   ]);
                   return response()->json(['code'=>1,'msg'=>'New Vector has been saved successfully']);
                }
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $cartItems = \Cart::session(auth()->id())->getContent();
        
        return view('products.index',['product' => $product, 'cartItems' => $cartItems]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
