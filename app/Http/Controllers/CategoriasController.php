<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Categoria;
use Carbon\Carbon;
use App\Evento;
use App\CentroModel;

class CategoriasController extends Controller
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

      
      //$categorias=Categoria::orderBy('created_at','DES')->paginate(5);
      $categorias = Categoria::orderBy('created_at','DES')->paginate(4);
      return view('admin.categorias.index')->with('categorias',$categorias);

       // $centros = Categoria::orderBy('created_at','DES')->paginate(4);
      //return view('admin.categorias.index')->with(['centros'=>$centros]);

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        //dd($request->all());
  



$category= new Categoria();
$category->nombre = $request->nombre;
$category->descripcion = $request->descripcion;
$category->save();
 //return redirect()->action('WelcomeController@index');  

return redirect()->action('CategoriasController@index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Categoria::find($id);
        $event = Evento::where('categoria_id', $category->id)->get();
        $centricos = CentroModel::orderBy('created_at', 'DES')->get();
        $categoria = Categoria::orderBy('created_at', 'DES')->get();
        //dd($event);
        return view('template.categoriaevento')->with(['category'=>$category, 'event'=>$event,'centricos'=>$centricos,'categoria'=>$categoria]);
        //
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


        $categoria=Categoria::find($id);
        //dd($categoria);


        return view('admin.categorias.edit')->with('categoria',$categoria);
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

  
      $categoria = Categoria::find($id);
      $categoria->nombre=$request->nombre;
      $categoria->descripcion=$request->descripcion;
      $categoria->save();
      return redirect()->action('CategoriasController@index');


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

        $categoria = Categoria::find($id);
      $categoria->delete();
        return redirect()->action('CategoriasController@index');

    }
}
