<?php require '../../layout/header_admin.php'; ?>
<!-- Connect DB -->
<?php 
 require '../../database/db.php';

 $strid = null;
  if(isset($_GET["id_notice"]))
  {
    $strid = $_GET["id_notice"];
  }

  $sql="SELECT * FROM notice WHERE id_notice = '".$strid."' ";
  $query = mysqli_query($conn,$sql);
  $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
?>
<!-- End Connect DB -->

<!-- Container -->
<div class="container">
 <!-- Row 1 -->
 <div class="row">
  <div class="text-main">
   <label> ข้อมูลข่าวสาร </label>
  </div>
 </div>
 <!-- End Row 1 -->
 <!-- Row 2 -->
 <div class="row">
  <div class="col-sm-12">
  <form action="../../database/update_notice.php" method="post" enctype="multipart/form-data">
  <div class="form-group row">
    <input class="form-control" type="hidden" id="topic" name="txtid_notice" value="<?= $result["id_notice"] ?>">
   <label for="topic" class="col-sm-2 col-form-label">หัวข้อ:</label>
   <div class="col-sm-7">
    <input class="form-control" type="text" id="topic" name="txttopic" value="<?= $result["topic"] ?>">
   </div>
  </div>
  <div class="form-group row">
  <label for="date_time" class="col-sm-2 col-form-label">วันที่ :</label>
  <div class="col-sm-3">
   <input class="form-control" type="date" id="date_time" name="txtdate_notice" value="<?= $result["date_notice"] ?>">
  </div>
  </div> 
  <div class="form-group row">
  <label for="image" class="col-sm-2 col-form-label">รูปภาพประกอบ :</label>
  <div class="col-sm-5">
   <div class="custom-file">
    <input type="file" class="custom-file-input" id="files" name="txtupload_img[]" value="" multiple />
    <label class="custom-file-label">Choose file ...</label>
   </div>
   <output id="list_img"></output>
  </div>
  </div> 
  <div class="form-group row">
   <label for="description" class="col-sm-2 col-form-label">รายละเอียด :</label>
   <div class="col-sm-7">
    <textarea class="form-control" type="text" rows="5" name="txtdescrip"> <?= $result["descrip"] ?> </textarea>
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
<script><?php require '../../js/readfile.js' ?></script>

