// =================================
// Main Javascript
// =================================

const body = document.body;
const backgroundFade = document.querySelector('.cookie-consent');
const bannerContent = document.querySelector('.banner-carousel');

// slideout menu

const menu_btn = document.querySelector('.hamburger');
const slide_menu = document.querySelector('.side-menu')
const main = document.querySelector('.main');
const mainHeader = document.querySelector(".header");

function openMenu() {
    slide_menu.style.display = "block";
    mainHeader.style.position = "relative";
    main.style.marginRight = "300px";
    mainHeader.style.marginRight = "300px";
    backgroundFade.style.display = 'block';
    main.classList.toggle('menu-open');
    // body[0].style.overflow = 'hidden';
}

function closeMenu() {
    slide_menu.style.display = "none";
    main.style.marginRight = "0px";
    mainHeader.style.position = "fixed";
    mainHeader.style.marginRight = "0px";
    backgroundFade.style.display = 'none';
    main.classList.toggle('menu-open');
    // body[0].style.overflow = 'scroll';
}

menu_btn.addEventListener('click', function() {
    if (slide_menu.style.display === 'block') {
        closeMenu();
    } else {
        openMenu();
    }
})

backgroundFade.addEventListener('click', function(){
    if (slide_menu.style.display === 'block') {
        closeMenu();
    }
})


// sticky header

let lastScroll = 0;

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset

    if (currentScroll <= 0) {
        body.classList.remove("scroll-up")
    }

    if (currentScroll > lastScroll && !body.classList.contains("scroll-down")) {
        body.classList.remove("scroll-up");
        body.classList.add("scroll-down");
    }

    if (currentScroll < lastScroll && body.classList.contains("scroll-down")) {
        body.classList.remove("scroll-down");
        body.classList.add("scroll-up");`   `
    }

    lastScroll= currentScroll;
})

// owl carousel

$(document).ready(function(){

    $('#owl-one').owlCarousel({
        autoplay:true,
        autoplayHoverPause:true,
        loop: true,
        slideSpeed : 300,
        paginationSpeed : 400,
        margin: 0,
        singleItem: true,
        items: 1,
    });

    $('#owl-two').owlCarousel({
        items:9,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        autoWidth: true
    });
});
// cookie popup

const cookieButton = document.querySelector('.cookie-button');
const cookiePopup = document.querySelector('.cookie-popup');

function cookieGet(){
    cookiePopup.style.display = 'none';
    backgroundFade.style.display = 'none';
    localStorage.setItem('cookies', 'accepted');
    body.style.overflow = 'scroll';
}

if (localStorage.getItem('cookies')){
    cookiePopup.style.display = 'none';
    backgroundFade.style.display = 'none';
} else {
    cookiePopup.style.display = 'grid';
    backgroundFade.style.display = 'block';
    body.style.overflow = 'hidden';
}

cookieButton.addEventListener('click', cookieGet);


