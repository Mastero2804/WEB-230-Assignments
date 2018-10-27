
<!-- Add bootstrap to give your form a little style. -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <div class="fluid-container">
    <div class="row justify-content-center">
      <div class="col-6" style="padding:25px;">
        <h1>PHP $_POST Variable</h1>
      </div>
    </div>
    <?php

      // 01. Explain what this variable will be used for and how.
      $match = 'pass123';

      if ( isset($_POST['password']) ) {
        $password = $_POST['password'];
        $msg = '';
        $msgType = 'success';
        // 02. Explain the process of the following if statment.
        if ( !empty($password)) {
          if($password == $match){
            $msg = 'Welcome! You are now logged in.';
          }else{
            $msg = 'Please try again.';
            $msgType = 'danger';
          }
        }else{
          $msg = 'Please enter a password.';
          $msgType = 'danger';
        }
        echo '<div class="row justify-content-center"><div class="col-6"><div class="alert alert-'.$msgType.'" role="alert"><h5>'.$msg.'</h5></div></div></div>';
      }
    ?>
    <div class="row justify-content-center">
      <div class="col-6">
        <form action="index.php" method="POST">
          <div class="form-group">
            <label for="username">Username/Email Address:</label>
            <input type="text" name="username" class="form-control" placeholder="Enter user name here." value="">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password here." value="">
          </div>
          <div>
            <input type="submit" class="btn" value="Submit">
          </div>
        </form>
      </div>
    </div>

  </div>
