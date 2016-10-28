<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;
use App\Album;
use App\Imagen;
use App\CentroModel;
use App\Http\Requests;
use Intervention\Image\ImageManagerStatic as Image;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
     Carbon::setlocale('es');   
    } 




    public function index()
    {
        //
        $eventos = Evento::orderBy('created_at', 'DES')->get();
$centricos = CentroModel::orderBy('created_at', 'DES')->get();

        return view('plantilla.eventos')->with(['eventos'=>$eventos,'centricos'=>$centricos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
return view('admin.eventos.portada');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $file =$request->file('imagen');

    
   $path = public_path().'/uploads/';
   //$image->save($path.$file->getClientOriginalName());
   $image = Image::make($file)->resize(350,350);
   // $image = Image::make($file);
   $image->save($path.'evento_'. time() .$file->getClientOriginalName());
   $event= new Evento();
   $event->nombre = $request->nombre;
   $event->fecha = $request->fecha;
   $event->lugar= $request->lugar;
   $event->descripcion =$request->descripcion;
   $event->imagen= 'evento_'. time() .$file->getClientOriginalName();
   $event->categoria_id= $request->category_id;
   $event->centroOrganizador= $request->centroOrganizador;
   $event->encargado=$request->encargado;
   $event->save();
return redirect()->action('AdminController@index'); 

  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$
             $centricos = CentroModel::orderBy('created_at', 'DES')->get();

        $evento = Evento::find($id);
$album = Album::first()->where('evento_id', $id)->get();
$codigo=0;
foreach ($album as $alb) {
    
    $codigo= $alb->id;

}
if($codigo == 0){
    return redirect()->action('EventosController@index');
}
$imagen = Imagen::where('album_id', $codigo)->get();
//dd($imagen);
return view('plantilla.evento-galeria')->with(['imagen'=>$imagen,'evento'=>$evento,'centricos'=>$centricos]);
//$evento = Evento::find($id);
//$evento = Evento::with('album.imagenes')->get();
//$evento = Album::orderBy('id','DES')->where('evento_id',$id);
//$album = DB::table('album')->where('evento_id', $id)->get();
//$codigo = $album->id;
//dd($album->nombre);
//$imagenes= DB::table('imagen')->where('album_id',)->get();

//return view('admin.eventos.show')->with('evento',$imagenes);


       // $books = App\Book::with('author.contacts')->get();
/*
$eventos = Evento::find($id);

$codigo = $eventos->id;

if ($codigo != 0) {
    $eventos->load('author', 'publisher');
}
*/
/*
$eventos = Evento::with(['album.imagenes' => function ($query) {
    $query->where('id',$id);
}])->get();
dd($eventos); */



        /*$eventos = App\User::with(['posts' => function ($query) {
    $query->where('title', 'like', '%first%');
}])->get(); */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $evento = Evento::find($id);
        return view('admin.eventos.edit')->with('evento',$evento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
 $file =$request->file('imagen');

   $evento=Evento::find($id);
   $path = public_path().'/uploads/';
   
   if($file == null){
   $evento->imagen= $evento->imagen;
   }
   else{

     //$image = Image::make($file);
     $image = Image::make($file)->resize(350,350);
   $image->save($path.'evento_'. time() .$file->getClientOriginalName());
   $evento->imagen= 'evento_'. time() .$file->getClientOriginalName();
   }
  

   $categoria_id = $request->categoria_id;
   $centroOrganizador = $request->centroOrganizador;
   
   if($categoria_id == null){
    $evento->categoria_id=$evento->categoria_id;
   }
   else{
    $evento->categoria_id= $request->categoria_id;
   }

   if($centroOrganizador == null){
    $evento->centroOrganizador=$evento->centroOrganizador;
   }
   else{

    $evento->centroOrganizador= $request->centroOrganizador;
   }

  

$evento->nombre = $request->nombre;
$evento->fecha = $request->fecha;
$evento->lugar= $request->lugar;
$evento->descripcion =$request->descripcion;






$evento->encargado=$request->encargado;
$evento->save();
return redirect()->action('AdminController@index');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
$evento = Evento::find($id);
      $evento->delete();
        return redirect()->action('AdminController@index');


    }
}
