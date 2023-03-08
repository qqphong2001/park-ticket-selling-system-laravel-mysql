<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public static function getPromotionWithProduct($promotion_menu){
        $promotions = Promotion::with('product')
                                ->where('menu',$promotion_menu)
                                ->select('name','sale_off','start_date','end_date')
                                ->get();

        return $promotions;

    }

    

}
