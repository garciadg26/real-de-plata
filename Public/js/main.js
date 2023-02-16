$(document).ready(function(){
    scrollHeader();
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