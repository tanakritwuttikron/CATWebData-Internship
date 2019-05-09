<?php
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';

$strid1 = $_GET["id_facility_l2"];
$strid2 = $_GET["id_node"];
$strid3 = $_GET["id_local"];

if ($_SESSION['status'] === "1") {
 $sql = "DELETE FROM facility_l2
   WHERE id_facility_l2 = '".$strid1."' ";

 $query = mysqli_query($conn,$sql);

 if(mysqli_affected_rows($conn)) {
   echo "Record delete successfully";
 }

 header("Location: ../view/admin/detail_node_l2_user.php?id_node=".$strid2."");

 mysqli_close($conn);
}elseif ($_SESSION['status'] === "2") {
  $sql = "DELETE FROM facility_l2
   WHERE id_facility_l2 = '".$strid1."' ";

 $query = mysqli_query($conn,$sql);

 if(mysqli_affected_rows($conn)) {
   echo "Record delete successfully";
 }

 header("Location: ../view/user/detail_node_l2_user.php?id_local=".$strid3."&id_node=".$strid2."");

 mysqli_close($conn);
}

?>