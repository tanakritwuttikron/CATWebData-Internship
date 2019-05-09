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
   $sql = "INSERT INTO facility (id_local, fac_name, fac_img)
   VALUES ('".$_POST["txtid_local"]."', '".$_POST["txttopic"]."', '".basename( $_FILES['file']['name'])."')";
   $query = mysqli_query($conn,$sql);
   echo $query;

   header("Location: ../view/admin/menu_node.php?id_local=".$_POST["txtid_local"]."");
 }
}elseif ($_SESSION['status'] === "2"){
 $target_dir = "../image/";
 $target_file = $target_dir . basename( $_FILES['file']['name']);

 if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
   $sql = "INSERT INTO facility (id_local, fac_name, fac_img)
   VALUES ('".$_POST["txtid_local"]."', '".$_POST["txttopic"]."', '".basename( $_FILES['file']['name'])."')";
   $query = mysqli_query($conn,$sql);
   echo $query;

   header("Location: ../view/user/menu_node.php?id_local=".$_POST["txtid_local"]."");
 }
}



?>