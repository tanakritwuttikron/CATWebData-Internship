<?php require '../../layout/header_user.php'; ?>
<?php 
 require '../../database/db.php';

 $sql="SELECT * FROM edge ORDER BY edge_name ASC";
 $query = mysqli_query($conn,$sql);
?>
<!-- Page Content -->
<div class="container">
 <!-- Page Heading/Breadcrumbs -->
 <h1 class="mt-4 mb-3">IP CCI</h1>

 <ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="home.php">หน้าแรก</a>
  </li>
  <li class="breadcrumb-item active">IP CCI</li>
 </ol>
 
 <div class="row">
  <?php
  while ($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
  ?>
  <div class="col-sm-3">
   <a target ="_blank" href="ip_cci_user.php?id_edge=<?= $result["id_edge"] ?>">
    <button class="btn btn-outline-primary"><?= $result["edge_name"]; ?> / <?= $result["edge_ip"]; ?></button>
   </a>
   <a href="" class="edit-edge" data-toggle="modal" data-target="#edit_edge" data-edge-id="<?= $result["id_edge"] ?>" data-edge-name="<?= $result["edge_name"] ?>" data-edge-ip="<?= $result["edge_ip"] ?>"><i class="fa fa-edit"></i></a>
   <a href="javascript:void(0);" onclick="if (! confirm('ยืนยันการลบใช่หรือไม่ ?')){return false;}else{ window.location = '../../database/delete_edge.php?id_edge=<?= $result["id_edge"];?>'; }" style="color: red;"><i class="fa fa-trash"></i></a>
   <p>
  </div>
 <?php } ?>
 </div>
 <hr>
 <div class="row">
  <div class="col-sm-12 text-right">
    <button type="button" class="btn btn-success btn-md" id="btn-add" data-toggle="modal" data-target="#add_edge"><i class="fa fa-plus"></i> เพิ่ม Page</button>
  </div>
  <?php require '../modal/md_add_edge.php' ?>
  <?php require '../modal/md_edit_edge.php' ?>
 </div>
</div>

<?php require '../../layout/footer.php' ?>

<script><?php require '../../js/check_save_edge.js' ?></script>
<script><?php require '../../js/edit_edge.js' ?></script>