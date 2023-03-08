<?php

namespace App\Http\Controllers;
use App\Http\Handler\CartHandler;
use App\Models\banner;
use App\Models\menu;
use Illuminate\Support\Facades\Session;

class LayoutController extends Controller{

    protected $CartHandler;
    public function __construct(CartHandler $CartHandler)
    {

        $this->CartHandler = $CartHandler;
    }


    public function index(){
        $products = $this->CartHandler->getProduct();

        $data =[

            'products'=>$products,
            'carts' =>Session::get('carts'),

        ];

        return view('layouts/layout')->with($data);

    }


    }

?>
