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
        
        <header><!--NOTA: style="background-image: url([recursosTienda.imagenes[0].portadaHeaderDesktop])"-->
            <?php 
                require("componentes/navBar.php");
            ?>
        </header>

        <main> 
            <article>
                <h3 class="textoGris textoMediano fontAca ocupaTodoElWidth">Categorías</h3>
                <section class="positionRelative ctn_cardSlider">
                    <div id="contenedorDeCards" class="flex_row flex_between overflowHidden">
                    </div>
                    <div id="slider_GoLeft" class="botonRedondo flex_superCenter">
                        <i class="fas fa-chevron-left" style="background-color: transparent"></i>
                    </div>
                    <div id="slider_GoRight" class="botonRedondo flex_superCenter">
                        <i class="fas fa-chevron-right" style="background-color: transparent"></i>
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
