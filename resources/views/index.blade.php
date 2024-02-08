
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8"> <!--reconocer caracteres especiales de espanol-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Campolazado Web</title>
        <meta name="description" content="Enlazando el campo, red de empresas agropecuarias">
        <meta name="keywords" content="cultivos, empresas agricolas">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Nanum+Myeongjo&display=swap" rel="stylesheet">

        <!--For Plugins external css-->
        <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/roboto-webfont.css') }}" />
        
        

        <!--Theme custom css -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
        <script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script> 
        <title>div color</title>  <!-- color del div de fondo naranja palido /-->
        <script src="https://kit.fontawesome.com/0152ecbb65.js" crossorigin="anonymous"></script>
        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <!-- Sections -->
        <section id="social" class="social">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="social-wrapper">
                        <div class="col-md-6">
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
            </div> <!-- /container -->       
        </section>
<!--barra de navegacion--> 
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">apartado de navegacion</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="assets/images/logo.png" alt="Logo" /></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#home">INICIO</a></li>
                        <li><a href="#features">ENLAZADOS</a></li>
                        <li><a href="#service">SERVICIOS</a></li>
                        <li><a href="#contact">CONTACTENOS</a></li>
                        <li class="login" class="">
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <!-- Button trigger modal -->
                                        <a class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" data-toggle="modal" data-target="#exampleModal" style="cursor: pointer">
                                            ingresar
                                        </a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="font-size: 16px">
                                       Bienvenido {{ Auth::user()->name }} {{ Auth::user()->apellido }}
                                    </a> 
                                   <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                </li>
                            @endguest
                            
                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-lg fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      {{-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> --}}
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="row mb-3" style="padding-bottom: 5px">
                                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-0">
                                                <div class="col-md-8 offset-md-4">
                                                    <ul>
                                                        <li>
                                                            @if (Route::has('password.request'))
                                                                <a class="btn btn-secundary" href="{{ route('password.request') }}" style="width: auto">
                                                                    {{ __('Forgot Your Password?') }}
                                                                </a>
                                                            @endif
                                                        </li>
                                                        <li>
                                                            <button type="submit" class="btn btn-primary" style="cursor: pointer">
                                                                {{ __('Sign in') }}
                                                            </button>
                                                        </li>
                                                        <li>
                                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
<!--seccion pagina de inicio-->
        <!--Home page style-->
        <header id="home" class="home">
            <div class="overlay-fluid-block">
                <div class="container text-center">
                    <div class="row">
                        <div class="home-wrapper">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="home-content">

                                    <h1>Enlazando al campo</h1>
                                    <h4>Nuestra gente progresa bajo el brillante sol de la llanura y nuestro fruto colorea los bellos campos de 
                                    Casanare para llevarlos frescos a su hogar.</h4>

                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                                            <div class="home-contact">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Que producto esta buscando?">
                                                    <input type="submit" class="form-control" value="Buscar">

                                                </div><!-- /input-group -->


                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>			
            </div>
        </header>

<!--seccion como funciona-->
        <!-- Sections -->
        <div style="background-color:#eeedb4;">  <!-- color del div de fondo naranja palido /-->
        <section id="features" class="features sections">   
            <div class="container">
                <div class="row">
                    <div class="main_features_content2">

                        <div class="col-sm-6">
                            <div class="single_features_left text-center">
                                <img src="assets/images/feature-2.jpg" alt="" />
                            </div>
                        </div>

                        <div class="col-sm-6 margin-top-100">
                            <div class="single_features_right ">
                                <h2>Quiénes somos?</h2>
                                <h5>El Sitio Web promotor de publicidad web para pequeñas empresas agrícolas en Casanare, nuestro propósito es lograr el 
                                reconocimiento de nuestros proveedores casanareños, productores de materia prima cultivada en sus campos. Aquellos que con
                                esfuerzo y motivación marcan su vida al ritmo de una siembra. </h5>
                                <ul>
                                    <li>Los mismos que cuidan y comprenden a la tierra para cultivar 
                                el mejor fruto posible.</li>
                                    <li>Y que con su sudor, carácter y paciencia nutren el fruto que alimentan nuestras familias colombianas.</li>
                                </ul>
                                <div class="features_buttom">
                                    <a href="" class="btn btn-default">Saber más...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--End of Features 2 Section -->
        <section id="features" class="features sections">
            <div class="container">
                <div class="row">
                    <div class="main_features_content2">

                       

                        <div class="col-sm-6 margin-top-60">
                            <div class="single_features_right ">
                                <h2>Cómo funciona?</h2>
                                <h4> Inscriba su empresa </h4>
                                <h4> Describa su actividad </h4>
                                <h4> Publique sus productos </h4>
                                <h4> Comparta su página Web y disfrute de las visitas. </h4>
