<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $priamryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'group_name',
        'topic',
        'photo',
        'description',
        'status',
        'created_by',
        // 'created_at',
        // 'updated_at',
    ];
}
