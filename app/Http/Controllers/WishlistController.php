<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('wishlist', [
            'wishlists' => Wishlist::where('user_id', $user->id)->get()
        ]);
    }

    public function destroy($id)
    {
        $user = Auth::user();
        $wishlist = Wishlist::where('user_id', $user->id)
                                ->where('product_id', $id)
                                ->first();
        $wishlist->delete();
        $product = Product::find($id);
        $product['demand'] = $product['demand'] - 1;
        $product->save();
        return redirect()->route('wishlist');
    }

    public function view()
    {
        $wishlist = Wishlist::all();

        return view('admin', [
            'wishlists' => $wishlist
        ]);
    }
}
