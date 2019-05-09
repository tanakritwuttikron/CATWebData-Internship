<?php
require 'db.php';

$sql = "UPDATE member 
SET username = '".$_POST["edt_user_name"]."' , 
    password = '".$_POST["edt_user_pass"]."' ,
    status = '".$_POST["edt_user_status"]."'
    
    WHERE id_member = '".$_POST["edit_user_id"]."' ";

$query = mysqli_query($conn,$sql);

header("Location: ../view/admin/mng_admin.php");

mysqli_close($conn);

?>
