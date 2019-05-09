<?php 
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';

if ($_SESSION['status'] === "1") {
 $strSQL = "INSERT INTO manage_vlan (id_local,vlan_num,cust_name,ip_address,subnet,ip_gate,remark,status,longitude,latitude,mac_address,cat_id,phone,password,address,serial_num,asset_code) 
 VALUES ('".$_POST["id_local"]."', '".$_POST["vlan_number"]."', '".$_POST["cust_name"]."', '".$_POST["ip_add"]."', '".$_POST["subnet_mask"]."', '".$_POST["gateway"]."', '".$_POST["remark"]."', '".$_POST["status"]."',  '".$_POST["longitude"]."', '".$_POST["latitude"]."', '".$_POST["mac_add"]."', '".$_POST["cat_id"]."', '".$_POST["phone"]."', '".$_POST["pwd"]."', '".$_POST["address"]."', '".$_POST["serial_num"]."', '".$_POST["asset_code"]."')";
 $objQuery = mysqli_query($conn,$strSQL);

 header("Location: ../view/admin/menu_node.php?id_local=".$_POST["id_local"]."");

 mysqli_close($conn);
}elseif ($_SESSION['status'] === "2") {
 $strSQL = "INSERT INTO manage_vlan (id_local,vlan_num,cust_name,ip_address,subnet,ip_gate,remark,status,longitude,latitude,mac_address,cat_id,phone,password,address,serial_num,asset_code) 
 VALUES ('".$_POST["id_local"]."', '".$_POST["vlan_number"]."', '".$_POST["cust_name"]."', '".$_POST["ip_add"]."', '".$_POST["subnet_mask"]."', '".$_POST["gateway"]."', '".$_POST["remark"]."', '".$_POST["status"]."',  '".$_POST["longitude"]."', '".$_POST["latitude"]."', '".$_POST["mac_add"]."', '".$_POST["cat_id"]."', '".$_POST["phone"]."', '".$_POST["pwd"]."', '".$_POST["address"]."', '".$_POST["serial_num"]."', '".$_POST["asset_code"]."')";
 $objQuery = mysqli_query($conn,$strSQL);
 // echo $strSQL;
 
 header("Location: ../view/user/menu_node.php?id_local=".$_POST["id_local"]."");

 mysqli_close($conn);
}
?>