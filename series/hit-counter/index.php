<?php
     
     require 'connect.inc.php';
     
     $user_ip = $_SERVER['REMOTE_ADDR'];

     function ip_exists($ip){
          
          global $con;

          $query = "SELECT ip FROM hits_ip WHERE ip = '$ip'";
          
          $query_run = mysqli_query($con, $query);
          
          $query_num_rows = mysqli_num_rows($query_run);
          
          if($query_num_rows === 0){
               return false;
          }if(mysqli_num_rows($query_run) >= 1){
               return true;
          }
          
     }

     function ip_add($ip){
          
          global $con;
          
          $query = "INSERT INTO hits_ip VALUES ('$ip')";
          
          $query_run = mysqli_query($con, $query);
               
     }
     
     function update_count(){
          
          global $con;
          
          $query = "SELECT count FROM hits_count";
          
          if($query_run = mysqli_query($con, $query)){
     
               $count = mysqli_fetch_row($query_run);
               
               $count_inc = $count[0]+1;

          }

          $query_update = "UPDATE hits_count SET count = '$count_inc'";
          
          if($query_update_run = mysqli_query($con, $query_update)){
                              
               echo $count_inc.'<br><br>';
               
          }
     }

     if(!ip_exists($user_ip)){
          update_count();
          ip_add($user_ip);
     }

?>

     <h1>My Page</h1>

