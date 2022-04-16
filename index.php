<!DOCTYPE html>
<html lang="es">

    <head>
        <?php
            include("componentes/head.php");
        ?>

        <title>Martina Fernández Suárez</title>
        
        <link rel="stylesheet" href="estilos/indexYGenerales.css">
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        <div itemscope itemtype="https://schema.org/Person">
        <header> 
            <section id="pageIntro">
                <!--TEXTO BIENVENIDA-->
                <div id="pageIntro__ctn--text-icon">
                    <div id="pageIntro__text">
                        <p class="textoTitulo">Hola, soy <span itemprop="name">Martina Fernández</span>. <span itemprop="jobTitle">desarrolladora web.</span></p>
                        <a href="#ctn__navBar"><button class="botonVerdeCallToAction">Sobre Mí <i class="fas fa-angle-down"></i> </button></a>
                    </div>
                    <div>
                        <img src="img/logoGradient.svg" alt="">
                    </div>
                </div>
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
                        <li><a href="#finPag" class="barraFlotante__aLi">◉</a></li>
                    </ul>
                </div>
            </div>

            <!--TOP NAVIGATION BAR-->
            <section id="ctn__navBar">
                <nav id="navBar">
                    <a href="portfolio" target="_blank" class="navBar__link textoMediano" itemprop="url">PORTFOLIO</a>
                    <a href="index" class="navBar__main" itemprop="url">MartinaFSA</a>
                    <button class="navBar__link textoMediano" id="coderMode"></button>
                </nav>
            </section>

            <!--SOBRE MÍ-->
            <section id="perfil">
                <p class="sectionTitle textoGrande">PERFIL</p>
                
                <section class="perfil__elementos">
                    
                    <article id="perfil__sobreMi">
                        <p class="sectionSubtitle textoMediano">Sobre Mí</p>
                        <p class="textoChico">Estudiante de Diseño Gráfico y desarrolladora web con conocimientos de backend y frontend. Me interesa la tecnología, el diseño y la programación.</p>
                    </article>

                    <article id="perfil__foto">
                        <div id="perfil__foto--imagen">
                            <img src="img/MFSA_fotocv2.png" alt="Foto de Martina" itemprop="image">
                        </div>
                    </article>

                    <article id="perfil__contacto">
                        <p class="sectionSubtitle textoMediano">Datos</p>
                        <ul>
                            <li class="textoChico" itemprop="email contactPoint"><b>Correo electrónico: </b>
                            martina.fernandez.sa@gmail.com</li>
                            <li class="textoChico" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress"><b>Ubicación:</b>
                            <span itemprop="addressRegion">Boedo</span>, <span itemprop="addressLocality">CABA</span>, <span itemprop="addressLocality">Argentina</span></li>
                            <li class="textoChico" itemprop="birthDate"><b>Nacimiento: </b>
                            14 de julio de 2002</li>
                        </ul>
                    </article>
                </section>

                <section id="perfil__misRedes">
                    <ul>
                        <button> <li> <a href="https://github.com/MartinaFSA" target="_blank" class="perfil__misRedes--button textoChico">Github</a> </li> </button>
                        
                        <button> <li> <a href="https://www.linkedin.com/in/martina-fernandez-suarez-anzorena/" target="_blank" class="perfil__misRedes--button textoChico">LinkedIn</a> </li> </button>

                        <button> <li><a href="https://www.instagram.com/martinafsa/?utm_medium=copy_link" target="_blank" class="perfil__misRedes--button textoChico">Instagram</a> </li> </button>
                                            
                        <button> <li> <a href="img/MartinaFernándezSuárezAnzorenaCV.pdf" class="perfil__misRedes--button textoChico" download="MartinaFernándezSuárezAnzorena_CV">CV en PDF</a> </li> </button>

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
                                    <p class="cajitaInfo__subitem textoChico textoGrisVerde" itemprop="knowsAbout">-HTML, CSS y Bootstrap</p>
                            <p class="cajitaInfo__fechas textoChico"><span class="cajitaInfo__fechas--linea">|</span> 2021</p>
                                <p class="cajitaInfo__item textoChico">Programa "Codo a Codo", Ministerio de educación GCBA</p>
                                    <p class="cajitaInfo__subitem textoChico textoGrisVerde" itemprop="knowsAbout">-HTML, CSS, JS, GIT, SQL y PHP</p>

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
                                    <p class="sectionTitle textoGrande" itemprop="knowsLanguage">Inglés</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <article class="columnaFlex7 cajitaInfo">
                    <p class="cajitaInfo__fechas textoChico" style="margin-top: 7vh;"><span class="cajitaInfo__fechas--linea">|</span> 2019</p>  
                        
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
                                <p class="cajitaInfo__item textoChico textoGrisVerde" itemprop="knowsAbout">Diseño Gráfico</p>
                                    <p class="cajitaInfo__subitem textoChico" itemprop="alumniOf">Universidad de Buenos Aires</p> 
                        
                            <p class="cajitaInfo__title textoMediano">Estudios medios</p>
                                <p class="cajitaInfo__fechas textoChico"><span class="cajitaInfo__fechas--linea">|</span> 2016 - 2018</p>
                                    <p class="cajitaInfo__item textoChico textoGrisVerde">Instituto Divino Corazón</p>

                                <p class="cajitaInfo__fechas textoChico"><span class="cajitaInfo__fechas--linea">|</span> 2019 - 2021</p>
                            <p class="cajitaInfo__item textoChico textoGrisVerde">Escuela Normal 1 Superior en Lenguas Vivas, Roque Sáenz Peña</p>
                                    <p class="cajitaInfo__item textoChico">Programa del Diploma del Bachillerato Internacional</p>
                                        <p class="cajitaInfo__subitem textoChico">Materias: Inglés, Sistemas Ambientales y Sociedades, Historia, Lengua y Literatura y Creatividad, Actividad y Servicio</p>
                             
                    </article>
            </section>

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
                </div>               
            </section>
        </main>

        <?php
            include("componentes/footer.php");
        ?>

            <div id="backToTop">
                <a href="#pageIntro" class="texto__footer textoMediano textoFooter">Volver al inicio <i class="fas fa-angle-down" style="font-size: 3vh; transform: rotate(180deg);"></i> </a>
            </div>
        </footer>
        </div>
        <script src="scripts.js"></script>
    </body>
</html>