<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller{


    public function index(Request $request){


        if(Auth::check()){

            rating::create([
                'product_id' => $request->input('product_id'),
                'name_client' => $request->input('name'),
                'email' => $request->input('email'),
                'review' => $request->input('review')

            ]);




            return redirect()->back();
        }

        else {

            return redirect()->back()->with('error','Please login to submit the form');

        }

    }



}

?>
