<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function createProduct(Request $request){

        $product = new Product();

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();
    
        return response()->json($product);
    }
    
    public function updateProduct(Request $request, $id){
    
        Product::where("pid", $id)->update([
            'name' => $request->name, 
            'price' => $request->price, 
            'description' => $request->description
        ]);
    
        $product = Product::where("pid", $id)->get();

        $response["products"] = $product;
        $response["success"] = 1;

        return response()->json($response);
    }  
    
    
    
    public function deleteProduct(Request $request, $id){
    
        Product::where('pid', $id)->delete();
    
        return response()->json('Removed successfully.');
    
    }
    
    
    
    public function index(){
    
        $products  = Product::all();
        $response["products"] = $products;
        $response["success"] = 1;
    
        return response()->json($response);
    
    }
}
