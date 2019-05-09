<?php require '../../layout/header_user.php'; ?>
<?php
 require '../../database/db.php';
 $strnum_time = null;
 $strnum_year = null;

 if ($_POST["txtnum_time"] != "all") {
   $strnum_time = $_POST["txtnum_time"];
   $strnum_year = $_POST["txtnum_year"];

   $sql1="SELECT * FROM data_daily dd JOIN member mb ON dd.id_member = mb.id_member WHERE dd.time_work = '".$strnum_time."' AND YEAR(dd.date_daily) = '".$strnum_year."' ";
   $query1 = mysqli_query($conn,$sql1);

   $sql2="SELECT * FROM data_daily_2 dd JOIN member mb ON dd.id_member = mb.id_member WHERE dd.time_work = '".$strnum_time."' AND YEAR(dd.date_daily) = '".$strnum_year."'";
   $query2 = mysqli_query($conn,$sql2);

   $sql3 = "SELECT * FROM data_daily dd JOIN member mb ON dd.id_member = mb.id_member WHERE dd.time_work = '".$strnum_time."' AND YEAR(dd.date_daily) = '".$strnum_year."' GROUP BY dd.date_daily,dd.time_work Having count(dd.date_daily) >= 1 ORDER BY dd.date_daily ASC ";
   $query3 = mysqli_query($conn,$sql3);
   $result3 = mysqli_fetch_array($query3);

   $sql4 = "SELECT * FROM data_daily dd JOIN member mb ON dd.id_member = mb.id_member WHERE dd.time_work = '".$strnum_time."' AND YEAR(dd.date_daily) = '".$strnum_year."' GROUP BY dd.time_work Having count(dd.time_work) >= 1 ORDER BY dd.time_work ASC";
  $query4 = mysqli_query($conn,$sql4);

  if (!$result3) {
   echo "<script>
      alert('ไม่พบข้อมูลที่คุณต้องการ กรุณากรอกใหม่ !');
      location.href = '../user/history_year_frm1.php';
      </script>";
      exit();
  }

 }elseif ($_POST["txtnum_time"] == "all") {
  $strnum_year = $_POST["txtnum_year"];

  $sql1="SELECT * FROM data_daily dd JOIN member mb ON dd.id_member = mb.id_member WHERE YEAR(dd.date_daily) = '".$strnum_year."'";
  $query1 = mysqli_query($conn,$sql1);

  $sql2="SELECT * FROM data_daily_2 dd JOIN member mb ON dd.id_member = mb.id_member WHERE YEAR(dd.date_daily) = '".$strnum_year."'";
   $query2 = mysqli_query($conn,$sql2);

  $sql3 = "SELECT * FROM data_daily dd JOIN member mb ON dd.id_member = mb.id_member WHERE YEAR(dd.date_daily) = '".$strnum_year."' GROUP BY dd.date_daily,dd.time_work Having count(dd.date_daily) >= 1 ORDER BY dd.date_daily ASC ";
  $query3 = mysqli_query($conn,$sql3);
  $result3 = mysqli_fetch_array($query3);

  $sql4 = "SELECT * FROM data_daily dd JOIN member mb ON dd.id_member = mb.id_member WHERE YEAR(dd.date_daily) = '".$strnum_year."' GROUP BY dd.time_work Having count(dd.time_work) >= 1 ORDER BY dd.time_work ASC";
  $query4 = mysqli_query($conn,$sql4);

  if (!$result3) {
   echo "<script>
      alert('ไม่พบข้อมูลที่คุณต้องการ กรุณากรอกใหม่ !');
      location.href = '../user/history_year_frm1.php';
      </script>";
      exit();
  }
 }

 $strTime = null;
 $strDate = null;


 if(isset($result3["date_daily"]))
 {
  $strTime = $result3["time_work"];
  $strDate = $result3["date_daily"];
  function DateThai($strDate)
   {
     $strYear = date("Y",strtotime($strDate))+543;
     return "$strYear";
   }
 }

?>
<div class="container">
 <!-- Row 1 -->
  <h3 class="mt-4 mb-3 text-center">สรุปเหตุขัดข้องวงจร ของ สค.เชียงราย  ส่งต่อเจ้าหน้าที่เวร ประจำปี</h3>
  <br>

