<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>

        <meta name="keywords" content="portfolio, personal page, web developer, martina fernandez suarez, anzorena"/>
        <meta name="description" content="Portfolio de Martina Fernández Suárez Anzorena."/>
        <meta http-equiv="Content-Language" content="es"/>
        <meta name="author" content="MartinaFSA">

        <link rel = "icon" href = "img/favIcon.svg">

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
            <section id="pageIntroPortfolio">
                <div id="fondo_pageIntroPortfolio"></div>
                <div id="pageIntro__ctn--textPortfolio">
                    <p class="textoTitulo">Portfolio</p>
                </div>
            </section>
            
            <!--NAVIGATION BAR-->
            <section id="ctn__navBarPortfolio">
                <nav>
                    <a href="index.php" target="_blank" id="navBar__mainPortfolio" style="font-size: 1.5rem">MartinaFSA</a>
                    <a href="#webs" id="navBar__linkWebs" class="navBar__linkPortfolio textoMediano">WEBS</a>
                    <!--<a href="#diseño" class="navBar__linkPortfolio textoMediano" id="navBar__linkDiseño">DISEÑO</a>-->
                </nav>
            </section>
        </header>

        <main>
        
            <!--PÁGINAS-->
            <section id="webs">

                <p class="sectionTitlePortfolio textoGrande">Páginas Web</p>
                <!--La página 2 es la primera en mostrarse-->
                <article class="filaFlex fade-in">
                
                    <div class="columnaFlex9 presentacionPagina">
                        <div class="fondo__PresentacionPagina"></div>

                        <div class="imagen__PresentacionPagina">
                            <img src="img/paginas/portfolio_page2_preview.JPG" alt="" class="previews">
                        </div>
                        
                        <div class="clickMe4Modal">
                            <div class="clickMe4Modal__content">
                                <button class="clickMe4Modal__content--button textoMediano" id="modalDePagina2--abrir">Ver más</button>
                            </div>
                        </div>
                    </div>

                    <div class="columnaFlex3 textoSobreLaPagina">
                        <p class="sectionSubtitle textoMediano">Recetario</p>
                        <p class="descripcionProyecto textoChico">Esta página es un proyecto personal realizado para ordenar mis recetas favoritas. La página contiene una sección de recetas guardadas a la que se accede iniciando sesión.</p>
                            <p class="textoChico"><b>Tecnologías utilizadas: </b>HTML, CSS, JS, SQL y PHP</p>
                        <p class="textoChico">Podés acceder al código de la página <a href="https://github.com/MartinaFSA/Recetario-PHP" target="_blank">en GitHub</a></p>
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
                                <button class="clickMe4Modal__content--button textoMediano" id="modalDePagina1--abrir">Ver más</button>
                            </div>
                        </div>
                    </div>

                    <div class="columnaFlex3 textoSobreLaPagina">
                        <p class="sectionSubtitle textoMediano">Actividades en CABA (en proceso)</p>
                        <p class="descripcionProyecto textoChico">Esta página recopilará cursos y actividades gratuitos que se puedan realizar en CABA. Tendrá filtros para buscar por día, mes o lugar donde se llevará a cabo y una barra de búsqueda.</p>
                        <p class="textoChico"><b>Estimación de tecnologías a utilizar: </b> HTML, CSS, JS, PHP.</p>
                        <p class="textoChico">Podés acceder al prototipo en <a href="https://www.figma.com/file/BOJGILRVeEWAvGmIsq8CUC/CABA?node-id=0%3A1" target="_blank">este link </a>de Figma.</p>
                    </div>
                </article>

                <article class="filaFlex fade-in">
                
                    <div class="columnaFlex9 presentacionPagina">
                        <div class="fondo__PresentacionPagina"></div>

                        <div class="imagen__PresentacionPagina">
                            <img src="img/paginas/portfolio_page3_preview.JPG" alt="" class="previews">
                        </div>

                        <div class="clickMe4Modal">
                            <div class="clickMe4Modal__content">
                                <button class="clickMe4Modal__content--button textoMediano" id="modalDePagina3--abrir">Ver más</button>
                            </div>
                        </div>
                    </div>

                    <div class="columnaFlex3 textoSobreLaPagina">
                        <p class="sectionSubtitle textoMediano">Copia de Mercado Libre (en proceso)</p>
                        <p class="descripcionProyecto textoChico">Maquetado frontend de la página de Mercado Libre hecho a partir de la página oficial de argentina.</p>
                        <p class="textoChico"><b>Tecnologías utilizadas: HTML, CSS, Bootstrap, JS y PHP.</b></p>
                        <p class="textoChico">Podés acceder a esta página <a href="proyectos/mercadoLibre/index.php" target="_blank">acá.</a></p>
                    </div>
                </article>

