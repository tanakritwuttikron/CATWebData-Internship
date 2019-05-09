<?php
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';

$strid1 = $_GET["id_facility"];
$strid2 = $_GET["id_local"];

if ($_SESSION['status'] === "1") {
 $sql = "DELETE FROM facility
   WHERE id_facility = '".$strid1."' ";

 $query = mysqli_query($conn,$sql);

 if(mysqli_affected_rows($conn)) {
   echo "Record delete successfully";
 }

 header("Location: ../view/admin/menu_node.php?id_local=".$strid2."");

 mysqli_close($conn);
}elseif ($_SESSION['status'] === "2") {
  $sql = "DELETE FROM facility
   WHERE id_facility = '".$strid1."' ";

 $query = mysqli_query($conn,$sql);

 if(mysqli_affected_rows($conn)) {
   echo "Record delete successfully";
 }

 header("Location: ../view/user/menu_node.php?id_local=".$strid2."");

 mysqli_close($conn);
}

?>