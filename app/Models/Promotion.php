<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table = 'promotions';
    protected $primary = 'id';
    public $timestamps = true;
    protected $fillable = [
        'name',
        'menu',
        'start_date',
        'end_date',
        'created_by',
        'status',
        'sale_off',
        'description'
    ];
    protected $dates = ['created_at', 'updated_at'];



    public function products() {
        return $this->hasMany(product::class);
    }

    






}
