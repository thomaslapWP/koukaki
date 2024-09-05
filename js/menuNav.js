
const boutonMenu = document.querySelector(".boutonMenu");
const burger = document.querySelector(".MenuFull");
const menuLinks = document.querySelectorAll(".MenuFull ul li a");
const animTitles = document.querySelectorAll(".Animetitre, .animateTitle");


const toggleMenu = () => {
  burger.classList.toggle("nav_open");
  boutonMenu.classList.toggle("active");


  document.body.style.overflow = burger.classList.contains("nav_open")
    ? "hidden"
    : "auto";
};

boutonMenu.addEventListener("click", toggleMenu);


menuLinks.forEach((link) => {
  link.addEventListener("click", () => {
    burger.classList.remove("nav_open");
    boutonMenu.classList.remove("active");
    document.body.style.overflow = "auto"; 
  });
});

animTitles.forEach((title) => {
  title.addEventListener("click", () => {
    document.body.style.overflow = "auto";
  });
});
