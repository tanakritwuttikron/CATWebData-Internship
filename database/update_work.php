<?php
require 'db.php';

$descrip = $_POST['descrip'];
$text = str_replace("\n", "<br>\n", "$descrip"); 

$sql = "UPDATE notice_work 
SET title = '".$_POST["txttitle"]."', 
    date_work = '".$_POST["date_time"]."', 
    cust_fname = '".$_POST["fname"]."', 
    cust_lname = '".$_POST["lname"]."', 
    cat_id = '".$_POST["catid_cm"]."', 
    tel = '".$_POST["phone_cm"]."', 
    descrip_work = '".$text."'
    
    WHERE id_work = '".$_POST["id_work"]."' ";

$query = mysqli_query($conn,$sql);

header("Location: ../view/admin/history_work.php");

mysqli_close($conn);
?>