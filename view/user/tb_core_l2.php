<?php require '../../layout/header_user.php'; ?>

<?php

 $strid = null;
 $strid2 = null;
 if(isset($_GET["id_route_l2"]))
 {
   $strid = $_GET["id_route_l2"];
   $strid2 = $_GET["id_local"];
 } 
 require '../../database/db.php';

 $sql1="SELECT * FROM detail_core_l2 dc
   JOIN data_node_l2 dn 
    ON dc.id_node = dn.id_node
   JOIN route_l2 rt 
    ON rt.id_route_l2 = dc.id_route_l2
   JOIN core cr 
    ON cr.id_core = dc.id_core

   WHERE dc.id_route_l2 = '".$strid."'";
 $query1 = mysqli_query($conn,$sql1);

 $sql2 = "SELECT * FROM route_l2 rt 
   JOIN core cr 
    ON cr.id_core = rt.id_core 
   JOIN data_node_l2 dl 
    ON rt.id_node = dl.id_node

  WHERE rt.id_route_l2 ='".$strid."'";
 $query2 = mysqli_query($conn,$sql2);
 $result2 = mysqli_fetch_array($query2);
?>

<!-- Page Content -->
<div class="container">
 <!-- Page Heading/Breadcrumbs -->
 <h3 class="text-main">ODF <?= $result2["num_core"] ?> Core เส้นทาง <?= $result2["start_path_l2"] ?> - <?= $result2["end_path_l2"] ?> (<?= $result2["kilometer_l2"] ?> กม.)</h3>

 <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="../user/home.php">หน้าแรก</a>
   </li>
   <li class="breadcrumb-item">
     <a href="../user/node_user.php">Network Node</a>
   </li>
   <li class="breadcrumb-item">
     <a href="../user/detail_node_l2_user.php?id_local=<?= $result2["id_local"] ?>&id_node=<?= $result2["id_node"]; ?>">Node <?= $result2["node"]; ?> <?= $result2["node_name"]; ?></a>
   </li>
   <li class="breadcrumb-item active">ตารางข้อมูล Optical Distribution Frame</li>
 </ol>

<!-- Table -->
<div class="row">
 <table class="table">
  <thead class="thead-dark">
   <tr>
    <th>Core</th>
    <th>ใช้งาน</th>
    <th>ระยะทาง</th>
    <th>หมายเหตุ</th>
    <th>แก้ไข</th>
   </tr>
  </thead>
  <?php 
   while ($result1=mysqli_fetch_array($query1,MYSQLI_ASSOC)) { 
  ?>
  <tbody>
   <tr>
    <td><?= $result1["core_l2"] ?></td>
    <td><?= $result1["working_l2"] ?></td>
    <td><?= $result1["distance_l2"] ?></td>
    <td><?= $result1["comment_l2"] ?></td>
    <td>
      <button type="button" class="btn edit-core-l2" id="btn-edit" data-toggle="modal" data-target="#editCoreModalL2" data-local-id="<?= $result1["id_local"] ?>" data-core-id="<?= $result1["id_core"] ?>" data-route-id="<?= $result1["id_route_l2"] ?>" data-detail-id="<?= $result1["id_detail_l2"] ?>" data-core-num="<?= $result1["core_l2"] ?>" data-core-working="<?= $result1["working_l2"] ?>" data-core-dis="<?= $result1["distance_l2"] ?>" data-core-comment="<?= $result1["comment_l2"] ?>"><i class="fa fa-edit"></i></button>
    </td>
   </tr>
  </tbody>
  <?php require '../modal/md_edit_core_l2.php' ?>
  <?php } ?>
 </table>
</div>
<!-- End Table -->
</div>

<?php require '../../layout/footer.php' ?>

<script><?php require '../../js/edit_core.js' ?></script>