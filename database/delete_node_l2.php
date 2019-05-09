<?php
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';

$strid1 = $_GET["id_local"];
$strid2 = $_GET["id_node"];
	
$sql = "DELETE FROM facility_l2
  WHERE id_node = '".$strid2."' ";
$query = mysqli_query($conn,$sql);

$sql = "DELETE FROM detail_core_l2
  WHERE id_node = '".$strid2."' ";
$query = mysqli_query($conn,$sql);

$sql = "DELETE FROM route_l2
WHERE id_node = '".$strid2."' ";
$query = mysqli_query($conn,$sql);

$sql = "DELETE FROM data_tools_l2
  WHERE id_node = '".$strid2."' ";
$query = mysqli_query($conn,$sql);

$sql = "DELETE FROM data_node_l2
WHERE id_node = '".$strid2."' ";
$query = mysqli_query($conn,$sql);
// echo $sql;

 header("Location: ../view/user/menu_node.php?id_local=".$strid1."");

?>