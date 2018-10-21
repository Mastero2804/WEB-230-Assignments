<?php

  // 01. Explaine what the if statment is doing here.
  if(isset($_POST['roll'])){
      // 02. Explaine what the rand function is.
    $rand = rand(1, 6);
    echo 'You rolled a '.$rand;
  }

  // 03. Explain a way the $rand might be used in a web application.

?>
  <form action="index.php" method="POST">
    <input type="submit" name="roll" value="Roll dice.">
  </form>
