"use strict";

document.addEventListener('DOMContentLoaded', function () {
  var block = document.getElementsByClassName('portfolio-group');
  var body = document.body;
  var _loop = function _loop() {
    var element = block[i];
    element.addEventListener('click', function () {
      console.log(element);
      if (body.classList.contains('no_scroll')) {
        body.classList.remove('no_scroll');
      } else {
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
        body.classList.add('no_scroll');
      }
    });
  };
  for (var i = 0; i < block.length; i++) {
    _loop();
  }
});