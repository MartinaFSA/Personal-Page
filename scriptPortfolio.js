/* Cuando navBar llega a a la seccion de portfolio propiamente dicha aparece y se fixea pero sin el fondo y que cambie d eposicion
https://stackoverflow.com/questions/1216114/how-can-i-make-a-div-stick-to-the-top-of-the-screen-once-its-been-scrolled-to */

/*Ventana modal al onclick de presentación página*/

//Página 1
    //Declaro las constantes para la página 1
const modal1 = document.getElementById('modalDePagina1');
const modalClose1 = document.getElementById('close-modal1');
const modalOpen1 = document.getElementById('modalDePagina1--abrir');

    //Modal opener
modalOpen1.addEventListener('click', openModal1);

function openModal1() {
    modal1.style.display = 'block';
    document.body.style.overflowY = 'none';
}

modalClose1.addEventListener('click', closeModal); 

//Página 2
const modal2 = document.getElementById('modalDePagina2');
const modalOpen2 = document.getElementById('modalDePagina2--abrir');
const modalClose2 = document.getElementById('close-modal2');

modalOpen2.addEventListener('click', openModal2);

function openModal2() {
    modal2.style.display = 'block';
    document.body.style.overflowY = 'none';
}

modalClose2.addEventListener('click', closeModal); 
/*
//Página 3
const modal3 = document.getElementById('modalDePagina3');
const modalOpen3 = document.getElementById('modalDePagina3--abrir');
const modalClose3 = document.getElementById('close-modal3');

modalOpen3.addEventListener('click', openModal3);

function openModal3() {
    modal3.style.display = 'block';
    document.body.style.overflowY = 'none';
}

modalClose3.addEventListener('click', closeModal); 

//Página 4
const modal4 = document.getElementById('modalDePagina4');
const modalOpen4 = document.getElementById('modalDePagina4--abrir');
const modalClose4 = document.getElementById('close-modal4');

modalOpen4.addEventListener('click', openModal4);

function openModal4() {
    modal4.style.display = 'block';
    document.body.style.overflowY = 'none';
}

modalClose4.addEventListener('click', closeModal); 

*/
//GENERALES
//Cuando click fuera del modal, modal close
window.addEventListener('click', clickOutsideModal); 

function clickOutsideModal(evento){
    if(evento.target == modal1){
        modal1.style.display = "none";
    }

    else if(evento.target == modal2) {
        modal2.style.display = "none";
    }

    else if(evento.target == modal3) {
        modal3.style.display = "none";
    }
    
    else if(evento.target == modal4) {
        modal4.style.display = "none";
    }
}

//Modal close en equis
function closeModal(){
    modal1.style.display = "none";
    modal2.style.display = "none";
    modal3.style.display = "none";
    modal4.style.display = "none";

    document.body.style.overflowY = "auto";
}


/*Dark Theme*/
var activateCoderModePortfolio = document.getElementById("introPage__titulosPortfolio--coderMode");
var root = document.querySelector(':root');

activateCoderModePortfolio.onclick = function cambiosCoderModePortfolio() {
    
    if(activateCoderModePortfolio.textContent == "DARK THEME"){
        activateCoderModePortfolio.textContent = "LIGHT THEME";
        document.body.style.backgroundColor = "#212121";
        console.log('Hola este es mi activate DARK THEME');

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

        //Portfolio
        document.getElementById("pageIntro__flecha1--paloCentral").style.backgroundColor = "#d3d3d3";
        document.getElementById("pageIntro__flecha1--palito").style.borderBottom = "4px solid #d3d3d3";
        document.getElementById("pageIntro__flecha1--palito2").style.borderBottom = "4px solid #d3d3d3";
        document.getElementsByClassName("sectionSubtitle")[0].style.color = "#919191";
        document.getElementsByClassName("sectionSubtitle")[1].style.color = "#919191";
        document.querySelector('footer').style.backgroundColor = "#242424";
        document.getElementById("introPage__rectanguloStroke").style.border = "1px solid #12e9ed";
        document.getElementById("introPage__rectanguloVerticalStroke").style.border = "1px solid #d3d3d3";
        document.getElementById("introPage__cuadradoStroke").style.border = "1px solid #ed7112";
        document.getElementById("introPage__trianguloStroke1").style.borderBottom = "1px solid #d3d3d3";
        document.getElementById("introPage__trianguloStroke2").style.borderBottom = "1px solid #d3d3d3";
        document.getElementById("introPage__trianguloStroke3").style.borderBottom = "1px solid #d3d3d3";
        document.getElementById("introPage__cruz1").style.borderBottom = "1px solid #f2d338";
        document.getElementById("introPage__cruz2").style.borderBottom = "1px solid #f2d338";
    }else {
        location.reload();
    }
};

