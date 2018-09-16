<?php

  $string = 'This is a <img src="image.jpg"> string.';
  $string_slashes = htmlentities(addslashes($string));

  echo $string_slashes;

?>
