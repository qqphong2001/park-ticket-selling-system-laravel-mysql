<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuCat extends Model{
    protected $table = 'menu_cat';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'id_menu',
        'url'
    ];





}

?>
