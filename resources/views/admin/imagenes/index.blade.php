 @extends('galeria.main')
@section('css')
{!! Html::style('css/jquery.hoverGrid.css'); !!}
@endsection
@section('content')
<br>
<!--
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
</div>  -->

 <div class="section">
   <h5 class="header center blue-text text-darken-2">Imagenes</h5>
  </div>
 
 <div class="row">
@foreach($imagen as $img)
<div class="col s12 m4 l4">
  <div class="card small sticky-action">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator responsive-img" src="/uploads/{{$img->imagen}}">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
          <h5 class="header center teal-text text-darken-4"></h5>
      <p class="darken-4 blue-text">
       <strong> Album:</strong> {{$img->album->nombre}}
       </p>
         <p>
           <a  href="{{route('imagen.destroy1',$img->id)}}" class="waves-effect waves-light btn red darken-1 tooltipped" onclick="return confirm('Esta seguro que desea eliminar?')" data-position="bottom" data-delay="50" data-tooltip="Eliminar"><i class="material-icons left">delete</i></a>
         </p>
             

 </div>
  

    <div class="card-reveal z-depth 5">
      <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
      <p>
<ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons teal600">date_range</i>Descripcion</div>
      <div class="collapsible-body"><p>{{$img->descripcion}}</p></div>
    </li>
    <li>
    <div class="collapsible-header"><i class="material-icons teal600">date_range</i>Album</div>
      <div class="collapsible-body"><p>{{$img->album->nombre}}</p></div>
    </li>
    <li>
    <div class="collapsible-header"><i class="material-icons teal600">date_range</i>Creado</div>
      <div class="collapsible-body"><p>{{$img->created_at->diffForHumans()}}</p></div>
    </li>
  </ul>
      </p>
    </div>
  </div>
  </div>
 
          @endforeach
           </div>


<!--
<div id="whatever" class="center">
<div class="row">
@foreach($imagen as $img)

<div class="col s12 m3 l3">
    <div class="item waves-teal">
        <img width="250" height="181" src="/uploads/{{$img->imagen}}" alt="my image" title="my image" class="materialboxed" />
      
        
    </div>  
    </div> 
    @endforeach 
    </div>             
</div>

-->

<div class="center blue">
{!! $imagen->render() !!}
</div>
@endsection

@section('js')
{!! Html::script('js/jquery.hoverGrid.js'); !!}
<script type="text/javascript">
  $(function(){

$('.materialboxed').materialbox();
$('.collapsible').collapsible();
  });
</script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#whatever').hoverGrid();
    });
</script>
@endsection


