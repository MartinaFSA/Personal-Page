<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>

        <meta name="keywords" content="portfolio, personal page, web developer, martina, fernandez, suarez, anzorena"/>
        <meta name="description" content="Currículum web y portfolio de Martina Fernández Suárez Anzorena."/>
        <meta http-equiv="Content-Language" content="es"/>
        <meta name="author" content="MartinaFSA/">

        <title>Portfolio - Martina Fernández Suárez Anzorena</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        
        <script src="https://kit.fontawesome.com/9170870617.js" crossorigin="anonymous"></script>

        <link href="https://api.fontshare.com/css?f[]=general-sans@200,300,400,500&f[]=clash-display@500&f[]=bespoke-sans@300&f[]=rx-100@400&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="estilos/sintaxis.css">
        <link rel="stylesheet" href="estilos/estilosPortfolio.css">
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        
        <header>
            <!--INTRODUCCIÓN A LA PÁGINa-->
            <section id="introPage">
                <!--FIGURAS-->
                <div class="formaLlena introPage__rectanguloLleno"></div>

                <div id="introPage__rectanguloStroke" class="formaStroke"></div>
                
                <div id="introPage__rectanguloVerticalLleno" class="formaLlena"></div>
                
                <div id="introPage__rectanguloVerticalStroke" class="formaStroke"></div>

                <div id="introPage__cuadradoLleno" class="formaLlena"></div>

                <div id="introPage__cuadradoStroke" class="formaStroke"></div>
                
                <div id="introPage__trianguloLleno"></div>
                
                <div id="introPage__trianguloStroke1" class="trianguloStroke"></div>
                <div id="introPage__trianguloStroke2" class="trianguloStroke"></div>
                <div id="introPage__trianguloStroke3" class="trianguloStroke"></div>

                <div id="pageIntro__flecha1">
                    <div id="pageIntro__flecha1--paloCentral"></div>
                    <div id="pageIntro__flecha1--palito"></div>
                    <div id="pageIntro__flecha1--palito2"></div>
                </div>

                <div id="introPage__cruz1"></div>
                <div id="introPage__cruz2"></div>

                <!--TEXTo-->
                <div id="introPage__titulosPortfolio">
                    <p id="introPage__titulosPortfolio--titulo">PORTFOLIO</p>
                    <button class="navBar__linkPortfolio" id="introPage__titulosPortfolio--coderMode">DARK THEME</button>
                </div>
            </section>
            
            <!--NAVIGATION BAR-->
            <section id="ctn__navBarPortfolio">
                <nav>
                    <a href="index.php" target="_blank" id="navBar__mainPortfolio">MartinaFSA</a>
                    <a href="#webs" class="navBar__linkPortfolio" id="navBar__linkWebs">WEBS</a>
                    <!--<a href="#diseño" class="navBar__linkPortfolio" id="navBar__linkDiseño">DISEÑO</a>-->
                </nav>
            </section>
        </header>

        <main>
        
            <!--PÁGINAS-->
            <section id="webs">

                <p class="sectionTitlePortfolio">Páginas Web</p>
                <!--La página 2 es la primera en mostrarse-->
                <article class="filaFlex fade-in">
                
                    <div class="columnaFlex9 presentacionPagina">
                        <div class="fondo__PresentacionPagina"></div>

                        <div class="imagen__PresentacionPagina">
                            <img src="img/paginas/portfolio_page2_preview.JPG" alt="" class="previews">
                        </div>
                        
                        <div class="clickMe4Modal">
                            <div class="clickMe4Modal__content">
                                <button class="clickMe4Modal__content--button" id="modalDePagina2--abrir">Ver más</button>
                            </div>
                        </div>
                    </div>

                    <div class="columnaFlex3 textoSobreLaPagina">
                        <p class="sectionSubtitle">Recetario</p>
                        <p class="descripcionProyecto">Esta página es un proyecto personal realizado para ordenar mis recetas favoritas. La página <!--tiene un filtro de ingredientes y varias categorías según mis criterios de orden propios, 
                            además, incluye una sección de recetas guardadas para que el usuario acceda a sus recetas favoritas rápidamente.-->contiene una sección de recetas guardadas a la que se accede iniciando sesión.</p>
                            <p><b>Tecnologías utilizadas: </b>HTML, CSS, JS, SQL y PHP</p>
                        <p>Podés acceder al código de la página <a href="https://github.com/MartinaFSA/Recetario-PHP" target="_blank">acá</a></p>
                    </div>
                </article>

                <article class="filaFlex fade-in">
                
                    <div class="columnaFlex9 presentacionPagina">
                        <div class="fondo__PresentacionPagina"></div>

                        <div class="imagen__PresentacionPagina" >
                            <img src="img/paginas/portfolio_page1_preview.JPG" alt="" class="previews">
                        </div>

                        <div class="clickMe4Modal">
                            <div class="clickMe4Modal__content">
                                <button class="clickMe4Modal__content--button" id="modalDePagina1--abrir">Ver más</button>
                            </div>
                        </div>
                    </div>

                    <div class="columnaFlex3 textoSobreLaPagina">
                        <p class="sectionSubtitle">Página en proceso</p>
                        <p class="descripcionProyecto">Esta página recopilará cursos y actividades gratuitos que se puedan realizar en CABA. Tendrá filtros para buscar por día, mes o lugar donde se llevará a cabo y una barra de búsqueda.</p>
                        <p><b>Estimación de tecnologías a utilizar: </b> HTML, CSS, JS, PHP.</p>
                        <p>Podés acceder al prototipo en <a href="https://www.figma.com/file/BOJGILRVeEWAvGmIsq8CUC/CABA?node-id=0%3A1" target="_blank">este link </a>de Figma.</p>
                    </div>
                </article>

            <!--
                <article class="filaFlex fade-in">
                
                    <div class="columnaFlex9 presentacionPagina">
                        <div class="fondo__PresentacionPagina"></div>

                        <div class="imagen__PresentacionPagina">
                            <img src="img/paginas/portfolio_page3_preview.JPG" alt="" class="previews">
                        </div>

                        <div class="clickMe4Modal">
                            <div class="clickMe4Modal__content">
                                <button class="clickMe4Modal__content--button" id="modalDePagina3--abrir">Ver más</button>
                            </div>
                        </div>
                    </div>

                    <div class="columnaFlex3 textoSobreLaPagina">
                        <p class="sectionSubtitle">XXXXX XXXXXXX</p>
                        <p class="descripcionProyecto">XXXXXXXXX XXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXX XXXXXXXXXXX XXXXXXXXXXXXX XXXX XXXXXX XXXXX XXXXXXXX.</p>
                        <p><b>Tecnologías utilizadas: </b></p>
                        <p>Podés acceder a esta página en: <a href="" target="_blank">XXXXXXXXXXXXXX.com.ar</a></p>
                    </div>
                </article>

                <article class="filaFlex fade-in">
                
                    <div class="columnaFlex9 presentacionPagina">
                        <div class="fondo__PresentacionPagina"></div>

                        <div class="imagen__PresentacionPagina">
                            <img src="img/paginas/portfolio_page4_preview.JPG" alt="" class="previews">
                        </div>

                        <div class="clickMe4Modal">
                            <div class="clickMe4Modal__content">
                                <button class="clickMe4Modal__content--button" id="modalDePagina4--abrir">Ver más</button>
                            </div>
                        </div>
                    </div>

                    <div class="columnaFlex3 textoSobreLaPagina">
                        <p class="sectionSubtitle">XXXXX XXXXXXX</p>
                        <p class="descripcionProyecto">XXXXXXXXX XXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXX XXXXXXXXXXX XXXXXXXXXXXXX XXXX XXXXXX XXXXX XXXXXXXX.</p>
                        <p><b>Tecnologías utilizadas: </b></p>
                        <p>Podés acceder a esta página en: <a href="" target="_blank">XXXXXXXXXXXXXX.com.ar</a></p>
                    </div>
                </article> 
            -->
            </section>

            <!--MODALES-->
            <article class="modal" id="modalDePagina1">
                <div class="modal__content">
                    <header class="modal__header">
                        <p class="modalTitle">pag1</p>
                        <button class="close-modal" id="close-modal1"> ✕ </button> <!--Estoy ignorando el aria label-->
                    </header>

                    <section class="modal__body"> 

                        <div class="modal__body-columna1">
                            <img src="" alt="" class="capturaPaginaEntera">
                        </div>

                        <div class="modal__body-columna2">
                            <img src="" alt="" class="destacable1">
                            <img src="" alt="" class="destacable2">
                        </div>
                    </section>
                </div>
            </article>


            <article class="modal" id="modalDePagina2">
                <div class="modal__content">
                    <header class="modal__header">
                        <p class="modalTitle">Recetario</p>
                        <button class="close-modal" id="close-modal2"> ✕ </button>
                    </header>

                    <section class="modal__body"> 

                        <div class="modal__body-columna1">
                            <img src="img/paginas/segundaPagina__completa.png" alt="Captura completa de la página" class="capturaPaginaEntera">
                        </div>

                        <div class="modal__body-columna2">
                            <img src="img/paginas/segundaPagina__destacable1.JPG" alt="Menú desplegable" class="destacable1">
                            <img src="img/paginas/segundaPagina__destacable2.JPG" alt="Ventana modal de inicio de sesión" class="destacable2">
                        </div>
                    </section>
                </div>
            </article>
            
        <!--
            <article class="modal" id="modalDePagina3">
                <div class="modal__content">
                    <header class="modal__header">
                        <p class="modalTitle">pag3</p>
                        <button class="close-modal" id="close-modal3"> ✕ </button>
                    </header>

                    <section class="modal__body"> 

                        <div class="modal__body-columna1">
                            <img src="" alt="" class="capturaPaginaEntera">
                        </div>

                        <div class="modal__body-columna2">
                            <img src="" alt="" class="destacable1">
                            <img src="" alt="" class="destacable2">
                        </div>
                    </section>
                </div>
            </article>
                    
            <article class="modal" id="modalDePagina4">
                <div class="modal__content">
                    <header class="modal__header">
                        <p class="modalTitle">pag4</p>
                        <button class="close-modal" id="close-modal4"> ✕ </button>
                    </header>

                    <section class="modal__body"> 

                        <div class="modal__body-columna1">
                            <img src="" alt="" class="capturaPaginaEntera">
                        </div>

                        <div class="modal__body-columna2">
                            <img src="" alt="" class="destacable1">
                            <img src="" alt="" class="destacable2">
                        </div>
                    </section>
                </div>
            </article>
        -->

            <!--DISEÑOS-->

            <!--
            <section id="diseño">

                <p class="sectionTitlePortfolio">Diseño</p>

                <div id="ctn__diseños" class="fade-in">
                    <div class="item1 diseño_item">
                        <img src="" alt="">
                    </div>

                    <div class="item2 diseño_item">
                        <img src="" alt="">
                    </div>

                    <div class="item3 diseño_item">
                        <img src="" alt="">
                    </div>

                    <div class="item4 diseño_item">
                        <img src="" alt="">
                    </div>
                    
                    <div class="item5 diseño_item">
                        <img src="" alt="">
                    </div>

                    <div class="item6 diseño_item">
                        <img src="" alt="">
                    </div>
                    
                    <div class="item7 diseño_item">
                        <img src="" alt="">
                    </div>

                    <div class="item8 diseño_item">
                        <img src="" alt="">
                    </div>
                    
                    <div class="item9 diseño_item">
                        <img src="" alt="">
                    </div>

                    <div class="item10 diseño_item">
                        <img src="" alt="">
                    </div>

                    <div class="item11 diseño_item">
                        <img src="" alt="">
                    </div>

                </div>

            </section>-->
        </main>

    
        <footer>
            <!--Sólo funciona con PHP :// github no supportea php-->
            <div id="footer__fila">
                <div id="footer__contacto">
                    <form action="" method="POST">
                        <p class="texto__footer">Mandame un mail</p>
                        
                        <label for="nombreAsunto">Nombre</label>
                        <input type="text" name="nombreAsunto" placeholder="Ingresá tu nombre">

                        <label for="emisor">Mail</label>
                        <input type="email" name="emisor" autocomplete="email" placeholder="Ingresá tu mail" required>

                        <textarea name="mensaje" style="resize: none;" placeholder="Escribí tu mensaje acá" required></textarea>

                        <input type="submit" name="enviarMail" id="enviarMail">
                    </form>

                    <!--MODAL-->
                    <?php  
                        if(isset($_POST["enviarMail"])) {
                            $emisor = $_POST['emisor'];
                            
                            
                            if(isset($_POST['emisor']) && $emisor = filter_var($emisor, FILTER_VALIDATE_EMAIL)) {
                                $mensajeMail = $_POST['mensaje'];
                                $mensajeMail = wordwrap( $mensajeMail, 70, "\r\n" );
                                $asunto = $_POST['nombreAsunto'] . " - Contacta desde mi página";

                                mail('martina.fernandez.sa@gmail.com', $asunto, $mensajeMail, "From: " . $emisor); //destinatario, asunto, mensaje, quien lo envía
                                $mensaje = "Gracias por su mensaje! Lo contestaré a la brevedad";
                                
                            }else {
                                $mensaje = "Por favor, inserta una dirección de mail válida";
                            }
                        }

                        if(isset($mensaje)) { //Si $mensaje existe...
                                
                            echo "<section id='contenedorDeModal'>
                                <div id='modalAviso' class='ctn__modalPHP'>
                                    <div class='modalPHP'>
                                        <p>" . $mensaje . "</p>
                                    </div>
                                </div>
            
                            </section>";
                        }
                    ?>
                </div>
                <div id="footer__redes"> 
                    <div>
                        <p id="sectionTitleFooter">Gracias por tu visita<!-- y armemos un proyecto!--></p>
                    </div>
                    <p class="texto__footer">Seguime en mis redes</p>
                    <div class="social">
                        <a href="https://github.com/MartinaFSA" target="_blank" class="footer__social--link"> <i class="fab fa-github" style="font-size: 4vh; margin-top: 0.5vw; margin-top: 1vh;"> </i> </a>
                        <a href="https://www.linkedin.com/in/martina-fern%C3%A1ndez-su%C3%A1rez-anzorena-7ab978213/" target="_blank" class="footer__social--link"> <i class="fab fa-linkedin-in" style="font-size: 4vh; margin-top: 1vh;"> </i> </a>
                        <a href="#" target="_blank" class="footer__social--link"> <i class="fab fa-instagram" style="font-size: 4vh; margin-top: 1vh;"> </i> </a>
                    </div>
                </div>
            </div>
            <div id="backToTop">
                <a href="#introPage" class="texto__footer">Volver al inicio <i class="fas fa-angle-down" style="font-size: 3vh; transform: rotate(180deg);"></i> </a>
            </div>
        </footer>

        <script src="scripts.js"></script>
        <script src="scriptPortfolio.js"></script>
    </body>
</html>