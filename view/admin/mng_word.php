<?php require '../../layout/header_admin.php'; ?>
<!-- Container -->
<div class="container">
 <!-- Row 1 -->
 <h1 class="mt-4 mb-3">กรุณากรอกข้อมูลงานที่ต้องทำ</h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="mng_admin.php">หน้าแรก</a>
    </li>
    <li class="breadcrumb-item active">กรุณากรอกข้อมูลงานที่ต้องทำ</li>
  </ol>
 <!-- End Row 1 -->
 <!-- Row 2 -->
 <div class="row">
  <div class="col-sm-12">
  <form name="add_work" action="../../database/insert_work.php" method="post">
  <div class="form-group row">
   <label for="txttitle" class="col-sm-3 col-form-label text-right">หัวข้อ :</label>
   <div class="col-sm-7">
    <input class="form-control" type="text" id="txttitle" name="txttitle">
   </div>
  </div>
  <div class="form-group row">
   <label for="date_time" class="col-sm-3 col-form-label text-right">วันที่:</label>
   <div class="col-sm-2">
    <input class="form-control" type="date" id="date_time" name="date_time">
   </div>
  </div>
  <div class="form-group row">
   <label for="type_work" class="col-sm-3 col-form-label text-right">ประเภทของงาน :</label>
   <div class="col-sm-2">
    <select name="type_work" class="form-control">
      <option value="" selected >เลือก</option>
      <option value="0">งานภายใน</option>
      <option value="1">งานภายนอก</option>
    </select>
   </div>
  </div>
  <div class="form-group row">
   <label for="namecm" class="col-sm-3 col-form-label text-right">ชื่อลูกค้า :</label> 
   <div class="col-sm-3">
    <input class="form-control" type="text" id="fname" name="fname">
   </div> 
    <label for="lastnamecm" class="col-sm-1">นามสกุล :</label> 
   <div class="col-sm-3">
    <input class="form-control" type="text" id="lname" name="lname">
   </div> 
  </div>
  <div class="form-group row">
   <label for="catid_cm" class="col-sm-3 col-form-label text-right">CAT ID :</label> 
   <div class="col-sm-2">
    <input class="form-control" type="text" id="catid_cm" name="catid_cm">
   </div> 
    <label for="phone_cm" class="col-sm-2 text-right">เบอร์โทรศัพท์ลูกค้า :</label> 
   <div class="col-sm-3">
    <input class="form-control" type="text" id="phone_cm" name="phone_cm">
   </div> 
  </div>
  <div class="form-group row">
   <label for="description" class="col-sm-3 col-form-label text-right">รายละเอียด :</label>
   <div class="col-sm-7">
    <textarea class="form-control" type="text" rows="5" name="descrip"></textarea>
   </div>
  </div>
    <div class="form-group row">
   <div class="col-sm-10" align="right">
    <button class="btn btn-success" type="button" onclick="submitSaveWork();"><i class="fa fa-save"></i> บันทึก </button>
   </div>
  </div>
  </form>
 </div><!-- col-sm-12 -->
 </div>
 <!-- End Row 2 -->
</div>
<!-- End Container -->
<?php require '../../layout/footer_admin.php'; ?>

<script><?php require '../../js/check_save_work.js'; ?></script>
