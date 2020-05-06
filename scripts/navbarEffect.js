//Fonction qui permet de coller la navbar en haut de la page
window.onscroll = function() {navbarSticky()};
const header = document.getElementById('header');
const navbarMobile = document.getElementById('navbarMobile');

let headerTopPos = header.offsetTop;

function navbarSticky() {
    if (window.pageYOffset >= headerTopPos) {
        header.classList.add("sticky");
        header.classList.remove("header");
        newsContainer.style.visibility = "visible";";
    } else {
        header.classList.remove("sticky");
        header.classList.add("header");
        newsContainer.style.visibility = "hidden";
    }
}
//Fonction qui permet d'ouvrir la navBar en mobile
function openMenu(){
    if(navbarMobile.classList.contains('navbar-mobile-opened')){
        navbarMobile.classList.remove('navbar-mobile-opened');
    }else{
        navbarMobile.classList.add('navbar-mobile-opened');
    }

}