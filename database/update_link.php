<?php
if(!isset($_SESSION)) 
{ 
 session_start(); 
}
require 'db.php';

if ($_SESSION["status"] === "1") {
 $sql = "UPDATE link_page 
 SET page_name = '".$_POST["edit_link_name"]."' , 
     page_link = '".$_POST["edit_link_page"]."'
     
     WHERE id_page = '".$_POST["edit_link_id"]."' ";

 $query = mysqli_query($conn,$sql);

 header("Location: ../view/admin/link_page.php");

 mysqli_close($conn);
}if ($_SESSION["status"] === "2") {
 $sql = "UPDATE link_page 
 SET page_name = '".$_POST["edit_link_name"]."' , 
     page_link = '".$_POST["edit_link_page"]."'
     
     WHERE id_page = '".$_POST["edit_link_id"]."' ";

 $query = mysqli_query($conn,$sql);

 header("Location: ../view/user/link_page.php");

 mysqli_close($conn);
}


?>