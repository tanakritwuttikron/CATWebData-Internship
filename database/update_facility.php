<?php
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';

$target_dir = "../image/";
$target_file = $target_dir . basename( $_FILES['file']['name']);

if ($_SESSION['status'] === "1") {
 if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
   $sql = "UPDATE facility SET id_local = '".$_POST["edt_local_id"]."', fac_name = '".$_POST["edt_fac_name"]."', fac_img = '".basename( $_FILES['file']['name'])."' WHERE id_facility = '".$_POST["edt_fac_id"]."'";
   $query = mysqli_query($conn,$sql);
   // echo $query;

   header("Location: ../view/admin/menu_node.php?id_local=".$_POST["edt_local_id"]."");
 }
}elseif ($_SESSION['status'] === "2") {
 if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
   $sql = "UPDATE facility SET id_local = '".$_POST["edt_local_id"]."', fac_name = '".$_POST["edt_fac_name"]."', fac_img = '".basename( $_FILES['file']['name'])."' WHERE id_facility = '".$_POST["edt_fac_id"]."'";
   $query = mysqli_query($conn,$sql);
   // echo $query;

   header("Location: ../view/user/menu_node.php?id_local=".$_POST["edt_local_id"]."");
}
}
 ?>