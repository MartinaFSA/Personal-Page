<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>
        
        <meta http-equiv="Content-Language" content="es"/>
        <meta name="distribution" content="global"/>
        <meta name="author" content="MartinaFSA (Martina Fernández Suárez Anzorena)">
        
        <!--Bootstrap--><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <!--FontAwesome--><script src="https://kit.fontawesome.com/9170870617.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="styles/estilos.css">

    </head>

    <body>
        <!--Bootstrap--><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        
        <header><!--NOTA: style="background-image: url([recursosTienda.imagenes.portadaHeaderDesktop])"-->
            <?php 
                require("componentes/navBar.php");
            ?>
            <!--Barra de navegación-->
            <nav class="ocupaTodo">
                <div>
                    <div class="linea_hamburguesa"></div>
                    <div class="linea_hamburguesa"></div>
                    <div class="linea_hamburguesa"></div>
                </div>
                <ul class="fontAca textoBeige textoMediano ocupaTodo textoCentrado displayNone">
                    <li> <a href="">Entradas</a> </li> <!--[categoriasTienda.categoria[].nombreCategoria]-->
                    <li> <a href="">Acompañamientos</a> </li> 
                    <li> <a href="">Hamburguesas</a> </li>
                    <li> <a href="">Bebidas</a> </li>
                    <li> <a href="">Postres</a> </li>
                    <div class="linea_separacion"></div>
                    <li> <a href="https://wa.me/<number>?text=Hola!%20Quiero%20hacer%20un%20pedido">Whatsapp</a> </li>  <!--[contacto_whatsapp]-->
                    <!--CAMBIAR: <number> es un número de teléfono completo en formato internacional. No incluyas los ceros, paréntesis ni guiones cuando añadas el número de teléfono en este formato.
                        Usa: https://wa.me/1XXXXXXXXXX
                        No uses: https://wa.me/+001-(XXX)XXXXXXX
                        -->
                </ul>
            </nav>

            <!--Header-->
            <section class="flex_verticalCenter fontAca ocupaTodo">
                <div>
                    <img src="img/logo.svg" alt="Logo de la página"><!--[recursosTienda.imagenes.logoBlanco]-->
                </div>
                <div>
                    <div id="header_lineaTop" class="header_linea"></div>
                    <h1 class="textoBlanco textoPortada">Nombre de la Tienda</h1><!--[recursosTienda.textos.nombreTienda]-->
                    <div id="header_lineaBottom" class="header_linea"></div>
                </div>
                <h2 class="textoBlanco textoMediano">Las mejores hamburguesas de la zona</h2><!--[recursosTienda.textos.slogan]-->
            </section>
        </header>

        <main> 
            <article class="container">
                <h3 class="textoGris textoMediano fontAca">Categorías</h3>
                <section class="row row-cols-1 row-cols-md-3 g-4 positionRelative">
                    <div class="col">
                        <div class="categorias_card fontAca textoMediano ocupaTodo textoCentrado">
                            <i class="textoBeige iconMediano fas fa-chevron-right fa-sm" style="background-color: transparent"></i></i><!--[recursosTienda.imagenes.logoNegro]-->
                            <p class="textoBeige textoMediano"></p><!--[categoriasTienda.categoria[].nombreCategoria]-->
                        </div>
                    </div>
                    <div id="slider_GoLeft" class="botonRedondo flex_superCenter">
                        <i class="fas fa-chevron-right fa-sm" style="background-color: transparent"></i>
                    </div>
                    <div id="slider_GoRight" class="botonRedondo flex_superCenter">
                        <i class="fas fa-chevron-right fa-sm" style="background-color: transparent"></i>
                    </div>
                </section>
            </article>

            <article>
                <p class="textoGris textoMediano fontAca"></p>
            </article>
    
        </main>

        <footer>
            <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
        </footer>
        
        <script src="scripts/script.js"> </script>
    </body>

</html>
