<?php
session_start();

 $_SESSION["id_member"] = "";
 session_destroy();

header("Location:../view/index.php");
?>