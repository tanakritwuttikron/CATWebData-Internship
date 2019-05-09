<?php
require 'db.php';

$strid = $_GET["id_manual"];


$sql = "DELETE FROM manual
  WHERE id_manual = '".$strid."' ";

$query = mysqli_query($conn,$sql);

if(mysqli_affected_rows($conn)) {
  echo "Record delete successfully";
}

mysqli_close($conn);

header("Location: ../view/admin/mng_manual.php");
?>