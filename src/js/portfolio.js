let portfolio = document.querySelectorAll('.portfolio-group');
portfolio.forEach(element => {
    element.addEventListener('click', function() {
        let elementInfo = element.querySelector('.portfolio-info');
        if (elementInfo.style.display == "flex") {
            elementInfo.style.display = "none";
        } else {
            elementInfo.style.display = "flex";
        }
    })
});