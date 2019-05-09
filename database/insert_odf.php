<?php 
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';

if ($_SESSION['status'] === "1") {
 $strSQL = "INSERT INTO route (id_core,id_local,start_path,end_path,kilometer) 
 VALUES ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$_POST["start_path"]."', '".$_POST["end_path"]."', '".$_POST["kilometer"]."')";
 $objQuery = mysqli_query($conn,$strSQL);

 $last_id = mysqli_insert_id($conn);

 if ($_POST["core_num"]==='1') {
  $strSQL = "INSERT INTO detail_core (id_core,id_local,id_route,core,working,distance,comment)
  VALUES ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','1','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','2','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','3','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','4','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','5','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','6','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','7','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','8','-','-','-' )";
 $objQuery = mysqli_query($conn,$strSQL);

 header("Location: ../view/admin/menu_node.php?id_local=".$_POST["id_local"]."");

 }elseif($_POST["core_num"]==='2'){

  $strSQL = "INSERT INTO detail_core (id_core,id_local,id_route,core,working,distance,comment)
  VALUES ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','1','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','2','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','3','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','4','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','5','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','6','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','7','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','8','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','9','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','10','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','11','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','12','-','-','-' )";
 $objQuery = mysqli_query($conn,$strSQL);

 header("Location: ../view/admin/menu_node.php?id_local=".$_POST["id_local"]."");

 }elseif($_POST["core_num"]==='3'){

   $strSQL = "INSERT INTO detail_core (id_core,id_local,id_route,core,working,distance,comment)
   VALUES ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','1','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','2','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','3','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','4','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','5','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','6','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','7','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','8','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','9','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','10','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','11','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','12','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','13','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','14','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','15','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','16','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','17','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','18','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','19','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','20','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','21','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','22','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','23','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','24','-','-','-' )";
  $objQuery = mysqli_query($conn,$strSQL);

  header("Location: ../view/admin/menu_node.php?id_local=".$_POST["id_local"]."");

 }elseif($_POST["core_num"]==='4'){

  $strSQL = "INSERT INTO detail_core (id_core,id_local,id_route,core,working,distance,comment)
   VALUES ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','1','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','2','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','3','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','4','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','5','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','6','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','7','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','8','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','9','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','10','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','11','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','12','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','13','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','14','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','15','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','16','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','17','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','18','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','19','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','20','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','21','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','22','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','23','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','24','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','25','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','26','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','27','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','28','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','29','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','30','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','31','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','32','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','33','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','34','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','35','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','36','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','37','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','38','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','39','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','40','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','41','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','42','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','43','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','44','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','45','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','46','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','47','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','48','-','-','-' )";
  $objQuery = mysqli_query($conn,$strSQL);

  header("Location: ../view/admin/menu_node.php?id_local=".$_POST["id_local"]."");
 }
}elseif ($_SESSION['status'] === "2"){
 $strSQL = "INSERT INTO route (id_core,id_local,start_path,end_path,kilometer) 
 VALUES ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$_POST["start_path"]."', '".$_POST["end_path"]."', '".$_POST["kilometer"]."')";
 $objQuery = mysqli_query($conn,$strSQL);

 $last_id = mysqli_insert_id($conn);

 if ($_POST["core_num"]==='1') {
  $strSQL = "INSERT INTO detail_core (id_core,id_local,id_route,core,working,distance,comment)
  VALUES ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','1','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','2','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','3','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','4','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','5','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','6','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','7','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','8','-','-','-' )";
 $objQuery = mysqli_query($conn,$strSQL);

 header("Location: ../view/user/menu_node.php?id_local=".$_POST["id_local"]."");

 }elseif($_POST["core_num"]==='2'){

  $strSQL = "INSERT INTO detail_core (id_core,id_local,id_route,core,working,distance,comment)
  VALUES ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','1','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','2','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','3','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','4','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','5','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','6','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','7','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','8','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','9','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','10','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','11','-','-','-' ),
  ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','12','-','-','-' )";
 $objQuery = mysqli_query($conn,$strSQL);

 header("Location: ../view/user/menu_node.php?id_local=".$_POST["id_local"]."");

 }elseif($_POST["core_num"]==='3'){

   $strSQL = "INSERT INTO detail_core (id_core,id_local,id_route,core,working,distance,comment)
   VALUES ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','1','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','2','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','3','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','4','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','5','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','6','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','7','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','8','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','9','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','10','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','11','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','12','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','13','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','14','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','15','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','16','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','17','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','18','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','19','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','20','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','21','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','22','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','23','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','24','-','-','-' )";
  $objQuery = mysqli_query($conn,$strSQL);

  header("Location: ../view/user/menu_node.php?id_local=".$_POST["id_local"]."");

 }elseif($_POST["core_num"]==='4'){

  $strSQL = "INSERT INTO detail_core (id_core,id_local,id_route,core,working,distance,comment)
   VALUES ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','1','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','2','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','3','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','4','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','5','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','6','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','7','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','8','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','9','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','10','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','11','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','12','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','13','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','14','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','15','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','16','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','17','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','18','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','19','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','20','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','21','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','22','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','23','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','24','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','25','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','26','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','27','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','28','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','29','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','30','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','31','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','32','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','33','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','34','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','35','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','36','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','37','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','38','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','39','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','40','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','41','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','42','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','43','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','44','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','45','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','46','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','47','-','-','-' ),
   ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$last_id."','48','-','-','-' )";
  $objQuery = mysqli_query($conn,$strSQL);

  header("Location: ../view/user/menu_node.php?id_local=".$_POST["id_local"]."");
 }
}


mysqli_close($conn);

?>