<?php 
if(!isset($_SESSION)) 
{ 
 session_start(); 
}
require 'db.php';

if ($_SESSION["status"] === "1") {
 $strSQL = "INSERT INTO link_page (page_name,page_link) 
 VALUES ('".$_POST["add_link_name"]."', '".$_POST["add_link_page"]."')";
 $objQuery = mysqli_query($conn,$strSQL);

 header("Location: ../view/admin/link_page.php");

 mysqli_close($conn);
}if ($_SESSION["status"] === "2") {
 $strSQL = "INSERT INTO link_page (page_name,page_link) 
 VALUES ('".$_POST["add_link_name"]."', '".$_POST["add_link_page"]."')";
 $objQuery = mysqli_query($conn,$strSQL);

 header("Location: ../view/user/link_page.php");

 mysqli_close($conn);
}

mysqli_close($conn);

?>