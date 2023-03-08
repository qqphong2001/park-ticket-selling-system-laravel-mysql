<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactus extends Model
{
    use HasFactory;

    protected $table = 'contactus';
    protected $priamryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'name',
        'subject',
        'email',
        'message',
        'company',
        'created_at',
        'updated_at',
    ];
}
?>
