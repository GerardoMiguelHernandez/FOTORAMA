@extends('galeria.main')
@section('content')



<div class="container" style="padding-top: 50px;">

   <div class="card bordered z-depth-5" style="margin:0% auto;">
        

	   <div class="row">
		    <div class="col s12 m12 l12">
			
				 {!! Form::open(['route' => ['categoria.update',$categoria], 'method' => 'PUT', 'files' => 'true','class'=>'col s12']) !!}
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
					
<div class="row">
						<div class="col s12 cyan">
						<div class="panel-heading"><h5 class="header center teal-text ">Editar Categoria</h5></div>
						</div>

					</div>
					<div class="row">

						<div class="input-field	col s12">
						{!! form::label('nombre','Nombre')!!}
                            {!! form::text('nombre',$categoria->nombre,['class' => 'form-control']) !!}


							</div>	
							<div class="input-field col s12">
						{!! form::label('descripcion','Descripcion')!!}
                            {!! form::text('descripcion',$categoria->descripcion,['class' => 'form-control']) !!}
						</div>
					
					
		

            </div>
         
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