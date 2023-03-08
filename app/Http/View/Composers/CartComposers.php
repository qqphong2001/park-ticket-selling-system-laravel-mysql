<?php

namespace App\Http\View\Composers;

use App\Models\product;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class CartComposers
{

    protected $users;
    public function __construct()
    {

    }

    public function compose(View $view){

        $carts = Session::get('carts');


        if (is_null($carts)) return [];

        $id = array_keys($carts);

        $product = product::whereIn('product_id',$id)->get();

        $data = [
            'products' => $product,
            'carts' =>$carts,
        ];

        $view->with($data);
    }


}


?>
