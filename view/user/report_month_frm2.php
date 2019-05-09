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

   $sql1="SELECT * FROM data_daily_3 dd JOIN member mb ON dd.id_member = mb.id_member WHERE MONTH(dd.date_daily) = '".$strnum_month."' AND dd.time_work = '".$strnum_time."' AND YEAR(dd.date_daily) = '".$strnum_year."'";
   $query1 = mysqli_query($conn,$sql1);

   $sql2="SELECT * FROM data_daily_3 dd JOIN member mb ON dd.id_member = mb.id_member WHERE MONTH(dd.date_daily) = '".$strnum_month."' AND dd.time_work = '".$strnum_time."' AND YEAR(dd.date_daily) = '".$strnum_year."' GROUP BY dd.date_daily,dd.time_work Having count(dd.date_daily) >= 1 ORDER BY dd.date_daily ASC ";
   $query2 = mysqli_query($conn,$sql2);
   $result2 = mysqli_fetch_array($query2);

   $sql3 = "SELECT * FROM data_daily_3 dd JOIN member mb ON dd.id_member = mb.id_member WHERE MONTH(dd.date_daily) = '".$strnum_month."' AND dd.time_work = '".$strnum_time."' AND YEAR(dd.date_daily) = '".$strnum_year."' GROUP BY dd.time_work Having count(dd.time_work) >= 1 ORDER BY dd.time_work ASC";
  $query3 = mysqli_query($conn,$sql3);

  if (!$result2) {
   echo "<script>
      alert('ไม่พบข้อมูลที่คุณต้องการ กรุณากรอกใหม่ !');
      location.href = '../user/history_month_frm1.php';
      </script>";
      exit();
  }

 }elseif ($_POST["txtnum_time"] == "all") {
  $strnum_month = $_POST["txtnum_month"];
  $strnum_year = $_POST["txtnum_year"];

  $sql1="SELECT * FROM data_daily_3 dd JOIN member mb ON dd.id_member = mb.id_member WHERE MONTH(dd.date_daily) = '".$strnum_month."' AND YEAR(dd.date_daily) = '".$strnum_year."' ";
  $query1 = mysqli_query($conn,$sql1);

   $sql2="SELECT * FROM data_daily_3 dd JOIN member mb ON dd.id_member = mb.id_member WHERE MONTH(dd.date_daily) = '".$strnum_month."' AND YEAR(dd.date_daily) = '".$strnum_year."' GROUP BY dd.date_daily,dd.time_work Having count(dd.date_daily) >= 1 ORDER BY dd.date_daily ASC ";
   $query2 = mysqli_query($conn,$sql2);
   $result2 = mysqli_fetch_array($query2);

   $sql3 = "SELECT * FROM data_daily_3 dd JOIN member mb ON dd.id_member = mb.id_member WHERE MONTH(dd.date_daily) = '".$strnum_month."' AND YEAR(dd.date_daily) = '".$strnum_year."' GROUP BY dd.time_work Having count(dd.time_work) >= 1 ORDER BY dd.time_work ASC";
  $query3 = mysqli_query($conn,$sql3);

  if (!$result2) {
   echo "<script>
      alert('ไม่พบข้อมูลที่คุณต้องการ กรุณากรอกใหม่ !');
      location.href = '../user/history_month_frm1.php';
      </script>";
      exit();
  }
 }

 $strTime = null;
 $strDate = null;


 if(isset($result2["date_daily"]))
 {
  $strTime = $result2["time_work"];
  $strDate = $result2["date_daily"];
  function DateThai($strDate)
   {
     $strYear = date("Y",strtotime($strDate))+543;
     $strMonth= date("n",strtotime($strDate));
     $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
     $strMonthThai=$strMonthCut[$strMonth];
     return "$strMonthThai $strYear";
   }
 }

?>
<div class="container">
 <!-- Row 1 -->
  <h3 class="mt-4 mb-3 text-center">สรุปสถานการณ์ของ สค.เชียงราย ส่งต่อเจ้าหน้าที่เวร ประจำเดือน</h3>
  <br>

