<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();

        return view('products.index', compact('products'));
    }


    public function redirect() {
        return view('products.add');
    }


    public function store(Request $request){
       Product::create($request->all());
       return redirect()->route('products.index');
    }

    public function destroy($id) {
        
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index');
    }

    public function edit($id) {
        $product = DB::table('products')->find($id);

        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id) {
        
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('products.index')
        ->with('success', 'Product update successfully');
    }
    
}
