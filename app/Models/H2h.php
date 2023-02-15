<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class H2h extends Model
{
    use HasFactory;

    protected $table="h2hs";

    protected $fillable=[
        'id_user',
        'username',
        'password',
        'key',
        'url',
        'token',
        // 'expiredtoken'
    ];

  
}
