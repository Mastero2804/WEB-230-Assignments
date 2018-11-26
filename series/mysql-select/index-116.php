<?php

    require 'connect.inc.php';

    $query = "SELECT food, calories FROM food ORDER BY id DESC";

    if($query_run = mysqli_query($con, $query)){

      while ($query_row = mysqli_fetch_assoc($query_run)) {
        $food = $query_row["food"];
        $calories = $query_row['calories'];
        echo $query_row['food'] . ' has ' . $calories . ' calories.<br/>';
      }

      mysqli_free_result($query_run);

      mysqli_close($con);

    }else{
      echo("Error description: " . mysqli_error($con));
    }


?>
