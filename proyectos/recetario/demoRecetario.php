<!DOCTYPE html>
<html lang="es">

    <head>
        <?php
            include("../../componentes/head.php");
        ?>
        <title>Recetario - Martina Fernández Suárez</title>
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
                    <p class="transformVertical textoAsideProyecto textoMainColor soloSeVeEnPantallasGrandes">Recetario</p>
                    <p class="transformVertical textoAsideProyecto textoVerdeAside soloSeVeEnPantallasGrandes">Recetario</p>
                    <section class="transformVerticalEnPantallasGrandes" id="ctn_paletaDeColores">
                        <div id="paletaDeColores">
                            <div style="background-color: #fafafa;"></div>
                            <div style="background-color: rgba(121, 143, 129, 1);"></div>
                            <div style="background-color: rgba(64, 91, 72, 1);"></div>
                            <div style="background-color: #353535;"></div>
                        </div>
                        <p class="textoChico textoMainColor">Paleta de colores</p>
                    </section>
                    <section id="ctn_favicon">
                        <img src="logoConFondo.svg" alt="Logo del recetario">
                        <p class="textoChico textoMainColor">FavIcon</p>
                    </section>
                </aside>
                <!--COLUMNA DERECHA-->
                <section>
                    <article id="about">
                        <p class="soloSeVeEnPantallasChicas textoGrande textoMainColor">Recetario</p>
                        <p class="textoMediano textoMainColor">Esta página es un proyecto personal realizado para agrupar y organizar mis recetas favoritas. La misma cuenta con un sistema de registro de usuarios, inicio de sesión y guardado de recetas. Además tiene barras de búsqueda y secciones de recetas sin TACC y sin lactosa. Fue realizado con HTML, CSS, JavaScript, PHP y SQL.</p>
                        <p class="textoMediano textoMainColor">Si querés ver el código de la página entrá al <a href="https://github.com/MartinaFSA/Recetario-PHP">repositorio en GitHub</a>. <!--También podés ver el <a href="">WireFrame en Figma</a>.--></p>
                    </article>
                    <article id="index">
                        <p class="textoGrande textoMainColor">Página de Inicio</p>
                        <img src="../../img/paginas/segundaPagina__completa.png" alt="Captura completa de la página de inicio">
                    </article>
                </section>
            </div>
            <!--VIDEO DEMOSTRACIÓN-->
            <article id="demo">
                <p class="textoGrande textoMainColor">Video de demostración</p>
                <video src="" controls></video>
            </article>
        </main>
        <?php
            include("../../componentes/footer.php");
        ?>
        
        </footer>
        <script src="scripts.js"></script>
    </body>
</html>