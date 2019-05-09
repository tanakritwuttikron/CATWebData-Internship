<?php require '../../layout/header_user.php'; ?>
<?php 
 require '../../database/db.php';

 $sql="SELECT * FROM manual ORDER BY date_upload DESC";
 $query = mysqli_query($conn,$sql);
?>
<!-- Page Content -->
<div class="container">
 <!-- Page Heading/Breadcrumbs -->
 <h1 class="mt-4 mb-3">คู่มือ</h1>

 <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="home.php">หน้าแรก</a>
   </li>
   <li class="breadcrumb-item active">คู่มือ</li>
 </ol>

 <!-- Project One -->
 <div class="row">
  <div class="col-md-12">
  <?php
   while ($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
  ?>
  <div class="col-md-8">
    <p>ชื่อ : <?= $result["manual_name"] ?></p>
    <p>ไฟล์ : <a href="../../file_upload/<?= $result["manual_file"] ?>" download><?= $result["manual_file"] ?></a></p>
  </div>
  <div class="card-footer text-muted">
    <p>วันที่ : <?= $result["date_upload"] ?></p>  
  </div>
   <hr>
  <?php } ?>
  </div>
  </div>
  <!-- End Row -->
</div>
<!-- End Content -->

<?php require '../../layout/footer.php' ?>