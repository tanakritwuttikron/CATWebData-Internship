<?php
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';

if ($_SESSION["status"] === "1") {

    $sql = "UPDATE manage_vlan 
    SET id_local = '".$_POST["id_local"]."' , 
    vlan_num = '".$_POST["vlan_number"]."',
    cust_name = '".$_POST["cust_name"]."',
    ip_address = '".$_POST["ip_add"]."',
    subnet = '".$_POST["subnet_mask"]."',
    ip_gate = '".$_POST["gateway"]."',
    remark = '".$_POST["remark"]."',
    status = '".$_POST["status"]."',
    longitude = '".$_POST["longitude"]."',
    latitude = '".$_POST["latitude"]."',
    mac_address = '".$_POST["mac_add"]."',
    cat_id = '".$_POST["cat_id"]."',
    phone = '".$_POST["phone"]."',
    password = '".$_POST["pwd"]."',
    address = '".$_POST["address"]."',
    serial_num = '".$_POST["serial_num"]."',
    asset_code = '".$_POST["asset_code"]."'

    
    WHERE id_manage = '".$_POST["id_mng"]."' ";

$query = mysqli_query($conn,$sql);

header("Location: ../view/admin/menu_node.php?id_local=".$_POST["id_local"]."");

mysqli_close($conn);
}elseif ($_SESSION['status'] === "2"){

        $sql = "UPDATE manage_vlan 
        SET id_local = '".$_POST["id_local"]."' , 
        vlan_num = '".$_POST["vlan_number"]."',
        cust_name = '".$_POST["cust_name"]."',
        ip_address = '".$_POST["ip_add"]."',
        subnet = '".$_POST["subnet_mask"]."',
        ip_gate = '".$_POST["gateway"]."',
        remark = '".$_POST["remark"]."',
        status = '".$_POST["status"]."',
        longitude = '".$_POST["longitude"]."',
        latitude = '".$_POST["latitude"]."',
        mac_address = '".$_POST["mac_add"]."',
        cat_id = '".$_POST["cat_id"]."',
        phone = '".$_POST["phone"]."',
        password = '".$_POST["pwd"]."',
        address = '".$_POST["address"]."',
        serial_num = '".$_POST["serial_num"]."',
        asset_code = '".$_POST["asset_code"]."'

        
        WHERE id_manage = '".$_POST["id_mng"]."' ";

    $query = mysqli_query($conn,$sql);

    header("Location: ../view/user/menu_node.php?id_local=".$_POST["id_local"]."");

    mysqli_close($conn);
}

?>