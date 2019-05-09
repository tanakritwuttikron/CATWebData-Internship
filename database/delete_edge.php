<?php
if (!isset($_SESSION))
{
 session_start();
}

require 'db.php';
$strid = $_GET["id_edge"];

if ($_SESSION["status"] === "1") {
 $sql = "DELETE FROM edge
   WHERE id_edge = '".$strid."' ";

 $query = mysqli_query($conn,$sql);

 if(mysqli_affected_rows($conn)) {
   echo "Record delete successfully";
 }

 mysqli_close($conn);

 header("Location: ../view/admin/edge_admin.php");
}elseif ($_SESSION["status"] === "2") {

$sql = "DELETE FROM detail_cci WHERE id_edge = '".$strid."'";
$query = mysqli_query($conn,$sql);

 $sql = "DELETE FROM ip_cci WHERE id_edge = '".$strid."'";
 $query = mysqli_query($conn,$sql);

 $sql = "DELETE FROM edge
   WHERE id_edge = '".$strid."' ";

 $query = mysqli_query($conn,$sql);

 if(mysqli_affected_rows($conn)) {
   echo "Record delete successfully";
 }

 mysqli_close($conn);

 header("Location: ../view/user/edge_user.php");
}

?>
