<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center justify-content-between get_width_100">
          
          <div class="">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto ">
                <li>
                  <a  href="{{url()}}" class="logo-nav">                    
                    <span class="text-color-primary" v-if="scrolled > 0">PG X-perience</span>
                    <span class="" v-else> PG X-perience </span>      

                
                

                  </a>
                </li>
                
                
              </ul>
            </nav>
          </div>

        

          <div class="row align-items-center text-left">

            <nav class="site-navigation position-relative" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">               
                <li><a href="#que_hacemos" class="nav-link text-uppercase">¿Qué hacemos?</a></li>                
                <li><a href="#servicios" class="nav-link text-uppercase">Servicios</a></li>
                <li><a href="#contacto_home" class="nav-link text-uppercase">Contacto</a></li>
                @if(!Auth::guest())
                  <li><a href="{{route('get_datos_corporativos')}}" class="text-uppercase">Administrar</a></li>
                  <li><a href="{{route('logout')}}" class="text-uppercase">Salir</a></li>
                @endif
              </ul>
            </nav>


            <div class="d-inline-block d-lg-none" style="position: relative; top: 3px;">
              <a href="#" class="site-menu-toggle js-menu-toggle float-right">
                <span class="icon-menu h3"></span>
              </a>
            </div>
            
            
            
              
            
              
            

          </div>

        </div>
      </div>
      
    </header>