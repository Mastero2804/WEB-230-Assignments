<?php

print_r($_SERVER);


$http_client_ip = $_SERVER['HTTP_CLIENT_IP']; // Checks actual internet ip $ip_address (hub, router, etc)
$http_x_forwarded_for = $_SERVER['$http_x_forwarded_for']; // Checking to see if using a proxy
$remote_addr = $_SERVER['$remote_addr']; // ip address that is viewing the current page
if (!empty($http_client_ip)) {
  $ip_address = $http_client_ip;
} else if (!empty($http_x_forwarded_for)) {
  $ip_address = $http_x_forwarded_for;
} else {
  $ip_address = $remote_addr;
}
echo $ip_address;
echo 'Hello';
/* 01. Explain what the following conditional statment is doing.
if(!empty($http_client_ip)){ $ip_address = $http_client_ip; }
else if(!empty($http_x_forward_for)){ $ip_address = $http_x_forward_for; }
else { $ip_address = $remote_addr; }
*/
?>
