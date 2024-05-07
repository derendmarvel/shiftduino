<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();
        $product = Product::find($id);

        $existingWishlist = Wishlist::where('user_id', $user->id)
                                        ->where('product_id', $product->id)
                                        ->first();
        return view('product', [
            'product' => $product,
            'existingWishlist' => $existingWishlist
        ]);
    }

    public static function wishlist($id){
        $user = Auth::user();
        $product = Product::find($id);

        $existingWishlist = Wishlist::where('user_id', $user->id)
                                        ->where('product_id', $product->id)
                                        ->first();

        if (!$existingWishlist){
            $product['demand'] = $product['demand'] + 1;
            $product->save();

            Wishlist::create([
                'user_id' => $user->id,
                'product_id' => $product->id
            ]);
        }

        $products = Product::all();

        return view('productlist', [
            'products' => $products,
        ]);
    }
}
