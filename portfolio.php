<!DOCTYPE html>
<html lang="es">

    <head>
        <?php
            include("componentes/head.php");
        ?>

        <title>Portfolio - Martina Fernández Suárez Anzorena</title>

        <link rel="stylesheet" href="estilos/indexYGenerales.css">
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
                    <a href="index" target="_blank" id="navBar__mainPortfolio" style="font-size: 1.5rem" itemprop="url">MartinaFSA</a>
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
                        <p class="descripcionProyecto textoChico">Esta página es un proyecto personal realizado para ordenar mis recetas favoritas. La página contiene una sección de recetas guardadas a la que se accede iniciando sesión. Mirá la demo <a href="proyectos/recetario/demoRecetario.php">acá.</a> </p>
                            <p class="textoChico"><b>Tecnologías utilizadas: </b>HTML, CSS, JS, SQL y PHP</p>
                        <p class="textoChico">Podés acceder al código de la página <a href="https://github.com/MartinaFSA/Recetario-PHP" itemprop="url" target="_blank">en GitHub</a></p>
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
                        <p class="textoChico">Podés acceder al prototipo en <a href="https://www.figma.com/file/BOJGILRVeEWAvGmIsq8CUC/CABA?node-id=0%3A1"  itemprop="url" target="_blank">este link </a>de Figma.</p>
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
                        <p class="textoChico">Podés acceder a esta página <a href="proyectos/mercadoLibre/index" target="_blank">acá.</a></p>
                    </div>
                </article>

                <!-- <article class="filaFlex fade-in">
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
                        <p class="textoChico">Podés acceder a esta página en: <a href=""  itemprop="url" target="_blank">XXXXXXXXXXXXXX.com.ar</a></p>
                    </div>
                </article> -->
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
                            <!--<img src="img/paginas/primeraPagina__destacable1.JPG" alt="" class="destacable1">
                            <img src="img/paginas/primeraPagina__destacable2.JPG" alt="" class="destacable2"> -->
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
                            <!--<img src="" alt="" class="destacable1">
                            <img src="" alt="" class="destacable2"> -->
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
    
        <?php
            include("componentes/footer.php");
        ?>
        
            <div id="backToTop">
                <a href="#pageIntro" class="texto__footer textoMediano textoFooter">Volver al inicio <i class="fas fa-angle-down" style="font-size: 3vh; transform: rotate(180deg);"></i> </a>
            </div>
        </footer>
        <script src="scripts.js"></script>
        <script src="scriptPortfolio.js"></script>
    </body>
</html>