<?php

  require 'config.inc.php';

  // 01. Explaine whthis for each loop is doing.
    foreach ($ip_blocked as $ip) {
      if($ip == $ip_address){
        die('Your IP address, '.$ip_address.' has been blocked');
      }
    }

 ?>

 <h1>Welcome</h1>