<!-- ROW 1 -->
 <div class="row">
   <div class="col-sm-4">
   ประจำเดือน : <?= DateThai($strDate); ?>
   </div>
   <div class="col-sm-6">
   เวรผลัด :
   <?php 
   while ($result3=mysqli_fetch_array($query3,MYSQLI_ASSOC)) { 
  ?>
    <?= $result3["time_work"] ?>
  <?php } ?>
   </div>
 </div><!-- ROW 1 -->
 <br>

 <!-- ROW 2 -->
  <div class="row">
  <div class="col-sm-12" id="daily_check_frm2">
   <table style="width: 100%; margin: 10px auto auto; margin-bottom: 20px; text-align: center;" id="tb_daily_check_frm2">
    <thead class="text-center">
     <tr>
      <th id="tb-export">No.</th>
      <th id="tb-export">Report</th>
      <th id="tb-export">Case</th>
      <th id="tb-export">Level</th>
      <th id="tb-export">Status</th>
      <th id="tb-export">Location</th>
      <th id="tb-export">Detail</th>
     </tr>
    </thead>
   <?php
   $count = 1;
   while ($result1=mysqli_fetch_array($query1,MYSQLI_ASSOC)) { 
   ?>
    <tbody>
      <td id="tb-export"><?= $count++ ?></td>
      <td id="tb-export"><?= $result1["report"] ?></td>
      <td id="tb-export"><?= $result1["daily_case"] ?></td>
      <td id="tb-export"><?= $result1["level"] ?></td>
      <td id="tb-export"><?= $result1["status_daily"] ?></td>
      <td id="tb-export"><?= $result1["location"] ?></td>
      <td style="word-break: break-word;" id="tb-export"><?= $result1["detail"] ?></td>
      <td style="border-color: #ffffff;">
        <button style="margin-bottom: 5px;" type="button" class="btn edit-daily-m-3" id="btn-edit" data-toggle="modal" data-target="#editReport3MonthModal"
        data-member-id="<?= $result1["id_member"] ?>"
        data-daily-id="<?= $result1["id_daily_3"] ?>" data-daily-report="<?= $result1["report"] ?>"
        data-daily-date="<?= $strDate; ?>" data-daily-time="<?= $strTime; ?>"
        data-daily-case="<?= $result1["daily_case"] ?>" data-daily-level="<?= $result1["level"] ?>"
        data-daily-status="<?= $result1["status_daily"] ?>" data-daily-local="<?= $result1["location"] ?>"
        data-daily-detail="<?= $result1["detail"] ?>"><i class="fa fa-edit"></i></button>
      </td>
    </tbody>
    <?php require '../modal/md_edit_daily_m_3.php'; ?>
  <?php } ?>
   </table>
  </div>
  </div><!-- ROW 2 -->
  <br>

  <div class="row text-center">
    <div class="col-sm-6" style="margin-top: 100px;">
     <label>.....................................................................................</label><br>
     <label>(.....................................................................................)</label><br>
     <label>พนักงานประจำรอบเวร</label>
    </div>
    <div class="col-sm-6" style="margin-top: 100px;">
     <label>.....................................................................................</label><br>
     <label>(  นายปรัญชา  พันธ์แก้ว  )</label><br>
     <label> นทค.7 หัวหน้าฝ่ายงาน </label>
    </div>
   </div>
   <div class="page-break"></div>
  <br>

  <!-- ROW 3 -->
  <div class="row">
   <div class="col-sm-12 text-right">
     <button style="margin-top: 20px;" name="print_export"  id="print_export"  class="btn btn-outline-primary col-sm-2" onClick="window.print();"><i class="fa fa-print"></i> Print</button>
   </div>
  </div>
  <!-- End ROW 3 -->
</div>
 <!-- End Row 1 -->
 
<?php require '../../layout/footer.php'; ?>

<script><?php require '../../js/edit_daily_check2.js'; ?></script>