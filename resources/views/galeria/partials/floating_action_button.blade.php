<div class="fixed-action-btn " style="bottom: 45px;right: 24px;">
      <a href="#" class="btn-floating btn-large light-blue">
        <i class="large material-icons">add</i>
      </a>
      <ul>
      <!--
     <li><a href="#modal5" class="btn-floating red btn tooltipped modal-trigger" data-position="left" data-delay="50" data-tooltip="Agregar Imagen"> <i class="material-icons">insert_chart</i></a></li> -->

      <li><a href="#modal4" class="btn-floating blue btn tooltipped modal-trigger" data-position="left" data-delay="50" data-tooltip="Agregar Album"> <i class="material-icons">library_books</i></a></li>
      <li><a href="#modal3" class="btn-floating green btn tooltipped modal-trigger" data-position="left" data-delay="50" data-tooltip="Agregar Evento"> <i class="material-icons">flash_on</i></a></li>
      <li><a href="#modal2" class="btn-floating yellow btn tooltipped modal-trigger" data-position="left" data-delay="50" data-tooltip="Agregar Centro"><i class="material-icons">gps_fixed</i></a></li>

      <li><a href="#modal1" class="btn-floating purple btn tooltipped modal-trigger" data-position="left" data-delay="50" data-tooltip="Agregar Categoria"><i class="material-icons">picture_in_picture</i></a></li>
</ul>
    </div>




    <div id="modal5" class="modal transparent">
    <div class="modal-content">
      

<div class="page-login">
  <div class="center">
      <div class="card z-depth-5" style="margin:0% auto; max-width:400px;">
        <div class="card-header">
        
           <i class="material-icons medium orange600">menu</i>

        </div>
        <div class="card-content">
          
           {!! Form::open(['route'=>'imagen.store','method'=>'POST'])!!}
          {{ csrf_field() }}
          
            <div class="fallback">               
    <input type="file" class="dropzone" id="my-dropzone" name="file[]" value="" multiple>
    
    <div class="dropzone-previews"></div>
   </div>
            <div class="input-field col s12">
              <input id="descripcion" type="text" name="descripcion" class="validate">
              <label for="descripcion" class="center">Descripcion</label>
            </div>
             <div class="input-field col s12">
                <select name="album_id">
                    <option disabled selected>Album</option>
                    @foreach($albums as $al)
                    <option value="{{$al->id}}">{{$al->nombre}}</option>
                    @endforeach
                </select>
                <label>Elige Album</label>
            </div>
            <br>
              <button type="submit" id="categoria" class="btn-floating btn-large waves-effect waves-light red center"><i class="material-icons">add</i></button>
         {!! Form::close() !!}
        </div>
        
      </div>
    </div>
    </div>
    
  </div></div>

    <div id="modal1" class="modal transparent">
    <div class="modal-content">
      

<div class="page-login">
  <div class="center">
      <div class="card z-depth-5" style="margin:0% auto; max-width:400px;">
        <div class="card-header">
        
           <i class="material-icons medium orange600">menu</i>

        </div>
        <div class="card-content">
          <form method="POST" action="{{ url('/categoria') }}">
          {{ csrf_field() }}
            <div class="input-field col s12">
              <input id="nombre" name="nombre" type="text" class="validate">
              <label for="nombre" class="center">Nombre</label>
            </div>
            <div class="input-field col s12">
              <input id="descripcion" type="text" name="descripcion" class="validate">
              <label for="descripcion" class="center">Descripcion</label>
            </div>
            <br>
              <button type="submit" id="categoria" class="btn-floating btn-large waves-effect waves-light red center"><i class="material-icons">add</i></button>
          </form>
        </div>
        
      </div>
    </div>
    </div>
    
  </div></div>



<div id="modal2" class="modal transparent">
    <div class="modal-content">
      

<div class="page-login">
  <div class="center">
      <div class="card z-depth-5" style="margin:0% auto;">
        <div class="card-header">
        
           <i class="material-icons medium orange600">menu</i>

        </div>
        <div class="card-content">
          {!! Form::open(['route'=>'centros.store'])!!}
          {{ csrf_field() }}
            <div class="input-field col s12">
            <!-- <input id="nombre" name="nombre" type="text" class="validate"> -->
              
              {!! Form::text('nombre',null,['class'=>'validate','id'=>'nombre'])!!}
              {!! Form::label('nombre','Nombre',['class'=>'center'])!!}
            <!--  <label for="nombre" class="center">Nombre</label> -->
            </div>

            <div class="input-field col s12">
              {!! Form::text('direccion',null,['class'=>'validate','id'=>'direccion'])!!}
              {!! Form::label('direccion','Direccion',['class'=>'center'])!!}
            </div>

 <!--<div class="input-field col s12">
{!!Form::text('region',null,['class'=>'validate','id'=>'region'])!!}
{!!Form::label('region','Region',['class'=>'center'])!!} 
  </div> -->

   <div class="input-field col s12">
    <select name="region">
      <option value="" disabled selected>Elige region</option>
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


            <div class="input-field col s12">
              {!! Form::text('codigoPostal',null,['class'=>'validate','id'=>'codigoPostal'])!!}
              {!! Form::label('codigoPostal','Codigo Postal',['class'=>'center'])!!}
            </div>

            <div class="input-field col s12">
              {!! Form::text('telefono',null,['class'=>'validate','id'=>'telefono'])!!}
              {!! Form::label('telefono','Telefono',['class'=>'center'])!!}
            </div>

            <div class="input-field col s12">
              {!! Form::text('responsable',null,['class'=>'validate','id'=>'responsable'])!!}
              {!! Form::label('responsable','Responsable',['class'=>'center'])!!}
            </div>
            <br>
              <button type="submit" id="categoria" class="btn-floating btn-large waves-effect waves-light red center"><i class="material-icons">add</i></button>
          {!! Form::close() !!}
        </div>
        
      </div>
    </div>
    </div>
    
  </div></div>

    

