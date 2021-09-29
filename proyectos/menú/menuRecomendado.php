<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>

        <meta name="keywords" content="Palabras clave"/>
        <meta name="description" content="Descripción con hasta 170 carcteres."/>
        <meta http-equiv="Content-Language" content="es"/>
        <meta name="distribution" content="global"/>
        <meta name="author" content="MartinaFSA">

        <!--<link rel = "icon" href = "../img/">-->

        <title>NombreTienda - Recomendado</title>
        <link rel = "icon" href = "img/">

        <link rel="stylesheet" href="styles/estilos.css">

    </head>

    <body>
        <header>
            <?php 
                require("components/header_nav.php");
            ?>
        </header>

        <main> 
            
            <div> 
                <p>Te recomiendo que pruebes:</p>
                <p class=""> ENTRADA</p>
                <p id="menu_entrada"></p>
                <p> PLATO PRINCIPAL
                <p id="menu_principal"></p>
                <p> POSTRE
                <p id="menu_postre"></p>
                
                <img src="img/’’ + menuMatriz[numeroRandom]  +" id="menu_imagen"> </img>
            </div>

            <div>
                <a href="">Recomendame otra cosa</a>
            </div>
    
        </main>

        <footer>

        </footer>
        
        <script src="script.js"> </script>
    </body>

</html>
