<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //
protected $table="eventos";
protected $fillable =['nombre','fecha','lugar','descripcion','imagen','categoria_id','centroOrganizador','encargado'];

public function centro(){

return $this->hasOne('App\CentroModel','id','centroOrganizador');
}
public function album(){
return $this->belongsTo('App\Album');
}

public function categoria(){
return $this->hasOne('App\Categoria','id','categoria_id');
}

public function scopeSearch($query,$nombre){
    if(trim($nombre)!=""){
    return $query->where('nombre','LIKE',"%$nombre%");
}
   }

}
