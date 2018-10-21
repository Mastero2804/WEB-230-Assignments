<?php

  $pageTitle = "Events";
  include_once('include/header.inc.php');
  include_once('include/events.data.php');


  foreach ($events as $value) {
      echo '<div><h1>'.$value[0].'</h1><div>'.$value[1].'</div><div>'.$value[2].'</div></div>';
  }

  include_once('include/footer.inc.php');

?>
