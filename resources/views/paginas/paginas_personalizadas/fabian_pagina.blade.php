@extends('layouts.paginasPersonalizadas.layout')




{{--*/ $ImagenPortada         = url().'/imagenes/BikeUruguay/Galeria/biking-uruguay-foto-foto-de-punta-del-este.jpg' /*--}}
{{--*/ $ImagenParaTaG         = url() . '/imagenes/BikeUruguay/logo-bike-uruguay-color-pgxperience.jpg'/*--}}
{{--*/ $Titulo                = 'Biking Uruguay | Pg-Xperience | En Montevideo y Punta del este' /*--}} 
{{--*/ $DescriptionEtiqueta   = 'Nuestro objetivo es promocionar un estilo de vida sano a partir de un deporte fuertemente asociado a nuestra identidad. 
.
 ' /*--}}
{{--*/ $PalabrasClaves        = '' /*--}}
{{--*/ $UrlDeLaPagina         = route('get_home') /*--}}

@section('og-tags')
 <meta property="og:type"               content="website" />
 <meta property="og:title"              content="{{ $Titulo}} " />
 <meta property="og:description"        content="{{$DescriptionEtiqueta}}" />
 <meta property="og:image"              content="{{$ImagenParaTaG }}" />
 <meta property="og:image:secure_url"   content="{{$ImagenParaTaG }}" /> 
 <meta property="og:image:width"        content="250">
 <meta property="og:image:height"       content="250">


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
<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
          
          <div class="">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="{{url()}}" class="nav-link"> <span class="icon-home"></span></a></li>
                
                
              </ul>
            </nav>
          </div>

        

          <div class="text-left">

            <nav class="site-navigation position-relative" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">               
                <li><a href="#sobre-mi" class="nav-link">¿Qué hacemos?</a></li>
                <li><a href="#donde" class="nav-link">¿Dónde estamos?</a></li>
                <li><a href="#servicios" class="nav-link">Servicios</a></li>
                <li><a href="#contact-section" class="nav-link">Contacto</a></li>
                @if(!Auth::guest())
                  <li><a href="{{route('get_datos_corporativos')}}" class="nav-link">Administrar</a></li>
                  <li><a href="{{route('logout')}}" class="nav-link">Salir</a></li>
                @endif
              </ul>
            </nav>


            <div class="d-inline-block d-lg-none" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

@stop


@section('contenido')
   

     <div class="site-blocks-cover overlay bg-light" id="home-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 mt-lg-5 text-left align-self-center text-intro">
            <div class="row">
              <div class="col-lg-8 contiene-protada-text">
                <h1 v-if="se_muestra(empresa.home_titulo)" class="text-white">Bike tours programados</h1>
                <p class="lead">Tours por la Rambla de Montevideo y Punta del Este con guías bilingües y trilingües, tocando puntos históricos y bellos paisajes</p>
                
                <div class="flex-row-center">
                 <img src="{{$ImagenParaTaG}}" class="img-atencion-precios">
                 <a href="#contact-section" class="btn smoothscroll btn-primary"> Contáctanos </a>
                 <img class="icono-uruguay-home" src="{{url()}}/imagenes/BikeUruguay/Bike-Uruguay-Tours-bandera-uruguay.png" alt="Abogado en Uruguay experto en desalojo. Mi nombre es Fabian Delpino y me especializo en desalojos.">

                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      
       <img class="post-img-slider-size Slider_cabecer_img" style="position: absolute;top: 0;" src="{{$ImagenPortada}}" alt="Software simple de usar para gestionar tu gimnasio, centro de fitness, box de crossfit o entrenamiento funcional"> 
       

    </div>  






  <div  class="site-section " id="sobre-mi">
      <div class="container">
        <div class="row ">
          <div class="col-lg-6 order-2 order-lg-1">
          <h2 class="section-title mb-4">¿Qué hacemos?  </h2>
          
          <p>
             Conjugamos deporte, placer y turismo, formando una ecuación perfecta, destinada al área de servicios turísticos.
          </p> 

          <p> 
             <strong>Programamos tours</strong>  por la Rambla de Montevideo y Punta del Este con <strong>guías bilingües y trilingües</strong> , tocando puntos históricos y bellos paisajes, en los que se puedan tomar los mejores registros fotográficos de estos lugares.
          </p> 

          <p>
            También tenemos <strong>programas especiales para congresos y ejecutivos que vienen del exterior</strong>  que quieran realizar una dinámica grupal y diferente para conocer Montevideo y Punta del Este
          </p>

         

         




          </div>
          <div class="col-lg-6 order-3 pl-lg-5 order-lg-2">
            <img class="img-fluid mb-4 helper-border-radius-16" src="{{url()}}/imagenes/Empresa/home_imagen_queien_soy.jpg" alt="Soy abogado especializado en desalojo en Uruguay. Me llamo Fabian Delpino y te podré ayudar con tu caso sea cual sea. Experto en desalojo. Inquilinos (alquileres), ocupantes, y mucho más">
          </div>
        </div>
      </div>
    </div>


     <section  class="site-section bg-light" id="servicios">
      <div class="container">
        <div class="row">
          
          <div class="col-12 mb-5 position-relative">
            <h2 class="section-title text-center mb-5">Servicios</h2>
          </div>

            {{-- Bike torus prgrogramados --}}
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
            <div class="blog_entry">              
              <img src="{{url()}}/imagenes/BikeUruguay/Servicios/tour.jpg" alt="Image" class="img-de-blog-miniatura">
              <div class="p-4 bg-white">
                <h3>Bike tours programados</h3>                
                <p>
                  Diseñado para turistas. En Montevideo y Punta del Este.
                </p>               
              </div>
            </div>
          </div>
          {{-- Renta de bici --}}
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
            <div class="blog_entry">              
              <img src="{{url()}}/imagenes/BikeUruguay/Servicios/renta.jpg" alt="Image" class="img-de-blog-miniatura">
              <div class="p-4 bg-white">
                <h3>Rentas de bicicletas</h3>                
                <p>
                  Paquetes para cruceros que lleguen al puerto de Montevideo o Punta del Este.
                </p>               
              </div>
            </div>
          </div>
          {{-- Escuela de surf --}}
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
            <div class="blog_entry">              
              <img src="{{url()}}/imagenes/BikeUruguay/Servicios/surf.jpg" alt="Image" class="img-de-blog-miniatura">
              <div class="p-4 bg-white">
                <h3>Escuela de surf</h3>                
                <p>
                  Cursos diseñados para turistas. En Punta del Este.
                </p>               
              </div>
            </div>
          </div>

        </div>
<br>
           <div class="row">
          {{-- Paracaidismi --}}
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
            <div class="blog_entry">              
              <img src="{{url()}}/imagenes/BikeUruguay/Servicios/paracaidismo.jpg" alt="Image" class="img-de-blog-miniatura">
              <div class="p-4 bg-white">
                <h3>Paracaidismo</h3>                
                <p>
                  En Punta del Este y Canelones
                </p>               
              </div>
            </div>
          </div>
          {{-- Sunboard --}}
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
            <div class="blog_entry">              
              <img src="{{url()}}/imagenes/BikeUruguay/Servicios/sunboard.jpg" alt="Image" class="img-de-blog-miniatura">
              <div class="p-4 bg-white">
                <h3>Sunboard</h3>                
                <p>
                  En Punta del Este y Rocha
                </p>               
              </div>
            </div>
          </div>
          {{-- Sunboard --}}
          <div class="col-md-6 mb-5 mb-lg-0 col-lg-4">
            <div class="blog_entry">              
              <img src="{{url()}}/imagenes/BikeUruguay/Servicios/running.jpg" alt="Image" class="img-de-blog-miniatura">
              <div class="p-4 bg-white">
                <h3>Running</h3>                
                <p>
                  En Punta del Este y Montevideo.
                </p>               
              </div>
            </div>
          </div>

          

           

        </div>
      </div>
    </section>

   






    @include('paginas.home.Fotos')

    <div  class="site-section bg-light" id="donde">
      <div class="container">
        <div class="row ">
          <div class="col-lg-6 order-2 order-lg-1">
          <h2 class="section-title mb-4">¿Dónde estamos?  </h2>
          
          <p>
             
             Paquetes especialmente diseñados para turistas. Tours por la Rambla de  <strong>Montevideo</strong>
 y <strong>Punta del Este</strong>  con guías bilingües y trilingües, tocando puntos históricos y bellos paisajes, en los que se puedan tomar los mejores registros fotográficos de estos lugares.
          </p> 

                <div class="flex-row-center">
                 
                 <a href="#contact-section" class="btn smoothscroll btn-primary"> Contáctanos </a>
                

                </div>
                <br>

          

         

         




          </div>
          <div class="col-lg-6 order-3 pl-lg-5 order-lg-2">
            <img class="img-fluid mb-4 helper-border-radius-16" src="{{url()}}/imagenes/BikeUruguay/bike-uruguay-portada-donde-estamos.jpg" alt="Soy abogado especializado en desalojo en Uruguay. Me llamo Fabian Delpino y te podré ayudar con tu caso sea cual sea. Experto en desalojo. Inquilinos (alquileres), ocupantes, y mucho más">
          </div>
        </div>
      </div>
    </div>

     




   
     {{-- Imagen con logo para mostrar por el medio --}}
      <div class="contiene-todo-image-centrada">
        <img src="{{url()}}/imagenes/BikeUruguay/bike-uruguay-portada-puerto-de-punta-del-este-y-montevideo.jpg" alt="Biking Uruguay | Pg-Xperience tours programados enfocados en el turista" class="imagen-medio-de-web">
        <div class="sub-contiene-texto-imagen-medio">
          <div class="contiene-texto-imagen-medio-texto mb-4"> Paquetes especialmente diseñados para turistas </div>
          <div class="flex-row-center">
                 <img src="{{$ImagenParaTaG}}" class="img-atencion-precios">
                 <a href="#contact-section" class="btn smoothscroll btn-primary"> Contáctanos</a>
                 <img class="icono-uruguay-home" src="{{url()}}/imagenes/BikeUruguay/Bike-Uruguay-Tours-bandera-uruguay.png" alt="BikingUruguay bandera de Uruguay. Hacemos Bici- Tours guiados en Montevideo y Punta Del Este">
                 <img class="logo-float-easy-socio-portada" src="{{url()}}/imagenes/BikeUruguay/logo-bike-uruguay-color-blanco-pgxperience.png" alt="Biking Uruguay logo. Pg-Xperience logo. Toutrs en bici logo.">
                </div>
          
        </div>
      </div>







    

    

   


   

    

   

@stop