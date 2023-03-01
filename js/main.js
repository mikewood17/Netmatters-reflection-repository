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
    menu_btn.classList.toggle('is-active');
    slide_menu.classList.toggle('side-menu_open');
    mainHeader.style.position = "relative";
    main.style.marginRight = "300px";
    main.style.marginLeft = "-300px";
    mainHeader.style.marginRight = "300px";
    backgroundFade.style.display = 'block';
    main.classList.toggle('menu-open');
    body.classList.add('no-scroll');
}

function closeMenu() {
    menu_btn.classList.remove('is-active');
    slide_menu.classList.remove('side-menu_open');
    main.style.marginRight = "0px";
    main.style.marginLeft = "0px";
    // mainHeader.style.position = "fixed";
    // mainHeader.style.marginRight = "0px";
    backgroundFade.style.display = 'none';
    main.classList.toggle('menu-open');
    body.classList.remove('no-scroll');
}

menu_btn.addEventListener('click', function() {
    if (slide_menu.classList.contains('side-menu_open')) {
        closeMenu();
    } else {
        openMenu();
    }
})

backgroundFade.addEventListener('click', function(){
    if (slide_menu.classList.contains('side-menu_open')) {
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

    if (currentScroll > lastScroll && !body.classList.contains("scroll-down") && currentScroll > 350) {
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

// search toggle

const searchBtn = document.querySelector('.search-btn');
const searchBar = document.querySelector('.search-bar');
const btnContain = document.querySelector('.container_button');
const contactBtn = document.querySelector('.button-2');
const supportBtn = document.querySelector('.button-1');

function openSearch(){
    btnContain.style.display = 'none';
    $(".search-bar").fadeIn("slow");
    searchBtn.style.borderRadius = '0 3px 3px 0';
    searchBar.style.display = 'flex';
    searchBar.style.width = '300px';
    
}

function closeSearch(){
    $(".search-bar").fadeOut("100");
    searchBtn.style.borderRadius = '3px';
    $(".container_button").fadeIn('slow');
    btnContain.style.display = 'flex';
    searchBar.style.display = 'none';
    searchBar.style.width = '174px';
}

searchBtn.addEventListener('click', function(){
    if (searchBar.style.display == 'none' && $(window).width() > 992 ){
        openSearch();

    } else if($(window).width() < 992){
        
        
    } else {
        
        closeSearch();
    }
})



// checkbox 

const checkbox = document.querySelector('.checkbox');

function checkedbox() {
    checkbox.classList.add("checked");
    checkbox.innerHTML = '<i class="fa-solid fa-check checkmark"></i>';
}

function uncheckbox(){
    checkbox.classList.remove("checked");
    checkbox.innerHTML = '';
}

checkbox.addEventListener('click', function(){
   if (!this.classList.contains("checked")){
        checkedbox();
   } else {
        uncheckbox();
   }
})

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
    cookiePopup.style.display = 'block';
    backgroundFade.style.display = 'block';
    body.style.overflow = 'hidden';
}

cookieButton.addEventListener('click', cookieGet);



