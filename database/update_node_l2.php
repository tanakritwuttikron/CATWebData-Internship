<?php
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';

if ($_SESSION['status'] === "1") {
 $sql = "UPDATE data_node_l2
 SET node_name = '".$_POST["edit_node_name"]."' , 
     node_ip = '".$_POST["edit_node_ip"]."',
     latitude = '".$_POST["edit_latitude"]."', 
     longitude = '".$_POST["edit_longitude"]."', 
     initials = '".$_POST["edit_initials"]."',
     old_site_code = '".$_POST["edit_old_site_code"]."' 
     
     WHERE id_node = '".$_POST["edit_node_id"]."' ";

 $query = mysqli_query($conn,$sql);
 // echo $sql;

 header("Location: ../view/admin/menu_node.php?id_local=".$_POST["edit_local_id"]."");

 mysqli_close($conn);
}elseif ($_SESSION['status'] === "2") {
 $sql = "UPDATE data_node_l2 
 SET node_name = '".$_POST["edit_node_name"]."' , 
     node_ip = '".$_POST["edit_node_ip"]."',
     latitude = '".$_POST["edit_latitude"]."', 
     longitude = '".$_POST["edit_longitude"]."', 
     initials = '".$_POST["edit_initials"]."',
     old_site_code = '".$_POST["edit_old_site_code"]."' 
     
     WHERE id_node = '".$_POST["edit_node_id"]."' ";

 $query = mysqli_query($conn,$sql);
 // echo $sql;

 header("Location: ../view/user/menu_node.php?id_local=".$_POST["edit_local_id"]."");

 mysqli_close($conn);
}

?>