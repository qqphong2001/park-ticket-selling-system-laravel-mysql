<?php

namespace App\Http\Controllers;

use App\Http\Handler\CartHandler;
use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    protected $CartHandler;
    public function __construct(CartHandler $CartHandler)
    {

        $this->CartHandler = $CartHandler;
    }

    public function index(Request $request){
      $result =  $this->CartHandler->create($request);

        if($result == false){
            return redirect()->back();
        }

        return redirect()->back();
    }
    public function show(){
        $products = $this->CartHandler->getProduct();
        $data = [
            'products' => $products,
            'carts' =>Session::get('carts')

        ];

        return view('cart/index')->with($data);
    }

    public function delete($id = 0){

        $this->CartHandler->remove($id);

      return  redirect('/cart');
    }

    public function update(Request $request){
        $this->CartHandler->update($request);

        return redirect('/cart');
    }

    public function order (Request $request){

        $id = $request->input('email');
        $this->CartHandler->addCart($request);
        $latestCustomerId = DB::table('customer')->where('id',customer::max('id'))->first()->id;

            $data = [
                'orders' => DB::table('carts')->select('customer_id',DB::raw('SUM(price) AS pricea'))->where('customer_id',$latestCustomerId)
                ->groupBy('customer_id')
                ->get()
            ];

            Session::get('payment');
            Session::put('payment',$data);
        return view('index/congratulation');
    }



}
