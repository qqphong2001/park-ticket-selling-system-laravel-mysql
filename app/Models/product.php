<?php
namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class product extends Model{
    protected $table = 'product';
    protected $primaryKey = 'product_id';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'detail',
        'price',
        'photo',
        'quantity',
        'status',
        'menu',
    ];


    public function promotions() {
        return $this->belongsTo(Promotion::class);
    }




    public function getPriceAfterDiscount(Promotion $promotion ) {


        $today = Carbon::now()->toDateString();
        $discounted_price = 0;
        if($today >= $promotion->created_date && $today <= $promotion->created_date  ){

            $discounted_price = $this->price * (100-$promotion->sale_off);

        } elseif ($promotion->name == 'entry ticket' && Carbon::parse($today)->dayOfWeek >= Carbon::MONDAY && $today <= Carbon::FRIDAY) {
            $discounted_price = $this->price * (100-$promotion->sale_off);
        }


        return round($discounted_price,2) ;
    }

    public function getDiscountedPrice(Request $request){
        $promotion_menu = $request->input('menu');
        $product_menu = $request->input('menu');


        $promotion = Promotion::find($promotion_menu);
        $product = Promotion::find($product_menu);


        $discounted_price = $product->getPriceAfterDiscount($promotion);

        return response()->json(['discounted_price' => $discounted_price]);
    }


}

?>
