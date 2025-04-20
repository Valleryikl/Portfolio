document.addEventListener('DOMContentLoaded', function () {
    let untransition = document.querySelector('.untransition');
    setTimeout(() => {
        untransition.style.top = "-100%";
    }, 1500);
})