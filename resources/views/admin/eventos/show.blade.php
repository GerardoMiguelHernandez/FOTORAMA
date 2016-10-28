@extends('galeria.main')

@section('content')
<h5 class="header center purple-text text-darken-4">{{$evento->nombre}}</h5>
  <!--  <div class="row">
      <div class="col s12 m12">
        <div class="card-panel teal z-depth-3">

   <h5 class="header center purple-text text-darken-4">{{$evento->nombre}}</h5>
   <div class="row">
   	<div class="col s12 m3 l3">
   		<strong>Fecha:</strong>{{$evento->fecha}}
   	</div>
   	<div class="col s12 m3 l3">
   		<strong>Lugar:</strong>{{$evento->lugar}}
   	</div>
   	<div class="col s12 m6 l6">
   		<strong>Descripcion:</strong>{{$evento->descripcion}}
   	</div>
   

   </div>
   <div class="row">
   	<div class="col s12 m3 l3">
   		<strong>Categoria:</strong>{{$evento->categoria->nombre}}
   	</div>
   	<div class="col s12 m3 l3">
   		<strong>Organiza:</strong>{{$evento->centro->nombre}}
   	</div>
   	<div class="col s12 m3 l3">
   		<strong>Encargado:</strong>{{$evento->encargado}}
   	</div>
   	<div class="col s12 m3 l3">
   		<strong>Creado:</strong>{{$evento->created_at->diffForHumans()}}
   	</div>

   </div>
        </div>
      </div>
    </div>
-->



<div class="container"><div class="row">
  <div class="col s12 m12 l12">
     <div class="fotorama"
     data-nav="thumbs" data-width="100%" data-ratio="700/467" data-max-width="100%" data-keyboard="true"  data-allowfullscreen="native" data-autoplay="true">
  @foreach($imagen as $img)
<img src="/uploads/{{$img->imagen}}"></a>
  @endforeach
     </div>
  </div>
</div>
</div>

 <div class="row">
@foreach($imagen as $img)
<div class="col s12 m6 l6">
  <div class="card medium sticky-action">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator responsive-img" src="/uploads/{{$img->imagen}}">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
          <h5 class="header center teal-text text-darken-4"></h5>
      <p class="darken-4 blue-text">
       <strong> Categoria:</strong> {{$img->album->nombre}}
       </p>
         <p class="darken-4 blue-text"><strong>Descripcion:</strong> {{$img->descripcion}}</p>
             

 </div>
  

    <div class="card-reveal z-depth 5">
      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
      <p>
<ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header waves-effect waves-red"><i class="material-icons teal600">date_range</i>Descripcion</div>
      <div class="collapsible-body"><p>{{$img->descripcion}}</p></div>
    </li>
    <li>
    <div class="collapsible-header waves-effect waves-red"><i class="material-icons teal600">date_range</i>Album</div>
      <div class="collapsible-body"><p>{{$img->album->nombre}}</p></div>
    </li>
    <li>
    <div class="collapsible-header waves-effect waves-red"><i class="material-icons teal600">date_range</i>Creado</div>
      <div class="collapsible-body"><p>{{$img->created_at->diffForHumans()}}</p></div>
    </li>
  </ul>
      </p>
    </div>
  </div>
  </div>
 
          @endforeach
           </div>


@endsection
@section('js')

<script type="text/javascript">
  $(function(){


$('.collapsible').collapsible();
  });
</script>
@endsection