

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
            echo 'That is correct!';
          }else{
            echo 'That is incorrect!';
          }
        }else{
          echo 'Please enter a password.';
        }
      }
    ?>
        <form action="index.php" method="POST">
            Password:<br>
            <input type="password" name="password"><br><br>
            <input type="submit" class="btn" value="Submit">
        </form>
