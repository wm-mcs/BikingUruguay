@extends('layouts.paginasPersonalizadas.layout')

  


{{--*/ $ImagenPortada         = url().'/imagenes/BikeUruguay/Galeria/biking-uruguay-foto-foto-de-punta-del-este.jpg' /*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/BikeUruguay/logo-bike-uruguay-color-pgxperience.jpg'/*--}}
{{--*/ $Titulo                = 'Biking Uruguay | Pg-Xperience | En Montevideo y Punta del este' /*--}} 
{{--*/ $DescriptionEtiqueta   = 'Nuestro objetivo es promocionar un estilo de vida sano a partir de un deporte fuertemente asociado a nuestra identidad. 
.
 ' /*--}}
{{--*/ $PalabrasClaves        = '' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_home') /*--}}


@section('favicon')
<link rel="shortcut icon" href="{{ asset('imagenes/favicon.ico') }}"> 
@stop

@section('og-tags')
 <meta property="og:type"               content="website" />
 <meta property="og:title"              content="{{ $Titulo}} " />
 <meta property="og:description"        content="{{$DescriptionEtiqueta}}" />
 <meta property="og:image"              content="{{$ImagenParaTaG }}" />
 <meta property="og:image:secure_url"   content="{{$ImagenParaTaG }}" /> 
 <meta property="og:image:width"        content="250">
 <meta property="og:image:height"       content="250">
@stop 

@section('pixcel-facebook')


@stop

@section('data-estructurada')

 <script type="application/ld+json">
        {
         "@context": "http://schema.org",
         "@type": "BreadcrumbList",
         "itemListElement":
         [
          {
           "@type": "ListItem",
           "position": 1,
           "item":
           {
            "@id": "{{$UrlDeLaPagina}}",
            "name": "{{$Titulo}}"
            }
          }          
         ]
        }
</script>


@stop




@section('title')
   {{$Titulo}}
@stop


@section('MetaContent')
      {{$DescriptionEtiqueta}}
@stop

@section('MetaRobot')
 index,follow
@stop

@section('palabras-claves')
{{$PalabrasClaves}}
@stop


@section('vue')


  
  @include('paginas.home.vue.contacto-component')  
  @include('paginas.home.vue.vue-instance')
@stop

@section('header')
	@include('paginas.paginas_personalizadas.Header.Header_principal')
@stop

@section('footer')
	@include('paginas.paginas_personalizadas.Footer.Footer_principal')
@stop



@section('portada')

    <div class="site-blocks-cover overlay bg-light" id="home-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
            <div class="row">
              <div class="col-6 col-lg-6 p-5 background-primary" >
                <h1  class="titulos-class text-white font-secondary">Bike tours </h1>
                
                <p class="parrafo-class text-white">Tours programados por la Rambla de Montevideo y Punta del Este con guías bilingües y trilingües.</p>
               
                
           
                <p><a href="#empatizar" class="Boton-Fuente-Chico Boton-Blanco"> Conocer nuestros servicios <i class="fas fa-chevron-right"></i> </a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
       <img class="imagen-portada-altura-100vh" style="position: absolute;top: 0;" src="{{$ImagenPortada}}" alt="Laura Jodral portada."> 
       {{-- <img class="logo-float-easy-socio-portada" :src="empresa.logo_easy_blanco" alt="Easysocio ptograma de gestion de gimasios y academias simple de usar."> --}}
       

    </div>  



@stop

@section('contenido')

  
      <div class="site-section background-gris-1" id="empatizar">
        <div class="container">
          
          <h3 class="sub-titulos-class text-center text-color-primary font-italic mb-3">
            Organizá una bike tour con nosotros y sorprendé a tus clientes o invitados.  
          </h3>    


          <p class="text-center text-color-primary m-0">            
            Hacé que vivan una experiencia inolvidable y dales la oportunidad de concoer los puntos más hermosos de Montevideo y Punta Del Este.
          </p>   
          
        </div>
      </div>
      

    

     
      {{-- S e r v i c i o s  --}}
      @include('paginas.paginas_personalizadas.home_servicios')

      

      {{-- C o n t a c t o  --}}
      @include('paginas.paginas_personalizadas.home_contacto')




    




    

    

   


   

    

   

@stop
