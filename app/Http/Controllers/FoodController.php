<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\banner;
use App\Models\product;
use App\Models\rating;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request as HttpRequest;


class FoodController extends Controller{


    public function index(){
        $search ='';

        $data = [
            'search' => $search,
            'banners' =>banner::where('name','food')->get(),
            'product_food' =>product::where('menu',1)->orderBy('product_id','desc')->get(),
        ];


        return view('food/index')->with($data);
    }

    public function search (Request $request){
        $search = $request->input('search');
        if($search == 'search_desc' ) {
            $product_food = product::where('menu',1)->orderBy('price','desc')->get();
        } elseif($search == 'search_asc') {
            $product_food = product::where('menu',1)->orderBy('price','asc')->get();
        }else{
            $product_food = product::where('menu',1)->get();
        }

        $data = [
            'search' => $search,
            'product_food' =>$product_food,
            'banners' =>banner::where('name','food')->get(),
        ];
        return view('food/index')->with($data);
    }

    public function details($id){

        $data = [
            'banners' =>banner::where('name','food')->get(),
            'product' =>product::find($id),
            'ratings'=>rating::where('product_id',$id)->get(),
            'product_food' =>product::where('menu',1)->take(4)->get(),

        ];

        return view('food/detail')->with($data);
    }







}

?>
