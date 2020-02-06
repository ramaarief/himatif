<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
    	$data = Product::all();
    	$name = 'Rama Arief Permana';

    	return view('products', compact('data', 'name'))
    }

    public function store(Request $request){
    		

    		// dd($request->all());


    		$product = new Product()
    		$product->name = $request->name;
    		$product->category = $request->category;
    		$product->save();

    		return redirect('products')

    }
}
