<?php
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';

if ($_SESSION["status"] === "1") {

  for($i=0;$i<$_POST["hdnLine"];$i++)
  {
   $id_edge = $_POST["id_edge"];
   $id_cci = $_POST["id_cci"];
   
  $strSQL = "UPDATE detail_cci SET id_edge = '".$id_edge."',id_cci = '".$id_cci."',cci_vlan = '".$_POST["cci_vlan$i"]."',cci_subnet = '".$_POST["cci_subnet$i"]."',cci_cat_id = '".$_POST["cci_cat_id$i"]."' ,cci_name = '".$_POST["cci_name$i"]."' WHERE id_detail_cci = '".$_POST["id_detail_cci$i"]."'; ";
  $objQuery = mysqli_query($conn,$strSQL);
  // echo $strSQL;
  header("Location: ../view/admin/ip_cci_page.php?id_edge=".$id_edge."&id_cci=".$id_cci."");
  }
 

 mysqli_close($conn);
}elseif ($_SESSION['status'] === "2"){

  for($i=0;$i<$_POST["hdnLine"];$i++)
  {
   $id_edge = $_POST["id_edge"];
   $id_cci = $_POST["id_cci"];
   
    $strSQL = "UPDATE detail_cci SET id_edge = '".$id_edge."',id_cci = '".$id_cci."',cci_vlan = '".$_POST["cci_vlan$i"]."',cci_subnet = '".$_POST["cci_subnet$i"]."',cci_cat_id = '".$_POST["cci_cat_id$i"]."' ,cci_name = '".$_POST["cci_name$i"]."' WHERE id_detail_cci = '".$_POST["id_detail_cci$i"]."'; ";
  $objQuery = mysqli_query($conn,$strSQL);
  // echo $strSQL;
  header("Location: ../view/user/ip_cci_page.php?id_edge=".$id_edge."&id_cci=".$id_cci."");
  }
  //header("location:$_SERVER[PHP_SELF]");
  //exit();
}

?>