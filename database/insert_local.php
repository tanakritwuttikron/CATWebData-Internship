<?php 
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';

if ($_SESSION['status'] === "1") {
 $strSQL = "INSERT INTO data_local (local_name,local_ip_add,latitude,longitude,initials,node,old_site_code) 
 VALUES ('".$_POST["local_name"]."', '".$_POST["local_ip"]."', '".$_POST["latitude"]."', '".$_POST["longitude"]."', '".$_POST["initials"]."', '".$_POST["node"]."', '".$_POST["old_site_code"]."')";
 $objQuery = mysqli_query($conn,$strSQL);

 header("Location: ../view/admin/add_local.php");

}elseif ($_SESSION['status'] === "2"){
 $strSQL = "INSERT INTO data_local (local_name,local_ip_add,latitude,longitude,initials,node,old_site_code) 
 VALUES ('".$_POST["local_name"]."', '".$_POST["local_ip"]."', '".$_POST["latitude"]."', '".$_POST["longitude"]."', '".$_POST["initials"]."', 'L3', '".$_POST["old_site_code"]."')";
 $objQuery = mysqli_query($conn,$strSQL);

 header("Location: ../view/user/add_local.php");
}


mysqli_close($conn);

?>