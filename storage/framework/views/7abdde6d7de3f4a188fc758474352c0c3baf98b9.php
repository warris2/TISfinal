<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('rscextras/assets/css/fontawesome.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('rscextras/assets/css/styles.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('rscextras/assets/css/owl.css')); ?>">
    
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
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><h2> <img src="<?php echo e(url('rscextras/assets/images/logo_tis.png')); ?>" alt=""><em>TIS</em></h2></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                         
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="<?php echo e(Request::path() == 'login' ? 'nav-item active' : 'nav-item'); ?>">    
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="<?php echo e(Request::path() == 'register' ? 'nav-item active' : 'nav-item'); ?>">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                        <li class="<?php echo e(Request::path() == 'home' ? 'nav-item active' : 'nav-item'); ?>">
                            <a class="nav-link " href="<?php echo e(url('/home')); ?>" >Inicio</a>
                        </li>
                        <li class="<?php echo e(Request::path() == 'convocatorias' ? 'nav-item active' : 'nav-item'); ?>">
                            <a class="nav-link " href="<?php echo e(route('convocatorias')); ?>">Convocatorias</a>
                        </li>
                        <li class="<?php echo e(Request::path() == 'empresas' ? 'nav-item active' : 'nav-item'); ?>">
                            <a class="nav-link" href="<?php echo e(route('empresas.index')); ?>"> Listar Empresas</a>
                        </li>
                        <li class="<?php echo e(Request::path() == 'empresas/create' ? 'nav-item active' : 'nav-item'); ?>">
                            <a class="nav-link" href="<?php echo e(route('empresas.create')); ?>">Agregar Empresa</a>
                        </li>            
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                        </li>
                        <?php endif; ?>
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
        <script src="<?php echo e(asset('rscextras/vendor/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('rscextras/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?> "></script>


        <!-- Additional Scripts -->
        <script src="<?php echo e(asset('rscextras/assets/js/custom.js')); ?>"></script>
        <script src="<?php echo e(asset('rscextras/assets/js/owl.js')); ?>"></script>
        <script src="<?php echo e(asset('rscextras/assets/js/slick.js')); ?>"></script>
        <script src="<?php echo e(asset('rscextras/assets/js/isotope.js')); ?>"></script>
        <script src="<?php echo e(asset('rscextras/assets/js/accordions.js')); ?>"></script>


        <script src="<?php echo e(mix('js/app.js')); ?>" language = "text/Javascript"> 
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
                <?php echo $__env->yieldContent('content'); ?>
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
<?php /**PATH C:\xampp\htdocs\TIS-proyect-integracion\sistemaTIS\resources\views/layouts/app.blade.php ENDPATH**/ ?>