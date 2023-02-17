$(document).ready(function(){
    scrollHeader();
    menuActive();
});

function cargandoHome(){
    const header = document.getElementById("menu_dark");
}

function scrollHeader(){
    const header = document.getElementById("menu_dark");
    if(this.scrollY >= 20){
        header.classList.add('scroll-header');
    } else {
        header.classList.remove('scroll-header');
    }
}
window.addEventListener('scroll', scrollHeader)


function menuActive(){
    const header = document.getElementById("menu_dark");

    // HACIENDA
    if(document.URL.includes('hacienda.html')){
        header.classList.add('color_white');
    }

    // HACIENDA
    if(document.URL.includes('master-suite.html')){
        header.classList.add('color_white');
    }
}