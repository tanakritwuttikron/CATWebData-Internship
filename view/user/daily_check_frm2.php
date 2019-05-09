<?php require '../../layout/header_user.php'; ?>
<?php
 require '../../database/db.php';
 $strDate = date("Y-m-d");

?>
<div class="container">
 <!-- Row 1 -->
  <h3 class="mt-4 mb-3">สรุปสถานการณ์ของ สค.เชียงราย  ส่งต่อเจ้าหน้าที่เวร</h3>

 <ol class="breadcrumb">
  <li class="breadcrumb-item">
   <a href="home.php">หน้าแรก</a>
  </li>
  <li class="breadcrumb-item">
    <a href="daily_check.php">Daily Check</a>
  </li>
  <li class="breadcrumb-item active">สรุปสถานการณ์ของ สค.เชียงราย  ส่งต่อเจ้าหน้าที่เวร</li>
 </ol>

 <form action="../../database/insert_daily_check_2.php" id="daily_check_frm2" name="daily_check_frm2" method="post">
<!-- ROW 1 -->
 <div class="row">
   <div class="col-sm-4">
   ประจำวันที่ : <input type="date" name="date_daily" id="date_daily" value="<?= $strDate; ?>">
   </div>
   <div class="col-sm-4">
   เวรผลัด : 
    <select name="time_work" id="time_work">
     <option selected value="">เลือก...</option>
     <option value="08:00 น. - 16:00 น.">08:00 น. - 16:00 น.</option>
     <option value="13:30 น. - 21:30 น.">13:30 น. - 21:30 น.</option>
    </select>
   </div>
    <div class="col-sm-4">
   ชื่อ : <?= $_SESSION["username"] ?>
    <input type="hidden" id="id_member" name="id_member" value="<?= $_SESSION["id_member"] ?>">
   </div>
  </div><!-- ROW 1 -->
  <br>
<!-- ROW 2 -->
  <div class="row">
  <div class="col-sm-12">
   <table class="table table-bordered" id="tb_daily_check_frm2">
    <thead class="text-center">
     <tr>
      <th>Report</th>
      <th>Case</th>
      <th>Level</th>
      <th>Status</th>
      <th>Location</th>
      <th>Detail</th>
     </tr>
    </thead>
    <tbody></tbody>
   </table>
   <div class="text-right">
    <button type="button" id="createRows" class="btn btn-success"><i class="fa fa-plus"></i></button>
    <button type="button" id="deleteRows" class="btn btn-danger"><i class="fa fa-minus"></i></button>
   </div>
   <br>
   <div class="text-right">
    <input type="hidden" id="hdnCount" name="hdnCount">
    <button type="button" class="btn btn-success" onclick="submitSaveDaily2();">Submit</button> 
   </div>
  </div>
  </div><!-- ROW 3 -->
</form>
</div>
 <!-- End Row 1 -->
 
<?php require '../../layout/footer.php'; ?>

<script><?php require '../../js/daily_check_2.js' ?></script>