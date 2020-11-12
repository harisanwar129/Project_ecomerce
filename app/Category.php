<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="categories";
    protected $guarded=[''];
   public function children(){
       return $this->hasMany('App\Category','parent_id');    
   }
   public function parent(){
       return $this->belongsTo('App\Category','parent_id','id');    
   }
}
