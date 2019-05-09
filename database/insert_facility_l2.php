<?php
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';


if ($_SESSION['status'] === "1") {
 $target_dir = "../image/";
 $target_file = $target_dir . basename( $_FILES['file']['name']);

 if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
   $sql = "INSERT INTO facility_l2 (id_local,id_node, fac_name_l2, fac_img_l2)
   VALUES ('".$_POST["txtid_local"]."', '".$_POST["txtid_node"]."', '".$_POST["txttopic"]."', '".basename( $_FILES['file']['name'])."')";
   $query = mysqli_query($conn,$sql);
   echo $query;

   header("Location: ../view/admin/detail_node_l2_admin.php?id_node=".$_POST["txtid_node"]."");
 }
}elseif ($_SESSION['status'] === "2"){
 $target_dir = "../image/";
 $target_file = $target_dir . basename( $_FILES['file']['name']);

 if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
   $sql = "INSERT INTO facility_l2 (id_local,id_node, fac_name_l2, fac_img_l2)
   VALUES ('".$_POST["txtid_local"]."', '".$_POST["txtid_node"]."', '".$_POST["txttopic"]."', '".basename( $_FILES['file']['name'])."')";
   $query = mysqli_query($conn,$sql);
   echo $sql;

   header("Location: ../view/user/detail_node_l2_user.php?id_local= ".$_POST["txtid_local"]."&id_node=".$_POST["txtid_node"]."");
 }
}



?>