"use strict";

function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
document.addEventListener("DOMContentLoaded", function () {
  var text = "Developer";
  var delay = 230;
  var typedElement = document.getElementById("typed");
  var charIndex = 0;
  function type() {
    if (charIndex < text.length) {
      typedElement.textContent += text.charAt(charIndex);
      charIndex++;
      setTimeout(type, delay);
    }
  }
  type();
});

// Освещение курсора
var lightCanvas = document.getElementById("lightCanvas");
var lightCtx = lightCanvas.getContext("2d");
lightCanvas.width = window.innerWidth;
lightCanvas.height = window.innerHeight;
var mouse = {
  x: lightCanvas.width / 2,
  y: lightCanvas.height / 2
};
window.addEventListener("mousemove", function (e) {
  mouse.x = e.clientX;
  mouse.y = e.clientY;
});
function drawLight() {
  lightCtx.clearRect(0, 0, lightCanvas.width, lightCanvas.height);
  var gradient = lightCtx.createRadialGradient(mouse.x, mouse.y, 0, mouse.x, mouse.y, 180);
  gradient.addColorStop(0, "rgba(185, 126, 255, 0.2)");
  gradient.addColorStop(0.5, "rgba(100, 100, 100, 0.1)");
  gradient.addColorStop(1, "rgba(0, 0, 0, 0)");
  lightCtx.fillStyle = gradient;
  lightCtx.fillRect(mouse.x - 180, mouse.y - 180, 360, 360);
  requestAnimationFrame(drawLight);
}
drawLight();

// Падающие точки
var dotsCanvas = document.getElementById("dotsCanvas");
var dotsCtx = dotsCanvas.getContext("2d");
dotsCanvas.width = window.innerWidth;
dotsCanvas.height = window.innerHeight;
var dots = [];
var dotCount = 100;
var Dot = /*#__PURE__*/function () {
  function Dot() {
    _classCallCheck(this, Dot);
    this.x = Math.random() * dotsCanvas.width;
    this.y = Math.random() * dotsCanvas.height;
    this.radius = Math.random() * 3;
    this.speed = Math.random() * .5;
    this.opacity = 0.3;
  }
  return _createClass(Dot, [{
    key: "update",
    value: function update() {
      this.y += this.speed;
      if (this.y > dotsCanvas.height) {
        this.y = -this.radius;
        this.x = Math.random() * dotsCanvas.width;
      }
    }
  }, {
    key: "draw",
    value: function draw() {
      dotsCtx.beginPath();
      dotsCtx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
      dotsCtx.fillStyle = "rgba(255, 255, 255, ".concat(this.opacity, ")");
      dotsCtx.fill();
      dotsCtx.closePath();
    }
  }]);
}();
function initDots() {
  for (var i = 0; i < dotCount; i++) {
    dots.push(new Dot());
  }
}
function animateDots() {
  dotsCtx.clearRect(0, 0, dotsCanvas.width, dotsCanvas.height);
  dots.forEach(function (dot) {
    dot.update();
    dot.draw();
  });
  requestAnimationFrame(animateDots);
}
initDots();
animateDots();
window.addEventListener("resize", function () {
  lightCanvas.width = window.innerWidth;
  lightCanvas.height = window.innerHeight;
  dotsCanvas.width = window.innerWidth;
  dotsCanvas.height = window.innerHeight;
  dots = [];
  initDots();
});

// tab
document.querySelectorAll('.tab').forEach(function (tab) {
  tab.addEventListener('click', function () {
    document.querySelector('.tab.active').classList.remove('active');
    tab.classList.add('active');
    document.querySelector('.tab-content.active').classList.remove('active');
    document.getElementById(tab.dataset.tab).classList.add('active');
  });
});