<!-- ROW 1 -->
 <div class="row">
   <div class="col-sm-4">
   ประจำปี : <?= DateThai($strDate); ?>
   </div>
   <div class="col-sm-6">
   เวรผลัด :
   <?php 
   while ($result4=mysqli_fetch_array($query4,MYSQLI_ASSOC)) { 
  ?>
    <?= $result4["time_work"] ?>
  <?php } ?>
   </div>
 </div><!-- ROW 1 -->
 <br>

 <!-- ROW 2 -->
 <div class="row">
   <div class="col-sm-12" id="daily_check_frm1">
    <table style="width: 100%; margin: 10px auto auto; margin-bottom: 20px; text-align: center;" id="tb_daily_check_frm1">
     <thead class="text-center">
      <tr>
       <th rowspan="3" id="tb-export"><div class="tr-daily">No.</div></th>
       <th rowspan="3" id="tb-export"><div class="tr-daily">Ticket No.</div></th>
       <th rowspan="3" id="tb-export"><div class="tr-daily">CAT ID</div></th>
       <th colspan="8" id="tb-export">Service</th>
       <th rowspan="3" id="tb-export"><div class="tr-daily">Total Ticket</div></th>
       <th rowspan="3" id="tb-export"><div class="tr-daily">Comment</div></th>
      </tr>
      <tr>
       <td colspan="2" id="tb-export">CAT MPLS</td>
       <td colspan="2" id="tb-export">CAT Ethernet</td>
       <td colspan="2" id="tb-export">CAT Internet (CCI)</td>
       <td colspan="2" id="tb-export">CAT Other</td>
      </tr>
      <tr>
       <td id="tb-export"> < 4Hr. </td>
       <td id="tb-export"> > 4Hr. </td>
       <td id="tb-export"> < 4Hr. </td>
       <td id="tb-export"> > 4Hr. </td>
       <td id="tb-export"> < 4Hr. </td>
       <td id="tb-export"> > 4Hr. </td>
       <td id="tb-export"> < 4Hr. </td>
       <td id="tb-export"> > 4Hr. </td>
      </tr>
     </thead>
     <?php 
      $sum = 0;
      $count = 1;
      while ($result1=mysqli_fetch_array($query1,MYSQLI_ASSOC)) { 
       $sum += (int)$result1['total_ticket'];
     ?>
     <tbody>
       <td id="tb-export" id="tb-export"><?= $count++ ?></td>
       <td id="tb-export" id="tb-export"><?= $result1["ticket_no"] ?></td>
       <td id="tb-export" id="tb-export"><?= $result1["cat_id"] ?></td>
       <td id="tb-export" id="tb-export"><?= $result1["cat_mpls_hr1"] ?></td>
       <td id="tb-export" id="tb-export"><?= $result1["cat_mpls_hr2"] ?></td>
       <td id="tb-export" id="tb-export"><?= $result1["cat_ethernet_hr3"] ?></td>
       <td id="tb-export" id="tb-export"><?= $result1["cat_ethernet_hr4"] ?></td>
       <td id="tb-export" id="tb-export"><?= $result1["cat_internet_hr5"] ?></td>
       <td id="tb-export" id="tb-export"><?= $result1["cat_internet_hr6"] ?></td>
       <td id="tb-export" id="tb-export"><?= $result1["cat_other_hr7"] ?></td>
       <td id="tb-export" id="tb-export"><?= $result1["cat_other_hr8"] ?></td>
       <td id="tb-export" id="tb-export"><?= $result1["total_ticket"] ?></td>
       <td style="word-break: break-word;" id="tb-export" id="tb-export"><?= $result1["comment"] ?></td>
       <td style="border-color: #ffffff;">
         <button style="margin-bottom: 5px;" type="button" class="btn edit-daily-y-1" id="btn-edit" data-toggle="modal" data-target="#editReportYearModal"
       data-member-id="<?= $result1["id_member"] ?>"
       data-daily-id="<?= $result1["id_daily"] ?>" data-daily-ticket="<?= $result1["ticket_no"] ?>"
       data-daily-date="<?= $strDate; ?>" data-daily-time="<?= $strTime; ?>"
       data-cat-id="<?= $result1["cat_id"] ?>" data-daily-hr1="<?= $result1["cat_mpls_hr1"] ?>"
       data-daily-hr2="<?= $result1["cat_mpls_hr2"] ?>" data-daily-hr3="<?= $result1["cat_ethernet_hr3"] ?>" data-daily-hr4="<?= $result1["cat_ethernet_hr4"] ?>" data-daily-hr5="<?= $result1["cat_internet_hr5"] ?>" data-daily-hr6="<?= $result1["cat_internet_hr6"] ?>" data-daily-hr7="<?= $result1["cat_other_hr7"] ?>" data-daily-hr8="<?= $result1["cat_other_hr8"] ?>" data-daily-total="<?= $result1["total_ticket"] ?>" data-daily-comment="<?= $result1["comment"] ?>"><i class="fa fa-edit"></i></button>
       </td>
     </tbody>
     <?php require '../modal/md_edit_daily_y_1.php' ?>
    <?php } ?>
    <tfoot>
     <tr>
      <td colspan="10" align="center" id="tb-export">สรุปเหตุขัดข้องวงจร ของ สค.เชียงราย ประจำวันทั้งหมด : </td>
      <td align="right" id="tb-export"><?= $sum; ?> ราย</td>
     </tr> 
    </tfoot>
    </table>
    <br>
   </div>
  </div><!-- ROW 2 -->
