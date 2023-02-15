<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reffkota extends Model
{
    use HasFactory;
    protected $table = 'reffkotas';

    protected $fillable =['nama_kota'];

    public function user(){
    	return $this->hasMany('App\Models\Reffkota');
    }
}
