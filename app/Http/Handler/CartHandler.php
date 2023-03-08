<?php

namespace App\Http\Handler;

use App\Jobs\SendMail;
use App\Jobs\SendMaill;
use App\Models\customer;
use App\Models\cart;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class CartHandler{
    public function create($request){

        $quantity = (int)$request->input('quantity');
        $id = (int)$request->input('id');

        if($quantity <= 0 || $id <= 0){
            Session::flash('error','error');
            return false;
        }

        $carts = Session::get('carts');



        if(is_null($carts))
        {
            Session::put('carts',[
                $id => $quantity,
            ]);

            return true;
        }

        $exists = Arr::exists($carts,$id);

        if($exists == true){

            $carts[$id] = $carts[$id] + $quantity;
            Session::put('carts',$carts);

            return true;
        }

        $carts[$id] = $quantity;
        Session::put('carts',$carts);

        return true;


    }

    public function getProduct(){
        $carts = Session::get('carts');
        if (is_null($carts)) return [];

        $id = array_keys($carts);

        return product::whereIn('product_id',$id)->get();


    }

    public function remove($id){

        $carts = Session::get('carts');
        unset($carts[$id]);
        Session::put('carts',$carts);
        return true;
    }

    public function update($request){

        Session::put('carts',$request->input('numproduct'));
        return true;

    }

    public function addCart($request){
        try{
            DB::beginTransaction();

            $carts = Session::get('carts');
            if (is_null($carts))
            return false;

            $customer = customer::create([
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'description' => $request->input('description'),
            ]);
            $this->InfoProductCart($carts,$customer->id);

            DB::commit();
            Session::flash('success','success');

            SendMail::dispatch($request->input('email'))->delay(now()->addSeconds(2));


            Session::forget('carts');


        }
        catch(\Exception $err){
            DB::rollBack();
            Session::flash('error','error');
            return false;

        }

        return true;

    }
    protected function InfoProductCart($carts,$customer_id){
        $id = array_keys($carts);

        $products =  product::whereIn('product_id',$id)->get();



        foreach($products as $key => $product){

            cart::create([
                'customer_id' => $customer_id,
                'product_id' => $product->product_id,
                'quantity' => $carts[$product->product_id],
                'price' =>  $product->price
            ]);
        }

        return true ;

    }

}

?>
