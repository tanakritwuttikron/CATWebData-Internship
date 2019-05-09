<?php
if(!isset($_SESSION)) 
{ 
 session_start(); 
}
require 'db.php';

// if (isset($_POST["submit"])) {
  $manual_name = $_POST['edt_manual_name'];
  $id_manual = $_POST['edt_manual_id'];
  $date_upload = date('Y-m-d');
  $file = $_FILES['file'];

  $fileName = $_FILES['file']['name'];
  $fileTmpname = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileErr = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'doc', 'xls','ppt' ,'txt', 'rar','zip', 'docx', 'xlsx');

  if (in_array($fileActualExt, $allowed)) {
    if ($fileErr === 0) {
     if ($fileSize < 10000000) {
       $fileNameNew = uniqid('',true).".".$fileActualExt;
       $target = "../file_upload/" . $fileName;
       move_uploaded_file($fileTmpname, $target);

       $sql = "UPDATE manual SET manual_name = '$manual_name', manual_file = '$fileName', date_upload = '$date_upload' WHERE id_manual = '$id_manual'";
       mysqli_query($conn,$sql);

       header("Location: ../view/admin/mng_manual.php");
     }else{
      echo "<script>
	alert('Your file is too big!');
	location.href = '../view/admin/mng_manual.php';
	<script>";
	exit();
     }
    }else{
     echo $fileErr;
     echo "<script>
	alert('There was an error uploading your file!');
	location.href = '../view/admin/mng_manual.php';
	<script>";
	exit();
    }
  }else{
     echo "<script>
	alert('You cann't uploaded false of this type!');
	location.href = '../view/admin/mng_manual.php';
	<script>";
	exit();
  }
// }

?>
