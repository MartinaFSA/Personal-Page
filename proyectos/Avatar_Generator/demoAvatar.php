<!DOCTYPE html>
<html lang="es">

    <head>
        <?php
            include("../../componentes/head.php");
        ?>
        <title>Avatar Generator - Martina Fernández Suárez</title>
        <link rel="stylesheet" href="../../estilos/indexYGenerales.css">
        <link rel="stylesheet" href="../../estilos/estilosDemo.css">
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        
        <header> 
            <!--NAVEGACIÓN INTERNA-->
            <section id="ctn__navBarPortfolio">
                <nav>
                    <a href="../../index.php"><div class="linkAIndex"><img src="../../img/logoEnBlanco.svg" alt="Ir a la página de inicio"></div></a>
                    <ul>
                        <li> <a href="#about" class="textoChico" itemprop="url">Sobre la página</a> </li>
                        <li class="">•</li>
                        <li> <a href="#index" class="textoChico" itemprop="url">Página de inicio</a> </li>
                        <li class="">•</li>
                        <li> <a href="#demo" class="textoChico" itemprop="url">Demo</a> </li>
                    </ul>
                </nav>
            </section>
        </header>

        <main>
            <div id="ctn_mainContent">
                <!--COLUMNA IZQUEIRDA-->
                <aside>
                    <p class="transformVertical textoAsideProyecto textoMainColor soloSeVeEnPantallasGrandes">Avatar Generator</p>
                    <p class="transformVertical textoAsideProyecto textoVerdeAside soloSeVeEnPantallasGrandes">Avatar Generator</p>
                    <section class="transformVerticalEnPantallasGrandes" id="ctn_paletaDeColores">
                        <div id="paletaDeColores">
                            <div style="background-color: #fafafa;"></div>
                            <div style="background-color: #63AAB0;"></div>
                            <div style="background-color: #d3d3d3;"></div>
                            <div style="background-color: #0c0c0c;"></div>
                        </div>
                        <p class="textoChico textoMainColor">Paleta de colores</p>
                    </section>
                </aside>
                <!--COLUMNA DERECHA-->
                <section>
                    <article id="about">
                        <p class="soloSeVeEnPantallasChicas textoGrande textoMainColor">Avatar Generator</p>
                        <p class="textoMediano textoMainColor">Esta aplicación web es un generador de avatares personalizados. Los usuarios pueden seleccionar el color de piel, ojos y labios del personaje, su peinado y el fondo o seleccionar rasgos al azar. Los personajes pueden ser descargados gracias a la integración de html2canvas. El proyecto fue realizado con HTML, CSS, JavaScript y React.</p>
                        <p class="textoMediano textoMainColor">Hacé tu propio avatar <a href="https://martinafsa.github.io/Avatar_Generator/"  itemprop="url" target="_blank">apretando acá</a>.</p>
                        <p class="textoMediano textoMainColor">Si querés ver el código de la página entrá al <a href="https://github.com/MartinaFSA/Avatar_Generator">repositorio en GitHub</a>.</p>
                    </article>
                    <article id="index">
                        <p class="textoGrande textoMainColor">Página de Inicio</p>
                        <img src="../../img/paginas/primeraPagina__completa.png" alt="Captura completa de la página de inicio">
                    </article>
                </section>
            </div>
            <!--VIDEO DEMOSTRACIÓN-->
            <article id="demo">
                <p class="textoGrande textoMainColor">Video de demostración</p>
                <video src="demoAvatar.mp4" controls></video>
            </article>
            
            <article id="demo">
                <p class="textoGrande textoMainColor">Personaje descargado</p>
                <img src="a.png"></img>
            </article>
        </main>
        <?php
            include("../../componentes/footer.php");
        ?>
        
        </footer>
        <script src="scripts.js"></script>
    </body>
</html>