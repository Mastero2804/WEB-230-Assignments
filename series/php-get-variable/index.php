
    <?php

      // 01. Explain what the following if statment is doing.
      if ( isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year']) ) {
        $day = $_GET['day'];
        $date = $_GET['date'];
        $year = $_GET['year'];
        if ( !empty($day) && !empty($date) && !empty($year)) {
          echo 'It is '.$day.' '.$date.' '.$year;
        }else{
          echo 'Fill in all fields';
        }
      }

    ?>

    <form action="index.php" method="GET">
      Day:<br/><input type="text" name="day"><br>
      Date:<br/><input type="text" name="date"><br>
      Year:<br/><input type="text" name="year"><br>
      <input type="submit" value="Submit">
    </form>
