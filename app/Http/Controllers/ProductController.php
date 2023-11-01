<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = DB::select("select * from products");

        return view('products.index', ['products' => $products]);
    }


    public function create() {
        return view('products.add');
    }


    public function add(Request $request){
        $productname = $request->input('productname');
        $price = $request->input('price');
        $quantity = $request->input('quantity');

        DB::insert('insert into products (productname, price, quantity) values (?, ?, ?)', [$productname, $price, $quantity]);

        return redirect()->route('products.index');
    }

    public function delete($id) {
        DB::table('products')->where('id', $id)->delete();

        return redirect()->route('products.index');
    }
    
}
