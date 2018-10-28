
<!-- Add bootstrap to give your form a little style. -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <div class="fluid-container">
    <div class="row justify-content-center">
      <div class="col-6" style="padding:25px;">
        <h1>PHP $_POST Variable</h1>
      </div>
    </div>
    <?php

      $match = 'pass123';
      $msg = '';
      $msgType = 'danger';

      // Output the message and hide the login, when logged in, dynamically.
      if ( isset($_POST['password']) ) {
        $password = $_POST['password'];
        if ( !empty($password)) {
          if($password == $match){
            $msg = 'Welcome! You are now logged in.';
            $msgType = 'success';
          }else{
            $msg = 'Please try again.';
          }
        }else{
          $msg = 'Please enter a password.';
        }
        echo '<div class="row justify-content-center"><div class="col-6"><div class="alert alert-'.$msgType.'" role="alert"><h5>'.$msg.'</h5></div></div></div>';
      }
      if($msgType != 'success'){
    ?>
    <div class="row justify-content-center">
      <div class="col-6">
        <form method="POST">
          <div class="form-group">
            <label for="username">Email Address:</label>
            <!-- Validate the email address and make it a required field using the built in HTML functionality. -->
            <input type="email" name="email" class="form-control" placeholder="email@example.com" value="" required>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <!-- Validate the password and make it a required field using the built in HTML functionality. -->
            <input type="password" name="password" class="form-control" placeholder="Enter password here." value="" required>
          </div>
          <div>
            <input type="submit" class="btn" value="Submit">
          </div>
        </form>
      </div>
    </div>
  <?php } ?>

  </div>
