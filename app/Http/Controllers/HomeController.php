<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\banner;
use App\Models\customer;
use App\Models\menu;
use App\Models\product;
use App\Models\Promotion;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index()
    {


        $data = [

            'product_zones' => product::where('menu', 2)->get(),

            'product_tickets' => product::where('menu', 3)->get(),
            'product_food' => product::where('menu', 1)->get(),
            'banners' => banner::where('id', '3')->orWhere('id', '4')->get(),

            'promotions' => Promotion::get(),

            'blogs_home' => Article::where('group_name', 'blog-home')->take(3)->get(),



        ];
        return view('index/index')->with($data);
    }
    public function congratulation(Request $request)
    {


        $customer = customer::find($request->vnp_TxnRef);

        if($request->vnp_ResponseCode == "00") {

            $customer->payment = 1 ;
            $customer->update();


           session()->forget('payment');

            return view('index/payment')->with('message' ,'success');
        }

        return view('index/payment')->with('message' ,'errors');




    }
}
