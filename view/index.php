<?php require '../layout/header_index.php'; ?><!-- Using header_index.php file -->
<?php 
 require '../database/db.php';

 $sql="SELECT * FROM notice WHERE curdate()<date_add(date_notice,interval 5 day) ORDER BY date_notice DESC";
 $query = mysqli_query($conn,$sql);
?>

<!-- Page Content -->
<div class="container">
 <h1 class="my-4">Welcome to CAT web data</h1>
 <div class="row">
   <?php
    while ($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
   ?>
   <div class="col-lg-4 col-sm-6 portfolio-item live-search-list">
    <div class="card h-100">
     <img class="card-img-top" src="../image/<?= $result["img"] ?>" id="img-notice" alt="">
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
<?php require '../layout/footer.php'; ?>