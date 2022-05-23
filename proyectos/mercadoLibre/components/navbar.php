
<!--NavBar mobile-->
<nav class="textoNormal paddingPagina_displayFlex hiddenFrom1024pxAndOn">
    <!--Primera fila del navigation bar-->
    <ul class="ctn_fila ocupaTodoElWidth col-12 flexBetween" id="primeraFila_navBar">
        <li class="col-2"><a href="index.php"><img src="img/generales/LogoReducido.svg" alt="Logo de mercado libre"></a></li>
        <li id="ctn_input_search" class="col-7 background_border_shadow"><button><i class="fas fa-search"></i></button><input id="input_search" type="search" name="navBar_barraBusqueda" placeholder="Buscar productos, marcas y más..."></li>
        <li class="col-1">
            <div class="menuHamburguesa">
                <div class="menuHamburguesa_linea"></div>
                <div class="menuHamburguesa_linea"></div>
                <div class="menuHamburguesa_linea"></div>
            </div>
            <ul class="textoBlanco menuHamburguesa_ul">  <!--Despliegue de categorías-->
                <div id="menu_bienvenido">
                    <div class="textoNormal">
                        <img src="img/generales/pfp.png" alt="">
                        <div>
                            <p class="textoNormal textoMediano">Bienvenido</p>
                            <p class="textoChico">Ingresa a tu cuenta para ver tus compras, favoritos, etc.</p>
                        </div>
                    </div>
                    <div>
                        <button class="textoBlanco">Ingresá</button>
                        <button class="ghostButtonAzul">Creá tu cuenta</button>
                    </div>
                </div>
                <ul class="textoChico">
                    <li> <a href="">Inicio</a> </li>
                    <li> <a href="" >Ofertas</a> </li>
                    <li> <a href="" >Historial</a> </li>
                    <li> <a href="" >Ayuda</a> </li>    
                </ul>
                <ul class="textoChico">
                    <li> <a href="" >Supermercado</a> </li>
                    <li> <a href="" >Moda</a> </li>
                    <li> <a href="" >Más vendidos</a> </li>
                    <li> <a href="" >Tiendas oficiales</a> </li>
                    <li> <a href="">Categorías</a> </li>
                </ul>
                <ul class="textoChico">
                    <li> <a href="" >Resumen</a> </li>
                    <li> <a href="" >Vender</a> </li>
                </ul>
                <ul class="textoChico">
                    <li> <a href="" >¡Comprá y vendé con la app!</a> </li>
                </ul>
            </ul>
        </li>
        <li class="col-1"><img src="img/generales/icons/shopping-cart.svg" alt="" class="icon_navBar"></li>
    </ul>

    <!--Segunda fila del navigation bar-->
    <ul class="ctn_fila ocupaTodoElWidth flexBetween" id="segundaFila_navBar">
        <li><a href=""><img src="img/generales/icons/map-pin.svg" alt="Enviar a Capital Federal" class="icon_navBar"><p>Enviar a Capital Federal</p></a></li>
        <li><a href=""><i class="fas fa-chevron-right"></i></a></li>
    </ul>
