"use strict";

document.addEventListener('DOMContentLoaded', function () {
  var transition = document.querySelector('.untransition');
  setTimeout(function () {
    transition.style.top = "-100vh";
  }, 100);
});