<div id="modal3" class="modal transparent">
    <div class="modal-content">
      

<div class="page-login">
  <div class="center">
      <div class="card z-depth-5">
        <div class="card-header">
        
           <i class="material-icons medium orange600">menu</i>

        </div>
        <div class="card-content">
          {!! Form::open(['route'=>'eventos.store','files'=>'true','method'=>'POST'])!!}
          {{ csrf_field() }}
            <div class="input-field col s12">
            <!-- <input id="nombre" name="nombre" type="text" class="validate"> -->
              
              {!! Form::text('nombre',null,['class'=>'validate','id'=>'nombre'])!!}
              {!! Form::label('nombre','Nombre',['class'=>'center'])!!}
            <!--  <label for="nombre" class="center">Nombre</label> -->
            </div>
 <label for="fecha" class="center">Fecha</label> 
            <div class="input-field col s12">
             <input name="fecha" id="fecha" type="date" class="datepicker">
                    
            </div>

<div class="input-field col s12">
{!!Form::text('lugar',null,['class'=>'validate','id'=>'lugar'])!!}
{!!Form::label('lugar','Lugar',['class'=>'center'])!!} 
  </div>


            <div class="input-field col s12">
              {!! Form::text('descripcion',null,['class'=>'validate','id'=>'descripcion'])!!}
              {!! Form::label('descripcion','Descripcion',['class'=>'center'])!!}
            </div>

<div class="file-field input-field s12">
      <div class="btn">
        <span>File</span>
        <input type="file" name="imagen" id="imagen">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload one or more files">
      </div>
    </div>

            <div class="input-field col s12">
              {!! Form::text('encargado',null,['class'=>'validate','id'=>'encargado'])!!}
              {!! Form::label('encargado','Encargado',['class'=>'center'])!!}
            </div>
             <div class="input-field col s12">
                <select name="category_id">
                    <option disabled selected>Elige La categoria</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->nombre}}</option>
                    @endforeach
                </select>
                <label>Categoria</label>
            </div>
                 <div class="input-field col s12">
                <select name="centroOrganizador">
                    <option disabled selected>Organiza</option>
                    @foreach($centers as $center)
                    <option value="{{$center->id}}">{{$center->nombre}}</option>
                    @endforeach
                </select>
                <label>Elige Centro Organizador</label>
            </div>

            <br>
              <button type="submit" id="categoria" class="btn-floating btn-large waves-effect waves-light red center"><i class="material-icons">add</i></button>
          {!! Form::close() !!}
        </div>
        
      </div>
    </div>
    </div></div>
    </div>



<div id="modal4" class="modal transparent">
    <div class="modal-content">
      

<div class="page-login">
  <div class="center">
      <div class="card z-depth-5" style="margin:0% auto;">
        <div class="card-header">
        
           <i class="material-icons medium orange600">menu</i>

        </div>
        <div class="card-content">
          {!! Form::open(['route'=>'album.store','files'=>'true','method'=>'POST'])!!}
          {{ csrf_field() }}
            <div class="input-field col s12">
            <!-- <input id="nombre" name="nombre" type="text" class="validate"> -->
              
              {!! Form::text('nombre',null,['class'=>'validate','id'=>'nombre'])!!}
              {!! Form::label('nombre','Nombre',['class'=>'center'])!!}
            <!--  <label for="nombre" class="center">Nombre</label> -->
            </div>
              <div class="input-field col s12">
              {!! Form::text('descripcion',null,['class'=>'validate','id'=>'descripcion'])!!}
              {!! Form::label('descripcion','Descripcion',['class'=>'center'])!!}
            </div>

            <div class="file-field input-field s12">
      <div class="btn">
        <span>File</span>
        <input type="file" name="imagen" id="imagen">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Selecciona imagen principal">
      </div>
    </div>

    <div class="input-field col s12">
                <select name="evento_id">
                    <option disabled selected>Elige el Evento</option>
                    @foreach($alleventos as $allevento)
                    <option value="{{$allevento->id}}">{{$allevento->nombre}}</option>
                    @endforeach
                </select>
                <label>Evento</label>
            </div>

<div class="fallback">               
    <input type="file" class="dropzone" id="my-dropzone" name="file[]" value="" multiple>
    <div class="dropzone-previews"></div>
   </div>
            <br>
              <button type="submit" id="categoria" class="btn-floating btn-large waves-effect waves-light red center"><i class="material-icons">add</i></button>
          {!! Form::close() !!}
        </div>
        
      </div>
    </div>
    </div></div>
    </div>

