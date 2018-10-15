<?php

include_once('include/header.inc.php');

  $offset = 0;

  if(isset($_POST['text'])){

    $text = $_POST['text'];
    $search = 'Acme';
    $replace = 'Insights';

    $search_length = strlen($search);

      if(!empty($text)){

        while ($strpos = strpos($text, $search, $offset)) {

          //Explain why we change the value of the $offset variable her.
          $offset = $strpos + $search_length;

          // Explain what we are doing here to the $text variable.
          $text = substr_replace($text, $replace, $strpos, $search_length);

        }

      } else {

        echo 'Please fill in the text fields.';

      }

  }

?>

<form action="index.php" method="POST">

  <textarea name="text" rows="10" cols="60"><?php echo $text; ?></textarea><br><br>

  <button type="submit">Review</button>

</form>

<?php

  include_once('include/footer.inc.php');

?>
