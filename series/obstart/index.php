<?php

  // 02. Explaine why we use ob_start.
  ob_start(); ?>

<h1>My Page</h1>
This is my page.

<?php

    $redirect_page = 'http://google.com';

    $redirect = true;

    if($redirect == true){
      // 02. Explaine what is happening here.
      header('Location: '.$redirect_page);
    }

    // 03. Explaine why we use ob_end_flush.
    ob_end_flush();

 ?>
