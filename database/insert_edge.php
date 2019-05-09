<?php 
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';

if ($_SESSION["status"] === "1") {
 $strSQL = "INSERT INTO edge (edge_name,edge_ip) 
VALUES ('".$_POST["add_edge_name"]."','".$_POST["add_edge_ip"]."')";
$objQuery = mysqli_query($conn,$strSQL);

header("Location: ../view/admin/edge_admin.php");

mysqli_close($conn);
}elseif ($_SESSION["status"] === "2") {
 $strSQL = "INSERT INTO edge (edge_name,edge_ip)
VALUES ('".$_POST["add_edge_name"]."','".$_POST["add_edge_ip"]."')";
$objQuery = mysqli_query($conn,$strSQL);

header("Location: ../view/user/edge_user.php");

mysqli_close($conn);
}


?>