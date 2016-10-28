<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Categoria;
use App\CentroModel;
use App\Evento;
use App\Album;
use App\Imagen;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

         $albums = Album::all();
        $categories = Categoria::all();
        $centers= CentroModel::all();

        $sliders =Evento::orderBy('created_at','DES')->take(4)->get();
         $imagenes =Imagen::orderBy('created_at','DES')->take(12)->get();
        $alleventos = Evento::orderBy('created_at','DES')->get();

            View::share('categories', $categories);
                View::share('centers', $centers);
                View::share('alleventos', $alleventos);
                 View::share('albums', $albums);
                 View::share('sliders', $sliders);
                 View::share('imagenes', $imagenes);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
