"use strict";

document.addEventListener('DOMContentLoaded', function () {
  var slaiderLine = document.querySelector('.container-line');
  var headerLinks = document.querySelectorAll('.nav-link');
  var btnAbout = document.querySelector('#link-about');
  headerLinks.forEach(function (link) {
    link.addEventListener('click', function () {
      var index = parseInt(link.dataset.index);
      headerLinks.forEach(function (el) {
        el.classList.remove('active');
        var id = "#" + el.id;
        console.log(slaiderLine.querySelector(id));
        slaiderLine.querySelector(id).style.display = "none";
      });
      var id = "#" + link.id;
      link.classList.add('active');
      slaiderLine.querySelector(id).style.display = "flex";
      console.log(link);
      // slaiderLine.style.marginLeft = `-${index}00%`;
    });
  });
  if (btnAbout) {
    btnAbout.addEventListener('click', function () {
      // slaiderLine.style.marginLeft = "-100%";
      slaiderLine.querySelector("#Home").style.display = "none";
      slaiderLine.querySelector("#About").style.display = "flex";
      headerLinks.forEach(function (el) {
        return el.classList.remove('active');
      });
      headerLinks[1].classList.add('active');
    });
  }
});