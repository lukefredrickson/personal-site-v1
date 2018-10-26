let overlayNav = document.getElementById("overlay-nav");
const overlayNavHiddenClass = "overlay-nav--hidden";
let overlayNavCloseBtn = document.getElementById("overlay-nav__close-btn");
let hero = document.getElementById("hero");
const heroHiddenClass = "hero--hidden";
let topNavMenuBtn = document.getElementById("top-nav__menu-btn");

const openOverlayNav = () => {
    if ( !hero.classList.contains(heroHiddenClass) ) {
        hero.classList.add(heroHiddenClass);
    }
    if ( overlayNav.classList.contains(overlayNavHiddenClass) ) {
        overlayNav.classList.remove(overlayNavHiddenClass);
    }
}

const closeOverlayNav = () => {
    if ( !overlayNav.classList.contains(overlayNavHiddenClass) ) {
        overlayNav.classList.add(overlayNavHiddenClass);
    }
    if ( hero.classList.contains(heroHiddenClass) ) {
        hero.classList.remove(heroHiddenClass);
    }
}