<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $product = Product::all();

        return response()->json([
            'mesage' => 'berhasil',
            'code' => 200,
            'data' => $product
        ]);
    }

    public function show($id){
        $product = Product::find($id);

        return response()->json([
            'mesage' => 'berhasil',
            'code' => 200,
            'data' => $product
        ]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'nama_product' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'image|max:2048',
        ]);

        if($request->hasFile('gambar')){
            $image = $request->file('gambar');
            $imageName = time(). '.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'),$imageName);
            $data['gambar'] = $imageName;
        }

        $product = Product::create($data);

        return response()->json([
            'message' => 'berhasil',
            'code' => 200,
            'data' => $product
        ]);
    }

    //update data
    public function edit(Request $request,$id){
        $data = $request->validate([
            'nama_product' => 'required',
            'harga' => 'required|numeric',
            'gambar' =>'image|max: 2048',
        ]);

        if($request->hasFile('gambar')){
            $image = $request->file('gambar');
            $imageName = time(). '.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'),$imageName);
            $data['gambar'] = $imageName;
        }

        $product = Product::find($id);
        $product->update($data);

        return response()->json([
            'mesage' => 'berhasil',
            'code' => 200,
            'data' => $product
        ]);

    }

    //hapus data
    public function hapus($id){
        $product = Product::find($id);
        $product->delete();

        return response()->json([
            'mesage' => 'berhasil',
            'code' => 200,
           
        ]);
    }

    //tampilakn gambar
    public function image($filename){
        $path = public_path('images',$filename);

        if(!file_exists($path)){
            abort(404);
        }

        $file = file_get_contents($path);
        $type = mime_content_type($path);

        return response($file)->header('Content-Type',$type);
    }

}
