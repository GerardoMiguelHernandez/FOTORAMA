@extends('galeria.main')
@section('css')
@endsection


@section('content')

<div class="container" style="padding-top: 50px;">

<div class="card bordered z-depth-5" style="margin:0% auto;">
        

	<div class="row">
		<div class="col s12 m12 l12">
			
				 {!! Form::open(['route' => ['eventos.update',$evento], 'method' => 'PUT', 'files' => 'true','class'=>'col s12']) !!}

					<div class="row">
						<div class="col s12 cyan">
						<div class="panel-heading"><h5 class="header center teal-text ">Editar Evento</h5></div>
						</div>

					</div>
					
					<div class="row">
						<div class="input-field	col s6">
						{!! form::label('nombre','Nombre')!!}
                            {!! form::text('nombre',$evento->nombre,['class' => 'form-control']) !!}


							</div>	
							<div class="input-field col s6">
						{!! form::label('lugar','Lugar')!!}
                            {!! form::text('lugar',$evento->lugar,['class' => 'form-control']) !!}
						</div>
						<div class="col s6">
							{!! form::label('descripcion','Descripcion')!!}
                            {!! form::text('descripcion',$evento->descripcion,['class' => 'form-control']) !!}
                     
						</div>
						<div class="col s6">
							{!! form::label('encargado','Encargado')!!}
                            {!! form::text('encargado',$evento->encargado,['class' => 'form-control']) !!}
                     
						</div>
						<div class="col s6">
							{!! form::label('fecha','Fecha')!!}
                            {!! form::date('fecha',$evento->fecha,['class' => 'datepicker']) !!}
                     
						</div>
							
						<div class="col s6">
						{!! form::label('image','Imagen')!!}
                            {!! form::file('imagen',null,['class' => 'form-control']) !!}
						</div>					
					</div>
					
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="row">
                     <div class="input-field col s6">
                <select name="categoria_id">
                    <option  value="{{$evento->categoria_id}}"disabled selected>Elige La categoria</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->nombre}}</option>
                    @endforeach
                </select>
                <label>Categoria</label>
            </div>

            <div class="input-field col s6">
                <select name="centroOrganizador">
                    <option  value="$evento->centroOrganizador" disabled selected>Elige Centro Organizador</option>
                  @foreach($centers as $centro)
                    <option value="{{$centro->id}}">{{$centro->nombre}}</option>
                    @endforeach
                </select>
                <label>Organiza</label>
            </div></div>
            
         
<br>
					<div class="row">
              <div class="col s6 offset-s3">
			
     <button class="btn waves-effect waves-light" type="submit" name="action">Guardar
    <i class="material-icons right">send</i>
  </button>
  </div></div>
				</form>
			
		</div>
	</div>
	</div>
</div>



@endsection


@section('js')
@endsection