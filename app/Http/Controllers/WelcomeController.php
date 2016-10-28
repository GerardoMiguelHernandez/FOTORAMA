<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Album;
use App\Evento;
use App\Imagen;
use App\Categoria;
use App\CentroModel;
use App\User;
use Carbon\Carbon;
class WelcomeController extends Controller
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
$count_users = User::all()->count();	
$count = Evento::all()->count();
$count_albums = Album::all()->count();
$count_imagenes = Imagen::all()->count();
$albumns = Album::with('imagenes')->orderBy('created_at','DES')->take(6)->get();
$imagenes = Imagen::orderBy('created_at','DES')->skip(1)->take(12)->get();
$eventicos = Evento::orderBy('created_at')->skip(1)->take(4)->get();
$count_centros =CentroModel::all()->count();
$even = Evento::orderBy('created_at','DES')->get();
$categoria = Categoria::orderBy('created_at', 'DES')->get();
$primero = $eventicos->first();
$centricos = CentroModel::orderBy('created_at', 'DES')->get();
$collection = collect(['center-align', 'left-align','right-align']);

 return view('plantilla.main')->with(['imagenes'=>$imagenes,'eventicos'=>$eventicos,'count_imagenes' => $count_imagenes, 'count_albums' => $count_albums,'count' => $count,'count_centros'=>$count_centros,'count_users'=>$count_users,'even' => $even,'albumns'=>$albumns,'collection'=>$collection, 'categoria'=>$categoria, 'primero'=>$primero, 'centricos'=>$centricos]); 
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

public function eventos(){

    return view('template.eventos');
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
    }
}
