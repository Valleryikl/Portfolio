let transition = document.querySelector('.transition');
let transitionLink = document.querySelector('#transitionLink');
transitionLink.addEventListener('click', function() {
    transition.style.top = "0";
    setTimeout(() => {
        window.location.href = "/blog.php";
    }, 1500);
})