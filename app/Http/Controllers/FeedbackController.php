<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Product;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public static function create(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'review' => 'required',
            'rating' => 'required',
        ]);

        Feedback::create([
            'name' => $validateData['name'],
            'review' => $validateData['review'],
            'rating' => $validateData['rating'],
        ]);

        return redirect('/');
    }
}
