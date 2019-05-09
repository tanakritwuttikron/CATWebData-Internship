<?php
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';
 $strid = $_GET["id_page"];

if ($_SESSION["status"] === "1") {

 $sql = "DELETE FROM link_page
   WHERE id_page = '".$strid."' ";

 $query = mysqli_query($conn,$sql);

 if(mysqli_affected_rows($conn)) {
   echo "Record delete successfully";
 }
 //echo $sql;
 header("Location: ../view/admin/link_page.php");
 mysqli_close($conn);


}if ($_SESSION["status"] === "2") {

$sql = "DELETE FROM link_page
  WHERE id_page = '".$strid."' ";

$query = mysqli_query($conn,$sql);

if(mysqli_affected_rows($conn)) {
  echo "Record delete successfully";
}
 //echo $sql;
header("Location: ../view/user/link_page.php");
mysqli_close($conn);

}


?>
