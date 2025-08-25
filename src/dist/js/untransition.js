"use strict";

document.addEventListener('DOMContentLoaded', function () {
  var untransition = document.querySelector('.untransition');
  setTimeout(function () {
    untransition.style.top = "-100%";
  }, 1500);
});