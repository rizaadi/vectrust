<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vector;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexManage()
    {
        $cartItems = \Cart::session(auth()->id())->getContent();
        $vector = Vector::all();
        return view('profile.manageitem',['cartItems' => $cartItems,'vector'=>$vector]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadvector()
    {
        $cartItems = \Cart::session(auth()->id())->getContent();

        return view('profile.uploadvector',['cartItems' => $cartItems]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editVector($id)
    {
       
        $vector = Vector::find($id);
        $cartItems = \Cart::session(auth()->id())->getContent();
        return view('profile.editvector',['vector'=>$vector,'cartItems' => $cartItems]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeVector(Request $request)
    {
        $path = 'files/';
        $vector = Vector::find($request->vid);
        $validator = \Validator::make($request->all(),[
            'name'=>'required|',
            'itemImageUpdate'=>'image',
        ],[
            'itemImageUpdate.image'=>'Vector file must be an image'
        ]);
        if (!$validator->passes()) {
            return response()->json(['code'=>0,'error'=>$validator->error()->toArray()]);
        } else {
            //update vector
            if ($request->hasFile('itemImageUpdate')) {
                $file_path = $path.$vector->itemImage;
                //hapus gambar lama
                if ($vector->itemImage != null && \Storage::disk('public')->exists($file_path)) {
                    \Storage::disk('public')->delete($file_path);
                }
                //upload gambar baru
                $file = $request->File('itemImageUpdate');
                $file_name = time().'_'.$file->getClientOriginalName();
                $upload = $file->storeAs($path,$file_name,'public');

                if ($upload) {
                    $vector->update([
                        'name'=>$request->name,
                        'description'=>$request->description,
                        'itemTags'=>$request->itemTags,
                        'itemSoftware'=>$request->itemSoftware,
                        'itemFile'=>$request->itemFile,
                        'itemImage'=>$file_name,
                        ]); 
                        
                        return response()->json(['code'=>1,'msg'=>'product has been Updated successfully']);
                }
            } else {
                $vector->update([
                    'name'=>$request->name,
                    'description'=>$request->description,
                    'itemTags'=>$request->itemTags,
                    'itemSoftware'=>$request->itemSoftware,
                    'itemFile'=>$request->itemFile,
                    ]); 
                    return response()->json(['code'=>1,'msg'=>'product has been Updated successfully']);
            }
            
        }
        
                    
   
        return response()->json(['code'=>1,'msg'=>'product has been Update successfully']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteVector(Request $request)
    {
        $vector = Vector::find($request->id);
        $path = 'files/';
        $image_path = $path.$vector->itemImage;
        if ($vector->itemImage != null && \Storage::disk('public')->exists($image_path)) {
            \Storage::disk('public')->delete($image_path);
        }
       $query = $vector->delete();
       if ($query) {
           return response()->json(['code'=>1,'msg'=>'product has been Delete successfully']);
       }else {
            return response()->json(['code'=>0,'msg'=>'Something went wrong']);
       }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
