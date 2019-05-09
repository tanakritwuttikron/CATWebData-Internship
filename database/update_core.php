<?php
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';

if ($_SESSION["status"] === "1") {

    $sql = "UPDATE detail_core 
    SET core = '".$_POST["core_num"]."' , 
    working = '".$_POST["edit_working"]."' , 
    distance = '".$_POST["edit_distance"]."' , 
    comment = '".$_POST["edit_comment"]."'
    
    WHERE id_detail = '".$_POST["id_detail"]."' ";

$query = mysqli_query($conn,$sql);

header("Location: ../view/admin/tb_core.php?id_core=".$_POST["id_core"]."&id_route=".$_POST["id_route"]."");

mysqli_close($conn);
}elseif ($_SESSION['status'] === "2"){
    
    $sql = "UPDATE detail_core 
    SET core = '".$_POST["core_num"]."' , 
    working = '".$_POST["edit_working"]."' , 
    distance = '".$_POST["edit_distance"]."' , 
    comment = '".$_POST["edit_comment"]."'
    
    WHERE id_detail = '".$_POST["id_detail"]."' ";

$query = mysqli_query($conn,$sql);
    header("Location: ../view/user/tb_core.php?id_core=".$_POST["id_core"]."&id_route=".$_POST["id_route"]."");

    mysqli_close($conn);
}

?>