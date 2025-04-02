let menu = document.querySelector('.menu');
let navbar = document.querySelector('.nav-list');

menu.addEventListener('click', function () {
    if (navbar.style.display === "none" || navbar.style.display === "") {
        navbar.style.display = "flex";
        navbar.style.opacity = 1;
    } else {
        navbar.style.display = "none";
        navbar.style.opacity = 0;
    }
});
