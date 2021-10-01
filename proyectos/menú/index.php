<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>
        
        <meta http-equiv="Content-Language" content="es"/>
        <meta name="distribution" content="global"/>
        <meta name="author" content="MartinaFSA (Martina Fernández Suárez Anzorena)">
        
        <!--Bootstrap--><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--Owl Carousel--><link rel="stylesheet" href="styles/owl.carousel.min.css">
        <link rel="stylesheet" href="styles/owl.theme.default.min.css">
        <!--FontAwesome--><script src="https://kit.fontawesome.com/9170870617.js" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="styles/estilos.css">

    </head>

    <body>
        <header><!--NOTA: style="background-image: url([recursosTienda.imagenes[0].portadaHeaderDesktop])"-->
            <?php 
                require("componentes/navBar.php");
            ?>
        </header>

        <main> 
            <article>
                <h3 class="textoGris textoMediano fontAca ocupaTodoElWidth textoBold">Categorías</h3>
                <section class="positionRelative ctn_cardSlider">
                    <div id="contenedorDeCards" class="flex_row flex_between overflowHidden owl-carousel">
                    </div>
                    <!--<div id="slider_GoLeft" class="botonRedondo flex_superCenter">
                        <i class="fas fa-chevron-left" style="background-color: transparent"></i>
                    </div>
                    <div id="slider_GoRight" class="botonRedondo flex_superCenter">
                        <i class="fas fa-chevron-right" style="background-color: transparent"></i>
                    </div>-->
                </section>
            </article>

            <article>
                <p id="tituloMenuCarta" class="textoGris textoMediano fontAca textoCentrado"></p>

                <ul id="ctn_menuCartaItems">
                </ul>
            </article>

            <article id="lastSection" class="textoMediano fontAca textoCentrado ocupaElWidth">
                <p class="textoGris marginPadding0 textoBold">¿No sabés qué pedir?</p>
                <a href="menuRecomendado.php marginPadding0">Apretá acá</a>
            </article>
        </main>

        <footer>
            <section class="textoGris fontAca textoCentrado ocupaElWidth">
                <p class="textoMediano textoBold">Horarios</p>
                <p class="textoChico">Lunes - Viernes: 9hs a 18hs</p>
                <p class="textoChico">Sábados y Domingos: 13hs a 23hs</p>
                <p class="textoMediano textoBold">Teléfono</p>
                <p id="footer_telefonoTienda" class="textoChico"></p>
            </section>
            <section>
                <img id="footer_logo" alt="Logo de la tienda">
                <div class="flex_row">
                    <p id="footer_ubicacionTienda"></p>
                </div>
            </section>
            <div> 
                <p>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> and <a href="https://fontawesome.com/">FontAwesome</a></p>
            </div>
        </footer>
        
        <!--Bootstrap--><script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!--JQuery--><script src="scripts/jquery.js"></script>
        <!--Owl Carousel--><script src="scripts/owl.carousel.min.js"></script>
        <script src="scripts/script.js"> </script>
    </body>

</html>
