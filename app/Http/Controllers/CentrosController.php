<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\CentroModel;
use App\Evento;
use App\Categoria;
class CentrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

      $centros = CentroModel::orderBy('created_at','DES')->paginate(4);
      return view('admin.centros.index')->with(['centros'=>$centros]);

//return redirect()->action('AdminController@index'); 

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
$centro = new CentroModel();
$centro->nombre = $request->nombre;
$centro->direccion=$request->direccion;
$centro->region=$request->region;
$centro->codigoPostal=$request->telefono;
$centro->responsable=$request->responsable;
$centro->save();
 //       dd($request->all());
return redirect()->action('CentrosController@index');  
   
 }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($id);
        $categoria=Categoria::orderBy('created_at','DES')->get();
    $centro = CentroModel::find($id);
     $centricos = CentroModel::orderBy('created_at', 'DES')->get();
$event = Evento::where('centroOrganizador', $centro->id)->get();

//dd($event);

       return view('plantilla.detalle-centro')->with(['centro'=>$centro, 'event'=> $event,'centricos'=>$centricos,'categoria'=>$categoria]);
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

     $centro_eliminar = CentroModel::find($id);
     $centro_eliminar->delete();
     return redirect()->action('CentrosController@index');


    }
}
