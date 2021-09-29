/*OBJETOS DE LA TIENDA*/
var recursosTienda = {
	"textos": [
		{nombreTienda: "RestoPepe", //0,0
		slogan: "Las mejores hamburguesas de Zona Sur", //0,1
		metaPalabrasClave: "nombreTienda, ubicación, especialidad", //0,2
		metaDescripcion: "nombreTienda. Slogan. Ubicación. Carta/Menú · Recomendaciones · Contacto."}, //0,3
	],
	"imagenes": [
		{favIcon: "logoNegro", //1,0
		logoNegro: "logoNegro", //1,1
		logoBlanco: "logoBlanco", //1,2
		portadaHeaderMobile: "portadaHeaderMobile", //1,3
		portadaHeaderDesktop: "portadaHeaderDesktop",} //1,4
	]
}
var categoriasTienda = {
	"categoria": [
		{nombreCategoria: "entrada2", //1,0
		iconCategoria: "principal2", //1,1
		XXXXX: "XXXXXX"}, //1,2

		{nombreCategoria: "entrada2", //1,0
		iconCategoria: "principal2", //1,1
		XXXXX: "XXXXXX"}, //1,2

		{nombreCategoria: "entrada2", //1,0
		iconCategoria: "principal2", //1,1
		XXXXX: "XXXXXX"} //1,2
	]
}


/*RECOMENDACIONES DE MENÚS*/
/*En estas variables escribiré las recomendaciones*/
let menu_entrada = document.getElementById("menu_entrada");
let menu_principal = document.getElementById("menu_principal");
let menu_postre = document.getElementById("menu_postre");
let menu_imagen = document.getElementById("menu_imagen");

/*Junto los arrays de los menús en una matriz*/

function outputMenus() { 
	var menusNested = {
		"menu": [
			{entrada: "entrada", //0,0
			principal: "principal", //0,1
			postre: "postre", //0,2
			img: "imagen1"}, //0,3
		
			{entrada: "entrada2", //1,0
			principal: "principal2", //1,1
			postre: "postre2", //1,2
			img: "imagen2"} //1,3
		]
	}
	let cantidad = menusNested.menu.length;
	console.log("Hay " + cantidad + " opciones de menús disponibles");
	
	for (var indice=0; indice<cantidad; indice++) {
		document.write("Entrada del menú " + menusNested.menu[indice].entrada + "<br>");
		console.log("weyy");
	}
};
outputMenus();

/*Armo el random number cuando se clickee el link
let tirameUnMenu = getElementById("");
tirameUnMenu.addEventListener("click", () => {
	let numeroRandom = Math.round(Math.random() * (menuMatriz.length - 0) + 0);
	menu_postre.innerHTML = menuMatriz[numeroRandom];
});
*/

/*MODIFICO EL HEAD CON LOS OBJETOS*/
//Meta Keywords
var createMetaKeywords = document.createElement('meta');
createMetaKeywords.setAttribute('name', 'keywords');
createMetaKeywords.content = 'restaurante, menú, menú digital, ' + recursosTienda.textos[0].metaPalabrasClave;
document.getElementsByTagName('head')[0].appendChild(createMetaKeywords);

//Meta Description
var createMetaDescription = document.createElement('meta');
createMetaDescription.setAttribute('name', 'description');
createMetaDescription.content = recursosTienda.textos[0].metaDescripcion;
document.getElementsByTagName('head')[0].appendChild(createMetaDescription);

//FavIcon
var createFavIcon = document.createElement('link');
createFavIcon.setAttribute('rel', 'icon');
createFavIcon.setAttribute('href', 'img/' + recursosTienda.imagenes[0].favIcon + '.svg');
document.getElementsByTagName('head')[0].appendChild(createFavIcon);

//Title
var createTitle = document.createElement('title');
createTitle.innerHTML = recursosTienda.textos[0].nombreTienda + ' - Menú';
document.getElementsByTagName('head')[0].appendChild(createTitle);

/*MODIFICO EL CUERPO DEL DOCUMENT CON LOS OBJETOS*/
//Header
var portadaHeader = document.getElementsByTagName('header')[0].setAttribute('style', 'background-image= url("img/' + recursosTienda.imagenes[0].portadaHeaderMobile + '.JPG")');