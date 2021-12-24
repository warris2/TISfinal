<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    
        <title>Sistema de apoyo TIS</title>
    
            <!-- Bootstrap core CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
            <!-- Additional CSS Files -->
            <link rel="stylesheet" href="{{asset('rscextras/assets/css/fontawesome.css')}}">
            <link rel="stylesheet" href="{{asset('rscextras/assets/css/styles.css')}}">
            <link rel="stylesheet" href="{{asset('rscextras/assets/css/owl.css')}}">
            
      </head>
      <!-- ***** Preloader Start ***** -->
      <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

      <!-- Header -->
      <header class="">
        <nav class="navbar navbar-expand-lg">
          <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><h2> <img src="{{asset('rscextras/assets/images/logo_tis.png')}}" alt=""><em>TIS</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                
                @if (Route::has('login'))
                
                    @auth
                    
                        <li class="{{ Request::path() == 'home' ? 'nav-item active' : 'nav-item' }}">
                            <a class="nav-link" href="{{ url('/home') }}" >Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('convocatorias') }}">Convocatorias</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('empresas') }}">Empresas</a>
                        </li>     
                  
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @else
                        <li class="{{ Request::path() == '/login' ? 'nav-item active' : 'nav-item' }}">
                        <a class="nav-link" href="{{ route('login') }}" >{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="{{ Request::path() == '/register' ? 'nav-item active' : 'nav-item' }}">
                        <a class="nav-link" href="{{ route('register') }}" >{{ __('Register') }}</a>
                        </li>
                        @endif
                    @endauth
               
                @endif
                
              </ul>
              
            </div>
          </div>
        </nav>
      </header>
   

            <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
          <div class="banner-item-01">
            <div class="text-content">
              <h4>Bienvenido al</h4>
              <h2>Sistema de apoyo TIS</h2>
            </div>
          </div>
          
        </div>
      </div>
      <!-- Banner Ends Here -->
  
      
      <div class="services">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-gear"></i>
                </div>
                <div class="down-content">
                  <h4>Convocatorias</h4>
                  <p>Si quiere ver las ultimas convocatorias de TIS ingrese aqui.</p>
                  <a href="{{ route('convocatorias.index') }}" class="filled-button">Ver mas</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-gear"></i>
                </div>
                <div class="down-content">
                  <h4>Empresas</h4>
                  <p>Para ver las empresas registradas o registrar una nueva ingrese aqui.</p>
                  <a href="{{ route('empresas.index') }}" class="filled-button">Ver mas</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-gear"></i>
                </div>
                <div class="down-content">
                  <h4>Acerca de nosotros</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis null.</p>
                  <a href="{{ route('register') }}" class="filled-button">Ver mas</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        
          <!-- Bootstrap core JavaScript -->
        <script src="{{ asset('rscextras/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('rscextras/vendor/bootstrap/js/bootstrap.bundle.min.js')}} "></script>
    
    
        <!-- Additional Scripts -->
        <script src="{{ asset('rscextras/assets/js/custom.js') }}"></script>
        <script src="{{ asset('rscextras/assets/js/owl.js') }}"></script>
        <script src="{{ asset('rscextras/assets/js/slick.js') }}"></script>
        <script src="{{ asset('rscextras/assets/js/isotope.js') }}"></script>
        <script src="{{ asset('rscextras/assets/js/accordions.js') }}"></script>
    
    
        <script src="{{ mix('js/app.js') }}" language = "text/Javascript"> 
          cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
          function clearField(t){                   //declaring the array outside of the
          if(! cleared[t.id]){                      // function makes it static and global
              cleared[t.id] = 1;  // you could use true and false, but that's more typing
              t.value='';         // with more chance of typos
              t.style.color='#fff';
              }
          }
        </script>
        <footer>
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="inner-content">
                    <p>Copyright &copy; 2021 AgileSoft S.R.L.</p>
                  </div>
                </div>
              </div>
            </div>
          </footer>
    </body>
</html>
