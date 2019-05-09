<?php
require 'db.php';

$strid = $_GET["id_work"];
$sql = "DELETE FROM notice_work
  WHERE id_work = '".$strid."' ";

$query = mysqli_query($conn,$sql);

if(mysqli_affected_rows($conn)) {
  echo "Record delete successfully";
}

mysqli_close($conn);

header("Location: ../view/admin/history_work.php");
?>