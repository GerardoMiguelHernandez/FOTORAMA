<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CentroModel extends Model
{
    //
protected $table = "centros";
protected $fillable =['nombre','direcion','region','codigoPostal','telefono','responsable'];

public function evento(){

return $this->belongsTo('App\Evento');
}
}
