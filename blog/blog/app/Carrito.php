<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    //
    protected $fillable=['user_id','estatus'];

    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function productos(){
    	return $this->belongsToMany('App\Producto');
    }
}
