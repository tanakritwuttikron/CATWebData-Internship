<?php 
if (!isset($_SESSION))
{
 session_start(); 
}

require 'db.php';

if ($_SESSION["status"] === "1") {
 $sql = "INSERT INTO data_tools (id_local,tool_ip,brand_name,device_modal,device_shorth_name,current_name,serial_num,comment,check_data,device_type_name) VALUES ('".$_POST["id_local"]."', '".$_POST["tool_ip"]."','".$_POST["brand_name"]."','".$_POST["device_modal"]."','".$_POST["device_shorth_name"]."','".$_POST["current_name"]."','".$_POST["serial_num"]."','".$_POST["comment"]."','".$_POST["check_data"]."','".$_POST["device_type_name"]."')";
 $query = mysqli_query($conn,$sql);
 // echo $sql;
 header("Location: ../view/admin/menu_node.php?id_local=".$_POST["id_local"]."");
}elseif ($_SESSION["status"] === "2") {
 $sql = "INSERT INTO data_tools (id_local,tool_ip,brand_name,device_modal,device_shorth_name,current_name,serial_num,comment,check_data,device_type_name) VALUES ('".$_POST["id_local"]."', '".$_POST["tool_ip"]."','".$_POST["brand_name"]."','".$_POST["device_modal"]."','".$_POST["device_shorth_name"]."','".$_POST["current_name"]."','".$_POST["serial_num"]."','".$_POST["comment"]."','".$_POST["check_data"]."','".$_POST["device_type_name"]."')";
 $query = mysqli_query($conn,$sql);
 // echo $sql;
 header("Location: ../view/user/menu_node.php?id_local=".$_POST["id_local"]."");
}
mysqli_close($conn);
?>