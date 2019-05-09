<?php require '../../layout/header_admin.php'; ?>
<!-- Connect DB -->
<?php 
 require '../../database/db.php';

 $strid = null;
  if(isset($_GET["id_work"]))
  {
    $strid = $_GET["id_work"];
  }

  $sql="SELECT * FROM notice_work WHERE id_work = '".$strid."' ";
  $query = mysqli_query($conn,$sql);
  $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
?>
<!-- End Connect DB -->

<div class="container">
 <!-- Row 1 -->
 <div class="row" align="center">
  <div class="text-main col-sm-12">
   <label>แก้ไขข้อมูลงานที่ต้องทำ</label>
  </div>
 </div>
 <!-- End Row 1 -->
 <!-- Row 2 -->
 <div class="row">
  <div class="col-sm-12">
  <form name="add_work" action="../../database/update_work.php" method="post" enctype="multipart/form-data">
  <div class="form-group row">
   <input type="hidden" class="form-control" name="id_work" value="<?= $result["id_work"] ?>">
   <label for="txttitle" class="col-sm-3 col-form-label text-right">หัวข้อ :</label>
   <div class="col-sm-7">
    <input class="form-control" type="text" id="txttitle" name="txttitle" value="<?= $result["title"] ?>">
   </div>
  </div>
  <div class="form-group row">
   <label for="date_time" class="col-sm-3 col-form-label text-right">วันที่:</label>
   <div class="col-sm-2">
    <input class="form-control" type="date" id="date_time" name="date_time" value="<?= $result["date_work"] ?>">
   </div>
  </div>
  <div class="form-group row">
   <label for="namecm" class="col-sm-3 col-form-label text-right">ชื่อลูกค้า :</label> 
   <div class="col-sm-3">
    <input class="form-control" type="text" id="fname" name="fname" value="<?= $result["cust_fname"] ?>">
   </div> 
    <label for="lastnamecm" class="col-sm-1">นามสกุล :</label> 
   <div class="col-sm-3">
    <input class="form-control" type="text" id="lname" name="lname" value="<?= $result["cust_lname"] ?>">
   </div> 
  </div>
  <div class="form-group row">
   <label for="catid_cm" class="col-sm-3 col-form-label text-right">CAT ID :</label> 
   <div class="col-sm-2">
    <input class="form-control" type="text" id="catid_cm" name="catid_cm" value="<?= $result["cat_id"] ?>">
   </div> 
    <label for="phone_cm" class="col-sm-2 text-right">เบอร์โทรศัพท์ลูกค้า :</label> 
   <div class="col-sm-3">
    <input class="form-control" type="text" maxlength="10" id="phone_cm" name="phone_cm" value="<?= $result["tel"] ?>">
   </div> 
  </div>
  <div class="form-group row">
   <label for="description" class="col-sm-3 col-form-label text-right">รายละเอียด :</label>
   <div class="col-sm-7">
    <textarea class="form-control" type="text" rows="5" name="descrip"><?= $result["descrip_work"] ?></textarea>
   </div>
  </div>
    <div class="form-group row">
   <div class="col-sm-10" align="right">
    <button class="btn btn-success" type="button" onclick="submitEditWork();"><i class="fa fa-save"></i> บันทึก </button>
    <button class="btn btn-danger" type="button"  onclick="history.go(-1);"><i class="fa fa-back"></i> กลับ </button>
   </div>
  </div>
  </form>
 </div><!-- col-sm-12 -->
 </div>
 <!-- End Row 2 -->
</div>
<!-- End Container -->
<?php require '../../layout/footer_admin.php'; ?>

<script><?php require '../../js/check_edit_work.js'; ?></script>
