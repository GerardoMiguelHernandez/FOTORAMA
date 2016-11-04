
@extends('galeria.main')
@section('css')
@endsection


@section('content')

<div class="container" style="padding-top: 50px;">

<div class="card bordered z-depth-5" style="margin:0% auto;">
        

	<div class="row">
		<div class="col s12 m12 l12">
			
				 {!! Form::open(['route' => ['centros.update',$centro], 'method' => 'PUT', 'files' => 'true','class'=>'col s12']) !!}

					<div class="row">
						<div class="col s12 cyan">
						<div class="panel-heading"><h5 class="header center teal-text ">Editar Centro</h5></div>
						</div>

					</div>
					
					<div class="row">
						<div class="input-field	col s6">
						{!! Form::text('nombre',$centro->nombre,['class'=>'validate','id'=>'nombre'])!!}
              {!! Form::label('nombre','Nombre',['class'=>'center'])!!}


							</div>	
							<div class="input-field col s6">
						 {!! Form::text('direccion',$centro->direccion,['class'=>'validate','id'=>'direccion'])!!}
              {!! Form::label('direccion','Direccion',['class'=>'center'])!!}
						</div>
						<div class="col s6">
							<div class="input-field col s6">
    <select name="region">
      <option value="{{$centro->region}}" disabled selected>Elige region</option>
      <option value="Cañada">Cañada</option>
      <option value="Costa">Costa</option>
      <option value="Sierra Norte">Sierra Norte</option>
      <option value="Sierra Sur">Sierra Sur</option>
      <option value="Istmo">Istmo</option>
      <option value="Valles Centrales">Valles Centrales</option>
      <option value="Papaloapan">Papaloapan</option>
      <option value="Mixteca">Mixteca</option>
    </select>
    <label class="center">Region</label>
  </div>
                     
						</div>
						<div class="input-field col s6">
							 {!! Form::text('codigoPostal',$centro->codigoPostal,['class'=>'validate','id'=>'codigoPostal'])!!}
              {!! Form::label('codigoPostal','Codigo Postal',['class'=>'center'])!!}
                     
						</div>
						<div class="input-field col s6">
							{!! Form::text('telefono',$centro->telefono,['class'=>'validate','id'=>'telefono'])!!}
              {!! Form::label('telefono','Telefono',['class'=>'center'])!!}
                     
						</div>
							
						<div class="input-field col s6">
						{!! Form::text('responsable',$centro->responsable,['class'=>'validate','id'=>'responsable'])!!}
              {!! Form::label('responsable','Responsable',['class'=>'center'])!!}
						</div>					
					</div>
					
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

            
         
<br>
					<div class="row">
              <div class="col s6 offset-s5">
			
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