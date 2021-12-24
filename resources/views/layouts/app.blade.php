<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('rscextras/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('rscextras/assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('rscextras/assets/css/owl.css')}}">
    
</head>
<body>
    <div id="app">
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

                <a class="navbar-brand" href="{{ url('/') }}"><h2> <img src="{{url('rscextras/assets/images/logo_tis.png')}}" alt=""><em>TIS</em></h2></a>

                <a class="navbar-brand" href="{{ url('/home') }}"><h2> <img src="{{url('rscextras/assets/images/logo_tis.png')}}" alt=""><em>TIS</em></h2></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                         
                        @guest
                            @if (Route::has('login'))
                                <li class="{{ Request::path() == 'login' ? 'nav-item active' : 'nav-item' }}">    
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="{{ Request::path() == 'register' ? 'nav-item active' : 'nav-item' }}">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                        <li class="{{ Request::path() == 'home' ? 'nav-item active' : 'nav-item' }}">
                            <a class="nav-link " href="{{ url('/home') }}" >Inicio</a>
                        </li>
                        <li class="{{ Request::path() == 'convocatorias' ? 'nav-item active' : 'nav-item' }}">
                            <a class="nav-link " href="{{ route('convocatorias') }}">Convocatorias</a>
                        </li>
                        <li class="{{ Request::path() == 'empresas' ? 'nav-item active' : 'nav-item' }}">
                            <a class="nav-link" href="{{ route('empresas.index') }}"> Listar Empresas</a>
                        </li>
                        <li class="{{ Request::path() == 'empresas/create' ? 'nav-item active' : 'nav-item' }}">
                            <a class="nav-link" href="{{ route('empresas.create') }}">Agregar Empresa</a>
                        </li>            

                                    @if (Request::path() == 'home' || Request::path() == 'users' || Request::path() == 'grupos')
                                        <li class="nav-item active">    
                                    
                                    @else
                                        <li class="nav-item">
                                    @endif
                                        <a class="nav-link " href="{{ url('/home') }}" >Inicio</a>
                                    </li>    
                                @if(Auth::user()->tipo == '1')
                                    @if (Request::path() == 'convocatorias' || Request::path() == 'convocatorias/create')
                                        <li class="nav-item dropdown active">    
                                    
                                    @else
                                        <li class="nav-item dropdown">
                                    @endif
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        Convocatorias
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('convocatorias.index') }}">
                                            {{ __('Ver convocatorias') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('convocatorias.create') }}">
                                            {{ __('Crear convocatorias') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('register') }}">
                                            {{ __('Agregar consultor') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                <li class="{{ Request::path() == 'empresas' ? 'nav-item active' : 'nav-item' }}">
                                    <a class="nav-link" href="{{ route('empresas.index') }}"> Listar Empresas</a>
                                </li>
                                @endif
                                @if (Auth::user()->tipo == '2')
                                <li class="{{ Request::path() == 'convocatorias' ? 'nav-item active' : 'nav-item' }}">
                                    <a class="nav-link " href="{{ route('convocatorias.index') }}">Convocatorias</a>
                                </li>
                                    @if (Request::path() == 'empresas' || Request::path() == 'empresas/create')
                                        <li class="nav-item dropdown active">    
                                    
                                    @else
                                        <li class="nav-item dropdown">
                                    @endif
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        Empresas
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('empresas.index') }}">
                                            {{ __('Ver empresas') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('empresas.create') }}">
                                            {{ __('Crear empresas') }}
                                        </a>
                                        
                                    </div>
                                </li>
                                @endif
                                @if (Auth::user()->tipo == '3')
                                <li class="{{ Request::path() == 'convocatorias' ? 'nav-item active' : 'nav-item' }}">
                                    <a class="nav-link " href="{{ route('convocatorias.index') }}">Convocatorias</a>
                                </li>
                                @if (Request::path() == 'empresas' || Request::path() == 'empresas/{{Auth::user()->id_grupo}}')
                                        <li class="nav-item dropdown active">    
                                    
                                    @else
                                        <li class="nav-item dropdown">
                                    @endif
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        Empresas
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('empresas.index') }}">
                                            {{ __('Ver empresas') }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('empresas.show',Auth::user()->id_grupo) }}">
                                            {{ __('Mi grupo empresa') }}
                                        </a>
                                        
                                    </div>
                                </li>
                                @endif

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
                        @endguest
                  </ul>
                  
                </div>
              
            </nav>
        </header>
        <!-- Page Content -->
        <!-- Banner Starts Here -->
        <div class="banner header-text">
            <div class="owl-banner owl-carousel">
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
        <div class="services">
            <div class="container">
                @yield('content')
            </div> 
        </div>
            <footer>
                <div class="container" >
                    <div class="row">
                        <div class="col-md-12">
                            <div class="inner-content" >
                                <p>Copyright &copy; 2021 AgileSoft S.R.L.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer> 
    </div>
</body>
</html>
