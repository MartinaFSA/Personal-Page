/*Que se muestre el welcoming text cuando key pressed o clicked en el texto*/

/*Fade in on scroll*/

const fadeIn = document.querySelectorAll('.fade-in'); //fadeIn se refieree a todos los elementos que tienen la clase fade-in

const appearOnScroll = new IntersectionObserver(function(entradas){ 
    //Con este intersection observer el contenido reacciona al scrolleo
    entradas.forEach(entrada =>{
    if(entrada.intersectionRatio > 0) { //Cuando fade-in está en el viewport es mayor de 0
        entrada.target.style.animation = 'teVeo 1.5s forwards ease-out'; //declaro una animación a la que referencio en CSS
    }
    else {
        entrada.target.style.animation = 'none'; 
    }
    })
});

fadeIn.forEach(fader => {
    appearOnScroll.observe(fader);
})

/*Random image generator
window.onload = eligeFotoRandom;

var miFoto = new Array("img/randomImages/randomPic1.jpg","img/randomImages/randomPic2.png","img/randomImages/randomPic3.jpg","img/randomImages/randomPic4.jpg","img/randomImages/randomPic5.jpg","img/randomImages/randomPic6.jpg","img/randomImages/randomPic7.jpg","img/randomImages/randomPic8.jpg")
function eligeFotoRandom(){
    var eligeNumRandom = Math.floor(Math.random() * miFoto.length); //Math.random generates a random number between 0 and 1, which is then multiplied by myPix.length, which is the number of items in the array (in this case, it’s 3). Math.floor rounds the result down to an integer, which means that the number must be between 0 and 2.
    document.getElementById("randomImage").src = miFoto[eligeNumRandom];
}
*/

/*Dark Theme*/
let activateCoderMode = document.getElementById("coderMode");
var root = document.querySelector(':root');

activateCoderMode.onclick = function cambiosCoderMode() {
    if(document.getElementById("coderMode").textContent == "CODER MODE"){
        activateCoderMode.textContent = "LIGHT THEME";
        document.body.style.backgroundColor = "#212121";
        console.log('Hola este es mi activate Coder Mode');

        //variables css
        root.style.setProperty('--main-text-color', '#d2d2d2');
        root.style.setProperty('--small-text-color', '#282fb8');
        root.style.setProperty('--textos-parrafos', '#8c8c8c');
        root.style.setProperty('--color-link-hover', '#bfbfbf');
        root.style.setProperty('--shadow-sombra-y-luz', '8px 8px 8px #07070769, -8px -8px 8px #4141414a');
        root.style.setProperty('--toques-amarillos', '#78c751');
        root.style.setProperty('--fondo-botones', '#323232');
        root.style.setProperty('--icon-color', '#78c751');
        root.style.setProperty('--fondito-flechaCaja', '#lalala');
        root.style.setProperty('--fondo-portadaHabilidades', 'linear-gradient(145deg, #lalala, #07070769)');
        root.style.setProperty('--texto-cajas', 'rgb(205, 205, 205)');
        root.style.setProperty('--negro-a-verde', '#78c751');
        root.style.setProperty('--shadow-portada', '8px 8px 8px #07070769, -8px -8px 8px #4141414a');
        root.style.setProperty('--borde-rotar', '#78c7517e');
        root.style.setProperty('--form-bg', '#d2d2d2');
        root.style.setProperty('--inputPlaceholder', '#353535');
        root.style.setProperty('--sombra-presentacionPag-foto', '6px 6px 17px red, -6px -6px 17px blue;')
        
        document.querySelector('footer').style.backgroundColor = "#242424";

        //Index
        document.getElementById("pageIntro__rectanguloStroke").style.border = "1px solid #f2d338";
        document.getElementById("pageIntro__rectanguloVerticalStroke").style.border = "1px solid #d3d3d3";
        document.getElementById("pageIntro__cuadradoStroke").style.border = "1px solid #12e9ed";
        document.getElementById("pageIntro__trianguloStroke1").style.borderBottom = "1px solid #ed7112";
        document.getElementById("pageIntro__trianguloStroke2").style.borderBottom = "1px solid #ed7112";
        document.getElementById("pageIntro__trianguloStroke3").style.borderBottom = "1px solid #ed7112";
        document.getElementById("pageIntro__cruz1").style.borderBottom = "1px solid #d3d3d3";
        document.getElementById("pageIntro__cruz2").style.borderBottom = "1px solid #d3d3d3";
        document.getElementById("pageIntro__flecha1--paloCentral").style.backgroundColor = "#d3d3d3";
        document.getElementById("pageIntro__flecha1--palito").style.borderBottom = "4px solid #d3d3d3";
        document.getElementById("pageIntro__flecha1--palito2").style.borderBottom = "4px solid #d3d3d3";
        document.getElementsByClassName("barraFlotante__aLi")[0].style.color = "#78c751";
        document.getElementsByClassName("barraFlotante__aLi")[1].style.color = "#78c751";
        document.getElementsByClassName("barraFlotante__aLi")[2].style.color = "#78c751";
        document.getElementsByClassName("barraFlotante__aLi")[3].style.color = "#78c751";
        document.getElementsByClassName("barraFlotante__aLi")[4].style.color = "#78c751";
        //document.getElementsByClassName("barraFlotante__aLi")[5].style.color = "#78c751";
        document.getElementsByClassName("sectionSubtitle")[0].style.color = "#919191";
        document.getElementsByClassName("sectionSubtitle")[1].style.color = "#919191";
    }else {
        location.reload();
    }
};