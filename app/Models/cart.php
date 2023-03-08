<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cart extends Model{
    protected $table = 'carts';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'customer_id',
        'product_id',
        'quantity',
        'price',




    ];





}

?>