<div class="page-break"></div>
<br>

 <!-- ROW 3 -->
  <div class="row">
   <div class="col-sm-12">
    <table style="width: 100%; margin: 10px auto auto; margin-bottom: 20px; text-align: center;" id="tb_daily_check2_frm1">
     <thead class="text-center">
      <tr>
       <th rowspan="3" id="tb-export"><div class="tr-daily">No.</div></th>
       <th rowspan="3" id="tb-export"><div class="tr-daily">Ticket No.</div></th>
       <th rowspan="3" id="tb-export"><div class="tr-daily">CAT ID</div></th>
       <th colspan="2" id="tb-export">Service</th>
       <th rowspan="3" id="tb-export"><div class="tr-daily">Total Ticket</div></th>
       <th rowspan="3" id="tb-export"><div class="tr-daily">Comment</div></th>
      </tr>
      <tr>
       <td colspan="2" id="tb-export">C Internet</td>
      </tr>
      <tr>
       <td id="tb-export"> < 22Hr. </td>
       <td id="tb-export"> > 22Hr. </td>
      </tr>
      </thead>
      <?php 
       $sum2 = 0;
       $count2 = 1;
       while ($result2=mysqli_fetch_array($query2,MYSQLI_ASSOC)) { 
       $sum2 += (int)$result2['total_ticket'];
      ?>
     <tbody>
       <td id="tb-export"><?= $count2++ ?></td>
       <td id="tb-export"><?= $result2["ticket_no"] ?></td>
       <td id="tb-export"><?= $result2["cat_id"] ?></td>
       <td id="tb-export"><?= $result2["c_internet_hr1"] ?></td>
       <td id="tb-export"><?= $result2["c_internet_hr2"] ?></td>
       <td id="tb-export"><?= $result2["total_ticket"] ?></td>
       <td style="word-break: break-word;" id="tb-export"><?= $result2["comment"] ?></td>
       <td style="border-color: #ffffff;">
         <button style="margin-bottom: 5px;" type="button" class="btn edit-daily-y-2" id="btn-edit" data-toggle="modal" data-target="#editReport2YearModal"
       data-member-id="<?= $result2["id_member"] ?>" data-daily-id="<?= $result2["id_daily_2"] ?>"
       data-daily-date="<?= $strDate; ?>" data-daily-time="<?= $strTime; ?>"
       data-daily-ticket="<?= $result2["ticket_no"] ?>" data-cat-id="<?= $result2["cat_id"] ?>"
       data-daily-hr1="<?= $result2["c_internet_hr1"] ?>" data-daily-hr2="<?= $result2["c_internet_hr2"] ?>" data-daily-total="<?= $result2["total_ticket"] ?>" data-daily-comment="<?= $result2["comment"] ?>"><i class="fa fa-edit"></i></button>
       </td>
     </tbody>
     <?php require '../modal/md_edit_daily_y_2.php' ?>
   <?php } ?>
    <tfoot>
     <tr>
      <td colspan="4" align="center" id="tb-export">สรุปเหตุขัดข้องวงจร ของ สค.เชียงราย ประจำวันทั้งหมด :</td>
      <td align="right" id="tb-export"><?= $sum2; ?> ราย</td>
     </tr> 
    </tfoot>
    </table>
   </div>
   </div><!-- ROW 3 -->
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

  <!-- ROW 4 -->
  <div class="row">
   <div class="col-sm-12 text-right">
     <button name="print_export" id="print_export" class="btn btn-outline-primary col-sm-2" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
   </div>
  </div>
  <!-- End ROW 4 -->
</div>
 <!-- End Row 1 -->
 
<?php require '../../layout/footer.php'; ?>

<script><?php require '../../js/edit_daily_check.js'; ?></script>
