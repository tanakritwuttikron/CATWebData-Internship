<?php require '../../layout/header_admin.php'; ?>
<?php 
 require '../../database/db.php';

 $sql="SELECT * FROM notice ORDER BY date_notice DESC";
 $query = mysqli_query($conn,$sql);
?>
<!-- Page Content -->
<div class="container">
 <!-- Row 1 -->
 <h1 class="mt-4 mb-3">ข้อมูลข่าวสาร</h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="mng_admin.php">หน้าแรก</a>
    </li>
    <li class="breadcrumb-item active">ข้อมูลข่าวสาร</li>
  </ol>

   <div class="form-group" align="right">
    <input type="search"  class="form-control col-sm-4" id="search-id" placeholder="Search ...">
   </div>
   
 <!-- End Row 1 -->

 <div class="row">
  <?php
   while ($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
  ?>
  <div class="col-lg-4 col-sm-6 portfolio-item live-search-list">
   <div class="card h-100">
    <img class="card-img-top" src="../../image/<?= $result["img"] ?>" id="img-notice" alt="">
    <div class="card-body">
     <h4 class="card-title">
       <?= $result["topic"] ?>
     </h4>
     <p class="card-text"><?= $result["descrip"] ?></p>
    </div>
    <div class="card-footer text-muted">
     Date : <?= $result["date_notice"] ?>
     <a href="edit_htr_notice.php?id_notice=<?= $result["id_notice"] ?>"><button type="button" class="btn btn-primary edit-htr" id="btn-edit" style="margin-left: 70px;"><i class="fa fa-edit"></i></button></a> 
     <a href="javascript:void(0);" onclick="if (! confirm('ยืนยันการลบใช่หรือไม่ ?')){return false;}else{ window.location = '../../database/delete_notice.php?id_notice=<?= $result["id_notice"];?>'; }"><button class="btn btn-danger" id="btn-delete"><i class="fa fa-trash"></i></button></a>
    </div>
   </div>
  </div>
  <?php } ?>
 </div>
 <hr>
</div>
<?php require '../../layout/footer_admin.php'; ?>

<script><?php require '../../js/search_list.js'; ?></script>

