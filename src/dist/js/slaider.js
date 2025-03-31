"use strict";

document.addEventListener('DOMContentLoaded', function () {
  var slaiderLine = document.querySelector('.container-line');
  var headerLinks = document.querySelectorAll('.nav-link');
  headerLinks.forEach(function (link) {
    link.addEventListener('click', function () {
      var index = parseInt(link.dataset.index);
      headerLinks.forEach(function (el) {
        return el.classList.remove('active');
      });
      link.classList.add('active');
      slaiderLine.style.marginLeft = "-".concat(index, "00%");
    });
  });
  var btnAbout = document.querySelector('#link-about');
  if (btnAbout) {
    btnAbout.addEventListener('click', function () {
      slaiderLine.style.marginLeft = "-100%";
      headerLinks.forEach(function (el) {
        return el.classList.remove('active');
      });
      headerLinks[1].classList.add('active');
    });
  }
});