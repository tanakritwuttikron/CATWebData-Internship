<?php
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';

if ($_SESSION["status"] === "1") {

    $sql = "UPDATE detail_core_l2 
    SET core_l2 = '".$_POST["core_num"]."' , 
    working_l2 = '".$_POST["edit_working_l2"]."' , 
    distance_l2 = '".$_POST["edit_distance_l2"]."' , 
    comment_l2 = '".$_POST["edit_comment_l2"]."'
    
    WHERE id_detail_l2 = '".$_POST["id_detail_l2"]."' ";

$query = mysqli_query($conn,$sql);

header("Location: ../view/admin/tb_core_l2.php?id_local=".$_POST["id_local"]."&id_core=".$_POST["id_core"]."&id_route_l2=".$_POST["id_route_l2"]."");

mysqli_close($conn);
}elseif ($_SESSION['status'] === "2"){
    
    $sql = "UPDATE detail_core_l2 
    SET core_l2 = '".$_POST["core_num"]."' , 
    working_l2 = '".$_POST["edit_working_l2"]."' , 
    distance_l2 = '".$_POST["edit_distance_l2"]."' , 
    comment_l2 = '".$_POST["edit_comment_l2"]."'
    
    WHERE id_detail_l2 = '".$_POST["id_detail_l2"]."' ";

$query = mysqli_query($conn,$sql);
    header("Location: ../view/user/tb_core_l2.php?id_local=".$_POST["id_local"]."&id_core=".$_POST["id_core"]."&id_route_l2=".$_POST["id_route_l2"]."");

    mysqli_close($conn);
}

?>_l2_l2