<?php require '../../layout/header_user.php'; ?>
<?php 
 require '../../database/db.php';
 $strnum_time = null;
 $strnum_month = null;
 $strnum_year = null;


 if ($_POST["txtnum_time"] != "all") {
   $strnum_time = $_POST["txtnum_time"];
   $strnum_month = $_POST["txtnum_month"];
   $strnum_year = $_POST["txtnum_year"];


   $sql="SELECT dd.date_daily,dd.time_work,dd.id_member FROM data_daily dd JOIN member mb ON dd.id_member = mb.id_member WHERE MONTH(dd.date_daily) = '".$strnum_month."' AND dd.time_work = '".$strnum_time."' AND YEAR(dd.date_daily) = '".$strnum_year."' GROUP BY dd.date_daily,dd.time_work Having count(dd.date_daily) >= 1 ORDER BY dd.date_daily ASC ";
   $query = mysqli_query($conn,$sql);

   $sql2 = "SELECT dd.date_daily,dd.time_work,dd.id_member FROM data_daily dd JOIN member mb ON dd.id_member = mb.id_member WHERE MONTH(dd.date_daily) = '".$strnum_month."' AND dd.time_work = '".$strnum_time."' AND YEAR(dd.date_daily) = '".$strnum_year."' GROUP BY dd.date_daily,dd.time_work Having count(dd.date_daily) >= 1 ORDER BY dd.date_daily ASC ";
   $query2 = mysqli_query($conn,$sql2);
   $result2 = mysqli_fetch_array($query2);

   if (!$result2) {
   echo "<script>
      alert('ไม่พบข้อมูลที่คุณต้องการ กรุณากรอกใหม่ !');
      location.href = '../user/history_day_frm1.php';
      </script>";
      exit();
  }

 }elseif ($_POST["txtnum_time"] == "all") {
  $strnum_month = $_POST["txtnum_month"];
   $strnum_year = $_POST["txtnum_year"];


  $sql="SELECT dd.date_daily,dd.time_work,dd.id_member FROM data_daily dd JOIN member mb ON dd.id_member = mb.id_member WHERE MONTH(dd.date_daily) = '".$strnum_month."' AND YEAR(dd.date_daily) = '".$strnum_year."' GROUP BY dd.date_daily,dd.time_work Having count(dd.date_daily) >= 1 ORDER BY dd.date_daily ASC ";
  $query = mysqli_query($conn,$sql);

  $sql2 = "SELECT dd.date_daily,dd.time_work,dd.id_member FROM data_daily dd JOIN member mb ON dd.id_member = mb.id_member WHERE MONTH(dd.date_daily) = '".$strnum_month."' AND YEAR(dd.date_daily) = '".$strnum_year."' GROUP BY dd.date_daily,dd.time_work Having count(dd.date_daily) >= 1 ORDER BY dd.date_daily ASC ";
   $query2 = mysqli_query($conn,$sql2);
   $result2 = mysqli_fetch_array($query2);

   if (!$result2) {
   echo "<script>
      alert('ไม่พบข้อมูลที่คุณต้องการ กรุณากรอกใหม่ !');
      location.href = '../user/history_day_frm1.php';
      </script>";
      exit();
   }
  
 }

 $strDate = null;

 if(isset($_POST["txtnum_month"]))
 {
  $strDate = $_POST["txtnum_month"];
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
 <h1 class="mt-4 mb-3">สรุปเหตุขัดข้องวงจร ของ สค.เชียงราย  ส่งต่อเจ้าหน้าที่เวร ประจำวัน</h1>

 <ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="home.php">หน้าแรก</a>
  </li>
  <li class="breadcrumb-item">
    <a href="daily_check.php">Daily Check</a>
  </li>
  <li class="breadcrumb-item">
    <a href="history_day_frm1.php">ตรวจสอบข้อมูล สรุปเหตุขัดข้องวงจร ของ สค.เชียงราย  ส่งต่อเจ้าหน้าที่เวร ประจำวัน</a>
  </li>
  <li class="breadcrumb-item active">สรุปเหตุขัดข้องวงจร ของ สค.เชียงราย  ส่งต่อเจ้าหน้าที่เวร ประจำวัน</li>
 </ol>
 
 <legend><h3 class="mt-4 mb-3">เลือกวันที่ที่ต้องการตรวจสอบ</h3></legend>
 <hr>
 
 <div class="row">
 <?php
  while ($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
 ?>
  <div class="col-sm-3">
    <a target ="_blank" href="report_day_frm1.php?date_daily=<?= $result["date_daily"]; ?>&time_work=<?= $result["time_work"]; ?>">
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

