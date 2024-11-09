<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index(Request $request){
        
      
    $search = $request->input('search');
    $sortBy = $request->input('sort_by', 'name');
    $sortOrder = $request->input('sort_order', 'asc');


    if ($search) {
    
    $products = Product::where('product_id','LIKE','%'.$request->search."%")
    ->orWhere('description','LIKE','%'.$request->search."%")
    ->orderBy('product_id','desc')
    ->orderBy($sortBy, $sortOrder)->paginate(3);
    }
    else{
        $products = Product::orderBy($sortBy, $sortOrder)->paginate(3);
    }


    return view('index',['products' => $products]);
    }


    





   //create

   public function create(Request $request){
    return view('create');
   }






  //store
public function store(Request $request){

     $request->validate([
        'product_id' => 'required|unique:products',
        'name' => 'required',
        'description' => 'max:1000',
        'price' => 'required|numeric',
        'stock' => 'max:1000',
        'image'=> 'mimes:jpeg,jpg,png,gif|max:1000',
    ]);
    Product::create([
            "product_id"=>$request->product_id,
            "name"=>$request->name,
            "description"=>$request->description,
            "price"=>$request->price,
            "stock"=>$request->stock,
            "image"=>$request->image,
    ]);


    return redirect()->route('products.index')->with('success', 'Product created successfully.');
    
   }




   function edit(Request $request, $id){
    $product = Product::findOrFail($id);
    
    return view('edit', compact('product'));
    
   }







   function update(Request $request, $id)
   {
    try{
        $request->validate([
             
            'name' => 'required',
            'description' => 'max:1000',
            'price' => 'required|numeric',
            'stock' => 'max:1000',
            'image'=> 'mimes:jpeg,jpg,png,gif|max:1000',
         ]);
    
        Product::where('id',$id)->update([
            "name"=>$request->input('name'),
            "description"=>$request->input('description'),
            "price"=>$request->input('price'),
            "stock"=>$request->input('stock'),
            "image"=>$request->input('image'),
        ]);
       
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }catch(Exception $e){
       
        return redirect()->back();
    }
   }




   function delete(Request $request, $id){
    Product::where('id',$id)->delete();
    return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
   }

}
