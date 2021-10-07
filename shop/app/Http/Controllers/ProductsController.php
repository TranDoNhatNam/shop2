<?php

namespace App\Http\Controllers;
use App\Products;
use App\TypeProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    //
    public function getview(){

        $listProducts = Products::all();
        
        return view('products.list')->with('listProducts',$listProducts);
     }

     public function getCreate(){
        $typeProduct = TypeProducts::all();
        return view('products.create')->with('typeProduct',$typeProduct);
     }

     public function save(Request $request){
        $products = new products();
        $products->name = $request->name;
        $products->id_type = $request->id_type;
        $products->description = $request->description;
        $products->unit_price = $request->unit_price;
        $products->promotion_price = $request->promotion_price;
        $products->image = $request->image;
        $products->unit = $request->unit;
        $products->save();

        return redirect('/sanpham');

     }

     public function getEdit($id){
        $typeProduct = TypeProducts::all();
        $products = Products::find($id);

        return view('products.edit')->with('products', $products)->with('typeProduct', $typeProduct);
    }

    public function edit(Request $request, $id){

        $products = Products::find($id);
        $products->name = $request->name;
        $products->id_type = $request->id_type;
        $products->description = $request->description;
        $products->unit_price = $request->unit_price;
        $products->promotion_price = $request->promotion_price;
        $products->image = $request->image;

        if($request->hasFile('image')){
            $image = $request->file('image');
            $products->image = $this->uploadImage('product',$image);
        }
        $products->unit = $request->unit;
        $products->save();

        return redirect('/sanpham');

    }

    public function uploadImage($key, $file)
    {
        //get filename with extension
        $filenamewithextension = $file->getClientOriginalName();

        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        $filename = Str::slug($filename);
        //get file extension
        $extension = $file->getClientOriginalExtension();

        //filename to store
        $filenametostore = $filename . '_' . uniqid() . '.' . $extension;

        Storage::put('/public/' . $key . '/' . $filenametostore, fopen($file, 'r+'));
        

        return 'storage/' . $key . '/' . $filenametostore;
    }
    public function delete($id){

        $products = products::find($id);
        $products->delete();

        return redirect('/sanpham');

    }
}
