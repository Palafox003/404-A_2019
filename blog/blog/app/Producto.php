<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $fillable=['nombre','costo','descripcion','marca','cantidad','categoria_id','img'];

    public function carritos(){
    	return $this->belongsToMany('App\Carrito');
    }
    public function categoria(){
    	return $this->belongsTo('App\Categoria');
    }
}
