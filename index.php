<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>

        <meta name="keywords" content="portfolio, personal page, web developer, martina, fernandez, suarez, anzorena"/>
        <meta name="description" content="Currículum web y portfolio de Martina Fernández Suárez Anzorena."/>
        <meta http-equiv="Content-Language" content="es"/>
        <meta name="author" content="MartinaFSA/">

        <!--<link rel = "icon" href = "../img/">-->

        <title>Inicio - Martina Fernández Suárez Anzorena</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        
        <script src="https://kit.fontawesome.com/9170870617.js" crossorigin="anonymous"></script>

        <link href="https://api.fontshare.com/css?f[]=general-sans@200,300,400,500&f[]=clash-display@500&f[]=bespoke-sans@300&f[]=rx-100@400&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="estilos/sintaxis.css">

    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        
        <header> 
            <section id="pageIntro">
                <!--TEXTO BIENVENIDA-->
                <div id="pageIntro__ctn--text">
                    <div id="pageIntro__text">
                        <div class="textoTitulo textoMainColor">
                            <p>soy Martina Fernández Suárez</p>
                        </div>
                        
                        <div class="textoTitulo textoGrisVerde">
                            <p>Bienvenido a mi página</p>
                        </div>
                    </div>
                </div>
                
                <!--FIGURAS-->
                <div class="formaLlena pageIntro__rectanguloLleno"></div>

                <div class="formaStroke pageIntro__rectanguloStroke"></div>
                
                <div class="formaLlena pageIntro__rectanguloVerticalLleno"></div>
                
                <div class="formaStroke pageIntro__rectanguloVerticalStroke"></div>

                <div class="formaLlena pageIntro__cuadradoLleno"></div>

                <div class="formaStroke pageIntro__cuadradoStroke"></div>
                
                <div id="pageIntro__trianguloLleno"></div>
                
                <div class="trianguloStroke pageIntro__trianguloStroke1"></div>
                <div class="trianguloStroke pageIntro__trianguloStroke2"></div>
                <div class="trianguloStroke pageIntro__trianguloStroke3"></div>

                <div class="pageIntro__flecha1">
                    <div class="pageIntro__flecha1--paloCentral"></div>
                    <div class="pageIntro__flecha1--palito"></div>
                    <div class="pageIntro__flecha1--palito2"></div>
                </div>

                <div class="pageIntro__cruz1"></div>
                <div class="pageIntro__cruz2"></div>
            </section>
        </header>
        
        <main>
            <!--BARRA DE NAVEGACIÓN INTERNA-->
            <div id="barraFlotante">
                <div id="barraFlotante__ctnUl">
                    <ul>
                        <li><a href="#navBar" class="barraFlotante__aLi">◉</a></li>
                        <li><a href="#herramientasInformaticas" class="barraFlotante__aLi">◉</a></li>
                        <li><a href="#idiomas" class="barraFlotante__aLi">◉</a></li>
                        <li> <a href="#formacionAcademica" class="barraFlotante__aLi">◉</a></li>
                        <!--<li><a href="#experienciaLaboral" class="barraFlotante__aLi">◉</a></li> -->
                        <li><a href="#finPag" class="barraFlotante__aLi">◉</a></li>
                    </ul>
                </div>
            </div>

            <!--NAVIGATION BAR-->
            <section id="ctn__navBar">
                <nav id="navBar">
                    <a href="portfolio.php" target="_blank" class="navBar__link textoMediano">PORTFOLIO</a>
                    <a href="index.php" class="navBar__main">MartinaFSA</a>
                    <button class="navBar__link textoMediano" id="coderMode">DARK THEME</button>
                </nav>
            </section>

            <!--SOBRE MÍ-->
            <section id="perfil">
                <p class="sectionTitle textoGrande">PERFIL</p>

                <!--<svg viewBox="0 0 500 500">
                    <path id="curve" d="M 121 458 c -3 -28 19 -152 152 -159 c 118 5 155 108 151 160"/> 
                    <text> <textPath xlink:href="#curve">Seguime en mis redes</textPath> </text> 
                </svg> https://css-tricks.com/moving-text-on-a-curved-path/-->
                
                <section class="perfil__elementos">
                    
                    <article id="perfil__sobreMi">
                        <p class="sectionSubtitle textoMediano">Sobre Mí</p>
                        <p class="textoChico">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pretium nisl vitae laoreet interdum.Quisque rhoncus id ipsum in suscipit. Nulla lorem urna, finibus ut nisl sit amet, auctor laoreet turpis. Nam quis nibh vitae mi vestibulum semper. </p>
                    </article>

                    <article id="perfil__foto">
                        <div id="perfil__foto--imagen">
                            <img src="img/MFSA_fotocv.png" width="" height="" alt="Foto de Martina">
                        </div>
                    </article>

                    <article id="perfil__contacto">
                        <p class="sectionSubtitle textoMediano">Datos</p>
                        <ul>
                            <li class="textoChico"><b>Ubicación:</b>
                            Boedo, CABA, Argentina</li>
                                    
                            <li class="textoChico"><b>Teléfono celular: </b>
                            Error 403, <br>this information is unaccesible. </li>

                            <li class="textoChico"><b>To get granted access send mail to: </b>
                            martina.fernandez.sa@gmail.com</li>

                            <li class="textoChico"><b>Nacimiento: </b>
                            14 de julio de 2002</li>
                        </ul>
                    </article>
                </section>

                <section id="perfil__misRedes">
                    <ul>
                        <button> <li> <a href="https://github.com/MartinaFSA" target="_blank" class="perfil__misRedes--button textoChico">Github</a> </li> </button>
                        
                        <button> <li> <a href="https://www.linkedin.com/in/martina-fern%C3%A1ndez-su%C3%A1rez-anzorena-7ab978213/" target="_blank" class="perfil__misRedes--button textoChico">LinkedIn</a> </li> </button>

                        <button> <li><a href="https://www.instagram.com/martinafsa/?utm_medium=copy_link" target="_blank" class="perfil__misRedes--button textoChico">Instagram</a> </li> </button>
                                            
                        <button> <li> <a href="img/MartinaFernándezSuárezAnzorenaCV.pdf" class="perfil__misRedes--button textoChico" download="MartinaFernándezSuárezAnzorena_CV">CV en PDF</a> </li> </button>
                        <!--<div class="tooltip">
                            <span class="tooltipText">Click para descargar</span>
                        </div>-->

                    </ul>
                </section>
            </section>

            <!--Botonera-->
            <section id="ctnCajasHabilidades" class="container-fluid">
                <p class="sectionTitle col-12 textoGrande">FORMACIÓN Y HABILIDADES</p>
                
                <article class="row" id="cajasHabilidades">
                    <div class="cajasHabilidades__caja col-sm-6 col-md-3 col-lg-3">
                        <a href="#herramientasInformaticas">
                            <i class="fas fa-hashtag iconsSize"></i>
                            <p class="caja__title textoMediano">Herramientas Informáticas</p>
                        </a>
                        <div class="flechaCaja">
                            <a href="#herramientasInformaticas" alt="Apretá para ir a la sección">
                                <i class="fas fa-angle-down" style="font-size: 3vh; padding-top: 1%;"></i>
                            </a>
                        </div>
                    </div>

                    <div class="cajasHabilidades__caja col-sm-6 col-md-3 col-lg-3">
                        <a href="#formacionAcademica">
                            <i class="fas fa-book iconsSize"></i>
                            <p class="caja__title textoMediano">Formación Académica</p>
                        </a>
                        <div class="flechaCaja">
                            <a href="#formacionAcademica" alt="Apretá para ir a la sección">
                                <i class="fas fa-angle-down" style="font-size: 3vh; padding-top: 1%;"></i>
                            </a>
                        </div>
                    </div>

                    <div class="cajasHabilidades__caja col-sm-6 col-md-3 col-lg-3">
                        <a href="#formacionAcademica">
                            <i class="fas fa-briefcase iconsSize"></i>
                            <p class="caja__title textoMediano">Experiencia Laboral</p>
                        </a>
                        <div class="flechaCaja">
                            <a href="#formacionAcademica" alt="Apretá para ir a la sección">
                                <i class="fas fa-angle-down" style="font-size: 3vh; padding-top: 1%;"></i>
                            </a>
                        </div>
                    </div>

                    <div class="cajasHabilidades__caja col-sm-6 col-md-3 col-lg-3">
                        <a href="#idiomas">
                            <i class="fas fa-comment-dots iconsSize"></i>
                            <p class="caja__title textoMediano">Idiomas</p>
                        </a>
                        <div class="flechaCaja">
                            <a href="#idiomas" alt="Apretá para ir a la sección">
                                <i class="fas fa-angle-down" style="font-size: 3vh; padding-top: 1%;"></i>
                            </a>
                        </div>
                    </div> 
                </article>
            </section>

            <!--Información de las botoneras-->
            <!--Herramientas Informáticas-->
            <section id="herramientasInformaticas" class="fade-in filaFlex">
                    <div class="portadaHabilidades columnaFlex5">
                        <div class="portadaHabilidades__ctn--interiorBox">
                            <div class="portadaHabilidades--interiorBox">
                                <div class="rotar">
                                    <div class="centeringThis">
                                        <p class="sectionTitle textoGrande">Herramientas<br>Informáticas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <article class="columnaFlex7 cajitaInfo">
                        
                        <p class="cajitaInfo__title textoMediano">Desarrollo Web</p>
                            <p class="cajitaInfo__fechas textoChico"> <span class="cajitaInfo__fechas--linea">|</span> 2019</p>
                                <p class="cajitaInfo__item textoChico">Programa "Aprende Programando", Ministerio de educación GCBA</p>
                                    <p class="cajitaInfo__subitem textoChico textoGrisVerde">-HTML, CSS y Bootstrap</p>
                            <p class="cajitaInfo__fechas textoChico"><span class="cajitaInfo__fechas--linea">|</span> 2021</p>
                                <p class="cajitaInfo__item textoChico">Programa "Codo a Codo", Ministerio de educación GCBA</p>
                                    <p class="cajitaInfo__subitem textoChico textoGrisVerde">-HTML, CSS, JS, GIT, SQL y PHP</p>

                        <!--<p class="cajitaInfo__title">Diseño</p>
                            <p class="cajitaInfo__item">XXXXXXXXXXX</p>
                                <p class="cajitaInfo__subitem">XXXXXXXXXXX</p>-->

                        <p class="cajitaInfo__title textoMediano">Otros</p>
                            <p class="cajitaInfo__fechas textoChico"><span class="cajitaInfo__fechas--linea">|</span> 2018</p>
                                <p class="cajitaInfo__item textoChico">Programa Digital Junior, Universidad Tecnológica Nacional</p>
                                    <p class="cajitaInfo__subitem textoChico">-Diploma y mención de honor en Excel Fundamentos</p>
                    </article>
            </section>

            <!--Idiomas-->
            <section id="idiomas" class="fade-in filaFlex">

                <div class="portadaHabilidades columnaFlex5">
                    <div class="portadaHabilidades__ctn--interiorBox">
                        <div class="portadaHabilidades--interiorBox">
                            <div class="rotar">
                                <div class="centeringThis">
                                    <p class="sectionTitle textoGrande">Inglés</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <article class="columnaFlex7 cajitaInfo">
                    <p class="cajitaInfo__fechas textoChico" style="margin-top: 7vh;"><span class="cajitaInfo__fechas--linea">|</span> 2019</p><!--NIVEL DE CONOCIMIENTO EN GRÁFICOS de torta: Oralidad, Escritura, comprensión-->  
                        
                    <p class="cajitaInfo__item textoChico" style="font-weight: 500;"> Certificados en Lenguas Extranjeras - GCBA</p>      
                        <p class="cajitaInfo__item textoChico" style="margin-left: 1vw;">Certificado de aprobación del Ciclo de Idiomas Extendido (CIE)</p>
                    
                    <p class="cajitaInfo__fechas textoChico"><span class="cajitaInfo__fechas--linea">|</span> 2019</p>
                        <p class="cajitaInfo__item textoChico" style="font-weight: 500;"> Programa del Diploma del Bachillerato Internacional</p>
                            <p class="cajitaInfo__item textoChico" style="margin-left: 1vw;">Certificado por aprobar la materia Inglés</p>

                    <p class="cajitaInfo__fechas textoChico"><span class="cajitaInfo__fechas--linea">|</span> 2018</p>
                        <p class="cajitaInfo__item textoChico" style="font-weight: 500;">Centro Educativo Complementario de Idiomas Extranjeros</p>
                            <p class="cajitaInfo__item textoChico" style="margin-left: 1vw;">Certificado por haber completado el programa de 6 años</p>
                </article>
            </section>

            <!--Formación Académica-->
            <section id="formacionAcademica" class="fade-in filaFlex">

                    <div class="portadaHabilidades columnaFlex5">
                        <div class="portadaHabilidades__ctn--interiorBox">
                            <div class="portadaHabilidades--interiorBox">
                                <div class="rotar">
                                    <div class="centeringThis">
                                        <p class="sectionTitle textoGrande">Formación<br>Académica</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <article class="columnaFlex7 cajitaInfo">

                        <p class="cajitaInfo__title spacingElements textoMediano">Estudios superiores</p>
                            <p class="cajitaInfo__fechas textoChico"><span class="cajitaInfo__fechas--linea">|</span> 2021 - Actualidad</p>
                                <p class="cajitaInfo__item textoChico textoGrisVerde">Diseño Gráfico</p>
                                    <p class="cajitaInfo__subitem textoChico">Universidad de Buenos Aires</p> 
                        
                            <p class="cajitaInfo__title textoMediano">Estudios medios</p>
                                <p class="cajitaInfo__fechas textoChico"><span class="cajitaInfo__fechas--linea">|</span> 2016 - 2018</p>
                                    <p class="cajitaInfo__item textoChico textoGrisVerde">Instituto Divino Corazón</p>

                                <p class="cajitaInfo__fechas textoChico"><span class="cajitaInfo__fechas--linea">|</span> 2019 - 2021</p>
                            <p class="cajitaInfo__item textoChico textoGrisVerde">Escuela Normal 1 Superior en Lenguas Vivas, Roque Sáenz Peña</p>
                                    <p class="cajitaInfo__item textoChico">Programa del Diploma del Bachillerato Internacional</p>
                                        <p class="cajitaInfo__subitem textoChico">Materias: Inglés, Sistemas Ambientales y Sociedades, Historia, Lengua y Literatura y Creatividad, Actividad y Servicio</p>
                             
                    </article>
            </section>

            <!--Ecperiencia Laboral-->
            <!--
            <section id="experienciaLaboral" class="fade-in filaFlex">

                <div class="portadaHabilidades columnaFlex5">
                    <div class="portadaHabilidades__ctn--interiorBox">
                        <div class="portadaHabilidades--interiorBox">
                            <div class="rotar">
                                <div class="centeringThis">
                                    <p class="sectionTitle textoGrande">Experiencia<br>Laboral</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <article class="columnaFlex7 cajitaInfo">
                    <p class="cajitaInfo__title spacingElements textoMediano">XXXXXXXXXXXX</p>
                        <p class="cajitaInfo__fechas textoChico"><span class="cajitaInfo__fechas--linea">|</span> XXXX</p>
                            <p class="cajitaInfo__item textoChico">XXXXXXXXXXX</p>
                                <p class="cajitaInfo__subitem textoChico">XXXXXXXXXXX</p> 
                    
                    <p class="cajitaInfo__title textoMediano"></p>
                        <p class="cajitaInfo__fechas textoChico"><span class="cajitaInfo__fechas--linea">|</span> XXXX</p>
                            <p class="cajitaInfo__item textoChico">XXXXXXXXXXX</p>
                                <p class="cajitaInfo__subitem textoChico">XXXXXXXXXXX</p>

                    <p class="cajitaInfo__title textoMediano"></p>
                        <p class="cajitaInfo__fechas textoChico"><span class="cajitaInfo__fechas--linea">|</span> XXXX</p>
                            <p class="cajitaInfo__item textoChico">XXXXXXXXXXX</p>
                                <p class="cajitaInfo__subitem textoChico">XXXXXXXXXXX</p> 
                </article>
            </section>
