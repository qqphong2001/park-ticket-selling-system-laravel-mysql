<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\banner;
use App\Models\product;
use App\Models\rating;
use App\Models\sanpham;
use Dflydev\DotAccessData\Data;

class ZoneController extends Controller{
    public function index(){

        $data =[
            'banners' =>banner::where('name','Keansburg Amusement Park')->get(),
            'product_zones_1' => product::where('detail','Keansburg Amusement Park')->get(),
            'product_zones_2' => product::where('detail','Runaway Rapids')->get(),
            'product_zones_3' => product::where('detail','Go Karts')->get(),
            'product_food' =>product::where('menu',1)->get(),

        ];


        return view('zones/index')->with($data);
    }


    public function details($id){

        $data = [
            'product' =>product::find($id),
            'banners' =>banner::where('name','Keansburg Amusement Park')->get(),
            'product_zones' =>product::where('menu',2)->skip(4)->take(10)->get(),
            'ratings'=>rating::where('product_id',$id)->get(),
        ];

        return view('zones/detail')->with($data);
    }





}

?>