<!-- ver este codigo para lograr enlazar con otra parte de la pagina-->
                                <div class="features_buttom">
                                    <a href="" class="btn btn-default">Inscripción</a>
                                </div>
                            </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="single_features_left text-center">
                                <img src="assets/images/feature-1.jpg" alt="" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section><!--End of Features 2 Section -->

<!-- Seccion Servicios-->
       <section id="service" name="service" class="service2 sections lightbg">
            <div class="container">
                <div class="row">
                    <div class="main_service2">
                        <div class="head_title text-center">
                            <h2>Nuestros Servicios</h2>
                            
                        </div>

                        <div class="service_content">
                            <div class="col-md-6 col-sm-6">
                                <div class="single_service2">
                                    <div class="single_service_left">
                                        <img src="assets/images/flaticon1.png" alt="" />
                                    </div>
                                    <div class="single_service_right">
                                        <h2>Tienda Online</h2>
                                        <p>Aprovecha nuestra plataforma para dar a conocer y comercializar tus productos. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="single_service2">
                                    <div class="single_service_left">
                                       <i class="fa-solid fa-store"></i> <!--mod con ccs-->
                                    </div>
                                    <div class="single_service_right">
                                        <h2>Forme su e-Rancho</h2>
                                        <p>Cree su espacio web Plan Básico gratis, con vigencia de 3 meses. </p>
                                    </div>
                                </div>
                            </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <div class="single_service2">
                                    <div class="single_service_left">
                                        <img src="assets/images/flaticon4.png" alt="" />
                                    </div>
                                    <div class="single_service_right">
                                        <h2>Lo acompañamos</h2>
                                        <p>Asesoria y acompañamiento en la creación de su e-Rancho, mantenimiento y atención personalizada.</p>
                                    </div>
                                </div>
                            </div>
                                 <div class="col-md-6 col-sm-6">
                                <div class="single_service2">
                                    <div class="single_service_left">
                                     <i class="fa-solid fa-shop"></i> <!--mod con CSS-->
                                    </div>
                                    <div class="single_service_right">
                                        <h2>Mejore su e-Rancho</h2>
                                        <p>Agregue capacidad de almacenamiento en fotos y productos a ofrecer, acceda a nuestra plataforma de Mercado Online.</p>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End of Service2 Section -->		


<!--seccion planes-->
        <!-- Sections -->
        <section id="price" class="price sections">


            <div class="head_title text-center">
                <h1>Suscripción</h1>
				<p>Quiere mejorar su espacio Web? Aquí le tenemos mayores alternativas para que siga disfrutando de nuestros servicios.</p>
            </div>
            <!-- Example row of columns -->
            <div class="cd-pricing-container cd-has-margins">
                <div class="cd-pricing-switcher">
                    <p class="fieldset">
                        <input type="radio" name="duration-2" value="monthly" id="monthly-2" checked>
                        <label for="monthly-2">Comunidad</label>
                        <input type="radio" name="duration-2" value="yearly" id="yearly-2">
                        <label for="yearly-2">Que incluye</label>
                        <span class="cd-switch"></span>
                    </p>
