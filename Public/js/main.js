$(document).ready(function(){
    scrollHeader();
    menuActive();
    animationScroll();
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
    // EVENTOS
    if(document.URL.includes('events.php')){
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
    // CONTACTO
    if(document.URL.includes('contact.php')){
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
    // RESERVAR
    if(document.URL.includes('book.php')){
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

    // POLÍTICAS DE PRIVACIDAD
    if(document.URL.includes('terminos-condiciones.php')){
        $('.navbar-nav > li').removeClass("active");
        header.classList.add('color_white');
    }
}

/*=============== SCROLL REVEAL ANIMATION ===============*/
function animationScroll(){
    const sr = ScrollReveal({
        distance: '60px',
        duration: 2500,
        delay: 400,
        // reset: true
    })

    sr.reveal(`.home__header, .section__title`,{delay: 400})
    sr.reveal(`.home__footer`,{delay: 700})
    sr.reveal(`.home__img`,{delay: 900, origin: 'top'})
    
    sr.reveal(`.sponsor__img, .products__card, .footer__logo, .footer__content, .footer__copy`,{origin: 'top', interval: 100})
    sr.reveal(`.specs__data, .discount__animate`,{origin: 'left', interval: 100})
    sr.reveal(`.specs__img, .discount__img`,{origin: 'right'})
    sr.reveal(`.case__img`,{origin: 'top'})
    sr.reveal(`.case__data`)
    
    sr.reveal(`.home__photo1__fade`,{distance: '60px'})
    sr.reveal(`.home__photo1`,{delay: 100})
    sr.reveal(`.home__photo2`,{delay: 200})
    sr.reveal(`.home__photo3`,{delay: 300})
    sr.reveal(`.home__photo4`,{delay: 400})
    sr.reveal(`.home__photo5`,{delay: 500})
    sr.reveal(`.home__photo6`,{delay: 600})
    sr.reveal(`.home__photo7`,{delay: 700})
    sr.reveal(`.home__photo8`,{delay: 800})
    sr.reveal(`.home__photo9`,{delay: 900})
    sr.reveal(`.home__photo10`,{delay: 1000})
    sr.reveal(`.home__photo11`,{delay: 1100})
    sr.reveal(`.home__photo12`,{delay: 1200})
    sr.reveal(`.home__photo13`,{delay: 1300})
    sr.reveal(`.home__photo14`,{delay: 1400})
    sr.reveal(`.home__photo15`,{delay: 1500})
    sr.reveal(`.home__photo16`,{delay: 1600})
    sr.reveal(`.home__photo17`,{delay: 1700})

    sr.reveal(`.home__left1`,{origin: 'left', delay: 100})
    sr.reveal(`.home__left2`,{origin: 'left', delay: 200})
    sr.reveal(`.home__left3`,{origin: 'left', delay: 300})
    sr.reveal(`.home__left4`,{origin: 'left', delay: 400})
    sr.reveal(`.home__left5`,{origin: 'left', delay: 500})

    sr.reveal(`.home__right1`,{origin: 'right', delay: 100})
    sr.reveal(`.home__right2`,{origin: 'right', delay: 200})
    sr.reveal(`.home__right3`,{origin: 'right', delay: 300})
    sr.reveal(`.home__right4`,{origin: 'right', delay: 400})
    sr.reveal(`.home__right5`,{origin: 'right', delay: 500})
    sr.reveal(`.home__right6`,{origin: 'right', delay: 600})
    sr.reveal(`.home__right7`,{origin: 'right', delay: 700})
    sr.reveal(`.home__right8`,{origin: 'right', delay: 800})
    sr.reveal(`.home__right9`,{origin: 'right', delay: 900})
    sr.reveal(`.home__right10`,{origin: 'right', delay: 1000})
    sr.reveal(`.home__right11`,{origin: 'right', delay: 1100})
    sr.reveal(`.home__right12`,{origin: 'right', delay: 1200})

}