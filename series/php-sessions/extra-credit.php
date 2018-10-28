<?php
  // 01. Add the session_start to establish a session to capture the information.
  session_start();

  // 02. Move the $msg and $msgType variables to top of script to make them global.
  $msg = 'Please complete the form below. We currently have no data available to display.';
  $msgType = 'warning';

?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="fluid-container">
  <div class="row justify-content-center">
    <div class="col-6" style="padding:25px;">
      <h1>Using PHP SESSIONS - Extra Credit</h1>
    </div>
  </div>
    <?php
      // 03. Check for session variables and update active variables with them when they are available.
      $day = ( isset($_SESSION['day']) ) ? $_SESSION['day'] : '';
      $date = ( isset($_SESSION['date']) ) ? $_SESSION['date'] : '';
      $year = ( isset($_SESSION['year']) ) ? $_SESSION['year'] : '';

      if ( isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year']) ) {
        // 04. Update session and active variables with updated information submitted by the user.
        $_SESSION['day'] = $day = htmlentities($_GET['day']);
        $_SESSION['date'] = $date = htmlentities($_GET['date']);
        $_SESSION['year'] = $year = htmlentities($_GET['year']);

        if ( !empty($day) && !empty($date) && !empty($year)) {
          $msg = 'It is '. $day .' '. $date .' '. $year;
          $msgType = 'success';
        }else{
          $msg = 'Fill in all fields.';
          $msgType = 'danger';
        }
        // 05. Add condition to catch un-submitted form but session information available.
      } else if ( isset($_SESSION['day']) && isset($_SESSION['date']) && isset($_SESSION['year']) ) {
        $msg = 'Your information date is currently set to: '. $day .' '. $date .' '. $year;
        $msgType = 'info';
      }
      echo '<div class="row justify-content-center"><div class="col-6"><div class="alert alert-'.$msgType.'" role="alert"><h5>'.$msg.'</h5></div></div></div>';
    ?>
    <div class="row justify-content-center">
      <div class="col-6">
        <form method="GET">
          <div class="form-group">
            <label for="day">Day:</label>
            <input type="text" name="day" class="form-control" placeholder="Enter day here. e.g. Monday, Tuesday, etc."
                pattern="[A-z]{5,}" title="Day should only contain letters. e.g. Monday, Tuesday, etc."
                value="<?php echo $day; ?>" required>
          </div>
          <div class="form-group">
            <label for="date">Date:</label>
            <input type="text" name="date" class="form-control" placeholder="Enter the numeric date here."
                pattern="^[1-9]|[1-2][0-9]|3[0-1]$" title="Day should only contain numbers. e.g. 1, 11, etc."
                value="<?php echo $date; ?>" required>
          </div>
          <div class="form-group">
            <label for="year">Year:</label>
            <input type="text" name="year" class="form-control" placeholder="Enter the numeric year here."
            pattern="[1-9][0-9]{3}" title="Day should only contain numbers. e.g. 1971, 2018, etc."
            value="<?php echo $year; ?>" required>
          </div>
          <div>
            <input type="submit" class="btn" value="Submit">
          </div>
        </form>
        <!--
          06. Create the unset-extra-credit.php page and add
          the session_start, session_destroy, and header redirect to it.

          07. Add the form and button to allow users to destroy their session.
        -->
        <form action="unset-extra-credit.php" method="GET" style="float:right;">
          <input type="submit" class="btn" value="Clear Session Data">
        </form>
      </div>
    </div>
  </div>
