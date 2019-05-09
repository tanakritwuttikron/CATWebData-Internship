<?php 
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';

 $strSQL = "INSERT INTO data_node_l2 (id_local, node_name, node_ip, latitude,longitude,initials,node,old_site_code) 
 VALUES ('".$_POST["id_local"]."', '".$_POST["node_name"]."', '".$_POST["node_ip"]."', '".$_POST["latitude"]."', '".$_POST["longitude"]."', '".$_POST["initials"]."', 'L2', '".$_POST["old_site_code"]."')";
 $objQuery = mysqli_query($conn,$strSQL);
// echo $strSQL;

 header("Location: ../view/user/menu_node.php?id_local=".$_POST["id_local"]."");



mysqli_close($conn);

?>