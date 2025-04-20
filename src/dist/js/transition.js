"use strict";

var transition = document.querySelector('.transition');
var transitionLink = document.querySelector('#transitionLink');
transitionLink.addEventListener('click', function () {
  transition.style.top = "0";
  setTimeout(function () {
    window.location.href = "/blog.php";
  }, 1500);
});