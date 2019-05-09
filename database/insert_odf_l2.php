<?php 
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';

if ($_SESSION['status'] === "1") {
 $strSQL = "INSERT INTO route_l2 (id_local,id_core,id_node,start_path,_l2end_path_l2,kilometer_l2) 
 VALUES ('".$_POST["id_local"]."', '".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$_POST["start_path"]."', '".$_POST["end_path"]."', '".$_POST["kilometer"]."')";
 $objQuery = mysqli_query($conn,$strSQL);

 $last_id = mysqli_insert_id($conn);

 if ($_POST["core_num"]==='1') {
  $strSQL = "INSERT INTO detail_core_l2 (id_core,id_node,id_route_l2,core_l2,working_l2,distance_l2,comment_l2)
  VALUES ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','1','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','2','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','3','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','4','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','5','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','6','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','7','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','8','-','-','-' )";
 $objQuery = mysqli_query($conn,$strSQL);

 header("Location: ../view/admin/detail_node_l2_admin.php?id_local=".$_POST["id_local"]."&id_node=".$_POST["id_node"]."");

 }elseif($_POST["core_num"]==='2'){

  $strSQL = "INSERT INTO detail_core_l2 (id_core,id_node,id_route_l2,core_l2,working_l2,distance_l2,comment_l2)
  VALUES ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','1','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','2','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','3','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','4','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','5','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','6','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','7','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','8','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','9','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','10','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','11','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','12','-','-','-' )";
 $objQuery = mysqli_query($conn,$strSQL);

 header("Location: ../view/admin/detail_node_l2_admin.php?id_local=".$_POST["id_local"]."&id_node=".$_POST["id_node"]."");

 }elseif($_POST["core_num"]==='3'){

   $strSQL = "INSERT INTO detail_core_l2 (id_core,id_node,id_route_l2,core_l2,working_l2,distance_l2,comment_l2)
   VALUES ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','1','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','2','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','3','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','4','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','5','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','6','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','7','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','8','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','9','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','10','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','11','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','12','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','13','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','14','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','15','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','16','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','17','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','18','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','19','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','20','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','21','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','22','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','23','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','24','-','-','-' )";
  $objQuery = mysqli_query($conn,$strSQL);

  header("Location: ../view/admin/detail_node_l2_admin.php?id_local=".$_POST["id_local"]."&id_node=".$_POST["id_node"]."");

 }elseif($_POST["core_num"]==='4'){

  $strSQL = "INSERT INTO detail_core_l2 (id_core,id_node,id_route_l2,core_l2,working_l2,distance_l2,comment_l2)
   VALUES ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','1','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','2','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','3','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','4','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','5','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','6','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','7','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','8','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','9','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','10','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','11','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','12','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','13','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','14','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','15','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','16','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','17','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','18','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','19','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','20','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','21','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','22','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','23','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','24','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','25','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','26','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','27','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','28','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','29','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','30','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','31','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','32','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','33','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','34','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','35','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','36','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','37','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','38','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','39','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','40','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','41','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','42','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','43','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','44','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','45','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','46','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','47','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','48','-','-','-' )";
  $objQuery = mysqli_query($conn,$strSQL);

  header("Location: ../view/admin/detail_node_l2_admin.php?id_local=".$_POST["id_local"]."&id_node=".$_POST["id_node"]."");
 }
}elseif ($_SESSION['status'] === "2"){
 $strSQL = "INSERT INTO route_l2 (id_local,id_core,id_node,start_path_l2,end_path_l2,kilometer_l2) 
 VALUES ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$_POST["start_path"]."', '".$_POST["end_path"]."', '".$_POST["kilometer"]."')";
 $objQuery = mysqli_query($conn,$strSQL);

 $last_id = mysqli_insert_id($conn);

 if ($_POST["core_num"]==='1') {

  $strSQL = "INSERT INTO detail_core_l2 (id_local,id_core,id_node,id_route_l2,core_l2,working_l2,distance_l2,comment_l2)
  VALUES ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','1','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','2','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','3','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','4','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','5','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','6','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','7','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','8','-','-','-' )";
 $objQuery = mysqli_query($conn,$strSQL);
 // echo $strSQL;

 header("Location: ../view/user/detail_node_l2_user.php?id_local=".$_POST["id_local"]."&id_node=".$_POST["id_node"]."");

 }elseif($_POST["core_num"]==='2'){

  $strSQL = "INSERT INTO detail_core_l2 (id_local,id_core,id_node,id_route_l2,core_l2,working_l2,distance_l2,comment_l2)
  VALUES ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','1','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','2','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','3','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','4','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','5','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','6','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','7','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','8','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','9','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','10','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','11','-','-','-' ),
  ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','12','-','-','-' )";
 $objQuery = mysqli_query($conn,$strSQL);

 header("Location: ../view/user/detail_node_l2_user.php?id_local=".$_POST["id_local"]."&id_node=".$_POST["id_node"]."");

 }elseif($_POST["core_num"]==='3'){

   $strSQL = "INSERT INTO detail_core_l2 (id_local,id_core,id_node,id_route_l2,core_l2,working_l2,distance_l2,comment_l2)
   VALUES ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','1','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','2','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','3','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','4','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','5','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','6','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','7','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','8','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','9','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','10','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','11','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','12','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','13','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','14','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','15','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','16','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','17','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','18','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','19','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','20','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','21','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','22','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','23','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','24','-','-','-' )";
  $objQuery = mysqli_query($conn,$strSQL);

  header("Location: ../view/user/detail_node_l2_user.php?id_local=".$_POST["id_local"]."&id_node=".$_POST["id_node"]."");

 }elseif($_POST["core_num"]==='4'){

  $strSQL = "INSERT INTO detail_core_l2 (id_local,id_core,id_node,id_route_l2,core_l2,working_l2,distance_l2,comment_l2)
   VALUES ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','1','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','2','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','3','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','4','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','5','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','6','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','7','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','8','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','9','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','10','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','11','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','12','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','13','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','14','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','15','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','16','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','17','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','18','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','19','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','20','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','21','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','22','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','23','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','24','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','25','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','26','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','27','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','28','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','29','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','30','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','31','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','32','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','33','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','34','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','35','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','36','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','37','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','38','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','39','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','40','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','41','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','42','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','43','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','44','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','45','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','46','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','47','-','-','-' ),
   ('".$_POST["id_local"]."','".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$last_id."','48','-','-','-' )";
  $objQuery = mysqli_query($conn,$strSQL);

  header("Location: ../view/user/detail_node_l2_user.php?id_local=".$_POST["id_local"]."&id_node=".$_POST["id_node"]."");
 }
}


mysqli_close($conn);

?>