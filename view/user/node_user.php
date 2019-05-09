<?php require '../../layout/header_user.php'; ?>
<?php 
 require '../../database/db.php';

 $sql="SELECT * FROM data_local WHERE node = 'L3' ORDER BY local_name ASC";
 $query = mysqli_query($conn,$sql);
?>
<!-- Page Content -->
<div class="container">
 <!-- Page Heading/Breadcrumbs -->
 <h1 class="mt-4 mb-3">Network Node</h1>

 <ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="home.php">หน้าแรก</a>
  </li>
  <li class="breadcrumb-item active">Network Node</li>
 </ol>
 
 <div class="row">
  <?php
  while ($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
  ?>
  <div class="col-sm-3">
   <a href="menu_node.php?id_local=<?= $result["id_local"]; ?>">
    <button class="btn btn-outline-primary">Node <?= $result["node"] ?> <?= $result["local_name"]; ?> </button>
   </a>
   <p>
  </div>
 <?php } ?>
 </div>
 <hr>
 <div class="row">
  <div class="col-sm-12 text-right">
   <a href="add_local.php">
    <button class="btn btn-success"><i class="fa fa-plus"></i> เพิ่มสถานที่</button>
   </a>
  </div>
 </div>
</div>
<?php require '../../layout/footer.php' ?>