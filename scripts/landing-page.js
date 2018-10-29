let overlayNav = document.getElementById("overlay-nav");
const overlayNavHiddenClass = "overlay-nav--hidden";
let hero = document.getElementById("main");
const heroHiddenClass = "main--hidden";

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