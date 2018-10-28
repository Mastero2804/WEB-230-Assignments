<?php

  session_start();
  session_destroy();
  header('Location: extra-credit.php');
  
?>
