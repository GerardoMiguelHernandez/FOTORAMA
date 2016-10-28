@extends('galeria.main')
@section('content')

<br>
<div class="section">
   <h5 class="header center blue-text text-darken-2">Albums</h5>
  </div>


<table class="bordered responsive-table highlight">
        <thead>
          <tr class="blue-text text-darken-2">
             
              <th data-field="id">Nombre</th>
              <th data-field="name">Descripcion</th>
              <th data-field="name">Imagen</th>
              <th data-field="name">Evento</th>
          </tr>
        </thead>

        <tbody>
        @foreach($album as $al)
          <tr class="orange-text text-darken-3">
        
            
            <td>{{$al->nombre}}</td>
            <td>{{$al->descripcion}}</td>
            <td>{{$al->imagen}}</td>
            <td>{{$al->evento->nombre}}</td>

            <td><a  href="{{route('album.destroy1',$al->id)}}" class="waves-effect waves-light btn red darken-1 tooltipped" onclick="return confirm('Esta seguro que desea eliminar?')" data-position="bottom" data-delay="50" data-tooltip="Eliminar"><i class="material-icons left">delete</i></a></td>
            <td><a href="{{route('album.edit1',$al->id)}}" class="waves-effect waves-light btn teal lighten-2 tooltipped modal-trigger" data-position="bottom" data-delay="50" data-tooltip="Agregar fotos"><i class="material-icons left">add</i></a></td>

            <!-- <td><a href="{{route('album.show',$al->id)}}" class="waves-effect waves-light btn teal lighten-2 tooltipped modal-trigger" data-position="bottom" data-delay="50" data-tooltip="Ver mas"><i class="material-icons">zoom_in</i></a></td> -->

            

           
             
          </tr>
          @endforeach
        </tbody>
      </table>

<div class="center blue">
{!! $album->render() !!}
    
</div>
@endsection

@section('js')

<script type="text/javascript">
  $(function(){


$('.collapsible').collapsible();
  });
</script>
@endsection



 