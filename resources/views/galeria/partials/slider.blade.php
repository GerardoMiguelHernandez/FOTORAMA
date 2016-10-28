@extends('galeria.main')
@section('title','Home')
@section('css')
  {!! Html::style('css/animate.css'); !!}

  <style>
        /* jssor slider arrow navigator skin 05 css */
        /*
        .jssora05l                  (normal)
        .jssora05r                  (normal)
        .jssora05l:hover            (normal mouseover)
        .jssora05r:hover            (normal mouseover)
        .jssora05l.jssora05ldn      (mousedown)
        .jssora05r.jssora05rdn      (mousedown)
        */

        .jssora05l, .jssora05r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 40px;
            cursor: pointer;
            background: url('/img/a17.png') no-repeat;
            overflow: hidden;
        }
        .jssora05l { background-position: -10px -40px; }
        .jssora05r { background-position: -70px -40px; }
        .jssora05l:hover { background-position: -130px -40px; }
        .jssora05r:hover { background-position: -190px -40px; }
        .jssora05l.jssora05ldn { background-position: -250px -40px; }
        .jssora05r.jssora05rdn { background-position: -310px -40px; }
        
        /* jssor slider thumbnail navigator skin 01 css */
        /*
        .jssort01-99-66 .p            (normal)
        .jssort01-99-66 .p:hover      (normal mouseover)
        .jssort01-99-66 .p.pav        (active)
        .jssort01-99-66 .p.pdn        (mousedown)
        */
        .jssort01-99-66 .p {
            position: absolute;
            top: 0;
            left: 0;
            width: 99px;
            height: 66px;
        }
        
        .jssort01-99-66 .t {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .jssort01-99-66 .w {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
        }
        
        .jssort01-99-66 .c {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 95px;
            height: 62px;
            border: #000 2px solid;
            box-sizing: content-box;
            background: url('/img/t01.png') -800px -800px no-repeat;
            _background: none;
        }
        
        .jssort01-99-66 .pav .c {
            top: 2px;
            _top: 0px;
            left: 2px;
            _left: 0px;
            width: 95px;
            height: 62px;
            border: #000 0px solid;
            _border: #fff 2px solid;
            background-position: 50% 50%;
        }
        
        .jssort01-99-66 .p:hover .c {
            top: 0px;
            left: 0px;
            width: 97px;
            height: 64px;
            border: #fff 1px solid;
            background-position: 50% 50%;
        }
        
        .jssort01-99-66 .p.pdn .c {
            background-position: 50% 50%;
            width: 95px;
            height: 62px;
            border: #000 2px solid;
        }
        
        * html .jssort01-99-66 .c, * html .jssort01-99-66 .pdn .c, * html .jssort01-99-66 .pav .c {
            /* ie quirks mode adjust */
            width /**/: 99px;
            height /**/: 66px;
        }
        
    </style>
@endsection
@section('content')

<br>
<!--
<div class="row animated wobble">
    <div class="col s12 m12 l12">
  <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 960px; height: 480px; overflow: hidden; visibility: hidden; background-color: #24262e;">
       
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 240px; width: 720px; height: 480px; overflow: hidden;">
        @foreach($alleventos as $allevento)

            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="/uploads/{{$allevento->imagen}}" />
                <img data-u="thumb" src="/uploads/{{$allevento->imagen}}" />
            </div>
           @endforeach
        </div>
       


        <div data-u="thumbnavigator" class="jssort01-99-66" style="position:absolute;left:0px;top:0px;width:240px;height:480px;" data-autocenter="2">
           
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div class="w">
                        <div data-u="thumbnailtemplate" class="t"></div>
                    </div>
                    <div class="c"></div>
                </div>
            </div>
           
        </div>
        
        <span data-u="arrowleft" class="jssora05l" style="top:158px;left:248px;width:40px;height:40px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
    </div>
</div>
</div>
-->


  <div class="slider">
    <ul class="slides">
    @foreach($alleventos as $evento)
      <li>
        <img src="/uploads/{{$evento->imagen}}"> <!-- random image -->
        <div class="caption center-align">
          <h3>{{$evento->nombre}}</h3>
          <h5 class="light grey-text text-lighten-3">{{$evento->fecha}}</h5>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
      

<div class="animated bounceIn">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><a href="{{route('eventos.index')}}">
            <i class="material-icons iconfont1 orange600 iconSobre">flash_on</i></a></h2>
            <h5 class="center">Eventos</h5>

          <h5 class="header center teal-text text-darken-4">3</h5>
          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><a href=""><i class="iconSobre material-icons iconfont1 orange600 ">picture_in_picture</i></a></h2>
            <h5 class="center">Imagenes</h5>

          <h5 class="header center teal-text text-darken-4">3</h5>
          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><a href="{{route('album.index')}}"><i class="material-icons iconfont1 orange600 iconSobre">photo_album</i></a></h2>
            <h5 class="center">Albums</h5>

          <h5 class="header center teal-text text-darken-4">3</h5>
          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><a href=""><i class="material-icons iconfont1 orange600 iconSobre">location_on</i></a></h2>
            <h5 class="header center"> Centros</h5>

          <h5 class="header center teal-text text-darken-4">3</h5>
          </div>
        </div>

      </div>

    </div>
  </div>

<!-- comienza la section de los eventos -->

  <div class="section">
   <h5 class="header center teal-text text-darken-4">Eventos</h5>
  </div>

 <div class="row">
@foreach($alleventos as $eventico)
<div class="col s12 m3 l3">
  <div class="card small sticky-action teal">
    <div class="card-image waves-effect waves-block waves-teal">
      <img class="activator responsive-img" src="/uploads/{{$eventico->imagen}}">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
          <h5 class="header center teal-text text-darken-4"> <a href="{{route('eventos.show',$eventico->id)}}">{{$eventico->nombre}}</a></h5>
      <p class="darken-4 blue-text">
       <strong> Categoria:</strong> {{$eventico->categoria->nombre}}
       </p>
         <p><strong> Creado:</strong> {{$eventico->created_at->diffForHumans()}}</p>
             

 </div>
  

    <div class="card-reveal z-depth 5">
      <span class="card-title grey-text text-darken-4">{{$eventico->nombre}}<i class="material-icons right">close</i></span>
      <p>
<ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header waves-effect waves-teal"><i class="material-icons teal600">date_range</i>Descripcion</div>
      <div class="collapsible-body"><p>{{$eventico->descripcion}}</p></div>
    </li>
    <li>
    <div class="collapsible-header waves-effect waves-teal"><i class="material-icons teal600">date_range</i>Fecha</div>
      <div class="collapsible-body"><p>{{$eventico->fecha}}</p></div>
    </li>
    <li>
    <div class="collapsible-header waves-effect waves-teal"><i class="material-icons teal600">date_range</i>Lugar</div>
      <div class="collapsible-body"><p>{{$eventico->lugar}}</p></div>
    </li>
     <li>
    <div class="collapsible-header waves-effect waves-teal"><i class="material-icons teal600">date_range</i>Encargado</div>
      <div class="collapsible-body"><p>{{$eventico->encargado}}</p></div>
    </li>
     <li>
    <div class="collapsible-header waves-effect waves-teal"><i class="material-icons teal600">date_range</i>Categoria</div>
      <div class="collapsible-body"><p>{{$eventico->categoria->nombre}}</p></div>
    </li>
    <li>
    <div class="collapsible-header waves-effect waves-teal"><i class="material-icons teal600">date_range</i>Centro Organizador</div>
      <div class="collapsible-body"><p>{{$eventico->centro->nombre}}</p></div>
    </li>
  </ul>
      </p>
    </div>
  </div>
  </div>
 
          @endforeach
           </div>



<!-- Section para las ultimas cuatro imagenes agregadas -->

<div class="section">
   <h5 class="header center teal-text text-darken-4">Imagenes</h5>
  </div>




<div class="row">
@foreach($imagenes as $imagen)
<div class="col s12 m3 l3">
  <div class="card small">
    <div class="card-image waves-effect waves-block waves-red">
      <img class="activator responsive-img" src="/uploads/{{$imagen->imagen}}">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
          <h5 class="header center teal-text text-darken-4"></h5>
      <p class="darken-4 blue-text">
       <strong> Album:</strong> {{$imagen->album->nombre}}<br>
       <strong> Creado:</strong> {{$imagen->created_at->diffForHumans()}}
</p>
 </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
      <p>
<ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header waves-effect waves-purple"><i class="material-icons teal600">date_range</i>Descripcion</div>
      <div class="collapsible-body"><p>{{$imagen->descripcion}}</p></div>
    </li>
    <li>
      <div class="collapsible-header waves-effect waves-purple"><i class="material-icons teal600">date_range</i>Album</div>
      <div class="collapsible-body"><p>{{$imagen->album->nombre}}</p></div>
    </li>
    <li>
      <div class="collapsible-header waves-effect waves-purple"><i class="material-icons teal600">date_range</i>Fecha de creacion</div>
      <div class="collapsible-body"><p>{{$imagen->created_at->diffForHumans()}}</p></div>
    </li>
    <li>
    
    </li>
  </ul>
      </p>
    </div>
  </div>
  </div>
 
          @endforeach
           </div>


<!-- Seccion para los albums -->
<div class="section">
   <h5 class="header center teal-text text-darken-4">Albums</h5>
  </div>






<div class="row">
@foreach($albums as $album)
<div class="col s12 m3 l3">
  <div class="card small">
    <div class="card-image waves-effect waves-block waves-orange">
      <img class="activator responsive-img" src="/uploads/{{$album->imagen}}">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
          <h5 class="header center teal-text text-darken-4">{{$album->nombre}}</h5>
      <p class="darken-4 blue-text">
       <strong> Evento:</strong> {{$album->evento->nombre}}<br>
       <strong> Creado:</strong> {{$album->created_at->diffForHumans()}}
</p>
 </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">{{$album->nombre}}<i class="material-icons right">close</i></span>
      <p>
<ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header waves-effect waves-purple"><i class="material-icons teal600">date_range</i>Descripcion</div>
      <div class="collapsible-body"><p>{{$album->descripcion}}</p></div>
    </li>
      <li>
      <div class="collapsible-header waves-effect waves-purple"><i class="material-icons teal600">date_range</i>Evento al que pertenece</div>
      <div class="collapsible-body"><p>{{$album->evento->nombre}}</p></div>
    </li>
      <li>
      <div class="collapsible-header waves-effect waves-purple"><i class="material-icons teal600">date_range</i>Creado</div>
      <div class="collapsible-body"><p class="darken-4 blue-text">{{$album->created_at->diffForHumans()}}</p></div>
    </li>
    <li>
    
    </li>
  </ul>
      </p>
    </div>
  </div>
  </div>
 
          @endforeach
           </div>

<div class="row">
  <div class="col s12 m6 l6">
  <h5 class="header center teal-text text-darken-4">Ultimas imagenes</h5>
     <div class="carousel">
  @foreach($alleventos as $imagen)
    <a class="carousel-item" href="#one!"><img src="/uploads/{{$imagen->imagen}}" class="responsive"></a>
    @endforeach
  </div> 
  <!--
   <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="http://lorempixel.com/250/250/nature/1"></a>
    <a class="carousel-item" href="#two!"><img src="http://lorempixel.com/250/250/nature/2"></a>
    <a class="carousel-item" href="#three!"><img src="http://lorempixel.com/250/250/nature/3"></a>
    <a class="carousel-item" href="#four!"><img src="http://lorempixel.com/250/250/nature/4"></a>
    <a class="carousel-item" href="#five!"><img src="http://lorempixel.com/250/250/nature/5"></a>
  </div> -->
  </div>
  <div class="col s12 m6 l6">
   
    <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
  </div>
</div>

 


<h2 class='animated rotateIn'>It Works!</h2>



    <div class="row">
    @foreach($alleventos as $evento)
      <div class="col s12 m3 l3">
        <div class="card teal small">
        <div class="card-image">
     <img src="/uploads/{{$evento->imagen}}" class="img-responsive materialboxed">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">menu</i></span>
          <h5 class="header center teal-text text-darken-4">titulo</h5>
     
 </div>
 <div class="card-reveal">
   <span class="card-title grey-text text-darken-4">TITULO<i class="material-icons right red600">close</i></span>
   adfasdfasdf
   adsfasdf
 </div>
         
        </div>
      </div>
      @endforeach
     
    </div>

    

   
            
@endsection

@section('js')
{!! Html::script('js/jquery.min.js'); !!}
{!! Html::script('js/materialize.js'); !!}
{!! Html::script('js/jquery.jrumble.1.3.js'); !!}
{!! Html::script('js/wow.min.js'); !!}
{!! Html::script('js/highcharts/highcharts.js'); !!}
{!! Html::script('js/highcharts/exporting.js'); !!}
{!! Html::script('js/highcharts/highcharts-3d.js'); !!}
<script type="text/javascript">
  $(function(){

$('.materialboxed').materialbox();
$('.collapsible').collapsible();
  });
</script>

<script type="text/javascript">
  $(function(){
    $('.materialboxed').materialbox();
    $('.collapsible').collapsible();
     $('.slider').slider({full_width: true,interval:12000});
    // $('.iconSobre').hover.css({'background':'orange'});
     //$('.iconSobre').hover.addClass('animated bounceIn');
      //$('#contenido').addClass('titulo');
      $('.iconSobre').hover(
       function(){ $(this).addClass('animated bounceIn') },
       function(){ $(this).removeClass('animated bounceIn') }
); 
  });

</script>
<script type="text/javascript">
  $(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Actividades'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Usuarios',
                y: 10
            }, {
                name: 'Albums',
                y: 15,
                sliced: true,
                selected: true
            }, {
                name: 'Eventos',
                y: 20
            }, {
                name: 'Imagenes',
                y: 30
            }, {
                name: 'Centros',
                y: 40
            }]
        }]
    });
});
</script>
<script type="text/javascript">
// Demo 5
$(function(){
  $('.materialboxed').materialbox();
  $('.carousel').carousel();
  $('#w').hover.css({'background':'orange'});
  $('#contenido').addClass('titulo');
wow = new WOW({
animateClass:'animated',
offset:100,
});
wow.init();
$('.iconSobre').jrumble({
        x: 6,
	y: 6,
	rotation: 6,
	speed: .02,
	opacity: true,
	opacityMin: .05
});


$('.iconSobre').hover(function(){
	$(this).trigger('startRumble');
}, function(){
	$(this).trigger('stopRumble');
});


swal({
  title: "Are you sure?",
  text: "You will not be able to recover this imaginary file!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel plx!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
//$.ajax({
            //url: '{{ url('/home') }}',
          //  type: 'GET',
           // dataType : JSON,
        //    success: swal 'Deleted!', 'The member was deleted successfully.'
      //      });

swal("Deleted!", "Your imaginary file has been deleted.", "success");
} else {
	    swal("Cancelled", "Your imaginary file is safe :)", "error");
  }
});
});
</script>

{!! Html::script('js/jssor.slider-21.1.5.mini.js'); !!}
 <script type="text/javascript">
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Zoom:1,$Easing:{$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2},
              {$Duration:1000,$Zoom:11,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Zoom:1,$Rotate:1,$During:{$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1000,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
              {$Duration:1200,x:0.5,$Cols:2,$Zoom:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Left:$Jease$.$Swing,$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1000,x:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
              {$Duration:1200,x:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Left:$Jease$.$Swing,$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1000,x:4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
              {$Duration:1200,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
              {$Duration:1000,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
              {$Duration:1200,x:-4,y:2,$Rows:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
              {$Duration:1200,x:1,y:2,$Cols:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:19},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.8}}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Rows: 2,
                $Cols: 6,
                $SpacingX: 14,
                $SpacingY: 12,
                $Orientation: 2,
                $Align: 156
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 960);
                    refSize = Math.max(refSize, 300);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
        </script>
@endsection
