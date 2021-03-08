<!doctype html>
<html class="no-js" lang="zxx">

<!-- single-product-normal31:50-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Luga Distribuidora | Producto</title> {{-- mostrar categoria --}}
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="css/meanmenu.css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Modernizr js -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
            <header>

                <!-- Begin Header Middle Area -->
                @include('layoutsWeb.header-middle')
                <!-- Header Middle Area End Here -->

                <!-- Begin Header Bottom Area -->
                    @include('layoutsWeb.header-bottom')
                <!-- Header Bottom Area End Here -->

            </header>
            <a href="https://api.whatsapp.com/send?phone=542233010313&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Luga-distribuidora%20." class="float" target="_blank">
                <i class="fa fa-whatsapp my-float"></i>
            </a>
            <!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href={{ route('web.index') }}>Home</a></li>
                            <li class="active">Cámara Deportiva Sports Cam Full HD 1080po</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- content-wraper start -->
            <div class="content-wraper">
                <div class="container">
                    <div class="row single-product-area">
                        <div class="col-lg-5 col-md-6">
                           <!-- Product Details Left -->
                            <div class="product-details-left">
                                <div class="product-details-images slider-navigation-1">
                                    <div class="lg-image">
                                        <img src="images/web/camara1.jpg" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="images/web/camara2.jpg" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="images/web/camara3.jpg" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="images/web/camara4.jpg" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="images/web/camara5.jpg" alt="product image">
                                    </div>
                                    <div class="lg-image">
                                        <img src="images/web/camara6.jpg" alt="product image">
                                    </div>
                                </div>
                                <div class="product-details-thumbs slider-thumbs-1">
                                    <div class="sm-image"><img src="images/web/camara1.jpg" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="images/web/camara2.jpg" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="images/web/camara3.jpg" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="images/web/camara4.jpg" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="images/web/camara5.jpg" alt="product image thumb"></div>
                                    <div class="sm-image"><img src="images/web/camara6.jpg" alt="product image thumb"></div>
                                </div>
                            </div>
                            <!--// Product Details Left -->
                        </div>

                        <div class="col-lg-7 col-md-6">
                            <div class="product-details-view-content sp-normal-content pt-60">
                                <div class="product-info">
                                    <h2>Cámara Deportiva Sports Cam Full HD 1080p</h2>
                                    <span class="product-details-ref">Categoria: <a href="">Camaras</a></span>
                                    <div class="price-box pt-20">
                                        <span class="new-priceLuga">$2.852,50</span>
                                    </div>
                                    <div class="product-desc">
                                        <p>
                                            <span>La calidad de imagen de la Sport Cam es excepcional: su comportamiento en ruido, rango
                                                dinámico… Básicamente lleva el mismo sensor o muy similar al de cámaras de gamas más altas
                                                de Sport. En ese aspecto es una de las mejores opciones como primera cámara deportiva.
                                            </span>
                                        </p>
                                    </div>
                                    <div class="single-add-to-cart">
                                        <form action="{{ route('cart.add') }}" method="post" class="cart-quantity">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ 2 }}">
                                            <div class="quantity">
                                                <label>Cantidad</label>
                                                <div class="div-quantity" style="width: 100px" >
                                                    <input type="number" name="quantity" value="1">
                                                </div>
                                            </div>
                                            <button class="add-to-cart" type="submit">Añadir al Carro</button>
                                        </form>
                                    </div>

                                    <div class="product-additional-info pt-25">
                                        <a class="wishlist-btn" href="wishlist.html"><i class="fa fa-heart-o"></i>Agregar a Deseados</a>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wraper end -->
            <!-- Begin Product Area -->
            <div class="product-area pt-40">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="li-product-tab">
                                <ul class="nav li-product-menu">
                                   <li><a class="active" data-toggle="tab" href="#description"><span>Detalles</span></a></li>
                                   <li><a data-toggle="tab" href="#product-details"><span>Caracteristicas</span></a></li>
                                </ul>
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="description" class="tab-pane active show" role="tabpanel">
                            <div class="product-description">
                                <span>Marca -- Sport Cam <br> Modelo -- 1080p</span>
                            </div>
                        </div>
                        <div id="product-details" class="tab-pane" role="tabpanel">
                            <div class="product-description">
                                <span>Graba video a color con audio en Full <br>
                                    Toma Fotografias a 5mp.<br>
                                    Modo grabacion ciclica.<br>
                                    Anti Shake.<br>
                                    Balance de blancos.<br>
                                    Resolución de vídeo: 1920x1080p 30fps / 1280x720p 30fpx / 640×480 60fps.<br>
                                    Resolución de Fotografía: 5M / 2M.<br>
                                    Pantalla 2 pulgadas.<br>
                                    Angulo del Lente 120°.<br>
                                    Sumergible 30 Mts con la carcasa estanca.<br>
                                    MicroSD: Soporta Maximo 64GB. (no incluye memoria)<br>
                                    Batería Intercambiable.<br>
                                    Autonomia 30/60 minutos aprox.<br>
                                    Tiempo de carga: 3/4hs.<br>
                                    Conexión USB<br>
                                    Accesorios para deportes.<br>
                                    Multilenguaje.<br>
                                    Dimensiones: 5.9 x 4.1 x 2.4cm.<br>
                                    Peso: 65 gramos.<br>
                                    Color: negro ,azul, verde, rosa , plata<br>

                                    La caja incluye: Camara Deportiva - Carcasa - Bateria - Cable usb - Accesorios Deportivos - Packaging Original.</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('layoutsWeb.product-list')

            @include('layoutsWeb.footer')

            <!-- Begin Quick View | Modal Area -->

            <!-- Quick View | Modal Area End Here -->
        </div>
        <!-- Body Wrapper End Here -->
        <!-- jQuery-V1.12.4 -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/vendor/popper.min.js"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Ajax Mail js -->
        <script src="js/ajax-mail.js"></script>
        <!-- Meanmenu js -->
        <script src="js/jquery.meanmenu.min.js"></script>
        <!-- Wow.min js -->
        <script src="js/wow.min.js"></script>
        <!-- Slick Carousel js -->
        <script src="js/slick.min.js"></script>
        <!-- Owl Carousel-2 js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Magnific popup js -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- Imagesloaded js -->
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <!-- Mixitup js -->
        <script src="js/jquery.mixitup.min.js"></script>
        <!-- Countdown -->
        <script src="js/jquery.countdown.min.js"></script>
        <!-- Counterup -->
        <script src="js/jquery.counterup.min.js"></script>
        <!-- Waypoints -->
        <script src="js/waypoints.min.js"></script>
        <!-- Barrating -->
        <script src="js/jquery.barrating.min.js"></script>
        <!-- Jquery-ui -->
        <script src="js/jquery-ui.min.js"></script>
        <!-- Venobox -->
        <script src="js/venobox.min.js"></script>
        <!-- Nice Select js -->
        <script src="js/jquery.nice-select.min.js"></script>
        <!-- ScrollUp js -->
        <script src="js/scrollUp.min.js"></script>
        <!-- Main/Activator js -->
        <script src="js/main.js"></script>
    </body>

<!-- single-product-normal31:50-->
</html>
