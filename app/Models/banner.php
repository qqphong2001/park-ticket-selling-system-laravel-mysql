<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class banner extends Model{
    protected $table = 'banner';
    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'photo',
    ];





}

?>
