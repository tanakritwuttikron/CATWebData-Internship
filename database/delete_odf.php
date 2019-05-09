<?php
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';

$strid1 = $_GET["id_route"];
$strid2 = $_GET["id_local"];

if ($_SESSION['status'] === "1") {
$sql = "DELETE FROM detail_core WHERE id_route = '".$strid1."'";
$query = mysqli_query($conn,$sql);

$sql = "DELETE FROM route WHERE id_route = '".$strid1."'";
$query = mysqli_query($conn,$sql);


 if(mysqli_affected_rows($conn)) {
   echo "Delete successfully";
 }

  mysqli_close($conn);

 header("Location: ../view/admin/menu_node.php?id_local=".$strid2."");

}elseif ($_SESSION['status'] === "2") {
 $sql = "DELETE FROM detail_core WHERE id_route = '".$strid1."'";
$query = mysqli_query($conn,$sql);

$sql = "DELETE FROM route WHERE id_route = '".$strid1."'";
$query = mysqli_query($conn,$sql);


 if(mysqli_affected_rows($conn)) {
   echo "Delete successfully";
 }

  mysqli_close($conn);

 header("Location: ../view/user/menu_node.php?id_local=".$strid2."");
}

?>