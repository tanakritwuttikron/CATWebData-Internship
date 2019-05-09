<?php 
require 'db.php';

$descrip = $_POST['descrip'];
$text = str_replace("\n", "<br>\n", "$descrip"); 
 
$sql = "INSERT INTO notice_work (title, date_work, cust_fname, cust_lname, cat_id, tel, descrip_work,type_work) 
VALUES ('".$_POST["txttitle"]."', '".$_POST["date_time"]."', '".$_POST["fname"]."', '".$_POST["lname"]."', '".$_POST["catid_cm"]."', '".$_POST["phone_cm"]."', '".$text."', '".$_POST["date_time"]."')";
$query = mysqli_query($conn,$sql);
// echo $sql;

header("Location: ../view/admin/history_work.php");

mysqli_close($conn);

?>