<?php
ini_set('display_errors', 1);
error_reporting(~0);

$conn = mysqli_connect("localhost","root","","cat_data");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Change character set to utf8
mysqli_set_charset($conn,"utf8");


//*** Reject user not online
// $intRejectTime = 1; // Minute
// $sql = "UPDATE member SET status = '0', time_login = '0000-00-00 00:00:00'  WHERE id_member AND DATE_ADD(time_login, INTERVAL $intRejectTime MINUTE) <= NOW() ";
// $query = mysqli_query($conn,$sql);

?>
