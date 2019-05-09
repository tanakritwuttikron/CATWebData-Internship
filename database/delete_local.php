<?php
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';

$strid = $_GET["id_local"];

$sql = "DELETE FROM facility
   WHERE id_local = '".$strid."' ";
 $query = mysqli_query($conn,$sql);
 
 $sql = "DELETE FROM manage_vlan
   WHERE id_local = '".$strid."' ";
 $query = mysqli_query($conn,$sql);

 $sql = "DELETE FROM detail_core
   WHERE id_local = '".$strid."' ";
 $query = mysqli_query($conn,$sql);

 $sql = "DELETE FROM route
   WHERE id_local = '".$strid."' ";
 $query = mysqli_query($conn,$sql);

 $sql = "DELETE FROM data_tools
   WHERE id_local = '".$strid."' ";
 $query = mysqli_query($conn,$sql);

 $sql = "DELETE FROM facility_l2
   WHERE id_local = '".$strid."' ";
 $query = mysqli_query($conn,$sql);

 $sql = "DELETE FROM detail_core_l2
   WHERE id_local = '".$strid."' ";
 $query = mysqli_query($conn,$sql);

 $sql = "DELETE FROM route_l2
 WHERE id_local = '".$strid."' ";
 $query = mysqli_query($conn,$sql);

 $sql = "DELETE FROM data_tools_l2
   WHERE id_local = '".$strid."' ";
 $query = mysqli_query($conn,$sql);

 $sql = "DELETE FROM data_node_l2
 WHERE id_local = '".$strid."' ";
 $query = mysqli_query($conn,$sql);

 $sql = "DELETE FROM data_local
   WHERE id_local = '".$strid."' ";
 $query = mysqli_query($conn,$sql);

 header("Location: ../view/user/add_local.php");

?>