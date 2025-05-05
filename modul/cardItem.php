<?php
function cardItem($nr, $time, $title, $content) {
    echo "<div class='card card-".$nr."'>
      <time datetime='".$time."'>".$time."</time>
      <h4>".$title."</h4>
      <p>".$content."</p>
    </div>";
}