<!--
                <article class="filaFlex fade-in">
                
                    <div class="columnaFlex9 presentacionPagina">
                        <div class="fondo__PresentacionPagina"></div>

                        <div class="imagen__PresentacionPagina">
                            <img src="img/paginas/portfolio_page4_preview.JPG" alt="" class="previews">
                        </div>

                        <div class="clickMe4Modal">
                            <div class="clickMe4Modal__content">
                                <button class="clickMe4Modal__content--button textoMediano" id="modalDePagina4--abrir">Ver más</button>
                            </div>
                        </div>
                    </div>

                    <div class="columnaFlex3 textoSobreLaPagina">
                        <p class="sectionSubtitle textoMediano">XXXXX XXXXXXX</p>
                        <p class="descripcionProyecto textoChico">XXXXXXXXX XXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXX XXXXXXXXXXX XXXXXXXXXXXXX XXXX XXXXXX XXXXX XXXXXXXX.</p>
                        <p class="textoChico"><b>Tecnologías utilizadas: </b></p>
                        <p class="textoChico">Podés acceder a esta página en: <a href="" target="_blank">XXXXXXXXXXXXXX.com.ar</a></p>
                    </div>
                </article> 
            -->
            </section>

            <!--MODALES-->
            <article class="modal" id="modalDePagina1">
                <div class="modal__content">
                    <div class="modal__header">
                        <p class="modalTitle">Actividades en CABA</p>
                        <button class="close-modal" id="close-modal1"> ✕ </button>
                    </div>

                    <section class="modal__body"> 

                        <div class="modal__body-columna1">
                            <img src="img/paginas/primeraPagina__completa.PNG" alt="Captura completa de la página" class="capturaPaginaEntera">
                        </div>

                        <div class="modal__body-columna2">
                            <img src="img/paginas/primeraPagina__destacable1.JPG" alt="" class="destacable1">
                            <img src="img/paginas/primeraPagina__destacable2.JPG" alt="" class="destacable2">
                        </div>
                    </section>
                </div>
            </article>


            <article class="modal" id="modalDePagina2">
                <div class="modal__content">
                    <div class="modal__header">
                        <p class="modalTitle">Recetario</p>
                        <button class="close-modal" id="close-modal2"> ✕ </button>
                    </div>

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
            
            <article class="modal" id="modalDePagina3">
                <div class="modal__content">
                    <div class="modal__header">
                        <p class="modalTitle">Copia de Mercado Libre</p>
                        <button class="close-modal" id="close-modal3"> ✕ </button>
                    </div>

                    <section class="modal__body"> 

                        <div class="modal__body-columna1">
                            <img src="img/paginas/terceraPagina__completa.PNG" alt="Captura completa de la página" class="capturaPaginaEntera">
                        </div>

                        <div class="modal__body-columna2">
                            <img src="" alt="" class="destacable1">
                            <img src="" alt="" class="destacable2">
                        </div>
                    </section>
                </div>
            </article>

        <!--
            <article class="modal" id="modalDePagina4">
                <div class="modal__content">
                    <div class="modal__header">
                        <p class="modalTitle">pag4</p>
                        <button class="close-modal" id="close-modal4"> ✕ </button>
                    </div>

                    <section class="modal__body"> 

                        <div class="modal__body-columna1">
                            <img src="img/paginas/cuartaPagina__completa.PNG" alt="Captura completa de la página" class="capturaPaginaEntera">
                        </div>

                        <div class="modal__body-columna2">
                            <img src="img/paginas/cuartaPagina__destacable1.JPG" alt="" class="destacable1">
                            <img src="img/paginas/cuartaPagina__destacable2.JPG" alt="" class="destacable2">
                        </div>
                    </section>
                </div>
            </article>
        -->

            <!--DISEÑOS-->

            <!--
            <section id="diseño">

                <p class="sectionTitlePortfolio textoGrande">Diseño</p>

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
            <div id="footerSec"></div>
            <div id="footer__fila">
                <div id="footer__contacto">
                    <form action="" method="POST">
                        <p class="texto__footer textoMediano textoFooter">Mandame un mail</p>
                        
                        <label for="nombreAsunto" class="textoChico textoFooter">Nombre</label>
                        <input type="text" name="nombreAsunto" placeholder="Ingresá tu nombre" autocomplete="name" required>

                        <label for="emisor" class="textoChico textoFooter">Mail</label>
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
                                <div id='modalAviso'>
                                    <div class='modalPHP textoChico'>
                                        <p>" . $mensaje . "</p>
                                    </div>
                                </div>
            
                            </section>";
                        }
                    ?>
                </div>

                <div id="footer__redes"> 
                    <p class="texto__footer textoMediano textoFooter">Seguime en mis redes</p>
                    <div class="social">
                        <a href="https://github.com/MartinaFSA" target="_blank" class="footer__social--link"> <i class="fab fa-github" style="font-size: 4vh; margin-top: 0.5vw; margin-top: 1vh;"> </i> </a>
                        <a href="https://www.linkedin.com/in/martina-fernandez-suarez-anzorena/" target="_blank" class="footer__social--link"> <i class="fab fa-linkedin-in" style="font-size: 4vh; margin-top: 1vh;"> </i> </a>
                        <a href="#" target="_blank" class="footer__social--link"> <i class="fab fa-instagram" style="font-size: 4vh; margin-top: 1vh;"> </i> </a>
                    </div>
                </div>
            </div>
            <div id="backToTop">
                <a href="#pageIntroPortfolio" class="texto__footer textoMediano textoFooter">Volver al inicio <i class="fas fa-angle-down" style="font-size: 3vh; transform: rotate(180deg);"></i> </a>
            </div>
        </footer>
        
        <script src="scripts.js"></script>
        <script src="scriptPortfolio.js"></script>
    </body>
</html>