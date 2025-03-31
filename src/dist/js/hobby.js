"use strict";

document.addEventListener('DOMContentLoaded', function () {
  var prev = document.querySelector('#prev');
  var next = document.querySelector('#next');
  var hobbyLine = document.querySelector('.hobby-line');
  var circles = document.querySelectorAll('.circle');
  var count = 0;
  console.log(circles);
  circles[count].style.backgroundColor = "#B97EFF";
  next.addEventListener('click', function () {
    circles[count].style.backgroundColor = "inherit";
    if (count > 1) {
      count = 0;
    } else {
      count += 1;
    }
    hobbyLine.style.marginLeft = -count + "00%";
    circles[count].style.backgroundColor = "#B97EFF";
  });
  prev.addEventListener('click', function () {
    circles[count].style.backgroundColor = "inherit";
    if (count < 1) {
      count = 2;
    } else {
      count -= 1;
    }
    hobbyLine.style.marginLeft = -count + "00%";
    circles[count].style.backgroundColor = "#B97EFF";
  });
  var _loop = function _loop(index) {
    circles[index].addEventListener('click', function () {
      for (var i = 0; i < circles.length; i++) {
        circles[i].style.backgroundColor = "inherit";
      }
      this.style.backgroundColor = "#B97EFF";
      hobbyLine.style.marginLeft = "-".concat(index, "00%");
    });
  };
  for (var index = 0; index < circles.length; index++) {
    _loop(index);
  }
});