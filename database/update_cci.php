<?php
if (!isset($_SESSION))
{
 session_start(); 
}

require 'db.php';

if ($_SESSION["status"] === "1") {
 $sql = "UPDATE detail_cci SET cci_ip = '".$_POST["edit_cci_ip"]."'  WHERE id_cci = '".$_POST["edit_id_cci"]."'";
 $query = mysqli_query($conn,$sql);

 $sql = "UPDATE ip_cci SET cci_ip = '".$_POST["edit_cci_ip"]."'  WHERE id_cci = '".$_POST["edit_id_cci"]."'";
 $query = mysqli_query($conn,$sql);

 header("Location: ../view/admin/ip_cci_admin.php?id_edge=".$_POST["edit_id_edge"]."");

 mysqli_close($conn);
}elseif ($_SESSION["status"] === "2") {
 $sql = "UPDATE detail_cci SET cci_ip = '".$_POST["edit_cci_ip"]."'  WHERE id_cci = '".$_POST["edit_id_cci"]."'";
 $query = mysqli_query($conn,$sql);

 $sql = "UPDATE ip_cci SET cci_ip = '".$_POST["edit_cci_ip"]."'  WHERE id_cci = '".$_POST["edit_id_cci"]."'";
 $query = mysqli_query($conn,$sql);

 header("Location: ../view/user/ip_cci_user.php?id_edge=".$_POST["edit_id_edge"]."");

 mysqli_close($conn);
}

?>