<!-- Inicia el plan comunidad-->
                </div> <!-- .cd-pricing-switcher -->

                <ul class="cd-pricing-list cd-bounce-invert">
                    <li>
                        <ul class="cd-pricing-wrapper">
                            <li data-type="monthly" class="is-visible">
                                <header class="cd-pricing-header">
                                    <h2>3 Meses</h2>

                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">0</span>
                                        <span class="cd-duration">cop</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><em><i class="fa fa-check-circle"></i></em>Sin costo primeros 6 meses</li>
                                        <li><em><i class="fa fa-remove"></i></em>Acceso a Tienda Online</li>
                                        <li><em><i class="fa fa-remove"></i></em>Publicaciones ilimitadas</li>
                                        <li><em><i class="fa fa-remove"></i></em>Asesoria personalizada</li>

                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <a class="cd-select" href="#">Adquirir</a>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>

                            <li data-type="yearly" class="is-hidden">
                                <header class="cd-pricing-header">
                                    <h2>3 Meses</h2>

                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">0</span>
                                        <span class="cd-duration">cop</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><em><i class="fa fa-check-circle"></i></em>Publicacion de perfil</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>Catalogo de productos</li><li><em><i class="fa fa-check-circle"></i></em>Diseño Standar de pagina</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>Soporte a fallos</li>

                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <a class="cd-select" href="#">Adquirir</a>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>
                        </ul> <!-- .cd-pricing-wrapper -->
                    </li>

                    <li class="cd-popular">
                        <ul class="cd-pricing-wrapper">
                            <li data-type="monthly" class="is-visible">
                                <header class="cd-pricing-header">
                                    <h2>6 Meses</h2>
                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">60</span>
                                        <span class="cd-duration">cop</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                         <li><em><i class="fa fa-check-circle"></i></em>Acceso a Tienda Online</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>Unico pago por 6 meses</li>
                                        <li><em><i class="fa fa-remove"></i></em>Asesoria personalizada</li>
                                            <li><em><i class="fa fa-remove"></i></em>Publicaciones ilimitadas</li>

                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <a class="cd-select" href="#">Adquirir</a>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>

                            <li data-type="yearly" class="is-hidden">
                                <header class="cd-pricing-header">
                                    <h2>6 Meses</h2>

                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">60</span>
                                        <span class="cd-duration">cop</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><em><i class="fa fa-check-circle"></i></em>Publicacion de perfil</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>Amplitud de publicaciones</li><li><em><i class="fa fa-check-circle"></i></em>Diseño Plus de pagina</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>Soporte a fallos</li>

                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <a class="cd-select" href="#">Adquirir</a>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>
                        </ul> <!-- .cd-pricing-wrapper -->
                    </li>

                    <li>
                        <ul class="cd-pricing-wrapper">
                            <li data-type="monthly" class="is-visible">
                                <header class="cd-pricing-header">
                                    <h2>1 Año</h2>

                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">90</span>
                                        <span class="cd-duration">cop</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><em><i class="fa fa-check-circle"></i></em>Acceso a Tienda Online</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>Unico pago anual</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>Asesoria personalizada</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>Publicaciones ilimitadas</li>

                                    </ul>
                                </div> <!-- .cd-pricing-body -->

                                <footer class="cd-pricing-footer">
                                    <a class="cd-select" href="#">Adquirir</a>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>

                            <li data-type="yearly" class="is-hidden">
                                <header class="cd-pricing-header">
                                    <h2>1 Año</h2>

                                    <div class="cd-price">
                                        <span class="cd-currency">$</span>
                                        <span class="cd-value">90</span>
                                        <span class="cd-duration">cop</span>
                                    </div>
                                </header> <!-- .cd-pricing-header -->

                                <div class="cd-pricing-body">
                                    <ul class="cd-pricing-features">
                                        <li><em><i class="fa fa-check-circle"></i></em>Asesoria en creacion de perfil</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>Mayor capacidad de <br>almacenamiento para publicaciones</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>Diseño Premium de pagina</li>
                                        <li><em><i class="fa fa-check-circle"></i></em>Soporte a fallos</li>

                                    </ul>
                                </div> <!-- .cd-pricing-body -->
<!-- Terminan los planes avanzados-->
                                <footer class="cd-pricing-footer">
                                    <a class="cd-select" href="#">Adquirir</a>
                                </footer>  <!-- .cd-pricing-footer -->
                            </li>
                        </ul> <!-- .cd-pricing-wrapper -->
                    </li>
                </ul> <!-- .cd-pricing-list -->
            </div> <!-- .cd-pricing-container -->	

        </section>
