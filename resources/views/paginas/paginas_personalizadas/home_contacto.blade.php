<div  class="py-5 px-2 p-lg-5 background_img img_contacto-home  d-flex flex-row align-items-center justify-content-center" id="contacto_home">
  <div class="container">
    <div class="row align-items-center justify-content-center {{-- justify-content-lg-start --}}">
      <div class="col-lg-6">
        <div class="container">
          <div class="row justify-content-center">
            <h3 class="col-12 titulos-class text-color-primary mb-4 text-center">Contáctate ahora</h3>
            <p class="col-12 text-color-primary parrafo-class mb-3 text-center">Para contactarte rellenar el formulario de aquí abajo o llamá al <i class="fas fa-mobile-alt"></i> @{{empresa.celular}}.  </p>

            <div class="col-6 col-lg-5 p-1 p-lg-5 mb-2">
             <img src="{{url()}}/imagenes/team/paolo-biking-uruguay-perfil-atencion.jpg" class="img-fluid p5  rounded-circle ">
             
            </div>

            <p class="col-8 text-color-primary parrafo-class mb-4 text-center">Paolo es un gurú de la atención comercial y está listo para atenderte. </p>
            
          </div>
        </div>
        <contacto-component :empresa="empresa" :color="variables.input_color_primary" inline-template>
          @include('paginas.home.vue.Contacto.Contacto_comun')
        </contacto-component>
      </div>
    </div>
  </div>
</div>