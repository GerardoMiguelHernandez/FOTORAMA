@extends('galeria.main')
@section('css')
@endsection

@section('content')




<div class="container" style="padding-top: 50px;">

   <div class="card bordered z-depth-5" style="margin:0% auto;">
        

	   <div class="row">
		    <div class="col s12 m12 l12">
			
				 {!! Form::open(['route' => ['album.agregar',$album], 'method' => 'POST', 'files' => 'true','class'=>'col s12']) !!}
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="datos" value="Actualizar">
					
<div class="row">
						<div class="col s12 cyan">
						<div class="panel-heading"><h5 class="header center teal-text ">Agregar Imagenes al Album</h5></div>
						</div>

					</div>
					<div class="row">

						<div class="input-field	col s12">
						{!! form::label('nombre','Nombre')!!}
                            {!! form::text('nombre',$album->nombre,['class' => 'form-control']) !!}


							</div>	
							<div class="input-field col s12">
						{!! form::label('descripcion','Descripcion')!!}
                            {!! form::text('descripcion',$album->descripcion,['class' => 'form-control']) !!}
						</div>
						<div class="fallback">               
    <input type="file" class="dropzone" id="my-dropzone" name="file[]" value="" multiple>
    <div class="dropzone-previews"></div>
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

@section('js')
@endsection