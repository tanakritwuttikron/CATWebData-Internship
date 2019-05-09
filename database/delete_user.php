<?php
require 'db.php';

$strid = $_GET["id_member"];
$sql = "DELETE FROM member
  WHERE id_member = '".$strid."' ";

$query = mysqli_query($conn,$sql);

if(mysqli_affected_rows($conn)) {
  echo "Record delete successfully";
}

mysqli_close($conn);

header("Location: ../view/admin/mng_admin.php");
?>