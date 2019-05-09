<?php
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';

$strid1 = $_GET["id_cci"];
$strid2 = $_GET["id_edge"];

if ($_SESSION['status'] === "1") {
$sql = "DELETE FROM ip_cci WHERE id_cci = '".$strid1."'";
$query = mysqli_query($conn,$sql);

$sql = "DELETE FROM edge WHERE id_cci = '".$strid1."'";
$query = mysqli_query($conn,$sql);


 if(mysqli_affected_rows($conn)) {
   echo "Delete successfully";
 }

  mysqli_close($conn);

 header("Location: ../view/admin/ip_cci_admin.php?id_edge=".$strid2."");

}elseif ($_SESSION['status'] === "2") {
$sql = "DELETE FROM detail_cci WHERE id_cci = '".$strid1."'";
$query = mysqli_query($conn,$sql);

$sql = "DELETE FROM ip_cci WHERE id_cci = '".$strid1."'";
$query = mysqli_query($conn,$sql);

$sql = "DELETE FROM edge WHERE id_cci = '".$strid1."'";
$query = mysqli_query($conn,$sql);




 if(mysqli_affected_rows($conn)) {
   echo "Delete successfully";
 }

  mysqli_close($conn);

 header("Location: ../view/user/ip_cci_user.php?id_edge=".$strid2."");
}

?>