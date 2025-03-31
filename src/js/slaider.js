document.addEventListener('DOMContentLoaded', function () {
    const slaiderLine = document.querySelector('.container-line');
    const headerLinks = document.querySelectorAll('.nav-link');

    headerLinks.forEach(link => {
        link.addEventListener('click', function () {
            const index = parseInt(link.dataset.index);
            headerLinks.forEach(el => el.classList.remove('active'));
            link.classList.add('active');
            slaiderLine.style.marginLeft = `-${index}00%`;
        });
    });
    const btnAbout = document.querySelector('#link-about');
    if (btnAbout) {
        btnAbout.addEventListener('click', function () {
            slaiderLine.style.marginLeft = "-100%";

            headerLinks.forEach(el => el.classList.remove('active'));
            headerLinks[1].classList.add('active');
        });
    }
});