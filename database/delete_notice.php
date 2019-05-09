<?php
require 'db.php';

$strid = $_GET["id_notice"];
$sql = "DELETE FROM notice
  WHERE id_notice = '".$strid."' ";

$query = mysqli_query($conn,$sql);

if(mysqli_affected_rows($conn)) {
  echo "Record delete successfully";
}

mysqli_close($conn);

header("Location: ../view/admin/history_notice.php");
?>