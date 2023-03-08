<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customer extends Model{
    protected $table = 'customer';
    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'phone',
        'email',
        'description',
        'created_at',
        'updated_at'

    ];





}

?>