-->
            <!--Fin de página-->
            <section id="finPag">

                <div id="ctn__tituloFinPag">
                    <p class="sectionTitle textoGrande">Gracias por tu visita</p>
                </div>
                
                <div id="circulo">
                    <div id="circulo__capaBase"></div>
                    <div id="circulo__capa1"></div>
                    <div id="circulo__capa2"></div>
                    <div id="circulo__capa3"></div>
                    <div id="circulo__capa4"></div> 
                    
                    <!--PONER UNA COSITA DANDO VUELTAS ADENTRO DEL CÍRCLO que lleve a ALGUNA COSITA DIVERTIDA-->
                </div>               
            </section>
        </main>

        <footer>
            <div id="footerSec"></div>
            <div id="footer__fila">
                <div id="footer__contacto">
                    <form action="" method="POST">
                        <p class="texto__footer textoMediano">Mandame un mail</p>
                        
                        <label for="nombreAsunto" class="textoChico">Nombre</label>
                        <input type="text" name="nombreAsunto" placeholder="Ingresá tu nombre" autocomplete="name" required>

                        <label for="emisor" class="textoChico">Mail</label>
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
                    <p class="texto__footer textoMediano">Seguime en mis redes</p>
                    <div class="social">
                        <a href="https://github.com/MartinaFSA" target="_blank" class="footer__social--link"> <i class="fab fa-github" style="font-size: 4vh; margin-top: 0.5vw; margin-top: 1vh;"> </i> </a>
                        <a href="https://www.linkedin.com/in/martina-fern%C3%A1ndez-su%C3%A1rez-anzorena-7ab978213/" target="_blank" class="footer__social--link"> <i class="fab fa-linkedin-in" style="font-size: 4vh; margin-top: 1vh;"> </i> </a>
                        <a href="#" target="_blank" class="footer__social--link"> <i class="fab fa-instagram" style="font-size: 4vh; margin-top: 1vh;"> </i> </a>
                    </div>
                </div>
            </div>
            <div id="backToTop">
                <a href="#pageIntro" class="texto__footer textoMediano">Volver al inicio <i class="fas fa-angle-down" style="font-size: 3vh; transform: rotate(180deg);"></i> </a>
            </div>
            <!--
            <div id="footer__randomImage">
                <div id="footer__randomImage--ctnImg">
                    <img src="img/randomImages/" id="randomImage" alt="Un dibujo o gif random hecho por Martina">
                </div>
    
                
                <div id="footer__randomImage--ctnText">
                    <p id="footer__randomImage--text">Refrescá la página para ver otro dibujo</p>
                </div>
            </div>
            -->
        </footer>

        <script src="scripts.js"></script>

    </body>
</html>