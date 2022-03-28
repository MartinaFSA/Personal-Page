<!DOCTYPE php>
<html lang="es">
	<head>
    	<meta charset="UTF-8"/>
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    	<meta name="keywords" content="mercado libre, compra, venta, productos"/>
    	<meta name="description" content="La comunidad de compra y venta online más grande de América Latina."/>
    	<meta http-equiv="Content-Language" content="es"/>
    	<meta name="author" content="MartinaFSA/">
 
    	<link rel = "icon" href = "img/generales/favicon.png">
    	<title>Mercado Libre Argentina</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    	<link rel="stylesheet" href="estilos.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Nunito:wght@300&family=Poppins:wght@300;500&display=swap" rel="stylesheet">
   
        <script src="https://kit.fontawesome.com/9170870617.js" crossorigin="anonymous"></script>
        
	</head>
 
	<body>
    	<header>
            <nav class="textoNormal paddingPagina_displayFlex hiddenFrom1024pxAndOn">
                <!--Primera fila del navigation bar-->
                <ul class="ctn_fila ocupaTodoElWidth col-12 flexBetween" id="primeraFila_navBar">
                    <li class="col-2"><a href="index.php"><img src="img/generales/favicon.png" alt="Logo de mercado libre"></a></li>
                    <li id="ctn_input_search" class="col-6 background_border_shadow"><input id="input_search" type="search" name="navBar_barraBusqueda" placeholder="Buscar productos, marcas y más..."><button><i class="fas fa-search"></i></button></li>
                    <li>
                        <div class="menuHamburguesa">
                            <div class="menuHamburguesa_linea"></div>
                            <div class="menuHamburguesa_linea"></div>
                            <div class="menuHamburguesa_linea"></div>
                        </div>
                        <ul class="textoBlanco menuHamburguesa_ul">  <!--Despliegue de categorías-->
                            <div>
                                <img src="" alt="">
                                <div id="menu_bienvenido">
                                    <p class="textoNormal">Bienvenido</p>
                                    <p class="textoChico">Ingresa a tu cuenta para ver tus compras, favoritos, etc.</p>
                                    <div>
                                        <button class="textoBlanco">Ingresá</button>
                                        <button class="ghostButtonAzul">Creá tu cuenta</button>
                                    </div>
                                </div>
                            </div>
                            <li> <a href="" class="textoBlanco">Vehículos</a> </li>
                            <li> <a href="" class="textoBlanco">Inmuebles</a> </li>
                            <li> <a href="" class="textoBlanco">Tecnología</a> </li>
                            <li> <a href="" class="textoBlanco">Hogar y Muebles</a> </li>
                            <li> <a href="" class="textoBlanco">Electrodomésticos</a> </li>
                            <li> <a href="" class="textoBlanco">Herramientas</a> </li>
                            <li> <a href="" class="textoBlanco">Construcción</a> </li>
                            <li> <a href="" class="textoBlanco">Deportes y Fitness</a> </li>
                            <li> <a href="" class="textoBlanco">Accesorios para Vehículos</a> </li>
                            <li> <a href="" class="textoBlanco">Moda</a> </li>
                            <li> <a href="" class="textoBlanco">Juegos y Juguetes</a> </li>
                            <li> <a href="" class="textoBlanco">Bebés</a> </li>
                            <li> <a href="" class="textoBlanco">Belleza y Cuidado Personal</a> </li>
                            <li> <a href="" class="textoBlanco">Salud y Equipamiento Médico</a> </li>
                            <li> <a href="" class="textoBlanco">Industrias y Oficinas</a> </li>
                            <li> <a href="" class="textoBlanco">Agro</a> </li>
                            <li> <a href="" class="textoBlanco">Productos sustentables</a> </li>
                            <li> <a href="" class="textoBlanco">Ver más categorías</a> </li>
                        </ul>
                    </li>
                </ul>

                <!--Segunda fila del navigation bar-->
                <ul class="ctn_fila ocupaTodoElWidth col-12 flexBetween" id="segundaFila_navBar">
                    <li class="col-2"><a href=""> <img src="img/generales/enviarAcabaHasta1024px.JPG" height="20px" alt="Enviar a Capital Federal"></a></li>
                </ul>
            </nav>
            
            <nav class="textoNormal paddingPagina_displayFlex hiddenUntil1024px">
                <!--Primera fila del navigation bar-->
                <ul class="ctn_fila ocupaTodoElWidth col-12 flexBetween" id="primeraFila_navBar">
                    <li class="col-2"><a href="index.php"><img src="img/generales/logo_navBar.png" alt="Logo de mercado libre"></a></li>
                    <li id="ctn_input_search" class="col-6 background_border_shadow"><input id="input_search" type="search" name="navBar_barraBusqueda" placeholder="Buscar productos, marcas y más..."><button><i class="fas fa-search"></i></button></li>
                    <li class="col-4"><a href="sucripcionNivel6.html"><img src="img/generales/suscripcionAlNivel6.JPG" alt="Suscribite al nivel 6 para obtener beneficios exclusivos"></a></li>
                </ul>

                <!--Segunda fila del navigation bar-->
                <ul class="ctn_fila ocupaTodoElWidth col-12 flexBetween" id="segundaFila_navBar">
                    <li class="col-2"><a href=""> <img src="img/generales/enviarAcaba.JPG" height="100%" alt="Enviar a Capital Federal"></a></li>
                    <li class="col-6" id="ctn_linksGenerales"> 
                        <ul class="ctn_fila linksNavBar_verticalAlign textoChico" id="linksGenerales">  <!--Links generales-->
                            <li onmouseenter="categoriasDisplay()" onmouseleave="categoriasHidden()" class="linksNavBar_verticalAlign opacidadReducida seems_clickeable">Categorías<i class="fas fa-chevron-down" id="categorias_icon"></i>
                                <div id="categorias_indicador"></div>
                                <ul id="categorias" class="textoBlanco">  <!--Despliegue de categorías-->
                                    <li> <a href="" class="textoBlanco">Vehículos</a> </li>
                                    <li> <a href="" class="textoBlanco">Inmuebles</a> </li>
                                    <li> <a href="" class="textoBlanco">Tecnología</a> </li>
                                    <li> <a href="" class="textoBlanco">Hogar y Muebles</a> </li>
                                    <li> <a href="" class="textoBlanco">Electrodomésticos</a> </li>
                                    <li> <a href="" class="textoBlanco">Herramientas</a> </li>
                                    <li> <a href="" class="textoBlanco">Construcción</a> </li>
                                    <li> <a href="" class="textoBlanco">Deportes y Fitness</a> </li>
                                    <li> <a href="" class="textoBlanco">Accesorios para Vehículos</a> </li>
                                    <li> <a href="" class="textoBlanco">Moda</a> </li>
                                    <li> <a href="" class="textoBlanco">Juegos y Juguetes</a> </li>
                                    <li> <a href="" class="textoBlanco">Bebés</a> </li>
                                    <li> <a href="" class="textoBlanco">Belleza y Cuidado Personal</a> </li>
                                    <li> <a href="" class="textoBlanco">Salud y Equipamiento Médico</a> </li>
                                    <li> <a href="" class="textoBlanco">Industrias y Oficinas</a> </li>
                                    <li> <a href="" class="textoBlanco">Agro</a> </li>
                                    <li> <a href="" class="textoBlanco">Productos sustentables</a> </li>
                                    <li> <a href="" class="textoBlanco">Ver más categorías</a> </li>
                                </ul>
                            </li>
                            <li class="linksNavBar_verticalAlign opacidadReducida espaciadoLinks hiddenUntil1024px"> <a href="">Ofertas</a> </li>
                            <li class="linksNavBar_verticalAlign opacidadReducida espaciadoLinks hiddenUntil1024px"> <a href="">Historial</a> </li>
                            <li class="linksNavBar_verticalAlign opacidadReducida espaciadoLinks hiddenUntil1100px"> <a href="">Supermercado</a> </li>
                            <li class="linksNavBar_verticalAlign opacidadReducida espaciadoLinks hiddenUntil1200px"> <a href="">Moda</a> </li>
                            <li class="linksNavBar_verticalAlign opacidadReducida espaciadoLinks hiddenUntil1024px"> <a href="">Vender</a> </li>
                            <li class="linksNavBar_verticalAlign opacidadReducida espaciadoLinks hiddenUntil1024px"> <a href="">Ayuda</a> </li>
                        </ul>
                    </li>

                    <li class="col-4" id="linksCuenta"> 
                        <ul class="ctn_fila textoChico">   <!--Links de sesión-->
                            <li class="linksNavBar_verticalAlign alineacionRight hiddenUntil1024px"> <a href="">Creá tu cuenta</a> </li>
                            <li class="linksNavBar_verticalAlign alineacionRight espaciadoLinks hiddenUntil1024px"> <a href="">Ingresá</a> </li>
                            <li class="linksNavBar_verticalAlign alineacionRight espaciadoLinks hiddenUntil1024px"> <a href="">Mis compras</a> </li>
                            <!--<li class="linksNavBar_verticalAlign alineacionRight espaciadoLinks"> <a href=""><i class="fas fa-bell"></i></a> </li> -->
                            <li class="linksNavBar_verticalAlign alineacionRight espaciadoLinks hiddenUntil1024px"> <a href=""><i class="fas fa-shopping-cart"></i></a> </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
    	
    	<main>
        	<!--CARRUSEL-->
            <section id="carrusel">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    </ol>

                    <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="">
                                    <img class="d-block" src="img/index/carrusel/firstSlide.JPG" alt="Suscribite al nivel 6, desde $599 por mes.">
                                </a>
                            </div>

                            <div class="carousel-item">
                                <a href="">
                                    <img class="d-block" src="img/index/carrusel/secondSlide.JPG" alt="Mega ofertas de fin de semana. Hasta 12 cuotas sin interés.">
                                </a>
                            </div>

                            <div class="carousel-item">
                                <a href="">
                                    <img class="d-block" src="img/index/carrusel/thirdSlide.JPG" alt="Comprá los esenciales para cuidarte con hasta 30% off. Envío gratis a partir de los $3500.">
                                </a>
                            </div>

                            <div class="carousel-item">
                                <a href="">
                                    <img class="d-block" src="img/index/carrusel/fourthSlide.JPG" alt="EcoFriday, hasta 40% off en productos sustentables.">
                                </a>
                            </div>

                            <div class="carousel-item">
                                <a href="">
                                    <img class="d-block" src="img/index/carrusel/fifthSlide.JPG" alt="Hasta 12 cuotas sin interés en Mundo Gamer.">
                                </a>
                            </div>

                            <div class="carousel-item">
                                <a href="">
                                    <img class="d-block" src="img/index/carrusel/sixthSlide.JPG" alt="Especial motopartes, hasta 25% off y 12 cuotas sin interés.">
                                </a>
                            </div>
                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <div class="carrusel_flechaFondo" id="carrusel_flechaFondo_izquierda">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </div>
                    </a>

                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <div class="carrusel_flechaFondo" id="carrusel_flechaFondo_derecha">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Siguiente</span>
                        </div>
                    </a>
                </div>
            </section>
            
            <div class="paddingPagina_displayFlex">
                <!--PAYMENT DATA-->
                <section id="ctn_paymentData">
                    <div id="paymentData" class="background_border_shadow flexBetween textoNormal">
                        <div> 
                            <img src="img/index/tCredito_icon.JPG" alt="" class="paymentData_img">
                            <div class="paymentData_texts">
                                <p class="paymentData_metodoPago textoMediano">Tarjeta de crédito</p>
                                <a href=""><p class="paymentData_metodoPago_linkInfo textoChico">Ver promociones bancarias</p></a>
                            </div>
                        </div>
                        
                        <div id="paymentData_debito">
                            <img src="img/index/tDebito_icon.JPG" alt="" class="paymentData_img">
                            <div class="paymentData_texts">
                                <p class="paymentData_metodoPago textoMediano">Tarjeta de débito</p>
                                <a href=""><p class="paymentData_metodoPago_linkInfo textoChico">Ver más</p></a>
                            </div>
                        </div>

                        <div id="paymentData_sinTarjeta"> 
                            <img src="img/index/cuotasSinTarjeta_icon.JPG" alt="" class="paymentData_img">
                            <div class="paymentData_texts">
                                <p class="paymentData_metodoPago textoMediano">Cuotas sin tarjeta</p>
                                <a href=""><p class="paymentData_metodoPago_linkInfo textoChico">Conocé Mercado Crédito</p></a>
                            </div>
                        </div>

                        <div id="paymentData_efectivo"> 
                            <img src="img/index/efectivo_icon.JPG" alt="" class="paymentData_img">
                            <div class="paymentData_texts">
                                <p class="paymentData_metodoPago textoMediano">Efectivo</p>
                                <a href=""><p class="paymentData_metodoPago_linkInfo textoChico">Ver más</p></a>
                            </div>
                        </div>

                        <div>
                            <img src="img/index/mas_icon.JPG" alt="Ver más opciones de pago" class="paymentData_img">
                        </div>
                    </div>
                </section>

                <!--OFERTAS-->
                <section class="seccionProductos">
                    <h2 class="encabezado fontLato">Ofertas</h2> 
                    <a href=""><p class="link_encabezado textoMediano">Ver todas</p></a>

                    <!--Cards-->
                    <div class="card-deck textoNormal" id="ctn_ofertas">
                        <div class="card card_ofertas">
                            <a href="" style="color: unset;">
                                <div class="card_imagen"><img class="card-img-top" src="img/index/ofertas/ofertas_primerProducto.JPG" alt="Card image cap"></div>

                                <div class="card-body">
                                    <p class="card_precioAnterior card_textoHidden">$ 35.999</p>
                                    <h5 class="card-title">$ 27.000</h5>
                                    <p class="card_textoOferta textoChico">24% OFF</p>
                                    <p class="card-text card_envio textoChico">Envío gratis</p>
                                    <p class="card-text text-muted card_segundo_textoHidden textoChico">Smart Tv Jvc Lt43da5125 Led Full Hd 43 Netflix Youtube Wifi</p>
                                </div>

                                <div class="card_ofertas_corazon"> <i class="far fa-heart"></i> </div>
                            </a>
                        </div>

                        <div class="card card_ofertas">
                            <a href="" style="color: unset;">
                                <div class="card_imagen"><img class="card-img-top" src="img/index/ofertas/ofertas_segundoProducto.JPG" alt="Card image cap"></div>

                                <div class="card-body">
                                    <p class="card_precioAnterior card_textoHidden">$88.999</p>
                                    <h5 class="card-title">$ 58.558</h5>
                                    <p class="card_textoOferta textoChico">34% OFF</p>
                                    <p class="textoMasChico textoGris card_cuotas">6x $9.759,67 sin interés</p>
                                    <p class="card-text card_envio textoChico">Envío gratis</p>
                                    <p class="card-text text-muted card_segundo_textoHidden textoChico">Freezer vertical Eslabón de Lujo EVU22D1 blanco 142L 220V</p>
                                </div>

                                <div class="card_ofertas_corazon"> <i class="far fa-heart"></i> </div>
                            </a>
                        </div>

                        <div class="card card_ofertas">
                            <a href="" style="color: unset;">
                                <div class="card_imagen"><img class="card-img-top" src="img/index/ofertas/ofertas_tercerProducto.JPG" alt="Card image cap"></div>

                                <div class="card-body">
                                    <p class="card_precioAnterior card_textoHidden">$78.999</p>
                                    <h5 class="card-title">$ 73.499</h5>
                                    <p class="card_textoOferta textoChico">6% OFF</p>
                                    <p class="textoMasChico textoGris card_cuotas">12x $6.124,92 sin interés</p>
                                    <p class="card-text card_envio textoChico">Envío gratis</p>
                                    <p class="card-text text-muted card_segundo_textoHidden textoChico">Smart Tv Noblex 32 Led Dk32x5000 Hd Hdmi Wifi</p>
                                </div>

                                <div class="card_ofertas_corazon"> <i class="far fa-heart"></i> </div>
                            </a>
                        </div>

                        <div class="card card_ofertas">
                            <a href="" style="color: unset;">
                                <div class="card_imagen"><img class="card-img-top" src="img/index/ofertas/ofertas_primerProducto.JPG" alt="Card image cap"></div>

                                <div class="card-body">
                                    <p class="card_precioAnterior card_textoHidden">$ 52.899</p>
                                    <h5 class="card-title">$ 27.291</h5>
                                    <p class="card_textoOferta textoChico">48% OFF</p>
                                    <p class="textoMasChico textoGris card_cuotas">12x $2.274,25 sin interés</p>
                                    <p class="card-text card_envio textoChico">Envío gratis</p>
                                    <p class="card-text text-muted card_segundo_textoHidden textoChico">Microondas Whirlpool Con Grill 30 Ltrs Wmg30ab</p>
                                </div>

                                <div class="card_ofertas_corazon"> <i class="far fa-heart"></i> </div>
                            </a>
                        </div>

                        <div class="card card_ofertas">
                            <a href="" style="color: unset;">
                                <div class="card_imagen"><img class="card-img-top" src="img/index/ofertas/ofertas_primerProducto.JPG" alt="Card image cap"></div>

                                <div class="card-body">
                                    <p class="card_precioAnterior card_textoHidden">$ 73.899</p>
                                    <h5 class="card-title">$ 63.999</h5>
                                    <p class="card_textoOferta">13% OFF</p>
                                    <p class="textoMasChico textoGris card_cuotas">9x $7.111 sin interés</p>
                                    <p class="card-text card_envio">Envío gratis</p>
                                    <p class="card-text text-muted card_segundo_textoHidden">Samsung Galaxy A72 128 GB awesome black 6 GB RAM</p>
                                </div>

                                <div class="card_ofertas_corazon"> <i class="far fa-heart"></i> </div>
                            </a>
                        </div>
                        
                        <div id="flecha_ofertas" class="flecha_cards">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                </section>

                <!--Beneficios de Mercado Puntos-->
                <section class="seccionProductos" id="ctn_beneficiosCards_flecha">
                    <h2 class="encabezado fontLato">Beneficios de Mercado Puntos</h2> 
                    <a href=""><p class="link_encabezado textoMediano">Ver todos los beneficios</p></a>

                    <div id="cardSlider">
                        <div id="beneficios_card-1" class="beneficios_card">
                            <img src="img/index/beneficios/beneficio_disney+.JPG" alt="Hasta 30% OFF en Disney+">
                        </div>

                        <div id="beneficios_card-1" class="beneficios_card">
                            <img src="img/index/beneficios/beneficio_star+.JPG" alt="Beneficio en Star+ con tu suscripción al nivel 6">
                        </div>

                        <div id="beneficios_card-1" class="beneficios_card">
                            <img src="img/index/beneficios/beneficio_HBOMax.JPG" alt="Hasta 50% OFF y 7 días gratis en HBO Max+">
                        </div>

                        <div id="beneficios_card-1" class="beneficios_card">
                            <img src="img/index/beneficios/beneficio_paramount.JPG" alt="Hasta 40% OFF y 7 días gratis en Paramount+">
                        </div>
                        
                        <div id="flecha_beneficios" class="flecha_cards">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>

                    <!-- Si tuviera los recursos gráficos lo haría con esto
                    <div>
                        <img src="" alt="">
                        <div>
                            <img src="" alt="">
                        </div>
                        <div>
                            <p>Hasta 30% OFF</p>
                            <p>Disney+</p>
                        </div>
                    </div> -->
                </section>
                
                <!--PUBLICIDAD-->
                <section class="seccionProductos" id="espacioPublicitario">
                    
                    <?php 
                    /*Matriz de publicidades*/
                        $publicidades = [
                            ["nombre" => "seagate",
                            "imagen" => "seagate.jpg",
                            "logo" => "seagate-logo.svg",
                            "altLogo" => "SeaGate",
                            "link" => "ola",
                            "color" => "#998678",
                            "primerParrafo" => "Espacio para todo",
                            "segundoParrafo" => "La biblioteca de su vida"
                            ],
                        ];
                        /*
                            ["nombre" => "legion by lenovo",
                            "imagen" => "legion.jpg",
                            "logo" => "legionByLenovo.svg",
                            "altLogo" => "Lenovo",
                            "link" => "ola",
                            "color" => "#020002",
                            "primerParrafo" => "Hasta 6 cuotas sin interés",
                            "segundoParrafo" => "Elegante por fuera, salvaje por dentro"
                            ],
                            
                            ["nombre" => "HP",
                            "imagen" => "HP.jpg",
                            "logo" => ".svg",
                            "altLogo" => "H.P",
                            "link" => "ola",
                            "color" => "#020002",
                            "primerParrafo" => "Hasta 9 cuotas sin interés",
                            "segundoParrafo" => "Descuentos increíbles + envíos gratis*"
                            ]*/

                        $lengthPublidades = count($publicidades); //largo de la matriz
                        $numeroRandom = rand(1, $lengthPublidades); //random position de la matriz
                        $numeroRandom = $numeroRandom - 1; //Le resto un número porque los arrays empiezan en 0
                        echo '<article  style="background-color:' . $publicidades[$numeroRandom]["color"] . '">
                            <a href="' . $publicidades[$numeroRandom]["link"] . '">
                                <div id="espacioPublicitario_imagen">
                                    <div id="imagenPublicitaria"></div>
                                    <div id="espacioPublicitario_imagen_logo">
                                        <img src="img/index/publicidades/logos/' . $publicidades[$numeroRandom]["logo"] . '" alt="' . $publicidades[$numeroRandom]["altLogo"]. '">
                                    </div>
                                </div>
                                <div id="espacioPublicitario_textos">
                                    <p class="textoBlanco textoMasChico textoMayusculaEspaciado cards_textoLight fontPoppins">' . $publicidades[$numeroRandom]["primerParrafo"] . '</p>
                                    <p class="textoBlanco textoGrandeCardMayuscula fontPoppins">' . $publicidades[$numeroRandom]["segundoParrafo"] . '</p>
                                    <p class="fontLato textoBlanco texto textoChico">Ver más <i class="fas fa-chevron-right"></i></p>
                                </div>
                            </a>
                        </article>
                        
                        <style>
                            #imagenPublicitaria {
                                background-image: url("img/index/publicidades/'.$publicidades[$numeroRandom]["imagen"].'")
                            }
                        </style>';
                    ?> 
                </section>

                <!--Descubrí-->
                <section class="seccionProductos">
                    <h2 class="encabezado fontLato">Descubrí</h2> 
                    <div class="flexBetween ctn_cards_anchas">
                        <div class="card_descubri background_border_shadow">
                            <div>
                                <p class="textoMasChico textoMayusculaEspaciado cards_textoLight fontPoppins textoGris">Equipá tu hogar</p>
                                <p class="textoGrandeCardMayuscula cards_textosBold fontPoppins textoGris">Hasta 18 cuotas sin interés</p>
                                <button class="boton_azul">Ver más</button>
                            </div>
                            <div class="img_card_ancha">
                                <img src="img/index/descubri/descubri_equipaTuHogar.png" alt="">
                            </div>
                        </div>
                        
                        <div class="card_descubri background_border_shadow">
                            <div>
                                <p class="textoMasChico textoMayusculaEspaciado cards_textoLight fontPoppins textoGris">Celulares</p>
                                <p class="textoGrandeCardMayuscula cards_textosBold fontPoppins textoGris">Hasta 9 cuotas sin interés</p>
                                <button class="boton_azul">Ver más</button>
                            </div>
                            <div class="img_card_ancha">
                                <img src="img/index/descubri/descubri_celulares.png" alt="">
                            </div>
                        </div>
                    </div>
                </section>

                <!--Las mejores tiendas te esperan-->
                <section class="seccionProductos">
                    <h2 class="encabezado fontLato">Las mejores tiendas te esperan</h2> 
                    <a href=""><p class="link_encabezado textoMediano">Ver tiendas</p></a>
                            
                    <div id="ctn_card_mejoresTiendas" class="flexBetween">
                        <?php 
                        /*Matriz de mejores tiendas
                            $mejoresTiendas = [
                                ["nombre" => "LG",
                                "link" => ""
                                ],

                                ["nombre" => "Samsung",
                                "link" => ""
                                ]
                            ];

                            $lengthMejoresTiendas = count($mejoresTiendas); //largo de la matriz
                            $numeroRandom = rand(1, $lengthMejoresTiendas); //random position de la matriz
                            $numeroRandom = $numeroRandom - 1; //Le resto un número porque los arrays empiezan en 0
                            echo '<a href="' . $mejoresTiendas[$numeroRandom]["link"] . '">
                                <div class="card_mejoresTiendas background_border_shadow">
                                    <div class="card_mejoresTiendas_portada">
                                        <img src="img/index/mejoresTiendas/' . $mejoresTiendas[$numeroRandom]["nombre"] . '/portada_' . $mejoresTiendas[$numeroRandom]["nombre"] . '.jpg" alt="">
                                    </div>

                                    <div class="card_mejoresTiendas_bajoPortada">
                                        <p class="fontPoppins textoGris textoMedianoGrande">LG</p>
                                        <div class="card_mejoresTiendas_ctn_productos flexBetween">
                                            <img class="card_mejoresTiendas_productos" src="img/index/mejoresTiendas/' . $mejoresTiendas[$numeroRandom]["nombre"] . '/primerProducto_' . $mejoresTiendas[$numeroRandom]["nombre"] . '.jpg" alt="">
                                            <img class="card_mejoresTiendas_productos" src="img/index/mejoresTiendas/' . $mejoresTiendas[$numeroRandom]["nombre"] . '/segundoProducto_' . $mejoresTiendas[$numeroRandom]["nombre"] . '.jpg" alt="">
                                            <img class="card_mejoresTiendas_productos" src="img/index/mejoresTiendas/' . $mejoresTiendas[$numeroRandom]["nombre"] . '/tercerProducto_' . $mejoresTiendas[$numeroRandom]["nombre"] . '.jpg" alt="">
                                        </div>
                                        <div class="card_mejoresTiendas_logoFlotante">
                                            <img src="img/index/mejoresTiendas/' . $mejoresTiendas[$numeroRandom]["nombre"] . '/logo-' . $mejoresTiendas[$numeroRandom]["nombre"] . '.svg" alt="">
                                        </div>
                                        <p class="textoGris textoNormal textoChico">Ver tienda</p>
                                    </div>
                                </div>
                            </a>';*/
                        ?> 

                        <a href="">
                            <div class="card_mejoresTiendas background_border_shadow">
                                <div class="card_mejoresTiendas_portada">
                                </div>

                                <div class="card_mejoresTiendas_bajoPortada">
                                    <p class="fontPoppins textoGris textoMedianoGrande">LG</p>
                                    <div class="card_mejoresTiendas_ctn_productos flexBetween">
                                        <div class="card_mejoresTiendas_productos"><img src="img/index/mejores_tiendas/LG/primerProducto_lg.jpg" alt="Anteojos Cinema 3D"></div>
                                        <div class="card_mejoresTiendas_productos"><img src="img/index/mejores_tiendas/LG/segundoProducto_lg.jpg" alt="Celular LG K22"></div>
                                        <div class="card_mejoresTiendas_productos"><img src="img/index/mejores_tiendas/LG/tercerProducto_lg.jpg" alt="Heladera inteligente"></div>
                                    </div>
                                    <div class="card_mejoresTiendas_logoFlotante">
                                        <img src="img/index/mejores_tiendas/LG/logo-lg.svg" alt="">
                                    </div>
                                    <p class="textoGris textoNormal textoChico">Ver tienda</p>
                                </div>
                            </div>
                        </a>
                        
                        <a href="">
                            <div class="card_mejoresTiendas background_border_shadow">
                                <div class="card_mejoresTiendas_portada">
                                    <img src="img/index/mejores_tiendas/Samsung/portada_samsung.jpg" alt="">
                                </div>

                                <div class="card_mejoresTiendas_bajoPortada">
                                    <p class="fontPoppins textoGris textoMedianoGrande">Samsung</p>
                                    <div class="card_mejoresTiendas_ctn_productos flexBetween">
                                        <div class="card_mejoresTiendas_productos"><img src="img/index/mejores_tiendas/Samsung/primerProducto_samsung.jpg" alt="Celular Samsung"></div>
                                        <div class="card_mejoresTiendas_productos"><img src="img/index/mejores_tiendas/Samsung/segundoProducto_samsung.jpg" alt="Heladera inteligente"></div>
                                        <div class="card_mejoresTiendas_productos"><img src="img/index/mejores_tiendas/Samsung/tercerProducto_samsung.jpg" alt="Lavarropas"></div>
                                    </div>
                                    <div class="card_mejoresTiendas_logoFlotante">
                                        <img src="img/index/mejores_tiendas/Samsung/logo-samsung.svg" alt="">
                                    </div>
                                    <p class="textoGris textoNormal textoChico">Ver tienda</p>
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="card_mejoresTiendas background_border_shadow">
                                <div class="card_mejoresTiendas_portada" style="background-color: #015394">
                                </div>

                                <div class="card_mejoresTiendas_bajoPortada">
                                    <p class="fontPoppins textoGris textoMedianoGrande">HP Tienda Oficial</p>
                                    <div class="card_mejoresTiendas_ctn_productos flexBetween">
                                        <div class="card_mejoresTiendas_productos"><img src="img/index/mejores_tiendas/HP/primerProducto_HP.jpg" alt="Notebook"></div>
                                        <div class="card_mejoresTiendas_productos"><img src="img/index/mejores_tiendas/HP/segundoProducto_HP.jpg" alt="Notebook"></div>
                                        <div class="card_mejoresTiendas_productos"><img src="img/index/mejores_tiendas/HP/tercerProducto_HP.jpg" alt="Impresora con scáner"></div>
                                    </div>
                                    <div class="card_mejoresTiendas_logoFlotante">
                                        <img src="img/index/mejores_tiendas/HP/logo-hp.png" alt="">
                                    </div>
                                    <p class="textoGris textoNormal textoChico">Ver tienda</p>
                                </div>
                            </div>
                        </a>

                        <a href="">
                            <div class="card_mejoresTiendas background_border_shadow">
                                <div class="card_mejoresTiendas_portada">
                                    <img src="img/index/mejores_tiendas/Fravega/portada_fravega.jpg" alt="">
                                </div>

                                <div class="card_mejoresTiendas_bajoPortada">
                                    <p class="fontPoppins textoGris textoMedianoGrande">Frávega</p>
                                    <div class="card_mejoresTiendas_ctn_productos flexBetween">
                                        <div class="card_mejoresTiendas_productos"><img src="img/index/mejores_tiendas/Fravega/primerProducto_fravega.jpg" alt="Afeitadora eléctrica con tres cabezas"></div>
                                        <div class="card_mejoresTiendas_productos"><img src="img/index/mejores_tiendas/Fravega/segundoProducto_fravega.jpg" alt="Sandwichera smart life"></div>
                                        <div class="card_mejoresTiendas_productos"><img src="img/index/mejores_tiendas/Fravega/tercerProducto_fravega.jpg" alt="Microondas"></div>
                                    </div>
                                    <div class="card_mejoresTiendas_logoFlotante">
                                        <img src="img/index/mejores_tiendas/Fravega/logo-fravega.png" alt="">
                                    </div>
                                    <p class="textoGris textoNormal textoChico">Ver tienda</p>
                                </div>
                            </div>
                            
                            <div id="flecha_mejoresTiendas" class="flecha_cards">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </a>

                        <!--PASAR ESTA INFORMACIÓN A MATRIZ PORQUE SON RANDOM, VAN CAMBIANDO: Citroen, rex, lego, -->
                    </div>
                </section>

                <!--Te puede interesar-->
                <section class="seccionProductos">
                    <h2 class="encabezado fontLato">Te puede interesar</h2> 
                    <div class="flexBetween ctn_cards_anchas">
                        <div class="card_descubri background_border_shadow">
                            <div>
                                <p class="textoMasChico textoMayusculaEspaciado cards_textoLight fontPoppins textoGris">zapatillas deportivas</p>
                                <p class="textoGrandeCardMayuscula cards_textosBold fontPoppins textoGris">Hasta 30% OFF y 6x sin interés</p>
                                <button class="boton_azul">Ver más</button>
                            </div>
                            <div class="img_card_ancha">
                                <img src="img/index/tePuedeInteresar/tePuedeInteresar_primerImagen.JPG" alt="Electrodomésticos">
                            </div>
                        </div>
                        
                        <div class="card_descubri background_border_shadow">
                            <div>
                                <p class="textoMasChico textoMayusculaEspaciado cards_textoLight fontPoppins textoGris">Especial primavera</p>
                                <p class="textoGrandeCardMayuscula cards_textosBold fontPoppins textoGris">Hasta 40% OFF</p>
                                <button class="boton_azul">Ver más</button>
                            </div>
                            <div class="img_card_ancha">
                                <img src="img/index/tePuedeInteresar/tePuedeInteresar_segundaImagen.JPG" alt="Celulares">
                            </div>
                        </div>
                    </div>
                </section>

                <!--Categorías populares-->
                <section class="seccionProductos" id="ctn_categorias_flecha">
                    <h2 class="encabezado fontLato">Categorías populares</h2>
                    <article id="ctn_ctn_categorias">
                        <div id="container-fluid" class="background_border_shadow ctn_categorias row-xs-12 row-sm-6 row-md-4 row-lg-2">
                            <div class="flexColumn_categoriasPopulares">
                                <div class="categoria">
                                    <i class="fas fa-car"></i>
                                    <p class="textoChico">Autos, Motos y Otros</p>
                                </div>
                                <div class="categoria">
                                    <i class="fas fa-tablet-alt"></i>
                                    <p>Celulares y teléfonos</p>
                                </div>
                            </div>
                            <div class="flexColumn_categoriasPopulares">
                                <div class="categoria">
                                    <i class="fas fa-desktop"></i>
                                    <p class="textoChico">Computación</p>
                                </div>
                                <div class="categoria">
                                    <i class="fas fa-microphone-alt"></i>
                                    <p>Electrónica, Audio y Video</p>
                                </div>
                            </div>
                            <div class="flexColumn_categoriasPopulares">
                                <div class="categoria">
                                    <i class="fas fa-blender"></i>
                                    <p>Electrodomésticos y Aires Ac.</p>
                                </div>
                                <div class="categoria">
                                    <i class="fas fa-tshirt"></i>
                                    <p>Ropa y Accesorios</p>
                                </div>
                            </div>
                            <div class="flexColumn_categoriasPopulares">
                                <div class="categoria">
                                    <i class="fas fa-futbol"></i>
                                    <p>Deportes y Fitness</p>
                                </div>
                                <div class="categoria">
                                    <i class="fas fa-couch"></i>
                                    <p>Hogar, Muebles y Jardín</p>
                                </div>
                            </div>
                            <div class="flexColumn_categoriasPopulares">
                                <div class="categoria">
                                    <i class="fas fa-building"></i>
                                    <p>Inmuebles</p>
                                </div>
                                <div class="categoria">
                                    <i class="fas fa-car-side"></i>
                                    <p>Accesorios para Vehículos</p>
                                </div>
                            </div>
                            <div class="flexColumn_categoriasPopulares">
                                <div class="categoria">
                                    <i class="fas fa-spray-can"></i>
                                    <p>Belleza y Cuidado Personal</p>
                                </div>
                                <div class="categoria">
                                    <i class="fas fa-gamepad"></i>
                                    <p>Consolas y Videojuegos</p>
                                </div>
                            </div>
                            <div class="flexColumn_categoriasPopulares">
                                <div class="categoria">
                                    <i class="fas fa-puzzle-piece"></i>
                                    <p>Juegos y Juguetes</p>
                                </div>
                                <div class="categoria">
                                    <i class="fas fa-hamburger"></i>
                                    <p>Alimentos y Bebidas</p>
                                </div>
                            </div>
                            <div class="flexColumn_categoriasPopulares">
                                <div class="categoria">
                                    <i class="fas fa-ticket-alt"></i>
                                    <p>Entradas para Eventos</p>
                                </div>
                                <div class="categoria">
                                    <i class="fas fa-tools"></i>
                                    <p>Herramientas</p>
                                </div>
                            </div>
                        </div>
                        
                        <div id="flecha_mejoresCategorias" class="flecha_cards">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </article>
                </section>
            </div>
    	</main>
 
    	<footer>
            <div class="paddingPagina_displayFlex">
                <!--BENEFICION MERCADO LIBRE-->
                <section class="textoNormal beneficiosMercadoLibre">
                    <div class="beneficioMercadoLibre"> 
                        <div>
                            <img src="img/generales/footer_elegiComoPagar.png" alt="">
                        </div>
                        <div>
                            <p class="textoMediano">Elegí cómo pagar</p>
                            <p class="textoChico textoGris">Podés pagar con tarjeta, débito, efectivo o hasta 12 cuotas sin tarjeta con Mercado Crédito.</p>
                            <a href="">Cómo pagar tus compras</a>
                        </div>
                    </div>   
                        
                    <div class="beneficioMercadoLibre_separacion"></div>

                    <div class="beneficioMercadoLibre"> 
                        <div>
                            <img src="img/generales/footer_envioGratis.png" alt="">
                        </div>
                        <div>
                            <p class="textoMediano">Envío gratis desde $ 3.500</p>
                            <p class="textoChico textoGris">Solo por estar registrado en Mercado Libre tenés envíos gratis en miles de productos. Es un beneficio de Mercado Puntos.</p>
                            <a href="">Conocé más sobre este beneficio</a>
                        </div>
                    </div>   
                    
                    <div class="beneficioMercadoLibre_separacion"></div>

                    <div class="beneficioMercadoLibre"> 
                        <div>
                            <img src="img/generales/footer_seguridad.png" alt="">
                        </div>
                        <div>
                            <p class="textoMediano">Seguridad, de principio a fin</p>
                            <p class="textoChico textoGris">¿No te gusta? ¡Devolvelo! En Mercado Libre, no hay nada que no puedas hacer, porque estás siempre protegido.</p>
                            <a href="">Cómo te protegemos</a>
                        </div>
                    </div> 
                </section>
                
                <!--Informacion de Mercado Libre (normas, cancelaciones)-->
                <section class="textoNormal flexBetween" id="ctn_informacionMercadoLibre">
                    <div class="informacionMercadoLibre">
                        <p class="textoGris textoChico">Botón de arrepentimiento</p>
                        <a href=""> <p class="textoChico">Cancelar una compra</p> </a>
                        <a href=""> <p class="textoChico">Cancelar una suscripción</p> </a>
                    </div>

                    <div class="informacionMercadoLibre">
                        <p class="textoGris textoChico">Conocé las normas que aplican cuando comprás</p>
                        <a href=""> <p class="textoChico">Ver contratos de adhesión - Ley N.º 24.240 de Defensa del Consumidor</p> </a>
                    </div>
                </section>
                
                <!--USUARIOS FINANCIEROS-->
                <section id="ctn_usuariosFinancieros">
                    <div id="escudoUsuariosFinancieros">
                        <img src="img/generales/footer_escudo.JPG" alt="Escudo de Data Fiscal">
                    </div>

                    <div id="usuariosFinancieros">
                            <p>USUARIOS FINANCIEROS</p>
                            <p>Visitá nuestra web</p>
                            <p>www.usuariosfinancieros.gob.ar</p>
                            <img src="img/generales/footer_bancoCentral.JPG" alt="Banco Central">
                    </div>
                </section>
            </div>
                <!--MÁS INFORMACIÓN-->
                <div id="ctn_masInformacion">
                    <div id="ctn_masInformacion_btn" class="hiddenUntil1024px">
                        <button onclick="despliegueInformacion()" id="masInformacion_btn" class="textoMasChico textoGris seems_clickeable" style="background-color: transparent;">Más información<i class="fas fa-chevron-up" id="icon_masInformacion"></i></button>
                    </div>

                    <div id="links_masInformacion">
                        <div class="paddingPagina_displayFlex flexBetween">
                            <div class="ctn_masInformacion_links textoGris textoChico">
                                <p class="masInformacion_titulo_links">Acerca de</p>
                                <ul>
                                    <li> <a href="">Mercado Libre</a> </li>
                                    <li> <a href="">Investor relations</a> </li>
                                    <li> <a href="">Tendencias</a> </li>
                                    <li> <a href="">Sustentabilidad</a> </li>
                                </ul>
                            </div>

                            <div class="ctn_masInformacion_links textoGris textoChico">
                                <p class="masInformacion_titulo_links">Otros sitios</p>
                                <ul>
                                    <li> <a href="">Developers</a> </li>
                                    <li> <a href="">Mercado Pago</a> </li>
                                    <li> <a href="">Mercado Shops</a> </li>
                                    <li> <a href="">Mercado Envíos</a> </li>
                                    <li> <a href="">Mercado Ads</a> </li>
                                    <li> <a href="">Mercado Libre Ideas</a> </li>
                                </ul>
                            </div>

                            <div class="ctn_masInformacion_links textoGris textoChico">
                                <p class="masInformacion_titulo_links">Ayuda</p>
                                <ul>                                   
                                    <li> <a href="">Comprar</a> </li>
                                    <li> <a href="">Vender</a> </li>
                                    <li> <a href="">Resolución de problemas</a> </li>
                                    <li> <a href="">Centro de seguridad</a> </li>
                                </ul>
                            </div>

                            <div class="ctn_masInformacion_links textoGris textoChico">
                                <p class="masInformacion_titulo_links">Redes Sociales</p>
                                <ul>
                                    <li> <a href="">Twitter</a> </li>
                                    <li> <a href="">Facebook</a> </li>
                                    <li> <a href="">Instagram</a> </li>
                                    <li> <a href="">YouTube</a> </li>
                                </ul>
                            </div>

                            <div class="ctn_masInformacion_links textoGris textoChico">
                                <p class="masInformacion_titulo_links">Mi cuenta</p>
                                <ul>
                                    <li> <a href="">Ingresá</a> </li>
                                    <li> <a href="">Vender</a> </li>
                                </ul>
                            </div>

                            <div class="ctn_masInformacion_links textoGris textoChico">
                                <p class="masInformacion_titulo_links">Mercado Puntos</p>
                                <ul>
                                    <li> <a href="">Disney+</a> </li>
                                    <li> <a href="">Star+</a> </li>
                                    <li> <a href="">HBO MAX</a> </li>
                                    <li> <a href="">Paramount+</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="paddingPagina_displayFlex">
                <!--footer ultima parte-->
                <section id="ultimaParte_links">
                        <div id="fila_ultimaParte_links" class="hiddenUntil1024px textoMasChico">
                            <a href="" class="textoGris">Trabajá con nosotros</a>
                            <a href="" class="textoGris">Términos y condiciones</a>
                            <a href="" class="textoGris">Cómo cuidamos tu privacidad</a>
                            <a href="" class="textoGris">Información al usuario financiero</a>
                            <a href="" class="textoGris">Ayuda</a>
                            <a href="" class="textoGris">Defensa del Consumidor</a>
                        </div>
                        <div>
                            <p class="textogris textoMasChico">Copyright © 1999-2021 MercadoLibre S.R.L</p>
                            <p class="textogris textoMasChico">Av. Caseros 3039, Piso 2, CP 1264, Parque Patricios, CABA</p>
                            <p class="hiddenFrom1024pxAndOn textoChico" style="color: black;">¡Descargá gratis la app de Mercado Libre!</p>
                        </div>
                </section>
            </div>
    	</footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="script.js"></script>
    </body>
</html>

