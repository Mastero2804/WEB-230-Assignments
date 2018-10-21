<?php

  // 01. Explaine what the time function is.
  $time = time();

  // 02. Explain what the following line of code is doing and how.
  $actual_time = date('D M Y @ H:i:s', $time);

  // 03. Explain what the following line of code is doing and how.
  $time_modified = date('d M Y @ H:s', $time);

  // 04. Explain a way the $actual_time might be used in a web application.
  echo '<h3>The current dte/time is: '.$actual_time.'<h3>';

  // 05. Explain a way the $time_modified might be used in a web application.
  echo '<h3>The modified dte/time is: '.$time_modified.'<h3>';

?>
