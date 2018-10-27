
<!-- Add bootstrap to give your form a little style. -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <div class="fluid-container">
    <div class="row justify-content-center">
      <div class="col-6" style="padding:25px;">
        <h1>PHP $_GET Variable</h1>
      </div>
    </div>
    <?php

      // 01. Explain why we need to set these variables here at the begining of the script.
      $day = '';
      $date = '';
      $year = '';

      if ( isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year']) ) {
        $day = $_GET['day'];
        $date = $_GET['date'];
        $year = $_GET['year'];
        // 02. Explain how the $msg variable is being used.
        $msg = '';
        // 03. Explain how the $msgType variable is being used.
        $msgType = 'success';
        if ( !empty($day) && !empty($date) && !empty($year)) {
          $msg = 'It is '. $day .' '. $date .' '. $year;
        }else{
          $msg = 'Fill in all fields.';
          $msgType = 'danger';
        }
        echo '<div class="row justify-content-center"><div class="col-6"><div class="alert alert-'.$msgType.'" role="alert"><h5>'.$msg.'</h5></div></div></div>';
      }
      // 04. Explain how we set the value in the form fields.
    ?>
    <div class="row justify-content-center">
      <div class="col-6">
        <form action="index.php" method="GET">
          <div class="form-group">
            <label for="day">Day:</label>
            <input type="text" name="day" class="form-control" placeholder="Enter day here." value="<?php echo $day; ?>">
          </div>
          <div class="form-group">
            <label for="day">Date:</label>
            <input type="text" name="date" class="form-control" placeholder="Enter date here." value="<?php echo $date; ?>">
          </div>
          <div class="form-group">
            <label for="day">Year:</label>
            <input type="number" name="year" class="form-control" placeholder="Enter year here." value="<?php echo $year; ?>">
          </div>
          <div>
            <input type="submit" class="btn" value="Submit">
          </div>
        </form>
      </div>
    </div>

  </div>
