<?php require '../../layout/header_user.php'; ?>
<?php 
 require '../../database/db.php';
?>
<!-- Page Content -->
<div class="container">
 <!-- Page Heading/Breadcrumbs -->
 <h1 class="mt-4 mb-3">ตรวจสอบข้อมูล สรุปเหตุขัดข้องวงจร ของ สค.เชียงราย  ส่งต่อเจ้าหน้าที่เวร ประจำปี</h1>

 <ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="home.php">หน้าแรก</a>
  </li>
  <li class="breadcrumb-item">
    <a href="daily_check.php">Daily Check</a>
  </li>
  <li class="breadcrumb-item active">ตรวจสอบข้อมูล สรุปเหตุขัดข้องวงจร ของ สค.เชียงราย  ส่งต่อเจ้าหน้าที่เวร ประจำปี</li>
 </ol>
 
 <legend><h3 class="mt-4 mb-3">เลือกวันที่ที่ต้องการตรวจสอบ</h3></legend>
 <hr>
 
<form action="report_year_frm1.php" method="post" >
 <div class="row">
  <label class="col-sm-4" align="right"> กรุณาเลือกเวร ต้องการออกรายงาน :</label>
   <div class="col-sm-3">
    <div class="form-group">
     <select name="txtnum_time" class="form-control">
     <option value="all">ทั้งหมด</option>
     <option value="08:00 น. - 16:00 น.">08:00 น. - 16:00 น.</option>
     <option value="13:30 น. - 21:30 น.">13:30 น. - 21:30 น.</option>
     </select>
    </div>
   </div>
 </div>

 <div class="row">
  <label class="col-sm-4" align="right"> กรุณาเลือกปี ต้องการออกรายงาน :</label>
   <div class="col-sm-2">
    <div class="form-group">
     <select class="form-control" id="year" name="txtnum_year"></select>
    </div>
   </div>
 </div>
 <div class="row">
  <div class="col-sm-9" align="right">
   <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> เลือก</button>
  </div>
 </div>
</form>
</div><!-- Container -->

<?php require '../../layout/footer_mng.php' ?>
<script>
 var start = 2000;
 var end = new Date().getFullYear();
 var options = "";
 for(var year = end ; year >= start; year--){
   options += "<option value='"+ year +"'>"+ year +"</option>";
 }
 document.getElementById("year").innerHTML = options;
</script>

