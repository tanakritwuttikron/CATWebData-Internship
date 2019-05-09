<?php
if (!isset($_SESSION))
{
 session_start(); 
}

require 'db.php';

if ($_SESSION["status"] === "1") {
 $sql = "UPDATE edge 
 SET edge_name = '".$_POST["edit_edge_name"]."',
     edge_ip = '".$_POST["edit_edge_ip"]."'
     
     WHERE id_edge = '".$_POST["edit_edge_id"]."' ";

 $query = mysqli_query($conn,$sql);

 header("Location: ../view/admin/edge_admin.php");

 mysqli_close($conn);
}elseif ($_SESSION["status"] === "2") {
 $sql = "UPDATE edge 
 SET edge_name = '".$_POST["edit_edge_name"]."',
     edge_ip = '".$_POST["edit_edge_ip"]."'
     
     WHERE id_edge = '".$_POST["edit_edge_id"]."' ";

 $query = mysqli_query($conn,$sql);

 header("Location: ../view/user/edge_user.php");

 mysqli_close($conn);
}

?>