<?php require '../../layout/header_user.php'; ?>

<?php

 $strid = null;
 if(isset($_GET["id_route"]))
 {
   $strid = $_GET["id_route"];
 } 
 require '../../database/db.php';

 $sql1="SELECT * FROM detail_core dc
   JOIN data_local dl 
    ON dc.id_local = dl.id_local
   JOIN route rt 
    ON rt.id_route = dc.id_route
   JOIN core cr 
    ON cr.id_core = dc.id_core

   WHERE dc.id_route = '".$strid."'";
 $query1 = mysqli_query($conn,$sql1);

 $sql2 = "SELECT * FROM route rt 
   JOIN core cr 
    ON cr.id_core = rt.id_core 
   JOIN data_local dl 
    ON rt.id_local = dl.id_local

  WHERE rt.id_route ='".$strid."'";
 $query2 = mysqli_query($conn,$sql2);
 $result2 = mysqli_fetch_array($query2);
?>

<!-- Page Content -->
<div class="container">
 <!-- Page Heading/Breadcrumbs -->
 <h3 class="text-main">ODF <?= $result2["num_core"] ?> Core เส้นทาง <?= $result2["start_path"] ?> - <?= $result2["end_path"] ?> (<?= $result2["kilometer"] ?> กม.)</h3>

 <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="../user/home.php">หน้าแรก</a>
   </li>
   <li class="breadcrumb-item">
     <a href="../user/node_user.php">Network Node</a>
   </li>
   <li class="breadcrumb-item">
     <a href="../user/menu_node.php?id_local=<?= $result2["id_local"]; ?>">Node <?= $result2["local_name"]; ?></a>
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
    <td><?= $result1["core"] ?></td>
    <td><?= $result1["working"] ?></td>
    <td><?= $result1["distance"] ?></td>
    <td><?= $result1["comment"] ?></td>
    <td>
      <button type="button" class="btn edit-core" id="btn-edit" data-toggle="modal" data-target="#editCoreModal"
      data-core-id="<?= $result1["id_core"] ?>" data-route-id="<?= $result1["id_route"] ?>"
      data-detail-id="<?= $result1["id_detail"] ?>" data-core-num="<?= $result1["core"] ?>" data-core-working="<?= $result1["working"] ?>" data-core-dis="<?= $result1["distance"] ?>" data-core-comment="<?= $result1["comment"] ?>"><i class="fa fa-edit"></i></button>
    </td>
   </tr>
  </tbody>
  <?php require '../modal/md_edit_core.php' ?>
  <?php } ?>
 </table>
</div>
<!-- End Table -->
</div>

<?php require '../../layout/footer.php' ?>

<script><?php require '../../js/edit_core.js' ?></script>