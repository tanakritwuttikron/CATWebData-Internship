<?php
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';

if ($_SESSION['status'] === "1") {
 $sql = "UPDATE data_local 
 SET local_name = '".$_POST["edit_local_name"]."' , 
     local_ip_add = '".$_POST["edit_local_ip"]."',
     latitude = '".$_POST["edit_latitude"]."', 
     longitude = '".$_POST["edit_longitude"]."', 
     initials = '".$_POST["edit_initials"]."',
     old_site_code = '".$_POST["edit_old_site_code"]."' 
     
     WHERE id_local = '".$_POST["edit_local_id"]."' ";

 $query = mysqli_query($conn,$sql);

 header("Location: ../view/admin/add_local.php");

 mysqli_close($conn);
}elseif ($_SESSION['status'] === "2") {
 $sql = "UPDATE data_local 
 SET local_name = '".$_POST["edit_local_name"]."' , 
     local_ip_add = '".$_POST["edit_local_ip"]."',
     latitude = '".$_POST["edit_latitude"]."', 
     longitude = '".$_POST["edit_longitude"]."', 
     initials = '".$_POST["edit_initials"]."',
     old_site_code = '".$_POST["edit_old_site_code"]."' 
     
     WHERE id_local = '".$_POST["edit_local_id"]."' ";

 $query = mysqli_query($conn,$sql);

 header("Location: ../view/user/add_local.php");

 mysqli_close($conn);
}

?>