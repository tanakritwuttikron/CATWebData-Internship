<?php require '../../layout/header_user.php'; ?>
<?php 
 require '../../database/db.php';

 $sql="SELECT * FROM notice ORDER BY date_notice DESC";
 $query = mysqli_query($conn,$sql);
?>
<!-- Page Content -->
<div class="container">
 <!-- Page Heading/Breadcrumbs -->
 <h1 class="mt-4 mb-3">ข่าวสาร</h1>

 <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="home.php">หน้าแรก</a>
   </li>
   <li class="breadcrumb-item active">ข่าวสาร</li>
 </ol>

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
    </div>
   </div>
  </div>
  <?php } ?>
 </div>
 <hr>
</div>
<?php require '../../layout/footer.php' ?>
