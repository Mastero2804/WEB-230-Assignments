<?php

  include 'config.inc.php';

  // 01. Explaine the $_SERVER['SCRIPT_NAME'].
  $script_name = $_SERVER['SCRIPT_NAME'];

  // 02. Explain what is happening to roduce the resaulting output of the $images variable.
  echo $images;

 ?>

  <!-- 03. Explaine how using the $script_name variable benefits us. -->
  <form action="<?php echo $script_name; ?>" method="POST">
    <input type="submit" name="submit" value="Submit">
  </form>
