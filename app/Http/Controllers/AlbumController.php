<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Album;
use App\Imagen;
use Carbon\Carbon;
use Intervention\Image\ImageManagerStatic as Image;

class AlbumController extends Controller
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

      

      $album = Album::orderBy('created_at','DES')->paginate(4);
      return view('admin.albums.index')->with('album',$album);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
public function nuevasImagenes(Request $request, $id)

    {
        //
 //dd($id);
 $path = public_path().'/uploads/';
      $path1 = public_path().'/thumbnails/';
      $path2 = public_path().'/nueva/';
  $files =$request->file('file');

  $album=Album::find($id);
  
foreach($files as $fil){

$imagen = new Imagen();
                $image3 = Image::make($fil);
                $image3->save($path2.'imagen_'. time() .$fil->getClientOriginalName());
                $image1 = Image::make($fil)->resize(270,180);
               // $fileName = $file->getClientOriginalName();
                $image2 = Image::make($fil)->resize(120,87);
                $image2->save($path1.'imagen_'. time() .$fil->getClientOriginalName());
                $image1->save($path.'imagen_'. time() .$fil->getClientOriginalName());
                $imagen->imagen='imagen_'.time().$fil->getClientOriginalName();
                $imagen->album_id=$album->id;
                $imagen->save();
                //$file->move($path, $fileName);


    
    }
    return redirect()->action('AlbumController@index');

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
      $path1 = public_path().'/thumbnails/';
      $path2 = public_path().'/nueva/';
   //$image->save($path.$file->getClientOriginalName());
   $image = Image::make($file)->resize(506,295);
    //$image = Image::make($file);
   $image->save($path.'album_'. time() .$file->getClientOriginalName());
   $album= new Album();
   $album->nombre = $request->nombre;
   $album->descripcion =$request->descripcion;
   $album->imagen= 'album_'. time() .$file->getClientOriginalName();
   $album->evento_id=$request->evento_id;
   $album->save();


$id = Album::orderBy('created_at','DES')->first();
$codigo=$id->id;


$files = $request->file('file');
//dd($files);

foreach($files as $fil){

$imagen = new Imagen();
                $image3 = Image::make($fil);
                $image3->save($path2.'imagen_'. time() .$fil->getClientOriginalName());
                $image1 = Image::make($fil)->resize(270,180);
               // $fileName = $file->getClientOriginalName();
                $image2 = Image::make($fil)->resize(120,87);
                $image2->save($path1.'imagen_'. time() .$fil->getClientOriginalName());
                $image1->save($path.'imagen_'. time() .$fil->getClientOriginalName());
                $imagen->imagen='imagen_'.time().$fil->getClientOriginalName();
                $imagen->album_id=$codigo;
                $imagen->save();
                //$file->move($path, $fileName);


            }  
 
return redirect()->action('WelcomeController@index');  

       // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    


       $album = Album::find($id);
        //dd($album);
 
      
    
    //$codigo= $album->id;
$imagenes = Imagen::where('album_id',$album->id)->get();
 return view('admin.albums.show')->with(['album'=>$album,'imagenes'=>$imagenes]);

       /*
        $codigo;
        foreach ($album as $alb) {
           
            $codigo=$alb->id;
        }

        $imagenes = Imagen::where('album_id',$codigo)->get();

        return view('admin.albums.show')->with(['album'=>$album,'imagenes'=>$imagenes]);*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function deleteImagen($id,$imagen){
        dd($id);

    }
    public function edit($id)
    {
        //


        $album = Album::find($id);
        return view('admin.albums.edit')->with('album',$album);
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
 $path = public_path().'/uploads/';

$image = Image::make($file);
   $image->save($path.'album_'. time() .$file->getClientOriginalName());
        $album  = Album::find($id);
        $album->nombre = $request->nombre;
   $album->descripcion =$request->descripcion;
   $album->imagen= 'album_'. time() .$file->getClientOriginalName();
   $album->evento_id=$request->evento_id;
   $album->save();
   return redirect()->action('AlbumController@index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {



        $album = Album::find($id);
        $album->delete();
        return redirect()->action('AlbumController@index');



        //
    }
}
