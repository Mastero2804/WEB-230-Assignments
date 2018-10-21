<?php

include_once('include/config.inc.php');
include_once('include/functions.php');
include_once('include/menu.data.php');
  if(isset($pageTitle)){$pageTitle = $appTitle.' - '.$pageTitle;}else{$pageTitle = $appTitle;}
  echo '<!DOCTYPE html>';
  echo '<html lang="en">';
  echo '     <head>';
  echo '          <meta charset="UTF-8">';
  echo '          <meta name="viewport" content="width=device-width, initial-scale=1.0">';
  echo '          <meta http-equiv="X-UA-Compatible" content="ie=edge">';
  echo '          <title>'.$pageTitle.'</title>';
  echo '          <link rel="stylesheet" href="assets/css/style.css">';
  echo '     </head>';
  echo '     <body>';
  echo '          <header>';

  echo '               <a href="index.php"><h1>'.$pageTitle.'</h1></a>';
  echo '               <h2>our connections to our colluges</h2>';

        menuBuilder( $menuItems );

  echo '          </header>';
  echo '          <section>';
 ?>
