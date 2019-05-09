<?php require '../../layout/header_user.php'; ?>
<?php
 require '../../database/db.php';
 $strDate = null;
 $strTime = null;

 if(isset($_GET["date_daily"]))
 {
  $strDate = $_GET["date_daily"];
  $strTime = $_GET["time_work"];
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

 $sql = "SELECT * FROM data_daily_3 WHERE date_daily = '".$strDate."' AND time_work = '".$strTime."' ";
 $query = mysqli_query($conn,$sql);
 
 $sql2 = "SELECT * FROM data_daily_3  WHERE date_daily = '".$strDate."' AND time_work = '".$strTime."'";
 $query2 = mysqli_query($conn,$sql2);
 $result2 = mysqli_fetch_array($query2);

 $sql3 = "SELECT * FROM data_daily_3 dd
 JOIN member mb ON dd.id_member = mb.id_member
 WHERE dd.date_daily = '".$strDate."' AND dd.time_work = '".$strTime."' GROUP BY dd.id_member Having count(dd.id_member) >= 1 ORDER BY dd.id_member ASC";
 $query3 = mysqli_query($conn,$sql3);

?>
<div class="container">
 <!-- Row 1 -->
  <h3 class="mt-4 mb-3 text-center">สรุปสถานการณ์ของ สค.เชียงราย ส่งต่อเจ้าหน้าที่เวร ประจำวัน</h3>
  <br>

<!-- ROW 1 -->
 <div class="row">
   <div class="col-sm-4">
   ประจำวันที่ : <?= DateThai($strDate); ?>
   </div>
   <div class="col-sm-6">
   เวรผลัด : <?= $strTime; ?>
   </div>
   </div>
 <div class="row">
  <div class="col-sm-12">
   ชื่อ : 
  <?php 
   while ($result3=mysqli_fetch_array($query3,MYSQLI_ASSOC)) { 
  ?>
    <?= $result3["username"] ?>
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
   while ($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) { 
   ?>
    <tbody>
      <td id="tb-export"><?= $count++ ?></td>
      <td id="tb-export"><?= $result["report"] ?></td>
      <td id="tb-export"><?= $result["daily_case"] ?></td>
      <td id="tb-export"><?= $result["level"] ?></td>
      <td id="tb-export"><?= $result["status_daily"] ?></td>
      <td id="tb-export"><?= $result["location"] ?></td>
      <td style="word-break: break-word;" id="tb-export"><?= $result["detail"] ?></td>
      <td style="border-color: #ffffff;">
        <button style="margin-bottom: 5px;" type="button" class="btn edit-daily-3" id="btn-edit" data-toggle="modal" data-target="#editReport3Modal"
        data-member-id="<?= $result["id_member"] ?>"
        data-daily-id="<?= $result["id_daily_3"] ?>" data-daily-report="<?= $result["report"] ?>"
        data-daily-date="<?= $strDate; ?>" data-daily-time="<?= $strTime; ?>"
        data-daily-case="<?= $result["daily_case"] ?>" data-daily-level="<?= $result["level"] ?>"
        data-daily-status="<?= $result["status_daily"] ?>" data-daily-local="<?= $result["location"] ?>"
        data-daily-detail="<?= $result["detail"] ?>"><i class="fa fa-edit"></i></button>
      </td>
    </tbody>
    <?php require '../modal/md_edit_daily_3.php'; ?>
  <?php } ?>
   </table>
  </div>
  </div><!-- ROW 2 -->
  <br>
  
   <div class="row">
    <div class="col-sm-6 text-center" style="margin-top: 100px;">
     <label>.....................................................................................</label><br>
     <label>(.....................................................................................)</label><br>
     <label>พนักงานประจำรอบเวร</label>
    </div>
    <div class="col-sm-6 text-center" style="margin-top: 100px;">
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
     <button style="margin-top: 20px;"  name="print_export"  id="print_export"  class="btn btn-outline-primary col-sm-2" onClick="window.print();"><i class="fa fa-print"></i> Print</button>
   </div>
  </div>
  <!-- End ROW 3 -->
</div>
 <!-- End Row 1 -->
 
<?php require '../../layout/footer.php'; ?>
<script><?php require '../../js/edit_daily_check2.js'; ?></script>
