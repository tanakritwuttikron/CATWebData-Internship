<?php require '../../layout/header_user.php'; ?>
<?php 
 require '../../database/db.php';

 $sql="SELECT * FROM notice_work WHERE curdate()<date_add(date_work,interval 5 day) ORDER BY date_work DESC";
 $query = mysqli_query($conn,$sql);
?>
<!-- Page Content -->
<div class="container">
 <!-- Page Heading/Breadcrumbs -->
 <h1 class="mt-4 mb-3">งานที่ต้องทำ</h1>

 <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="home.php">หน้าแรก</a>
   </li>
   <li class="breadcrumb-item active">งานที่ต้องทำ</li>
 </ol>

 <!-- Project One -->
 <div class="row">
  <div class="col-md-12">
  <?php
   while ($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
  ?>
  <div class="col-md-8">
   <h3><?= $result["title"] ?></h3>
    <p>ชื่อ : <?= $result["cust_fname"] ?> นามสกุล : <?= $result["cust_lname"] ?></p>
    <p>CAT ID : <?= $result["cat_id"] ?></p>
    <p>เบอร์โทรศัพท์ : <?= $result["tel"] ?></p>
    <p>รายละเอียด : <?= $result["descrip_work"] ?></p>
  </div>
  <div class="card-footer text-muted">
    <p>วันที่ : <?= $result["date_work"] ?></p>  
  </div>
   <hr>
  <?php } ?>
  </div>
 </div>
 <!-- /.row -->
</div>
<?php require '../../layout/footer.php' ?>