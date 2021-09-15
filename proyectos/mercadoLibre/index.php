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
            <nav class="textoNormal">
                <!--Primera fila del navigation bar-->
                <ul class="ctn_fila ocupaTodoElWidth col-12 flexBetween" id="primeraFila_navBar">
                    <li class="col-2"><a href="index.php"><img src="img/generales/logo_navBar.png" height="95%" alt="Logo de mercado libre"></a></li>
                    <li id="ctn_input_search" class="col-6"><input id="input_search" class="background_border_shadow" type="search" name="navBar_barraBusqueda" placeholder="Buscar productos, marcas y más..."></li>
                    <li class="col-4"><a href="sucripcionNivel6.html"><img src="img/generales/suscripcionAlNivel6.jpg" alt="Suscribite al nivel 6 para obtener beneficios exclusivos"></a></li>
                </ul>

                <!--Segunda fila del navigation bar-->
                <ul class="ctn_fila ocupaTodoElWidth col-12 flexBetween" id="segundaFila_navBar">
                    <li class="col-2"><a href=""> <img src="img/generales/enviarAcaba.jpg" height="100%"></a></li>
                    <li class="col-6" id="ctn_linksGenerales"> 
                        <ul class="ctn_fila linksNavBar_verticalAlign textoChico" id="linksGenerales">  <!--Links generales-->
                            <li class="linksNavBar_verticalAlign opacidadReducida seems_clickeable">Categorías<i class="fas fa-chevron-down" id="categorias_icon"></i>
                                <ul class="is_hidden">  <!--Despliegue de categorías-->
                                    <li> <a href="">Vehículos</a> </li>
                                    <li> <a href="">Inmuebles</a> </li>
                                    <li> <a href="">Tecnología</a> </li>
                                    <li> <a href="">Hogar y Muebles</a> </li>
                                    <li> <a href="">Electrodomésticos</a> </li>
                                </ul>
                            </li>
                            <li class="linksNavBar_verticalAlign opacidadReducida espaciadoLinks"> <a href="">Ofertas</a> </li>
                            <li class="linksNavBar_verticalAlign opacidadReducida espaciadoLinks"> <a href="">Historial</a> </li>
                            <li class="linksNavBar_verticalAlign opacidadReducida espaciadoLinks"> <a href="">Vender</a> </li>
                            <li class="linksNavBar_verticalAlign opacidadReducida espaciadoLinks"> <a href="">Ayuda</a> </li>
                        </ul>
                    </li>

                    <li class="col-4" id="linksCuenta"> 
                        <ul class="ctn_fila textoChico">   <!--Links de sesión-->
                            <li class="linksNavBar_verticalAlign alineacionRight"> <a href="">Creá tu cuenta</a> </li>
                            <li class="linksNavBar_verticalAlign alineacionRight espaciadoLinks"> <a href="">Ingresá</a> </li>
                            <li class="linksNavBar_verticalAlign alineacionRight espaciadoLinks"> <a href="">Mis compras</a> </li>
                            <li class="linksNavBar_verticalAlign alineacionRight espaciadoLinks"> <a href=""><i class="fas fa-bell"></i></a> </li>
                            <li class="linksNavBar_verticalAlign alineacionRight espaciadoLinks"> <a href=""><i class="fas fa-shopping-cart"></i></a> </li>
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
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </section>
            
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
                     
                    <div>
                        <img src="img/index/tDebito_icon.JPG" alt="" class="paymentData_img">
                        <div class="paymentData_texts">
                            <p class="paymentData_metodoPago textoMediano">Tarjeta de débito</p>
                            <a href=""><p class="paymentData_metodoPago_linkInfo textoChico">Ver más</p></a>
                        </div>
                    </div>

                    <div> 
                        <img src="img/index/cuotasSinTarjeta_icon.JPG" alt="" class="paymentData_img">
                        <div class="paymentData_texts">
                            <p class="paymentData_metodoPago textoMediano">Cuotas sin tarjeta</p>
                            <a href=""><p class="paymentData_metodoPago_linkInfo textoChico">Conocé Mercado Crédito</p></a>
                        </div>
                    </div>

                    <div> 
                        <img src="img/index/efectivo_icon.JPG" alt="" class="paymentData_img">
                        <div class="paymentData_texts">
                            <p class="paymentData_metodoPago textoMediano">Efectivo</p>
                            <a href=""><p class="paymentData_metodoPago_linkInfo textoChico">Ver más</p></a>
                        </div>
                    </div>

                    <div>
                        <img src="img/index/mas_icon.JPG" alt="" class="paymentData_img">
                    </div>
                </div>
        	</section>

        	<!--OFERTAS-->
            <section class="seccionProductos">
                <h2 class="encabezado fontLato">Ofertas</h2> 
                <a href=""><p class="link_encabezado textoMediano">Ver todas</p></a>

                <!--Cards-->
                <div class="card-deck textoNormal">
                    <div class="card">
                        <a href="">
                            <img class="card-img-top card_imagen" src="img/index/ofertas/ofertas_primerProducto.JPG" alt="Card image cap">

                            <div class="card-body">
                                <h5 class="card-title">$ 33.333</h5>
                                <p class="card-text card_envio">Envío gratis</p>
                                <p class="card-text text-muted card_textoHidden">Smart Tv Jvc Lt43da5125 Led Full Hd 43 Netflix Youtube Wifi</p>
                            </div>
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                            <img class="card-img-top card_imagen" src="img/index/ofertas/ofertas_primerProducto.JPG" alt="Card image cap">

                            <div class="card-body">
                                <h5 class="card-title">$ 33.333</h5>
                                <p class="card-text card_envio">Envío gratis</p>
                                <p class="card-text text-muted card_textoHidden">Smart Tv Jvc Lt43da5125 Led Full Hd 43 Netflix Youtube Wifi</p>
                            </div>
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                            <img class="card-img-top card_imagen" src="img/index/ofertas/ofertas_primerProducto.JPG" alt="Card image cap">

                            <div class="card-body">
                                <h5 class="card-title">$ 33.333</h5>
                                <p class="card-text card_envio">Envío gratis</p>
                                <p class="card-text text-muted card_textoHidden">Smart Tv Jvc Lt43da5125 Led Full Hd 43 Netflix Youtube Wifi</p>
                            </div>
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                            <img class="card-img-top card_imagen" src="img/index/ofertas/ofertas_primerProducto.JPG" alt="Card image cap">

                            <div class="card-body">
                                <h5 class="card-title">$ 33.333</h5>
                                <p class="card-text card_envio">Envío gratis</p>
                                <p class="card-text text-muted card_textoHidden">Smart Tv Jvc Lt43da5125 Led Full Hd 43 Netflix Youtube Wifi</p>
                            </div>
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                            <img class="card-img-top card_imagen" src="img/index/ofertas/ofertas_primerProducto.JPG" alt="Card image cap">

                            <div class="card-body">
                                <h5 class="card-title">$ 33.333</h5>
                                <p class="card-text card_envio">Envío gratis</p>
                                <p class="card-text text-muted card_textoHidden">Smart Tv Jvc Lt43da5125 Led Full Hd 43 Netflix Youtube Wifi</p>
                            </div>
                        </a>
                    </div>
                </div>
            </section>

        	<!--Beneficios de Mercado Puntos-->
            <section class="seccionProductos">
                <h2 class="encabezado fontLato">Beneficios de Mercado Puntos</h2> 
                <a href=""><p class="link_encabezado textoMediano">Ver todos los beneficios</p></a>

                <div id="cardSlider">
                    <div id="beneficios_card-1" class="beneficios_card">
                        <img src="img/index/beneficios/beneficio_disney+.jpg" alt="">
                    </div>

                    <div id="beneficios_card-1" class="beneficios_card">
                        <img src="img/index/beneficios/beneficio_star+.jpg" alt="">
                    </div>

                    <div id="beneficios_card-1" class="beneficios_card">
                        <img src="img/index/beneficios/beneficio_HBOMax.jpg" alt="">
                    </div>

                    <div id="beneficios_card-1" class="beneficios_card">
                        <img src="img/index/beneficios/beneficio_paramount.jpg" alt="">
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
                        "link" => "ola",
                        "color" => "#998678",
                        "primerParrafo" => "Espacio para todo",
                        "segundoParrafo" => "La biblioteca de su vida"
                        ],

                        ["nombre" => "legion by lenovo",
                        "imagen" => "legion.jpg",
                        "logo" => "legionByLenovo.svg",
                        "link" => "ola",
                        "color" => "#020002",
                        "primerParrafo" => "Hasta 6 cuotas sin interés",
                        "segundoParrafo" => "Elegante por fuera, salvaje por dentro"
                        ]
                    ];
                    /*["nombre" => "HP",
                        "imagen" => "HP.jpg",
                        "logo" => ".svg",
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
                                    <img src="img/index/publicidades/logos/' . $publicidades[$numeroRandom]["logo"] . '" alt="">
                                </div>
                            </div>
                            <div id="espacioPublicitario_textos">
                                <p class="textoBlanco textoChicoGrande textoMayusculaEspaciado cards_textoLight fontPoppins">' . $publicidades[$numeroRandom]["primerParrafo"] . '</p>
                                <p class="textoBlanco textoGrandeCardMayuscula fontPoppins">' . $publicidades[$numeroRandom]["segundoParrafo"] . '</p>
                                <p class="fontLato textoBlanco texto textoChicoGrande">Ver más <i class="fas fa-chevron-right"></i></p>
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
                <div class="flexBetween">
                    <div class="card_descubri background_border_shadow">
                        <div>
                            <p class="textoChicoGrande textoMayusculaEspaciado cards_textoLight fontPoppins textoGris">Equipá tu hogar</p>
                            <p class="textoGrandeCardMayuscula cards_textosBold fontPoppins textoGris">Hasta 18 cuotas sin interés</p>
                            <button class="boton_azul">Ver más</button>
                        </div>
                        <img src="img/index/descubri/descubri_equipaTuHogar.png" alt="" class="img_descubri">
                    </div>
                    
                    <div class="card_descubri background_border_shadow">
                        <div>
                            <p class="textoChicoGrande textoMayusculaEspaciado cards_textoLight fontPoppins textoGris">Celulares</p>
                            <p class="textoGrandeCardMayuscula cards_textosBold fontPoppins textoGris">Hasta 9 cuotas sin interés</p>
                            <button class="boton_azul">Ver más</button>
                        </div>
                        <img src="img/index/descubri/descubri_celulares.png" alt="" class="img_descubri">
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
                                <img src="" alt="">
                            </div>

                            <div class="card_mejoresTiendas_bajoPortada">
                                <p class="fontPoppins textoGris textoMedianoGrande">LG</p>
                                <div class="card_mejoresTiendas_ctn_productos flexBetween">
                                    <img class="card_mejoresTiendas_productos" src="img/index/mejores_tiendas/LG/primerProducto_LG.jpg" alt="">
                                    <img class="card_mejoresTiendas_productos" src="" alt="">
                                    <img class="card_mejoresTiendas_productos" src="" alt="">
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
                                <img src="" alt="">
                            </div>

                            <div class="card_mejoresTiendas_bajoPortada">
                                <p class="fontPoppins textoGris textoMedianoGrande">Samsung</p>
                                <div class="card_mejoresTiendas_ctn_productos flexBetween">
                                    <img class="card_mejoresTiendas_productos" src="" alt="">
                                    <img class="card_mejoresTiendas_productos" src="" alt="">
                                    <img class="card_mejoresTiendas_productos" src="" alt="">
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
                            <div class="card_mejoresTiendas_portada">
                                <img src="" alt="">
                            </div>

                            <div class="card_mejoresTiendas_bajoPortada">
                                <p class="fontPoppins textoGris textoMedianoGrande">Creciendo</p>
                                <div class="card_mejoresTiendas_ctn_productos flexBetween">
                                    <img class="card_mejoresTiendas_productos" src="" alt="">
                                    <img class="card_mejoresTiendas_productos" src="" alt="">
                                    <img class="card_mejoresTiendas_productos" src="" alt="">
                                </div>
                                <div class="card_mejoresTiendas_logoFlotante">
                                    <img src="" alt="">
                                </div>
                                <p class="textoGris textoNormal textoChico">Ver tienda</p>
                            </div>
                        </div>
                    </a>

                    <a href="">
                        <div class="card_mejoresTiendas background_border_shadow">
                            <div class="card_mejoresTiendas_portada">
                                <img src="" alt="">
                            </div>

                            <div class="card_mejoresTiendas_bajoPortada">
                                <p class="fontPoppins textoGris textoMedianoGrande">Frávega</p>
                                <div class="card_mejoresTiendas_ctn_productos flexBetween">
                                    <img class="card_mejoresTiendas_productos" src="" alt="">
                                    <img class="card_mejoresTiendas_productos" src="" alt="">
                                    <img class="card_mejoresTiendas_productos" src="" alt="">
                                </div>
                                <div class="card_mejoresTiendas_logoFlotante">
                                    <img src="" alt="">
                                </div>
                                <p class="textoGris textoNormal textoChico">Ver tienda</p>
                            </div>
                        </div>
                        
                        <div id="flecha_mejoresTiendas">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </a>

                    <!--PASAR ESTA INFORMACIÓN A MATRIZ PORQUE SON RANDOM, VAN CAMBIANDO: Citroen, rex, lego, -->
                </div>
            </section>

        	<!--Te puede interesar-->
            <section class="seccionProductos">
                <h2 class="encabezado fontLato">Te puede interesar</h2> 
                <div class="flexBetween">
                    <div class="card_descubri background_border_shadow">
                        <div>
                            <p class="textoChicoGrande textoMayusculaEspaciado cards_textoLight fontPoppins textoGris">zapatillas deportivas</p>
                            <p class="textoGrandeCardMayuscula cards_textosBold fontPoppins textoGris">Hasta 30% OFF y 6x sin interés</p>
                            <button class="boton_azul">Ver más</button>
                        </div>
                        <img src="img/index/tePuedeInteresar/tePuedeInteresar_primerImagen.jpg" alt="" class="img_descubri">
                    </div>
                    
                    <div class="card_descubri background_border_shadow">
                        <div>
                            <p class="textoChicoGrande textoMayusculaEspaciado cards_textoLight fontPoppins textoGris">Especial primavera</p>
                            <p class="textoGrandeCardMayuscula cards_textosBold fontPoppins textoGris">Hasta 40% OFF</p>
                            <button class="boton_azul">Ver más</button>
                        </div>
                        <img src="img/index/tePuedeInteresar/tePuedeInteresar_segundaImagen.jpg" alt="" class="img_descubri">
                    </div>
                </div>
            </section>

        	<!--Categorías populares-->
            <section class="seccionProductos">
                <h2 class="encabezado fontLato">Categorías populares</h2>
                <div id="ctn_categorias" class="background_border_shadow">
                    <div class="flexRow">
                        <div class="categoria">
                            <i class="fas fa-car"></i>
                            <p class="textoChico">Computación</p>
                        </div>
                        <div class="categoria">
                            <i class="fas fa-desktop"></i>
                            <p>Electrodomésticos y Aires Ac.</p>
                        </div>
                        <div class="categoria">
                            <i class="fas fa-futbol"></i>
                            <p>Deportes y Fitness</p>
                        </div>
                        <div class="categoria">
                            <i class="fas fa-building"></i>
                            <p>Inmuebles</p>
                        </div>
                        <div class="categoria">
                            <i class="fas fa-car"></i>
                            <p>Belleza y Cuidado Personal</p>
                        </div>
                        <div class="categoria">
                            <i class="fas fa-car"></i>
                            <p>Juegos y Juguetes</p>
                        </div>
                        <div class="categoria">
                            <i class="fas fa-car"></i>
                            <p>Entradas para Eventos</p>
                        </div>
                    </div>
                    
                    <div class="flexRow">
                        <div class="categoria">
                            <i class="fas fa-tablet-alt"></i>
                            <p>Celulares y teléfonos</p>
                        </div>
                        <div class="categoria">
                            <i class="fas fa-microphone-alt"></i>
                            <p>Electrónica, Audio y Video</p>
                        </div>
                        <div class="categoria">
                            <i class="fas fa-tshirt"></i>
                            <p>Ropa y Accesorios</p>
                        </div>
                        <div class="categoria">
                            <i class="fas fa-couch"></i>
                            <p>Hogar, Muebles y Jardín</p>
                        </div>
                        <div class="categoria">
                            <i class="fas fa-car"></i>
                            <p>Accesorios para Vehículos</p>
                        </div>
                        <div class="categoria">
                            <i class="fas fa-car"></i>
                            <p>Consolas y Videojuegos</p>
                        </div>
                        <div class="categoria">
                            <i class="fas fa-car"></i>
                            <p>Alimentos y Bebidas</p>
                        </div>
                        <div class="categoria">
                            <i class="fas fa-car"></i>
                            <p>Herramientas</p>
                        </div>
                    </div>
                </div>
            </section>
    	</main>
 
    	<footer>
        	<!--BENEFICION MERCADO LIBRE-->
            <section >

            </section>
            
        	<!--COLUMNAS-->
            <section></section>
            
        	<!--USUARIOS FINANCIEROS-->
            <section></section>
            
        	<!--MÁS INFORMACIÓN-->
            <section></section>
    	</footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="script.js"></script>
    </body>
</html>

