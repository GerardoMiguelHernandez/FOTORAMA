<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{

    //
protected $table="imagen";
protected $fillable=['imagen','descripcion','album_id'];

public function album(){

return $this->belongsTo('App\Album');
}
public function scopeSearch($query,$nombre){
    if(trim($nombre)!=""){
    return $query->where('imagen','LIKE',"%$nombre%");
}
   }

}
