<?php 
require 'db.php';
$username = $_POST["add_user_name"];
$sql = "SELECT username FROM member WHERE username = '".$username."'";
$query = mysqli_query($conn,$sql);
$num_rows = mysqli_num_rows($query);

if($num_rows === 0){
 $strSQL = "INSERT INTO member (username,password,status) 
VALUES ('".$_POST["add_user_name"]."', '".$_POST["add_user_pass"]."', '".$_POST["add_user_status"]."')";
 $objQuery = mysqli_query($conn,$strSQL);

header("Location: ../view/admin/mng_admin.php");

mysqli_close($conn);
}else{
 echo "<script>
      alert('มีชื่อผู้ใช้อยู่แล้ว กรุณากรอกใหม่ !');
      location.href = '../view/admin/mng_admin.php';
      </script>";
      exit();
}

?>
