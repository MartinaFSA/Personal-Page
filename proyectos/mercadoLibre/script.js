/*NavigationBar categorías*/
let categorias = document.getElementById("categorias");
let categorias_indicador = document.getElementById("categorias_indicador");
function categoriasDisplay() {
    categorias.style.display = "block";
    categorias_indicador.style.display = "block";
};
function categoriasHidden() {
    categorias.style.display = "none";
    categorias_indicador.style.display = "none";
}

/*Carrusel*/
const carrusel = document.getElementById("carrusel");
carrusel.onmouseenter = function () {
    document.getElementById("carrusel_flechaFondo_izquierda").style.display = "flex";
    document.getElementById("carrusel_flechaFondo_derecha").style.display = "flex";
}
carrusel.onmouseleave = function () {
    document.getElementById("carrusel_flechaFondo_izquierda").style.display = "none";
    document.getElementById("carrusel_flechaFondo_derecha").style.display = "none";
}

/*Mejores Tiendas, display flecha on hover*/
const mejoresTiendas = document.getElementById("ctn_card_mejoresTiendas");
mejoresTiendas.onmouseenter = function () {
    document.getElementById("flecha_mejoresTiendas").style.display = "flex"
}
mejoresTiendas.onmouseleave = function () {
    document.getElementById("flecha_mejoresTiendas").style.display = "none"
}

/*Ofertas, display flecha on hover*/
const flecha_ofertas = document.getElementById("ctn_ofertas");
flecha_ofertas.onmouseenter = function () {
    document.getElementById("flecha_ofertas").style.display = "flex"
}
flecha_ofertas.onmouseleave = function () {
    document.getElementById("flecha_ofertas").style.display = "none"
}
//display textos on hover
function card_muestroLosTextos() {
    this.style.display = "none";
    console.log("pucaha");
}

/*Categorías populares*/
let categoria = document.querySelectorAll("div.categoria");
categoria.onmouseenter = function () {
    document.querySelectorAll("div.categoria").style.backgroundColor = "#4d8efa"
}
categoria.onmouseleave = function () {
    document.getElementById("flecha_mejoresTiendas").style.display = "none"
}

const categoriasPopulares = document.getElementById("ctn_categorias_flecha");
categoriasPopulares.onmouseenter = function () {
    document.getElementById("flecha_mejoresCategorias").style.display = "flex"
}
categoriasPopulares.onmouseleave = function () {
    document.getElementById("flecha_mejoresCategorias").style.display = "none"
}


/*Footer más información despliegue*/
let botonMasInfo = document.getElementById("masInformacion_btn");
function despliegueInformacion() {
    if (botonMasInfo.style.backgroundColor === "transparent") {
        botonMasInfo.style.backgroundColor = "#f7f7f7";
        document.getElementById("links_masInformacion").style.display = "flex";
        document.getElementById("icon_masInformacion").style.transform = "rotate(180deg)";
        document.getElementById("icon_masInformacion").style.paddingLeft = "0px";
        document.getElementById("icon_masInformacion").style.paddingRight = "5px";
    } else {
        botonMasInfo.style.backgroundColor = "transparent";
        document.getElementById("links_masInformacion").style.display = "none";
        document.getElementById("icon_masInformacion").style.transform = "rotate(0deg)";
        document.getElementById("icon_masInformacion").style.paddingLeft = "5px";
        document.getElementById("icon_masInformacion").style.paddingRight = "0px";
    }
};