<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rating extends Model{
    protected $table = 'rating';

    public $timestamps = true;

    protected $fillable = [
        'product_id',
        'name_client',
        'email',
        'created_at',
        'updated_at',
        'review'





    ];





}

?>
