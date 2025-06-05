"use strict";

var portfolio = document.querySelectorAll('.portfolio-group');
portfolio.forEach(function (element) {
  element.addEventListener('click', function () {
    var elementInfo = element.querySelector('.portfolio-info');
    if (elementInfo.style.display == "flex") {
      elementInfo.style.display = "none";
    } else {
      elementInfo.style.display = "flex";
    }
  });
});