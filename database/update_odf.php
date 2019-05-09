<?php
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';
$id_route = $_POST["id_route"];
$id_core = $_POST["id_core"];
$core_num = $_POST["core_num"];

if ($_SESSION["status"] === "1") {
 if ($id_core === '1') {
   if ($core_num === '2') {
     $sql = "UPDATE detail_core SET id_core = '".$core_num."' WHERE id_route = '".$id_route."'";
     $query = mysqli_query($conn,$sql);
     // echo $sql;

     $sql = "UPDATE route SET id_core = '".$core_num."', start_path = '".$_POST["edit_start_path"]."', end_path = '".$_POST["edit_end_path"]."', kilometer = '".$_POST["edit_kilometer"]."' WHERE id_route = '".$id_route."'";
     $query = mysqli_query($conn,$sql);
     // echo $sql;

     $sql = "INSERT INTO detail_core (id_core,id_local,id_route,core,working,distance,comment)
     VALUES ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','9','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','10','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','11','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','12','-','-','-' )";

     $query = mysqli_query($conn,$sql);
     header("Location: ../view/admin/menu_node.php?id_local=".$_POST["id_local"]."");
     mysqli_close($conn);

   }elseif ($core_num === '3') {
     $sql = "UPDATE detail_core SET id_core = '".$core_num."' WHERE id_route = '".$id_route."'";
     $query = mysqli_query($conn,$sql);
     // echo $sql;

     $sql = "UPDATE route SET id_core = '".$core_num."', start_path = '".$_POST["edit_start_path"]."', end_path = '".$_POST["edit_end_path"]."', kilometer = '".$_POST["edit_kilometer"]."' WHERE id_route = '".$id_route."'";
     $query = mysqli_query($conn,$sql);
     // echo $sql;

     $sql = "INSERT INTO detail_core (id_core,id_local,id_route,core,working,distance,comment)
     VALUES ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','9','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','10','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','11','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','12','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','13','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','14','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','15','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','16','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','17','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','18','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','19','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','20','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','21','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','22','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','23','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','24','-','-','-' )";

     $query = mysqli_query($conn,$sql);
     header("Location: ../view/admin/menu_node.php?id_local=".$_POST["id_local"]."");
     mysqli_close($conn);

   }elseif ($core_num === '4') {
     $sql = "UPDATE detail_core SET id_core = '".$core_num."' WHERE id_route = '".$id_route."'";
     $query = mysqli_query($conn,$sql);
     // echo $sql;

     $sql = "UPDATE route SET id_core = '".$core_num."', start_path = '".$_POST["edit_start_path"]."', end_path = '".$_POST["edit_end_path"]."', kilometer = '".$_POST["edit_kilometer"]."' WHERE id_route = '".$id_route."'";
     $query = mysqli_query($conn,$sql);
     // echo $sql;

     $sql = "INSERT INTO detail_core (id_core,id_local,id_route,core,working,distance,comment)
     VALUES ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','9','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','10','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','11','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','12','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','13','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','14','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','15','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','16','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','17','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','18','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','19','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','20','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','21','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','22','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','23','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','24','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','25','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','26','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','27','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','28','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','29','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','30','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','31','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','32','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','33','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','34','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','35','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','36','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','37','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','38','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','39','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','40','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','41','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','42','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','43','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','44','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','45','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','46','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','47','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','48','-','-','-' )";

     $query = mysqli_query($conn,$sql);
     header("Location: ../view/admin/menu_node.php?id_local=".$_POST["id_local"]."");
     mysqli_close($conn);
   }

   $sql = "UPDATE route SET start_path = '".$_POST["edit_start_path"]."', end_path = '".$_POST["edit_end_path"]."', kilometer = '".$_POST["edit_kilometer"]."' WHERE id_route = '".$id_route."'";
   $query = mysqli_query($conn,$sql);
   header("Location: ../view/user/menu_node.php?id_local=".$_POST["id_local"]."");
   mysqli_close($conn);

 }elseif ($id_core === '2') {
  if ($core_num === '3') {
    $sql = "UPDATE detail_core SET id_core = '".$core_num."' WHERE id_route = '".$id_route."'";
    $query = mysqli_query($conn,$sql);
    // echo $sql;

    $sql = "UPDATE route SET id_core = '".$core_num."', start_path = '".$_POST["edit_start_path"]."', end_path = '".$_POST["edit_end_path"]."', kilometer = '".$_POST["edit_kilometer"]."' WHERE id_route = '".$id_route."'";
    $query = mysqli_query($conn,$sql);
    // echo $sql;

    $sql = "INSERT INTO detail_core (id_core,id_local,id_route,core,working,distance,comment)
    VALUES ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','13','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','14','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','15','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','16','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','17','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','18','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','19','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','20','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','21','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','22','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','23','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','24','-','-','-' )";

    $query = mysqli_query($conn,$sql);
    header("Location: ../view/admin/menu_node.php?id_local=".$_POST["id_local"]."");
    mysqli_close($conn);

  }elseif ($core_num === '4') {
    $sql = "UPDATE detail_core SET id_core = '".$core_num."' WHERE id_route = '".$id_route."'";
    $query = mysqli_query($conn,$sql);
    // echo $sql;

    $sql = "UPDATE route SET id_core = '".$core_num."', start_path = '".$_POST["edit_start_path"]."', end_path = '".$_POST["edit_end_path"]."', kilometer = '".$_POST["edit_kilometer"]."' WHERE id_route = '".$id_route."'";
    $query = mysqli_query($conn,$sql);
    // echo $sql;

    $sql = "INSERT INTO detail_core (id_core,id_local,id_route,core,working,distance,comment)
    VALUES ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','13','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','14','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','15','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','16','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','17','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','18','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','19','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','20','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','21','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','22','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','23','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','24','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','25','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','26','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','27','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','28','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','29','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','30','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','31','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','32','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','33','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','34','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','35','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','36','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','37','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','38','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','39','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','40','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','41','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','42','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','43','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','44','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','45','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','46','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','47','-','-','-' ),
    ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','48','-','-','-' )";

    $query = mysqli_query($conn,$sql);
    header("Location: ../view/admin/menu_node.php?id_local=".$_POST["id_local"]."");
    mysqli_close($conn);
  }

  $sql = "UPDATE route SET start_path = '".$_POST["edit_start_path"]."', end_path = '".$_POST["edit_end_path"]."', kilometer = '".$_POST["edit_kilometer"]."' WHERE id_route = '".$id_route."'";
  $query = mysqli_query($conn,$sql);
  header("Location: ../view/admin/menu_node.php?id_local=".$_POST["id_local"]."");
  mysqli_close($conn);

 }elseif ($id_core === '3') {
  if ($core_num === '4') {
       $sql = "UPDATE detail_core SET id_core = '".$core_num."' WHERE id_route = '".$id_route."'";
       $query = mysqli_query($conn,$sql);
       // echo $sql;

       $sql = "UPDATE route SET id_core = '".$core_num."', start_path = '".$_POST["edit_start_path"]."', end_path = '".$_POST["edit_end_path"]."', kilometer = '".$_POST["edit_kilometer"]."' WHERE id_route = '".$id_route."'";
       $query = mysqli_query($conn,$sql);
       // echo $sql;

       $sql = "INSERT INTO detail_core (id_core,id_local,id_route,core,working,distance,comment)
       VALUES ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','25','-','-','-' ),
       ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','26','-','-','-' ),
       ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','27','-','-','-' ),
       ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','28','-','-','-' ),
       ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','29','-','-','-' ),
       ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','30','-','-','-' ),
       ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','31','-','-','-' ),
       ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','32','-','-','-' ),
       ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','33','-','-','-' ),
       ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','34','-','-','-' ),
       ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','35','-','-','-' ),
       ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','36','-','-','-' ),
       ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','37','-','-','-' ),
       ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','38','-','-','-' ),
       ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','39','-','-','-' ),
       ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','40','-','-','-' ),
       ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','41','-','-','-' ),
       ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','42','-','-','-' ),
       ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','43','-','-','-' ),
       ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','44','-','-','-' ),
       ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','45','-','-','-' ),
       ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','46','-','-','-' ),
       ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','47','-','-','-' ),
       ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','48','-','-','-' )";

       $query = mysqli_query($conn,$sql);
       header("Location: ../view/admin/menu_node.php?id_local=".$_POST["id_local"]."");
       mysqli_close($conn);
     }

     $sql = "UPDATE route SET start_path = '".$_POST["edit_start_path"]."', end_path = '".$_POST["edit_end_path"]."', kilometer = '".$_POST["edit_kilometer"]."' WHERE id_route = '".$id_route."'";
     $query = mysqli_query($conn,$sql);
     header("Location: ../view/admin/menu_node.php?id_local=".$_POST["id_local"]."");
     mysqli_close($conn);

 }elseif ($id_core === '4') {
  $sql = "UPDATE route SET start_path = '".$_POST["edit_start_path"]."', end_path = '".$_POST["edit_end_path"]."', kilometer = '".$_POST["edit_kilometer"]."' WHERE id_route = '".$id_route."'";
  $query = mysqli_query($conn,$sql);
  header("Location: ../view/admin/menu_node.php?id_local=".$_POST["id_local"]."");
  mysqli_close($conn);
 }

}elseif ($_SESSION['status'] === "2"){
  if ($id_core === '1') {
    if ($core_num === '2') {
      $sql = "UPDATE detail_core SET id_core = '".$core_num."' WHERE id_route = '".$id_route."'";
      $query = mysqli_query($conn,$sql);
      // echo $sql;

      $sql = "UPDATE route SET id_core = '".$core_num."', start_path = '".$_POST["edit_start_path"]."', end_path = '".$_POST["edit_end_path"]."', kilometer = '".$_POST["edit_kilometer"]."' WHERE id_route = '".$id_route."'";
      $query = mysqli_query($conn,$sql);
      // echo $sql;

      $sql = "INSERT INTO detail_core (id_core,id_local,id_route,core,working,distance,comment)
      VALUES ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','9','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','10','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','11','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','12','-','-','-' )";

      $query = mysqli_query($conn,$sql);
      header("Location: ../view/user/menu_node.php?id_local=".$_POST["id_local"]."");
      mysqli_close($conn);

    }elseif ($core_num === '3') {
      $sql = "UPDATE detail_core SET id_core = '".$core_num."' WHERE id_route = '".$id_route."'";
      $query = mysqli_query($conn,$sql);
      // echo $sql;

      $sql = "UPDATE route SET id_core = '".$core_num."', start_path = '".$_POST["edit_start_path"]."', end_path = '".$_POST["edit_end_path"]."', kilometer = '".$_POST["edit_kilometer"]."' WHERE id_route = '".$id_route."'";
      $query = mysqli_query($conn,$sql);
      // echo $sql;

      $sql = "INSERT INTO detail_core (id_core,id_local,id_route,core,working,distance,comment)
      VALUES ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','9','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','10','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','11','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','12','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','13','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','14','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','15','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','16','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','17','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','18','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','19','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','20','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','21','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','22','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','23','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','24','-','-','-' )";

      $query = mysqli_query($conn,$sql);
      header("Location: ../view/user/menu_node.php?id_local=".$_POST["id_local"]."");
      mysqli_close($conn);

    }elseif ($core_num === '4') {
      $sql = "UPDATE detail_core SET id_core = '".$core_num."' WHERE id_route = '".$id_route."'";
      $query = mysqli_query($conn,$sql);
      // echo $sql;

      $sql = "UPDATE route SET id_core = '".$core_num."', start_path = '".$_POST["edit_start_path"]."', end_path = '".$_POST["edit_end_path"]."', kilometer = '".$_POST["edit_kilometer"]."' WHERE id_route = '".$id_route."'";
      $query = mysqli_query($conn,$sql);
      // echo $sql;

      $sql = "INSERT INTO detail_core (id_core,id_local,id_route,core,working,distance,comment)
      VALUES ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','9','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','10','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','11','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','12','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','13','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','14','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','15','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','16','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','17','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','18','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','19','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','20','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','21','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','22','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','23','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','24','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','25','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','26','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','27','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','28','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','29','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','30','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','31','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','32','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','33','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','34','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','35','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','36','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','37','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','38','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','39','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','40','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','41','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','42','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','43','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','44','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','45','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','46','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','47','-','-','-' ),
      ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','48','-','-','-' )";

      $query = mysqli_query($conn,$sql);
      header("Location: ../view/user/menu_node.php?id_local=".$_POST["id_local"]."");
      mysqli_close($conn);
    }

    $sql = "UPDATE route SET start_path = '".$_POST["edit_start_path"]."', end_path = '".$_POST["edit_end_path"]."', kilometer = '".$_POST["edit_kilometer"]."' WHERE id_route = '".$id_route."'";
    $query = mysqli_query($conn,$sql);
    header("Location: ../view/user/menu_node.php?id_local=".$_POST["id_local"]."");
    mysqli_close($conn);

  }elseif ($id_core === '2') {
   if ($core_num === '3') {
     $sql = "UPDATE detail_core SET id_core = '".$core_num."' WHERE id_route = '".$id_route."'";
     $query = mysqli_query($conn,$sql);
     // echo $sql;

     $sql = "UPDATE route SET id_core = '".$core_num."', start_path = '".$_POST["edit_start_path"]."', end_path = '".$_POST["edit_end_path"]."', kilometer = '".$_POST["edit_kilometer"]."' WHERE id_route = '".$id_route."'";
     $query = mysqli_query($conn,$sql);
     // echo $sql;

     $sql = "INSERT INTO detail_core (id_core,id_local,id_route,core,working,distance,comment)
     VALUES ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','13','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','14','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','15','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','16','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','17','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','18','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','19','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','20','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','21','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','22','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','23','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','24','-','-','-' )";

     $query = mysqli_query($conn,$sql);
     header("Location: ../view/user/menu_node.php?id_local=".$_POST["id_local"]."");
     mysqli_close($conn);

   }elseif ($core_num === '4') {
     $sql = "UPDATE detail_core SET id_core = '".$core_num."' WHERE id_route = '".$id_route."'";
     $query = mysqli_query($conn,$sql);
     // echo $sql;

     $sql = "UPDATE route SET id_core = '".$core_num."', start_path = '".$_POST["edit_start_path"]."', end_path = '".$_POST["edit_end_path"]."', kilometer = '".$_POST["edit_kilometer"]."' WHERE id_route = '".$id_route."'";
     $query = mysqli_query($conn,$sql);
     // echo $sql;

     $sql = "INSERT INTO detail_core (id_core,id_local,id_route,core,working,distance,comment)
     VALUES ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','13','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','14','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','15','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','16','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','17','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','18','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','19','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','20','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','21','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','22','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','23','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','24','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','25','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','26','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','27','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','28','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','29','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','30','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','31','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','32','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','33','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','34','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','35','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','36','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','37','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','38','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','39','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','40','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','41','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','42','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','43','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','44','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','45','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','46','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','47','-','-','-' ),
     ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','48','-','-','-' )";

     $query = mysqli_query($conn,$sql);
     header("Location: ../view/user/menu_node.php?id_local=".$_POST["id_local"]."");
     mysqli_close($conn);
   }

   $sql = "UPDATE route SET start_path = '".$_POST["edit_start_path"]."', end_path = '".$_POST["edit_end_path"]."', kilometer = '".$_POST["edit_kilometer"]."' WHERE id_route = '".$id_route."'";
   $query = mysqli_query($conn,$sql);
   header("Location: ../view/user/menu_node.php?id_local=".$_POST["id_local"]."");
   mysqli_close($conn);

  }elseif ($id_core === '3') {
   if ($core_num === '4') {
        $sql = "UPDATE detail_core SET id_core = '".$core_num."' WHERE id_route = '".$id_route."'";
        $query = mysqli_query($conn,$sql);
        // echo $sql;

        $sql = "UPDATE route SET id_core = '".$core_num."', start_path = '".$_POST["edit_start_path"]."', end_path = '".$_POST["edit_end_path"]."', kilometer = '".$_POST["edit_kilometer"]."' WHERE id_route = '".$id_route."'";
        $query = mysqli_query($conn,$sql);
        // echo $sql;

        $sql = "INSERT INTO detail_core (id_core,id_local,id_route,core,working,distance,comment)
        VALUES ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','25','-','-','-' ),
        ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','26','-','-','-' ),
        ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','27','-','-','-' ),
        ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','28','-','-','-' ),
        ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','29','-','-','-' ),
        ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','30','-','-','-' ),
        ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','31','-','-','-' ),
        ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','32','-','-','-' ),
        ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','33','-','-','-' ),
        ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','34','-','-','-' ),
        ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','35','-','-','-' ),
        ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','36','-','-','-' ),
        ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','37','-','-','-' ),
        ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','38','-','-','-' ),
        ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','39','-','-','-' ),
        ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','40','-','-','-' ),
        ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','41','-','-','-' ),
        ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','42','-','-','-' ),
        ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','43','-','-','-' ),
        ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','44','-','-','-' ),
        ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','45','-','-','-' ),
        ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','46','-','-','-' ),
        ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','47','-','-','-' ),
        ('".$_POST["core_num"]."', '".$_POST["id_local"]."', '".$id_route."','48','-','-','-' )";

        $query = mysqli_query($conn,$sql);
        header("Location: ../view/user/menu_node.php?id_local=".$_POST["id_local"]."");
        mysqli_close($conn);
      }

      $sql = "UPDATE route SET start_path = '".$_POST["edit_start_path"]."', end_path = '".$_POST["edit_end_path"]."', kilometer = '".$_POST["edit_kilometer"]."' WHERE id_route = '".$id_route."'";
      $query = mysqli_query($conn,$sql);
      header("Location: ../view/user/menu_node.php?id_local=".$_POST["id_local"]."");
      mysqli_close($conn);

  }elseif ($id_core === '4') {
   $sql = "UPDATE route SET start_path = '".$_POST["edit_start_path"]."', end_path = '".$_POST["edit_end_path"]."', kilometer = '".$_POST["edit_kilometer"]."' WHERE id_route = '".$id_route."'";
   $query = mysqli_query($conn,$sql);
   header("Location: ../view/user/menu_node.php?id_local=".$_POST["id_local"]."");
   mysqli_close($conn);
  }
   
}

mysqli_close($conn);
?>