<?php

    require 'connect.inc.php';

    $query = "SELECT 'food', 'calories' FROM `food` ORDER BY 'id'";

    if($query_run = mysqli_query($con, $query)){
      echo 'Query succeded.';
    }else{
      echo("Error description: " . mysqli_error($con));
    }


?>
