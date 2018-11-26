<?php
    require 'connect.inc.php';
?>

  <form action="index-118.php" method="GET">
    Choose a food type:
    <select name="uh">
      <option value="u">Unhealthy</option>
      <option value="h">Healthy</option>
    </select><br><br>
    <input type="submit" value="Submit">
  </form>

<?php

    if(isset($_GET['uh']) && !empty($_GET['uh'])){

        echo $uh = strtolower($_GET['uh']);

        die;

        $query = "SELECT food, calories FROM food WHERE healthy_unhealthy = 'u' AND calories = '700' ORDER BY id DESC";

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
      }

?>
