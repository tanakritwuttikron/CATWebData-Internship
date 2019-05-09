<?php require '../../layout/header_user.php'; ?>
<?php 
 require '../../database/db.php';

 $sql="SELECT dd.date_daily,dd.time_work FROM data_daily dd JOIN member mb ON dd.id_member = mb.id_member GROUP BY dd.date_daily,dd.time_work Having count(dd.date_daily) >= 1 ORDER BY dd.date_daily DESC";
 $query = mysqli_query($conn,$sql);

 $sql2="SELECT date_daily,time_work FROM data_daily_3 GROUP BY date_daily,time_work Having count(date_daily) >= 1 ORDER BY date_daily DESC";
 $query2 = mysqli_query($conn,$sql2);
 $result2 = mysqli_fetch_array($query2);

 $strDate = null;
 $strTime = null;

 if(isset($result2["date_daily"]))
 {
  $strDate = $result2["date_daily"];
  $strTime = $result2["time_work"];
  function DateThai($strDate)
   {
     $strYear = date("Y",strtotime($strDate))+543;
     $strMonth= date("n",strtotime($strDate));
     $strDay= date("j",strtotime($strDate));
     $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
     $strMonthThai=$strMonthCut[$strMonth];
     return "$strDay $strMonthThai $strYear";
   }
 }
?>
<!-- Page Content -->
<div class="container">
 <!-- Page Heading/Breadcrumbs -->
 <h1 class="mt-4 mb-3">ตรวจสอบข้อมูล สรุปเหตุขัดข้องวงจร ของ สค.เชียงราย  ส่งต่อเจ้าหน้าที่เวร</h1>

 <ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="home.php">หน้าแรก</a>
  </li>
  <li class="breadcrumb-item">
    <a href="daily_check.php">Daily Check</a>
  </li>
  <li class="breadcrumb-item active">ตรวจสอบข้อมูล สรุปเหตุขัดข้องวงจร ของ สค.เชียงราย  ส่งต่อเจ้าหน้าที่เวร</li>
 </ol>
 
 <legend><h3 class="mt-4 mb-3">เลือกวันที่ที่ต้องการตรวจสอบ</h3></legend>
 <hr>
 
 <div class="row">
  <?php
  while ($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
  ?>
   <div class="col-sm-3">
    <a target ="_blank" href="report_daily_frm1.php?date_daily=<?= $result["date_daily"]; ?>&time_work=<?= $result["time_work"]; ?>">
     <button class="btn btn-outline-primary">
     <p>วันที่ : <?= DateThai($result["date_daily"]); ?></p>
     <p>เวร : <?= $result["time_work"]; ?></p>
     </button>
    </a>
    <p>
   </div>
  <?php } ?>
 </div>
</div>

<?php require '../../layout/footer.php' ?>

