<?php
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';

if(isset($_POST['upload'])) {
 $topic = $_POST['txttopic'];
 $date = $_POST['txtdate_notice'];
 $descrip = $_POST['txtdescrip'];
 $text = str_replace("\n", "<br>\n", "$descrip"); 

 // you should really be checking for upload errors
 foreach ($_FILES['txtupload_img']['error'] as $err) {
  switch ($err) {
   case UPLOAD_ERR_NO_FILE:
    echo 'No file sent.';
    exit;
   case UPLOAD_ERR_INI_SIZE:
   case UPLOAD_ERR_FORM_SIZE:
    echo 'Exceeded filesize limit.';
    exit;
  }
 }

  for($x=0; $x<count($_FILES['txtupload_img']['tmp_name']); $x++ ) {

  $file_name = $_FILES['txtupload_img']['name'][$x];
  $file_size = $_FILES['txtupload_img']['size'][$x];
  $file_tmp  = $_FILES['txtupload_img']['tmp_name'][$x];

  $t = explode(".", $file_name);
  $t1 = end($t);
  $file_ext = strtolower(end($t));

  $ext_boleh = array("jpg", "jpeg", "png", "gif", "bmp");

  if(in_array($file_ext, $ext_boleh)) {
  $sumber = $file_tmp;
  $target = "../image/" . $file_name;
  move_uploaded_file($sumber, $target);

  $sql = "INSERT INTO notice (topic, date_notice, img, descrip) VALUES ('$topic', '$date', '$target', '$text')";
  mysqli_query($conn,$sql);

  header("Location: ../view/admin/history_notice.php");
  }else{
   echo "Only Images can be store!";
  }
 } // endfor
}

?>