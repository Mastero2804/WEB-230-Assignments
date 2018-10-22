<?php

    $browser = get_browser(null, true);

    print_r($browser);

    $browser = $browser['browser'];

    echo '<h3>'. $browser . '</h3>';

    if($browser != 'chrome'){
      echo 'You\'re not using Google Chrome. You are using '.$browser.'.';
    }

 ?>
