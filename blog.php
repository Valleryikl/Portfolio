<?php
require_once "./modul/cardItem.php";
?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>Blog</title>
  <link rel="stylesheet" href="./src/css/main.min.css">
  <script src="./src/dist/js/script.js" defer></script>
  <script src="./src/dist/js/cards.js" defer></script>
  <script src="./src/dist/js/untransition.js" defer></script>
</head>

<body>
  <div class="untransition"></div>
  <nav>
    <a class="logo" href="./index.php">ValleryG</a>
  </nav>
  <main>
    <?php 
      cardItem("1", 
      "2006-01-19", 
      "Little me was born", 
      "I was born on the coldest and most ruthless night in Moldova's history — at -30°C,
      when the Arctic wind paralyzed the country for several hours, and even time itself seemed
      to stretch as though it were eternity.");
      cardItem("2", 
      "2013-09-01", 
      "First grade", 
      "I started first grade at school. During this time, I enrolled in drawing and dance classes
      (performed across the country and won first places in folk dance competitions).");
      cardItem("3", 
      "2017-07", 
      "Final project", 
      "I completed my drawing courses and presented my final project — a painting of two swans —
      in a museum, where it stayed on display for six months. One day, a lady offered to buy it for
      €200 (which was a significant amount of money in Moldova at the time, especially for a child),
      but I refused and took my painting home.");
      cardItem("4", 
      "2017-07", 
      "Artist", 
      "I work as a cleaner (a person who removes text from images and redraws covers) for a group of
      people who translate manga with an audience of over 10k. At the same time, I am starting to draw 
      for free on request and developing my professional social media.");
      cardItem("5", 
      "2017-07", 
      "Final project", 
      "I completed my drawing courses and presented my final project — a painting of two swans —
      in a museum, where it stayed on display for six months. One day, a lady offered to buy it for
      €200 (which was a significant amount of money in Moldova at the time, especially for a child),
      but I refused and took my painting home.");
    ?>
  </main>
  <canvas id="lightCanvas"> </canvas>
  <canvas id="dotsCanvas"> </canvas>
</body>

</html>