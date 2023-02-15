<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reffjenis extends Model
{
    use HasFactory;
    protected $table = 'reffjenis';

    protected $fillable =['nama'];

}
