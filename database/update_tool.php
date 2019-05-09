<?php
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';

if ($_SESSION["status"] === "1") {

  $sql = "UPDATE data_tools 
  SET id_local = '".$_POST["id_local"]."' , 
  tool_ip = '".$_POST["tool_ip"]."',
  brand_name = '".$_POST["brand_name"]."',
  device_modal = '".$_POST["device_modal"]."',
  device_shorth_name = '".$_POST["device_shorth_name"]."',
  serial_num = '".$_POST["serial_num"]."',
  current_name = '".$_POST["current_name"]."',
  comment = '".$_POST["comment"]."',
  check_data = '".$_POST["check_data"]."',
  device_type_name = '".$_POST["device_type_name"]."'
  
  WHERE id_tool = '".$_POST["id_tool"]."' ";

 $query = mysqli_query($conn,$sql);

 header("Location: ../view/admin/menu_node.php?id_local=".$_POST["id_local"]."");

 mysqli_close($conn);
}elseif ($_SESSION['status'] === "2"){

  $sql = "UPDATE data_tools 
  SET id_local = '".$_POST["id_local"]."' , 
  tool_ip = '".$_POST["tool_ip"]."',
  brand_name = '".$_POST["brand_name"]."',
  device_modal = '".$_POST["device_modal"]."',
  device_shorth_name = '".$_POST["device_shorth_name"]."',
  serial_num = '".$_POST["serial_num"]."',
  current_name = '".$_POST["current_name"]."',
  comment = '".$_POST["comment"]."',
  check_data = '".$_POST["check_data"]."',
  device_type_name = '".$_POST["device_type_name"]."'
  
  WHERE id_tool = '".$_POST["id_tool"]."' ";

 $query = mysqli_query($conn,$sql);

  header("Location: ../view/user/menu_node.php?id_local=".$_POST["id_local"]."");

  mysqli_close($conn);
}

?>