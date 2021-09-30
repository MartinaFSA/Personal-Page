/*OBJETOS DE LA TIENDA*/
var recursosTienda = {
	'textos': [
		{nombreTienda: 'RestoPepe', //0,0
		slogan: 'Las mejores hamburguesas de Zona Sur', //0,1
		metaPalabrasClave: 'nombreTienda, ubicación, especialidad', //0,2
		metaDescripcion: 'nombreTienda. Slogan. Ubicación. Carta/Menú · Recomendaciones · Contacto.'}, //0,3
	],
	'imagenes': [
		{favIcon: 'logoNegro', //1,0
		logoNegro: 'logoNegro', //1,1
		logoBlanco: 'logoBlanco', //1,2
		portadaHeaderMobile: 'portadaHeaderMobile', //1,3
		portadaHeaderDesktop: 'portadaHeaderDesktop',} //1,4
	],
	'contacto': [
		{whatsapp: '1162840250', //No incluyas los ceros, paréntesis ni guiones cuando añadas el número de teléfono en este formato.
		ubicacion: '',
		telefono: ''}
	]
}
var categoriasTienda = {
	'categoria': [
		{nombreCategoria: 'Postres', //1,0
		iconCategoria: 'fas fa-cookie', //1,1
		XXXXX: 'XXXXXX'}, //1,2

		{nombreCategoria: 'Carnes', //1,0
		iconCategoria: 'fas fa-bacon', //1,1
		XXXXX: 'XXXXXX'}, //1,2

		{nombreCategoria: 'Sandwiches', //1,0
		iconCategoria: 'fas fa-bread-slice', //1,1
		XXXXX: 'XXXXXX'} //1,2
	]
}

/*RECOMENDACIONES DE MENÚS*/
/*En estas variables escribiré las recomendaciones*/
let menu_entrada = document.getElementById('menu_entrada');
let menu_principal = document.getElementById('menu_principal');
let menu_postre = document.getElementById('menu_postre');
let menu_imagen = document.getElementById('menu_imagen');

/*Junto los arrays de los menús en una matriz*/
function outputMenus() { 
	var menusNested = {
		'menu': [
			{entrada: 'entrada', //0,0
			principal: 'principal', //0,1
			postre: 'postre', //0,2
			img: 'imagen1'}, //0,3
		
			{entrada: 'entrada2', //1,0
			principal: 'principal2', //1,1
			postre: 'postre2', //1,2
			img: 'imagen2'} //1,3
		]
	}
	let cantidad = menusNested.menu.length;
	console.log('Hay ' + cantidad + ' opciones de menús disponibles');
	
	for (var indice=0; indice<cantidad; indice++) {
		document.write('Entrada del menú ' + menusNested.menu[indice].entrada + '<br>');
		console.log('weyy');
	}
};
outputMenus();

//----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
/*Armo el random number cuando se clickee el link
let tirameUnMenu = getElementById('');
tirameUnMenu.addEventListener('click', () => {
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
document.getElementsByTagName('header')[0].setAttribute('style', 'background-image: linear-gradient(342.39deg, rgba(34, 34, 34, 0.9) 0%, rgba(39, 39, 39, 0.5) 100%), url("img/' + recursosTienda.imagenes[0].portadaHeaderMobile + '.JPG")');
let whatsappLi = document.getElementById('whatsAppLink');
let whatsappChild = whatsappLi.appendChild(document.createElement('a'));
whatsappChild.setAttribute('href', 'https://wa.me/' + recursosTienda.contacto[0].whatsapp + '?text=Hola!%20Quiero%20hacer%20un%20pedido');
whatsappChild.setAttribute('class', 'textoBeige')
whatsappChild.innerHTML = 'Whatsapp';

/*HEADER*/
//Hamburger menu
var menuHamburguesa = document.querySelector('.menuHamburguesa');
var menuHamburguesa_ul = document.querySelector('.menuHamburguesa_ul');
var headerNav = document.querySelector('.navigationBar');

menuHamburguesa.addEventListener('click', openMenu);

function openMenu() {
    menuHamburguesa.classList.toggle('active');
    menuHamburguesa_ul.classList.toggle('active');
	headerNav.classList.toggle('active');    
}

//logo, nombreTienda y slogan
let header_logo = document.getElementById('header_logo');
header_logo.setAttribute('src', 'img/' + recursosTienda.imagenes[0].logoBlanco + '.svg');

let header_nombreTienda = document.getElementById('header_nombreTienda');
header_nombreTienda.innerHTML = recursosTienda.textos[0].nombreTienda;

let header_slogan = document.getElementById('header_slogan');
header_slogan.innerHTML = recursosTienda.textos[0].slogan;

/*CATEGORÍAS CARD SLIDER*/
var cantidadDeCategorias = categoriasTienda.categoria.length;
ctn_cards = document.getElementById('contenedorDeCards');

for (let i = 0; i < cantidadDeCategorias; i++) {
	console.log(i);
	cardForSlider_a = ctn_cards.appendChild(document.createElement('a'));
	cardForSlider_a.setAttribute('class', 'categorias_card_a');

	cardForSlider = cardForSlider_a.appendChild(document.createElement('div'));
	cardForSlider.setAttribute('class', 'categorias_card ocupaTodo fontAca textoMediano flex_superCenter columnaFlex');

	cardForSlider_icon = cardForSlider.appendChild(document.createElement('i'));
	cardForSlider_icon.setAttribute('class', categoriasTienda.categoria[i].iconCategoria + ' textoBeige iconMediano');

	cardForSlider_p = cardForSlider.appendChild(document.createElement('p'));
	cardForSlider_p.setAttribute('class', 'textoBeige textoMediano');
	cardForSlider_p.innerHTML = categoriasTienda.categoria[i].nombreCategoria; 
}