@extends('layouts.admin_layout.admin_layout')


@section('miga-de-pan') 
  {{-- lugar atras --}}
  <a href="{{route('get_admin_marcas')}}"><span>Marcas</span></a>

  {{-- separador --}}
  <span class="spam-separador">|</span> 

  {{-- lugar donde esta --}}
  <span>Crear Marca</span>
@stop

@section('content')





 {{-- formulario --}}
  {!! Form::open(['route' => 'set_admin_marcas_crear',
                            'method'=> 'post',
                            'files' =>  true,
                            'id'    => 'form-admin-empresa-datos'
                          ])               !!}
   <div class="formulario-contenedor">


     {{-- fechas crear --}}
     <div class="contenedor-grupo-datos">
        <div class="contenedor-grupo-datos-titulo"> Fechas</div>
        <div class="contenedor-formulario-label-fiel">                       
         
        </div>
      </div>

      {{-- datos corporativos --}}
      <div class="contenedor-grupo-datos">
        <div class="contenedor-grupo-datos-titulo"> Datos</div>
        <div class="contenedor-formulario-label-fiel">                       
          @include('admin.marcas.formularios_partes.datos_basicos')
        </div>
      </div>

      {{-- imagenes corporativos --}}
      <div class="contenedor-grupo-datos">
        <div class="contenedor-grupo-datos-titulo"> Imagen</div>
        <div class="contenedor-formulario-label-fiel">                       
          @include('admin.marcas.formularios_partes.datos_imagenes')
        </div>
      </div>

      

      
   </div>
   <div class="admin-boton-editar">
     Crear
   </div> 

  {!! Form::close() !!}


  

  
@stop