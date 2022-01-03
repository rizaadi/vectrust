<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vector;

class VectorController extends Controller
{
    //
    public function save(Request $request){
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
               $file = $request->file('itemImage');
               $file_name = time().'_'.$file->getClientOriginalName();

            //    $upload = $file->storeAs($path, $file_name);
            $upload = $file->storeAs($path, $file_name, 'public');
            $id_users = auth()->id();
               if($upload){
                   Vector::insert([
                       'name'=>$request->name,
                       'description'=>$request->description,
                       'itemTags'=>$request->itemTags,
                       'itemSoftware'=>$request->itemSoftware,
                       'itemFile'=>$request->itemFile,
                       'itemImage'=>$file_name,
                        'id_users'=>$id_users,
                   ]);
                   return response()->json(['code'=>1,'msg'=>'New product has been saved successfully']);
                }
        // }
    }

    
}
