<?php
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';

if ($_SESSION["status"] === "1") {

  $sql = "UPDATE data_tools_l2 
  SET id_local = '".$_POST["id_local"]."' , 
  id_node = '".$_POST["id_node"]."' , 
  tool_ip_l2 = '".$_POST["tool_ip_l2"]."',
  brand_name_l2 = '".$_POST["brand_name_l2"]."',
  device_modal_l2 = '".$_POST["device_modal_l2"]."',
  device_shorth_name_l2 = '".$_POST["device_shorth_name_l2"]."',
  serial_num_l2 = '".$_POST["serial_num_l2"]."',
  current_name_l2 = '".$_POST["current_name_l2"]."',
  comment_l2 = '".$_POST["comment_l2"]."',
  check_data_l2 = '".$_POST["check_data_l2"]."',
  device_type_name_l2 = '".$_POST["device_type_name_l2"]."'
  
  WHERE id_tool_l2 = '".$_POST["id_tool_l2"]."' ";

 $query = mysqli_query($conn,$sql);

 header("Location: ../view/admin/detail_node_l2_admin.php?id_local=".$_POST["id_local"]."&id_node=".$_POST["id_node"]."");

 mysqli_close($conn);
}elseif ($_SESSION['status'] === "2"){

  $sql = "UPDATE data_tools_l2 
  SET id_local = '".$_POST["id_local"]."' , 
  id_node = '".$_POST["id_node"]."' , 
  tool_ip_l2 = '".$_POST["tool_ip_l2"]."',
  brand_name_l2 = '".$_POST["brand_name_l2"]."',
  device_modal_l2 = '".$_POST["device_modal_l2"]."',
  device_shorth_name_l2 = '".$_POST["device_shorth_name_l2"]."',
  serial_num_l2 = '".$_POST["serial_num_l2"]."',
  current_name_l2 = '".$_POST["current_name_l2"]."',
  comment_l2 = '".$_POST["comment_l2"]."',
  check_data_l2 = '".$_POST["check_data_l2"]."',
  device_type_name_l2 = '".$_POST["device_type_name_l2"]."'
  
  WHERE id_tool_l2 = '".$_POST["id_tool_l2"]."' ";

 $query = mysqli_query($conn,$sql);

  header("Location: ../view/user/detail_node_l2_user.php?id_local=".$_POST["id_local"]."&id_node=".$_POST["id_node"]."");

  mysqli_close($conn);
}

?>