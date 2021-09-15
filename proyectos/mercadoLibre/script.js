/*Mejores Tiendas, display flecha on hover*/
const mejoresTiendas = document.getElementById("ctn_card_mejoresTiendas");
mejoresTiendas.onmouseenter = function () {
    document.getElementById("flecha_mejoresTiendas").style.display = "flex"
}
mejoresTiendas.onmouseleave = function () {
    document.getElementById("flecha_mejoresTiendas").style.display = "none"
}

/*Categorías populares*/
document.querySelectorAll("div.categoria").onmouseenter = function () {
    document.querySelectorAll("div.categoria").style.backgroundColor = "#4d8efa"
}
categoria.onmouseleave = function () {
    document.getElementById("flecha_mejoresTiendas").style.display = "none"
}