<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class position_user extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'position_user';
    protected $fillable = [
        'id',
        'position_id',
        'user_id',

    ];
}
