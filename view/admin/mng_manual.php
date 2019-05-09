<?php require '../../layout/header_admin.php'; ?>
<!-- Connect DB -->
<?php 
 require '../../database/db.php';

 $sql="SELECT * FROM manual";
 $query = mysqli_query($conn,$sql);
?>
<!-- End Connect DB -->
<!-- Page Content -->
<div class="container">
 <!-- Page Heading/Breadcrumbs -->
 <h1 class="mt-4 mb-3">อัพโหลดคู่มือ</h1>

 <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="mng_admin.php">หน้าแรก</a>
   </li>
   <li class="breadcrumb-item active">อัพโหลดคู่มือ</li>
 </ol>

 <!-- Row 1 -->
 <div class="row">
  <div class="f-input-local">
   <form name="upload_file" action="../../database/insert_manual.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
     <label for="manual_name" class="col-sm-3 col-form-label text-right">ชื่อคู่มือ :</label>
     <div class="col-sm-9">
      <input class="form-control" type="text" id="manual_name" name="txtmanual_name" placeholder="ชื่อ...">
     </div>
     </div> 
     <div class="form-group row">
     <label for="file" class="col-sm-3 col-form-label text-right">ไฟล์คู่มือ :</label>
     <div class="col-sm-9">
      <div class="custom-file">
       <input type="file" id="files" name="file" style="margin-top: 10px;" />
      </div>
      <output id="list_img"></output>
     </div>
    </div>
    <div class="form-row text-right">
     <div class="form-group col-md-12">
      <button type="button" class="btn btn-success btn-lg" onclick="submitSaveFile();"><i class="fa fa-save"></i> บันทึก</button>
     </div>
    </div>
   </form>
  </div>
 </div>
 <!-- End Row 1 -->
 <!-- Table -->
 <div class="row">
  <div class="text-main">
   <label>ค้นหา</label>
   <div class="input-group input-group-md mb-3">
     <div class="input-group-prepend">
       <span class="input-group-text fa fa-search" id="icon-search"></span>
     </div>
     <input type="search" class="form-control" id="search-id" placeholder="Search...">
   </div>
  </div>
  <div class="tb-scroll">
  <table class="table">
   <thead class="thead-dark text-center">
    <tr>
     <th>ลำดับ</th>
     <th>ชื่อคู่มือ</th>
     <th>ไฟล์</th>
     <th>วันที่อัพโหลด</th>
     <th>แก้ไข้/ลบ</th>
    </tr>
   </thead>
   <?php
    $count = 1;
    while ($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
   ?>
   <tbody>
    <tr class="live-search-list text-center">
     <td><?= $count++ ?></td>
     <td><?= $result["manual_name"]; ?></td>
     <td><?= $result["manual_file"]; ?></td>
     <td style="width: 250px;"><?= $result["date_upload"]; ?></td>
     <td style="width: 250px;">
      <a href="../../file_upload/<?= $result["manual_file"] ?>" download>
       <button type="button" class="btn load-file"><i class="fa fa-download"></i></button>
      </a>
      <button type="button" class="btn edit-manual" id="btn-edit" data-toggle="modal" data-target="#editManualModal" data-manual-id="<?= $result["id_manual"] ?>" data-manual-name="<?= $result["manual_name"] ?>" data-manual-file="<?= $result["manual_file"] ?>"><i class="fa fa-edit"></i></button>
      <a href="javascript:void(0);" onclick="if (! confirm('ยืนยันการลบใช่หรือไม่ ?')){return false;}else{ window.location = '../../database/delete_manual.php?id_manual=<?= $result["id_manual"];?>'; }"><button class="btn" id="btn-delete"><i class="fa fa-trash"></i></button></a>
     </td>
    </tr>
   </tbody>
   <?php require '../modal/md_manual.php'; ?>
   <?php
   }
   ?>
  </table>

<script><?php require '../../js/check_save_manual.js' ?></script>
<script><?php require '../../js/edit_manual.js' ?></script>
<script><?php require '../../js/search_list.js' ?></script>

