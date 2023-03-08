<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model{
    protected $table = 'gallery';
    protected $primaryKey = 'gallery_id';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'photo',
        'status',
        'menu_id',
    ];





}

?>