</nav>
<!--NavBar desktop-->
<nav class="textoNormal paddingPagina_displayFlex hiddenUntil1024px">
    <!--Primera fila del navigation bar-->
    <ul class="ctn_fila ocupaTodoElWidth col-12 flexBetween" id="primeraFila_navBar">
        <li class="col-2"><a href="index.php"><img src="img/generales/logo_navBar.png" alt="Logo de mercado libre"></a></li>
        <li id="ctn_input_search" class="col-6 background_border_shadow"><input id="input_search" type="search" name="navBar_barraBusqueda" placeholder="Buscar productos, marcas y más..."><button><i class="fas fa-search"></i></button></li>
        <li class="col-4"><a href="sucripcionNivel6.html"><img src="img/generales/suscripcionAlNivel6.JPG" alt="Suscribite al nivel 6 para obtener beneficios exclusivos"></a></li>
    </ul>

    <!--Segunda fila del navigation bar-->
    <ul class="ctn_fila ocupaTodoElWidth col-12 flexBetween" id="segundaFila_navBar">
        <li class="col-2"><a href=""> <img src="img/generales/enviarAcaba.JPG" height="100%" alt="Enviar a Capital Federal"></a></li>
        <li class="col-6" id="ctn_linksGenerales"> 
            <ul class="ctn_fila linksNavBar_verticalAlign textoChico" id="linksGenerales">  <!--Links generales-->
                <li onmouseenter="categoriasDisplay()" onmouseleave="categoriasHidden()" class="linksNavBar_verticalAlign opacidadReducida seems_clickeable">Categorías<i class="fas fa-chevron-down" id="categorias_icon"></i>
                    <div id="categorias_indicador"></div>
                    <ul id="categorias" class="textoBlanco">  <!--Despliegue de categorías-->
                        <li> <a href="" class="textoBlanco">Vehículos</a> </li>
                        <li> <a href="" class="textoBlanco">Inmuebles</a> </li>
                        <li> <a href="" class="textoBlanco">Tecnología</a> </li>
                        <li> <a href="" class="textoBlanco">Hogar y Muebles</a> </li>
                        <li> <a href="" class="textoBlanco">Electrodomésticos</a> </li>
                        <li> <a href="" class="textoBlanco">Herramientas</a> </li>
                        <li> <a href="" class="textoBlanco">Construcción</a> </li>
                        <li> <a href="" class="textoBlanco">Deportes y Fitness</a> </li>
                        <li> <a href="" class="textoBlanco">Accesorios para Vehículos</a> </li>
                        <li> <a href="" class="textoBlanco">Moda</a> </li>
                        <li> <a href="" class="textoBlanco">Juegos y Juguetes</a> </li>
                        <li> <a href="" class="textoBlanco">Bebés</a> </li>
                        <li> <a href="" class="textoBlanco">Belleza y Cuidado Personal</a> </li>
                        <li> <a href="" class="textoBlanco">Salud y Equipamiento Médico</a> </li>
                        <li> <a href="" class="textoBlanco">Industrias y Oficinas</a> </li>
                        <li> <a href="" class="textoBlanco">Agro</a> </li>
                        <li> <a href="" class="textoBlanco">Productos sustentables</a> </li>
                        <li> <a href="" class="textoBlanco">Ver más categorías</a> </li>
                    </ul>
                </li>
                <li class="linksNavBar_verticalAlign opacidadReducida espaciadoLinks "> <a href="">Ofertas</a> </li>
                <li class="linksNavBar_verticalAlign opacidadReducida espaciadoLinks "> <a href="">Historial</a> </li>
                <li class="linksNavBar_verticalAlign opacidadReducida espaciadoLinks "> <a href="">Supermercado</a> </li>
                <li class="linksNavBar_verticalAlign opacidadReducida espaciadoLinks "> <a href="">Moda</a> </li>
                <li class="linksNavBar_verticalAlign opacidadReducida espaciadoLinks "> <a href="">Vender</a> </li>
                <li class="linksNavBar_verticalAlign opacidadReducida espaciadoLinks "> <a href="">Ayuda</a> </li>
            </ul>
        </li>

        <li class="col-4" id="linksCuenta"> 
            <ul class="ctn_fila textoChico">   <!--Links de sesión-->
                <li class="linksNavBar_verticalAlign alineacionRight "> <a href="">Creá tu cuenta</a> </li>
                <li class="linksNavBar_verticalAlign alineacionRight espaciadoLinks "> <a href="">Ingresá</a> </li>
                <li class="linksNavBar_verticalAlign alineacionRight espaciadoLinks "> <a href="">Mis compras</a> </li>
                <!--<li class="linksNavBar_verticalAlign alineacionRight espaciadoLinks"> <a href=""><i class="fas fa-bell"></i></a> </li> -->
                <li class="linksNavBar_verticalAlign alineacionRight espaciadoLinks "> <a href=""><img src="img/generales/icons/shopping-cart.svg" alt="" class="icon_navBar"></a> </li>
            </ul>
        </li>
    </ul>
</nav>