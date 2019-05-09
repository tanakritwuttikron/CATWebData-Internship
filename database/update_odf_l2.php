<?php
if(!isset($_SESSION)) 
{ 
 session_start(); 
}

require 'db.php';
$id_local = $_POST["id_local"];
$id_route = $_POST["id_route_l2"];
$id_core = $_POST["id_core"];
$core_num = $_POST["core_num"];

  if ($id_core === '1') {
    if ($core_num === '2') {
      $sql = "UPDATE detail_core_l2 SET id_local = '".$id_local."', id_core = '".$core_num."' WHERE id_route_l2 = '".$id_route."'";
      $query = mysqli_query($conn,$sql);
      // echo $sql;

      $sql = "UPDATE route_l2 SET id_local = '".$id_local."', id_core = '".$core_num."', start_path_l2 = '".$_POST["edit_start_path"]."', end_path_l2 = '".$_POST["edit_end_path"]."', kilometer_l2 = '".$_POST["edit_kilometer"]."' WHERE id_route_l2 = '".$id_route."'";
      $query = mysqli_query($conn,$sql);
      // echo $sql;

      $sql = "INSERT INTO detail_core_l2 (id_local,id_core,id_node,id_route_l2,core_l2,working_l2,distance_l2,comment_l2)
      VALUES ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','9','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','10','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','11','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','12','-','-','-' )";

      $query = mysqli_query($conn,$sql);
      header("Location: ../view/user/detail_node_l2_user.php?id_local=".$_POST["id_local"]."&id_node=".$_POST["id_node"]."");
      mysqli_close($conn);

    }elseif ($core_num === '3') {
      $sql = "UPDATE detail_core_l2 SET id_local = '".$id_local."', id_core = '".$core_num."' WHERE id_route_l2 = '".$id_route."'";
      $query = mysqli_query($conn,$sql);
      // echo $sql;

      $sql = "UPDATE route SET id_local = '".$id_local."', id_core = '".$core_num."', start_path_l2 = '".$_POST["edit_start_path"]."', end_path_l2 = '".$_POST["edit_end_path"]."', kilometer_l2 = '".$_POST["edit_kilometer"]."' WHERE id_route_l2 = '".$id_route."'";
      $query = mysqli_query($conn,$sql);
      // echo $sql;

      $sql = "INSERT INTO detail_core_l2 (id_local,id_core,id_node,id_route_l2,core_l2,working_l2,distance_l2,comment_l2)
      VALUES ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','9','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','10','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','11','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','12','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','13','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','14','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','15','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','16','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','17','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','18','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','19','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','20','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','21','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','22','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','23','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','24','-','-','-' )";

      $query = mysqli_query($conn,$sql);
      header("Location: ../view/user/detail_node_l2_user.php?id_local=".$_POST["id_local"]."&id_node=".$_POST["id_node"]."");
      mysqli_close($conn);

    }elseif ($core_num === '4') {
      $sql = "UPDATE detail_core_l2 SET id_local = '".$id_local."', id_core = '".$core_num."' WHERE id_route_l2 = '".$id_route."'";
      $query = mysqli_query($conn,$sql);
      // echo $sql;

      $sql = "UPDATE route_l2 SET id_local = '".$id_local."', id_core = '".$core_num."', start_path_l2 = '".$_POST["edit_start_path"]."', end_path_l2 = '".$_POST["edit_end_path"]."', kilometer_l2 = '".$_POST["edit_kilometer"]."' WHERE id_route_l2 = '".$id_route."'";
      $query = mysqli_query($conn,$sql);
      // echo $sql;

      $sql = "INSERT INTO detail_core_l2 (id_local,id_core,id_node,id_route_l2,core_l2,working_l2,distance_l2,comment_l2)
      VALUES ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','9','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','10','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','11','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','12','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','13','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','14','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','15','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','16','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','17','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','18','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','19','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','20','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','21','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','22','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','23','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','24','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','25','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','26','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','27','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','28','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','29','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','30','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','31','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','32','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','33','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','34','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','35','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','36','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','37','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','38','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','39','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','40','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','41','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','42','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','43','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','44','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','45','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','46','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','47','-','-','-' ),
      ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','48','-','-','-' )";

      $query = mysqli_query($conn,$sql);
      header("Location: ../view/user/detail_node_l2_user.php?id_local=".$_POST["id_local"]."&id_node=".$_POST["id_node"]."");
      mysqli_close($conn);
    }

    $sql = "UPDATE route_l2 SET start_path_l2 = '".$_POST["edit_start_path"]."', end_path_l2 = '".$_POST["edit_end_path"]."', kilometer_l2 = '".$_POST["edit_kilometer"]."' WHERE id_route_l2 = '".$id_route."'";
    $query = mysqli_query($conn,$sql);
    // echo $sql;
    header("Location: ../view/user/detail_node_l2_user.php?id_local=".$_POST["id_local"]."&id_node=".$_POST["id_node"]."");
    mysqli_close($conn);

  }elseif ($id_core === '2') {
   if ($core_num === '3') {
     $sql = "UPDATE detail_core_l2 SET id_local = '".$id_local."', id_core = '".$core_num."' WHERE id_route_l2 = '".$id_route."'";
     $query = mysqli_query($conn,$sql);
     // echo $sql;

     $sql = "UPDATE route_l2 SET id_local = '".$id_local."', id_core = '".$core_num."', start_path_l2 = '".$_POST["edit_start_path"]."', end_path_l2 = '".$_POST["edit_end_path"]."', kilometer_l2 = '".$_POST["edit_kilometer"]."' WHERE id_route_l2 = '".$id_route."'";
     $query = mysqli_query($conn,$sql);
     // echo $sql;

     $sql = "INSERT INTO detail_core_l2 (id_local,id_core,id_node,id_route_l2,core_l2,working_l2,distance_l2,comment_l2)
     VALUES ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','13','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','14','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','15','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','16','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','17','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','18','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','19','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','20','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','21','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','22','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','23','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','24','-','-','-' )";

     $query = mysqli_query($conn,$sql);
     header("Location: ../view/user/detail_node_l2_user.php?id_local=".$_POST["id_local"]."&id_node=".$_POST["id_node"]."");
     mysqli_close($conn);

   }elseif ($core_num === '4') {
     $sql = "UPDATE detail_core_l2 SET id_local = '".$id_local."', id_core = '".$core_num."' WHERE id_route_l2 = '".$id_route."'";
     $query = mysqli_query($conn,$sql);
     // echo $sql;

     $sql = "UPDATE route_l2 SET id_local = '".$id_local."', id_core = '".$core_num."', start_path_l2 = '".$_POST["edit_start_path"]."', end_path_l2 = '".$_POST["edit_end_path"]."', kilometer_l2 = '".$_POST["edit_kilometer"]."' WHERE id_route_l2 = '".$id_route."'";
     $query = mysqli_query($conn,$sql);
     // echo $sql;

     $sql = "INSERT INTO detail_core_l2 (id_local,id_core,id_node,id_route_l2,core_l2,working_l2,distance_l2,comment_l2)
     VALUES ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','13','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','14','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','15','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','16','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','17','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','18','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','19','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','20','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','21','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','22','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','23','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','24','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','25','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','26','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','27','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','28','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','29','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','30','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','31','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','32','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','33','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','34','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','35','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','36','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','37','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','38','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','39','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','40','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','41','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','42','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','43','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','44','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','45','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','46','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','47','-','-','-' ),
     ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','48','-','-','-' )";

     $query = mysqli_query($conn,$sql);
     header("Location: ../view/user/detail_node_l2_user.php?id_local=".$_POST["id_local"]."&id_node=".$_POST["id_node"]."");
     mysqli_close($conn);
   }

   $sql = "UPDATE route_l2 SET start_path_l2 = '".$_POST["edit_start_path"]."', end_path_l2 = '".$_POST["edit_end_path"]."', kilometer_l2 = '".$_POST["edit_kilometer"]."' WHERE id_route_l2 = '".$id_route."'";
   $query = mysqli_query($conn,$sql);
   header("Location: ../view/user/detail_node_l2_user.php?id_local=".$_POST["id_local"]."&id_node=".$_POST["id_node"]."");
   mysqli_close($conn);

  }elseif ($id_core === '3') {
   if ($core_num === '4') {
        $sql = "UPDATE detail_core_l2 SET id_local = '".$id_local."', id_core = '".$core_num."' WHERE id_route_l2 = '".$id_route."'";
        $query = mysqli_query($conn,$sql);
        // echo $sql;

        $sql = "UPDATE route_l2 SET id_local = '".$id_local."', id_core = '".$core_num."', start_path_l2 = '".$_POST["edit_start_path"]."', end_path_l2 = '".$_POST["edit_end_path"]."', kilometer_l2 = '".$_POST["edit_kilometer"]."' WHERE id_route_l2 = '".$id_route."'";
        $query = mysqli_query($conn,$sql);
        // echo $sql;

        $sql = "INSERT INTO detail_core_l2 (id_local,id_core,id_node,id_route_l2,core_l2,working_l2,distance_l2,comment_l2)
        VALUES ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','25','-','-','-' ),
        ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','26','-','-','-' ),
        ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','27','-','-','-' ),
        ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','28','-','-','-' ),
        ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','29','-','-','-' ),
        ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','30','-','-','-' ),
        ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','31','-','-','-' ),
        ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','32','-','-','-' ),
        ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','33','-','-','-' ),
        ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','34','-','-','-' ),
        ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','35','-','-','-' ),
        ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','36','-','-','-' ),
        ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','37','-','-','-' ),
        ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','38','-','-','-' ),
        ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','39','-','-','-' ),
        ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','40','-','-','-' ),
        ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','41','-','-','-' ),
        ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','42','-','-','-' ),
        ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','43','-','-','-' ),
        ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','44','-','-','-' ),
        ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','45','-','-','-' ),
        ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','46','-','-','-' ),
        ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','47','-','-','-' ),
        ('".$_POST["id_local"]."', '".$_POST["core_num"]."', '".$_POST["id_node"]."', '".$id_route."','48','-','-','-' )";

        $query = mysqli_query($conn,$sql);
        header("Location: ../view/user/detail_node_l2_user.php?id_local=".$_POST["id_local"]."&id_node=".$_POST["id_node"]."");
        mysqli_close($conn);
      }

      $sql = "UPDATE route_l2 SET start_path_l2 = '".$_POST["edit_start_path"]."', end_path_l2 = '".$_POST["edit_end_path"]."', kilometer_l2 = '".$_POST["edit_kilometer"]."' WHERE id_route_l2 = '".$id_route."'";
      $query = mysqli_query($conn,$sql);
      header("Location: ../view/user/detail_node_l2_user.php?id_local=".$_POST["id_local"]."&id_node=".$_POST["id_node"]."");
      mysqli_close($conn);

  }elseif ($id_core === '4') {
   $sql = "UPDATE route_l2 SET start_path_l2 = '".$_POST["edit_start_path"]."', end_path_l2 = '".$_POST["edit_end_path"]."', kilometer_l2 = '".$_POST["edit_kilometer"]."' WHERE id_route_l2 = '".$id_route."'";
   $query = mysqli_query($conn,$sql);
   header("Location: ../view/user/detail_node_l2_user.php?id_local=".$_POST["id_local"]."&id_node=".$_POST["id_node"]."");
   mysqli_close($conn);
  }

?>