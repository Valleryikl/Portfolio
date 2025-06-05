"use strict";

var cards = document.querySelectorAll('.card');
cards.forEach(function (card) {
  var offsetX,
    offsetY,
    isDragging = false;
  card.addEventListener('mousedown', function (e) {
    isDragging = true;
    offsetX = e.clientX - card.offsetLeft;
    offsetY = e.clientY - card.offsetTop;
    card.style.zIndex = 1000;
  });
  document.addEventListener('mousemove', function (e) {
    if (!isDragging) return;
    card.style.left = e.clientX - offsetX + 'px';
    card.style.top = e.clientY - offsetY + 'px';
  });
  document.addEventListener('mouseup', function () {
    isDragging = false;
    card.style.zIndex = '';
  });
});