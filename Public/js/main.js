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
    if(document.URL.includes('hacienda.php')){
        $('.navbar-nav > li').removeClass("active");
        $('.navbar-nav > li:nth-child(2)').addClass("active");
        header.classList.add('color_white');
    }
    
    // JUNIOR SUITE
    if(document.URL.includes('junior-suite.php')){
        $('.navbar-nav > li, .list_habitaciones > a').removeClass("active");
        $('.navbar-nav > li:nth-child(3), .list_habitaciones > a:nth-child(1)').addClass("active");
        header.classList.add('color_white');
    }
    
    // MASTER SUITE
    if(document.URL.includes('master-suite.php')){
        $('.navbar-nav > li').removeClass("active");
        $('.navbar-nav > li:nth-child(3)').addClass("active");
        header.classList.add('color_white');
    }
    
    // SUPERIOR SUITE
    if(document.URL.includes('superior-suite.php')){
        $('.navbar-nav > li, .list_habitaciones > a').removeClass("active");
        $('.navbar-nav > li:nth-child(3), .list_habitaciones > a:nth-child(3)').addClass("active");
        header.classList.add('color_white');
    }
    
    // EVENTOS
    if(document.URL.includes('eventos.php')){
        $('.navbar-nav > li').removeClass("active");
        $('.navbar-nav > li:nth-child(6)').addClass("active");
        header.classList.add('color_white');
    }
    
    // CONTACTO
    if(document.URL.includes('contacto.php')){
        $('.navbar-nav > li').removeClass("active");
        $('.navbar-nav > li:nth-child(7)').addClass("active");
        header.classList.add('color_white');
    }
    
    // RESERVAR
    if(document.URL.includes('reservar.php')){
        $('.navbar-nav > li').removeClass("active");
        $('.navbar-nav > li:nth-child(8)').addClass("active");
        header.classList.add('color_white');
    }
    
    // AVISO DE PRIVACIDAD
    if(document.URL.includes('aviso-privacidad.php')){
        $('.navbar-nav > li').removeClass("active");
        header.classList.add('color_white');
    }

    // POLÍTICAS DE CANCELACIÓN
    if(document.URL.includes('politicas-cancelacion.php')){
        $('.navbar-nav > li').removeClass("active");
        header.classList.add('color_white');
    }
}