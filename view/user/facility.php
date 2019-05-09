<?php
 require '../../database/db.php';

$strid = null;
 if(isset($_GET["id_local"]))
 {
   $strid = $_GET["id_local"];
 }

 $sql="SELECT * FROM facility fc INNER JOIN data_local dl
      ON fc.id_local = dl.id_local WHERE fc.id_local = '".$strid."' ";
 $query = mysqli_query($conn,$sql);
?>

 <div class="row">
  <div class="col-md-12">
   <div class="f-input-mng">
   <form name="add_fac" action="../../database/insert_facility.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
      <input type="hidden" name="txtid_local" value="<?= $result["id_local"] ?>">
     <label for="topic_name" class="col-sm-3 col-form-label text-right">ชื่อ :</label>
     <div class="col-sm-7">
      <input class="form-control" type="text" id="topic_name" name="txttopic" placeholder="ชื่อ...">
     </div>
     </div> 
     <div class="form-group row">
     <label for="image" class="col-sm-3 col-form-label text-right">รูปภาพประกอบ :</label>
     <div class="col-sm-7">
      <div class="custom-file">
      <input type="file" id="files" name="file" style="margin-top: 10px;" />
      </div>
      <output id="list_img"></output>
     </div>
    </div>
    <div class="form-row text-right">
     <div class="form-group col-sm-10">
      <button type="button" class="btn btn-success btn-lg" onclick="submitSaveFac();"><i class="fa fa-save"></i> SAVE</button>
     </div>
    </div>
   </form>
  </div>
 </div>
 </div>
 <hr>
 <!-- End Row -->
 <!-- Row 2 -->
 <?php
 while ($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
 ?>
 <div class="row">
  <div class="col-md-7">
     <img class="card-img-top" src="../../image/<?= $result["fac_img"]; ?>" alt="image" id="img_fac">
  </div>
  <div class="col-md-5">
    <h4>ชื่อ : <?= $result["fac_name"] ?></h4>
    <button type="button" class="btn btn-primary edit-fac" id="btn-edit" data-toggle="modal" data-target="#editFacilityModal" data-fac-id="<?= $result["id_facility"] ?>" data-local-id="<?= $result["id_local"] ?>" data-fac-name="<?= $result["fac_name"] ?>"><i class="fa fa-edit"></i> แก้ไข </button>
    <a href="javascript:void(0);" onclick="if (! confirm('ยืนยันการลบใช่หรือไม่ ?')){return false;}else{ window.location = '../../database/delete_facility.php?id_facility=<?= $result["id_facility"];?>&id_local=<?= $strid ?>'; }"><button class="btn btn-danger" id="btn-delete"><i class="fa fa-trash"></i> ลบ </button></a>
  </div>
  <?php require '../modal/md_edit_facility.php' ?>
 </div>
 <hr>
<?php } ?>
 <!-- End Row 2 -->

<script><?php require '../../js/edit_fac.js' ?></script>

