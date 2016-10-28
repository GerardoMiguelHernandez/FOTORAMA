@extends('galeria.main')





@section('content')
<br>
<div class="section">
   <h5 class="header center blue-text text-darken-2">Categorias</h5>
  </div>
<table class="bordered responsive-table highlight">
        <thead>
          <tr class="blue-text text-darken-2">
             
              <th data-field="id">Nombre</th>
              <th data-field="name">Descripcion</th>
              <th data-field="name">Creado</th>
          </tr>
        </thead>

        <tbody>
        @foreach($categorias as $category)
          <tr class="orange-text text-darken-3">
            
            <td>{{$category->nombre}}</td>
            <td>{{$category->descripcion}}</td>
            <td>{{$category->created_at->diffForHumans()}}</td>

            <td><a  href="{{route('categoria.destroy1',$category->id)}}" class="waves-effect waves-light btn red darken-1 tooltipped" onclick="return confirm('Esta seguro que desea eliminar?')" data-position="bottom" data-delay="50" data-tooltip="Eliminar"><i class="material-icons left">delete</i></a></td>
            <td><a href="{{route('categoria.edit1',$category->id)}}" class="waves-effect waves-light btn teal lighten-2 tooltipped" data-position="bottom" data-delay="50" data-tooltip="Editar"><i class="material-icons left">mode_edit</i></a></td>

           
             
          </tr>
          @endforeach
        </tbody>
      </table>


<div class="center blue">
{!! $categorias->render() !!}
</div>

@endsection




