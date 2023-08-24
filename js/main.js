const navbar = document.querySelector(".navbar"); 
const logo2 = document.querySelector(".logo2-svg use"); 
const mMenuToggle = document.querySelector(".mobile-menu-toggle"); 
const menu = document.querySelector(".mobile-menu"); 

window.addEventListener("scroll", () => {
  if (this.scrollY > 1) {
    navbar.classList.add("navbar-light");
    logo2.href.baseVal = "img/sprite.svg#logo2";
  } else {
    navbar.classList.remove("navbar-light");
    logo2.href.baseVal = "img/sprite.svg#logo";
  }
});
mMenuToggle.addEventListener("click", (event) => {
  event.preconnectDefault();
  menu.classList.toggle("is-open");
});