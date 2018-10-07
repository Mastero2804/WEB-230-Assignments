<?php

  // Explain why we are creating the $offset variable and what it is being used for.
  $offset = 0;

  // Explain what we are doing in the if statement and why we would do it.
  if(isset($_POST['text'])&&isset($_POST['searchfor'])&&isset($_POST['replacewith'])){

    // Provide a reason why we would make a variable to capture a variable we could already use.
    $text = $_POST['text'];
    $search = $_POST['searchfor'];
    $replace = $_POST['replacewith'];

    // Explain why we need to create this variable $search_length.
    $search_length = strlen($search);

      if(!empty($text)&&!empty($search)&&!empty($replace)){

        while ($strpos = strpos($text, $search, $offset)) {

          //Explain why we change the value of the $offset variable her.
          $offset = $strpos + $search_length;

          // Explain what we are doing here to the $text variable.
          $text = substr_replace($text, $replace, $strpos, $search_length);

        }

        echo $text;

      } else {

        // Explain why we include this here.
        echo 'Please fill in all fields.';

      }

  }

?>

<hr>

<!-- Explain the action and method attributes. -->
<form action="index.php" method="POST">
  
  <textarea name="text" rows="6" cols="30"></textarea><br><br>

  Search for:<br><br>
  <input type="text" name="searchfor"><br><br>

  Replace with:<br>
  <input type="text" name="replacewith"><br><br>

  <!-- Explain what the type and value attributes are and do. -->
  <input type="submit" value="Find and Replace">

</form>
