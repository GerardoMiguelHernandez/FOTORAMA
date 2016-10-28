<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Evento;
use App\Album;
use App\Categoria;
use App\Imagen;

class BuscarController extends Controller
{
    //


    public function index(Request $request){

      

if($request->table_buscar == 'Imagenes'){
$imagenesss =Imagen::search($request->input_buscar)->orderBy('created_at','DES')->get();

	return view('buscar.imagenes')->with('imagenesss',$imagenesss);
}
elseif ($request->table_buscar == 'Categorias') {
//dd('eligio categorias');	
}
elseif ($request->table_buscar == 'Albums') {
//dd('eligio Albums');	
$albumsss =Album::search($request->input_buscar)->orderBy('created_at','DES')->paginate(2);

	return view('buscar.albums')->with('albumsss',$albumsss);
}
elseif ($request->table_buscar == 'Eventos') {
$eventos =Evento::search($request->input_buscar)->orderBy('created_at','DES')->get();
return view('buscar.eventos')->with('eventos',$eventos);
}

//dd($albums);



    }
}