<!--seccion opiniones-->
        <!-- Section Opiniones -->
        <section id="business" class="portfolio sections">
            <div class="container">
                <div class="head_title text-center">
                    <h1>Qué piensan nuestros clientes?</h1>
					<p>Entérese como ha sido la experiencia en nuestro sitio Web para nuestras empresas inscritas y consumidores.</p>
                </div>

                <div class="row">
                    <div class="portfolio-wrapper text-center">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="community-edition">
                                 <div class="single_service_left">
                                    <img src="assets/images/Foto1.png" alt="" />
                                </div>
                                <div class="separator"></div>
                                <h4>E. Golden Tiger SAS</h4>
                                <p>Me ha gustado la oportunidad que nos brinda Campolazado para comercializar y dar cnocer nuestros productos, he contactado con varios comercios locales y promocionado mis productos.</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="community-edition">
                                <div class="single_service_left">
                                    <img src="assets/images/Foto4.png" alt="" />
                                </div>
                                <div class="separator"></div>
                                <h4>Comprador</h4>
                                <p>Me ha gustado la oportunidad que nos brinda Campolazado para comercializar y dar cnocer nuestros productos, he contactado con varios comercios locales y promocionado mis productos.</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="community-edition">
                                <div class="single_service_left">
                                    <img src="assets/images/Foto2.png" alt="" />
                                </div>
                                <div class="separator"></div>
                                <h4>Cultivos Nestor</h4>
                                <p>Me ha gustado la oportunidad que nos brinda Campolazado para comercializar y dar cnocer nuestros productos, he contactado con varios comercios locales y promocionado mis productos.</p>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="community-edition">
                                <div class="single_service_left">
                                    <img src="assets/images/Foto3.png" alt="" />
                                </div>
                                <div class="separator"></div>
                                <h4>El Bagre Rayao</h4>
                                <p>Me ha gustado la oportunidad que nos brinda Campolazado para comercializar y dar cnocer nuestros productos, he contactado con varios comercios locales y promocionado mis productos.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div> <!-- /container -->       
        </section>

<!--seccion contactenos-->
        <section id="contact" class="contact sections">
            <div class="container">
                <div class="row">
                    <div class="main_contact whitebackground">
                        <div class="head_title text-center">
                            <h2>Contactenos</h2>
							<p>Estamos para colaborarles con sus preguntas, reclamaciones o felicitaciones.</p>
                        </div>
                        <div class="contact_content">
                            <div class="col-md-6">
                                <div class="single_left_contact">
                                    <form action="#" id="formid">

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="first name" required="">
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                        </div>


                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="8" placeholder="Message"></textarea>
                                        </div>

                                        <div class="center-content">
                                            <input type="submit" value="Submit" class="btn btn-default">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single_right_contact">
                                    <p>La atención recibida sera unica y exclusivamente por via telefonica o correo electronica, agradecemos su comprension.</p>

                                    <div class="contact_address margin-top-40">
                                        <span>Bogotá 1110, Colombia 
                        ,</span>
                                        <span>Atención al cliente: ammorales@misena.edu.co   </span> 
                                        <span class="margin-top-20">Teléfono: +57 (1)652 7952</span> 
                                        <span>M: (202) 456-1212</span> 
                                    </div>

                                    <div class="contact_socail_bookmark">
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                        <a href=""><i class="fa fa-google"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End of Contact Section -->

        <div id="otro" name="otro">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum amet molestiae temporibus accusantium iure tempore ut et quam harum! Cumque iure asperiores eaque vitae facilis impedit optio corrupti repellendus sequi!
            </p>
        </div>
        <section id="footer-menu" class="sections footer-menu">
            <div class="container">
                <div class="row">
                    <div class="footer-menu-wrapper">

                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="menu-item">
                                    <h5>Quick Links</h5>
                                    <ul>
                                        <li>POWER BI DESKTOP</li>
                                        <li>MOBILE</li>
                                        <li>SEE ALL DOWNLOADS</li>
                                        <li>POWER BI DESKTOP</li>
                                        <li>MOBILE</li>
                                        <li>SEE ALL DOWNLOADS</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="menu-item">
                                    <h5>Legal</h5>
                                    <ul>
                                        <li>PRIVACY & COOKIES</li>
                                        <li>TERMS OF USE</li>
                                        <li>TRADEMARKS</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="menu-item">
                                    <h5>Information</h5>
                                    <ul>
                                        <li>SUPPORT</li>
                                        <li>DEVELOPERS</li>
                                        <li>BLOG</li>
                                        <li>NEWSLETTER</li>
                                        <li>PYRAMID ANALYTICS</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="menu-item">
                                <h5>Newsletter</h5>
                                <p>Insights await in your company's data. Bring them into focus with BlueLance.</p>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter your email address">
                                    <input type="submit" class="form-control" value="Use It Free">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
</div> <!-- color del div de fondo naranja palido /-->

        <!--Footer-->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-wrapper">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-brand">
                                <img src="assets/images/logo.png" alt="logo" />
                            </div>Enlazando al Campo
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>Made with <i class="fa fa-heart"></i> by <a target="_blank" href="http://bootstrapthemes.co"> Bootstrap Themes </a>2016. All rights reserved.</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
		
		
		<div class="scrollup">
			<a href="#"><i class="fa fa-chevron-up"></i></a>
		</div>


        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/modernizr.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
