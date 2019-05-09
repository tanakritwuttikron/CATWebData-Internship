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
   $sql = "UPDATE facility_l2 SET id_node = '".$_POST["edt_node_id"]."', fac_name_l2 = '".$_POST["edt_fac_name"]."', fac_img_l2 = '".basename( $_FILES['file']['name'])."' WHERE id_facility_l2 = '".$_POST["edt_fac_id"]."'";
   $query = mysqli_query($conn,$sql);
   // echo $query;

   header("Location: ../view/admin/detail_node_l2_admin.php?id_node=".$_POST["edt_node_id"]."");
 }
}elseif ($_SESSION['status'] === "2") {
 if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
   $sql = "UPDATE facility_l2 SET id_local = '".$_POST["edt_local_id"]."', id_node = '".$_POST["edt_node_id"]."', fac_name_l2 = '".$_POST["edt_fac_name"]."', fac_img_l2 = '".basename( $_FILES['file']['name'])."' WHERE id_facility_l2 = '".$_POST["edt_fac_id"]."'";
   $query = mysqli_query($conn,$sql);
   // echo $sql;

   header("Location: ../view/user/detail_node_l2_user.php?id_local= ".$_POST["edt_local_id"]."&id_node=".$_POST["edt_node_id"]."");
}
}
 ?>