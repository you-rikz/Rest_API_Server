<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{

    public function allProducts()
    {
        $products = Product::all();
        return response()->json(['products'=>$products],200);
    }
    public function singleProduct($product_id)
    {
        $products = Product::find($product_id);
        return response()->json(['products'=>$products],200);
    }
    public function searchProduct($title)
    {
        $result = Product::where('title', 'LIKE', '%'. $title. '%')->get();
        if(count($result)){
         return Response()->json($result);
        }
        else
        {
        return response()->json(['Result' => 'No Data not found'], 404);
      }
    }
    public function categories(){
        $products = Product::select('category')->get();
        $categories = array();

            foreach($products as $product){
            array_push($categories, $product['category']);
        }
            return response()->json(['categories'=>$categories], 200);
    }

    public function category($category_name)

    {
            $products = Product::where('category', $category_name)->get();
            return response()->json(['products'=>$products], 200);
    }

    public function addProduct(Request $request)
    {
        $request->validate([
            'title'=>'required|max:191',
            'description'=>'required|max:191',
            'currency'=>'required|max:191',
            'price'=>'required|max:191',
            'brand'=>'required|max:191',
            'category'=>'required|max:191',
            'image'=>'required|max:191',

        ]);
        $product = new Product;
        $product ->title = $request->title;
        $product ->description = $request->description;
        $product ->currency = $request->currency;
        $product ->price = $request->price;
        $product ->brand = $request->brand;
        $product ->category = $request->category;
        $product ->image = $request->image;
        $product ->save();
        return response()->json(['message'=>'Product Added Successfully'], 200);
    }

    public function updateProduct(Request $request, $product_id)
    {
        $request->validate([
            'title'=>'required|max:191',
            'description'=>'required|max:191',
            'currency'=>'required|max:191',
            'price'=>'required|max:191',
            'brand'=>'required|max:191',
            'category'=>'required|max:191',
            'image'=>'required|max:191',
        ]);
        
        $product = Product::find($product_id);
        if($product)
        {
            $product ->title = $request->title;
            $product ->description = $request->description;
            $product ->currency = $request->currency;
            $product ->price = $request->price;
            $product ->brand = $request->brand;
            $product ->category = $request->category;
            $product ->image = $request->image;
            $product ->update();
            return response()->json(['message'=>'Updated Successfully'], 200);
        }
        else
        {
            return response()->json(['message'=>'No Product Found'], 404);
        }

    }
    public function deleteProduct($product_id)
    {
    $product = Product::findOrFail($product_id);
    if($product)
    {
        $product -> delete();
        return response()->json(['message'=>'Product Deleted Succesfully'],200);
    }
    else
    {
        return response()->json(['message'=>'No Product Found'],404);

    }
    
    }
}
