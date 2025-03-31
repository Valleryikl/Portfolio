document.addEventListener('DOMContentLoaded', function () {
    const slaiderLine = document.querySelector('.container-line');
    const headerLinks = document.querySelectorAll('.nav-link');
    const btnAbout = document.querySelector('#link-about');
    headerLinks.forEach(link => {
        link.addEventListener('click', function () {
            const index = parseInt(link.dataset.index);
            headerLinks.forEach(function(el) {
                el.classList.remove('active');
                let id = "#" + el.id;
                console.log(slaiderLine.querySelector(id));
                slaiderLine.querySelector(id).style.display = "none";
            });
            let id = "#" + link.id;
            link.classList.add('active');
            slaiderLine.querySelector(id).style.display = "flex";
            console.log(link);
            // slaiderLine.style.marginLeft = `-${index}00%`;
        });
    });
    if (btnAbout) {
        btnAbout.addEventListener('click', function () {
            // slaiderLine.style.marginLeft = "-100%";

            headerLinks.forEach(el => el.classList.remove('active'));
            headerLinks[1].classList.add('active');
        });
    }
});