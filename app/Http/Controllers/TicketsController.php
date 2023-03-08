<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\product;
use App\Models\Promotion;
use App\Models\rating;
use Illuminate\Http\Request;

class TicketsController extends Controller{


    public function index(){
        $search ='';

        $data = [
            'search' => $search,
            'product_tickets' =>product::where('menu',3)->get(),
            'banners' =>banner::where('name','ticket')->get(),
            'promotions'=>Promotion::get(),

        ];
        return view('tickets/index')->with($data);
    }

    public function search (Request $request){
        $search = $request->input('search');
        if($search == 'search_desc' ) {
            $product_tickets = product::where('menu',3)->orderBy('price','desc')->get();
        } elseif($search == 'search_asc') {
            $product_tickets = product::where('menu',3)->orderBy('price','asc')->get();
        }else{
            $product_tickets = product::where('menu',3)->get();
        }

        $data = [
            'search' => $search,
            'product_tickets' =>$product_tickets,
            'banners' =>banner::where('name','ticket')->get(),
            'promotions'=>Promotion::get(),

        ];
        return view('tickets/index')->with($data);
    }


    public function details($id){


        $data = [
            'product' =>product::find($id),

            'banners' =>banner::where('name','ticket')->get(),
            'product_tickets' =>product::where('menu',3)->where('product_id','!=','6')->get(),
            'ratings'=>rating::where('product_id',$id)->get(),
            'promotions'=>Promotion::get(),

        ];

        return view('tickets/detail')->with($data);
    }

    }




?>



