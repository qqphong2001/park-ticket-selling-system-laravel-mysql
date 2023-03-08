<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class menu extends Model{
    protected $table = 'menu';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'photo',
        'url'
    ];





}

?>
