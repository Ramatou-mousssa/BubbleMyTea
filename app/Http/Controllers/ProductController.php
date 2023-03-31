<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function index(){
     $data = Products::all();
     return view('admin.display_product', [
        'products' => $data
     ]);
    }
    
  public function save(Request $req)
  {
    // print_r($req->input());
    $product = new Products;
    $product->name = $req->name;
    $product->price = $req->price;
    $product->quantity = $req->quantity;
    $product->category = $req->category;
    $product->gallery = $req->gallery;
    $product->description = $req->description;
    $product->save();
    return redirect('/tasks');
  }
    //$req stock tous les info
    // public function search_product (Request $req) {
    //     $product_searched = $req->input('product');
    //     $product_found = DB::table('products')

    //     return view('tasks.display_product', [
    //         'product' => $product
    //     ]);
    // } 
}
