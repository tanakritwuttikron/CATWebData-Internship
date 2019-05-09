<?php require '../../layout/header_admin.php'; ?>
<!-- Container -->
<div class="container">
 <!-- Row 1 -->
 <h1 class="mt-4 mb-3">เพิ่มข้อมูลข่าวสาร</h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="mng_admin.php">หน้าแรก</a>
    </li>
    <li class="breadcrumb-item active">เพิ่มข้อมูลข่าวสาร</li>
  </ol>
 <!-- End Row 1 -->
 <!-- Row 2 -->
 <div class="row">
  <div class="col-sm-12">
  <form action="../../database/insert_notice.php" method="post" enctype="multipart/form-data">
  <div class="form-group row">
   <label for="topic" class="col-sm-2 col-form-label text-right">หัวข้อ:</label>
   <div class="col-sm-7">
    <input class="form-control" type="text" id="topic" name="txttopic">
   </div>
  </div>
  <div class="form-group row">
  <label for="date_time" class="col-sm-2 col-form-label text-right">วันที่ :</label>
  <div class="col-sm-3">
   <input class="form-control" type="date" id="date_time" name="txtdate_notice">
  </div> 
  </div>
  <div class="form-group row">
  <label for="image" class="col-sm-2 col-form-label text-right">รูปภาพประกอบ :</label>
  <div class="col-sm-5">
   <div class="custom-file">
    <input type="file" style="margin-top: 10px;" id="files" name="txtupload_img[]" multiple />
   </div>
   <output id="list_img"></output>
  </div>
  </div> 
  <div class="form-group row">
   <label for="description" class="col-sm-2 col-form-label text-right">รายละเอียด :</label>
   <div class="col-sm-7">
    <textarea class="form-control" type="text" rows="5" name="txtdescrip"></textarea>
   </div>
  </div>
  <div class="form-group row">
   <div class="col-sm-9" align="right">
    <input class="btn btn-success" type="submit" name="upload" value="บันทึก"> 
   </div>
  </div>
  </form>
 </div><!-- col-sm-12 -->
 </div>
 <!-- End Row 2 -->
</div>
<!-- End Container -->
<?php require '../../layout/footer_admin.php'; ?>

<script><?php require'../../js/readfile.js'; ?></script>