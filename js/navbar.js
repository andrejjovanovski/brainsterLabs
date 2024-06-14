const hamburger = document.querySelector(".hamburger");
const closeIcon = document.querySelector(".close-icon");
const navMenu = document.querySelector(".nav-links");
const body = document.querySelector("body");

hamburger.addEventListener("click", ()=> {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
    body.classList.toggle("no-scroll");
});

closeIcon.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
    body.classList.toggle("no-scroll");
})