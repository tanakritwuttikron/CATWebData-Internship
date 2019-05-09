<?php require '../../layout/header_user.php'; ?>
<?php
 require '../../database/db.php';
 $strDate = date("Y-m-d");
?>
<div class="container">
 <!-- Row 1 -->
  <h3 class="mt-4 mb-3">สรุปเหตุขัดข้องวงจร ของ สค.เชียงราย  ส่งต่อเจ้าหน้าที่เวร</h3>

 <ol class="breadcrumb">
  <li class="breadcrumb-item">
   <a href="home.php">หน้าแรก</a>
  </li>
  <li class="breadcrumb-item">
    <a href="daily_check.php">Daily Check</a>
  </li>
  <li class="breadcrumb-item active">สรุปเหตุขัดข้องวงจร ของ สค.เชียงราย  ส่งต่อเจ้าหน้าที่เวร</li>
 </ol>

 <form action="../../database/insert_daily_check.php" id="daily_check_frm1" name="daily_check_frm1" method="post">
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
   <table class="table table-bordered" id="tb_daily_check_frm1">
    <thead class="text-center">
     <tr>
      <th rowspan="3"><div class="tr-daily">Ticket No.</div></th>
      <th rowspan="3"><div class="tr-daily">CAT ID</div></th>
      <th colspan="8">Service</th>
      <th rowspan="3"><div class="tr-daily">Total Ticket</div></th>
      <th rowspan="3"><div class="tr-daily">Comment</div></th>
     </tr>
     <tr>
      <td colspan="2">CAT MPLS</td>
      <td colspan="2">CAT Ethernet</td>
      <td colspan="2">CAT internet (CCI)</td>
      <td colspan="2">CAT Orther</td>
     </tr>
     <tr>
      <td> < 4Hr. </td>
      <td> > 4Hr. </td>
      <td> < 4Hr. </td>
      <td> > 4Hr. </td>
      <td> < 4Hr. </td>
      <td> > 4Hr. </td>
      <td> < 4Hr. </td>
      <td> > 4Hr. </td>
     </tr>
    </thead>
    <tbody></tbody>
   </table>
   <div class="text-right">
    <input type="hidden" id="hdnCount1" name="hdnCount1">
    <button type="button" id="createRows1" class="btn btn-success"><i class="fa fa-plus"></i></button>
    <button type="button" id="deleteRows1" class="btn btn-danger"><i class="fa fa-minus"></i></button>
   </div>
   <br>
  </div>
 </div><!-- ROW 2 -->
<!-- ROW 3 -->
 <div class="row">
  <div class="col-sm-12">
   <table class="table table-bordered" id="tb_daily_check2_frm1">
    <thead class="text-center">
     <tr>
      <th rowspan="3"><div class="tr-daily">Ticket No.</div></th>
      <th rowspan="3"><div class="tr-daily">CAT ID</div></th>
      <th colspan="2">Service</th>
      <th rowspan="3"><div class="tr-daily">Total Ticket</div></th>
      <th rowspan="3"><div class="tr-daily">Comment</div></th>
     </tr>
     <tr>
      <td colspan="2">C Internet</td>
     </tr>
     <tr>
      <td> < 22Hr. </td>
      <td> > 22Hr. </td>
     </tr>
     </thead>
    <tbody></tbody>
   </table>
   <div class="text-right">
    <button type="button" id="createRows2" class="btn btn-success"><i class="fa fa-plus"></i></button>
    <button type="button" id="deleteRows2" class="btn btn-danger"><i class="fa fa-minus"></i></button>
   </div>
   <br>
   <div class="text-right">
    <input type="hidden" id="hdnCount2" name="hdnCount2">
    <button type="button" class="btn btn-success" onclick="submitSaveDaily();">Submit</button> 
   </div>
  </div>
  </div><!-- ROW 3 -->
</form>
</div>
 <!-- End Row 1 -->
 
<?php require '../../layout/footer.php'; ?>

<script><?php require '../../js/daily_check.js' ?></script>