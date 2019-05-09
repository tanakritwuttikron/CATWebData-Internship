<?php require '../../layout/header_admin.php'; ?>
<?php 
 require '../../database/db.php';

 $sql="SELECT * FROM link_page ORDER BY page_name ASC";
 $query = mysqli_query($conn,$sql);
?>
<!-- Page Content -->
<div class="container">
 <!-- Page Heading/Breadcrumbs -->
 <h1 class="mt-4 mb-3">Link page</h1>

 <ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="mng_admin.php">หน้าแรก</a>
  </li>
  <li class="breadcrumb-item active">Link browser</li>
 </ol>
 
 <div class="row">
  <?php
  while ($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
  ?>
  <div class="col-sm-3">
   <a target ="_blank" href="<?= $result["page_link"] ?>">
    <button id="btn-link" class="btn btn-outline-primary col-md-8"><?= $result["page_name"]; ?></button>
   </a>
   <a href="" class="edit-link" data-toggle="modal" data-target="#edit_link" data-link-id="<?= $result["id_page"] ?>" data-link-name="<?= $result["page_name"] ?>" data-link-url="<?= $result["page_link"] ?>"><i class="fa fa-edit"></i></a>
   <a href="javascript:void(0);" onclick="if (! confirm('ยืนยันการลบใช่หรือไม่ ?')){return false;}else{ window.location = '../../database/delete_link.php?id_page=<?= $result["id_page"];?>'; }" style="color: red;"><i class="fa fa-trash"></i></a>
   <p>
  </div>
 <?php } ?>
 </div>
 <hr>
 <div class="row">
  <div class="col-sm-12 text-right">
    <button type="button" class="btn btn-success btn-md" id="btn-add" data-toggle="modal" data-target="#add_link"><i class="fa fa-plus"></i> เพิ่ม Page</button>
  </div>
  <?php require '../modal/md_add_link.php' ?>
  <?php require '../modal/md_edit_link.php'; ?>
 </div>
</div>

<script><?php require '../../js/check_save_link.js'; ?></script>
<script><?php require '../../js/edit_link.js'; ?></script>
