<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    protected $guarded=[''];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
