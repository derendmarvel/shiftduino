<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public static function index(){
        $p1 = Product::where('name', 'Classic Shiftduino')->first();
        $p2 = Product::where('name', 'RoboDuino (Blue)')->first();

        $feedbacks = Feedback::orderBy('created_at', 'desc')->take(9)->get();
    
        return view('home', [
            'product1' => $p1,
            'product2' => $p2,
            'feedbacks' => $feedbacks,
        ]);
    }

    public static function show(){
        $products = Product::all();
    
        return view('productlist', [
            'products' => $products,
        ]);
    }

    public static function detail($id){
        $product = Product::find($id);
    
        return view('product', [
            'product' => $product,
        ]);
    }

    public static function wishlist($id){
        $product = Product::find($id);
        $product['demand'] = $product['demand'] + 1;
        $product->save();

        $products = Product::all();

        return view('productlist', [
            'products' => $products,
        ]);
    }
}
