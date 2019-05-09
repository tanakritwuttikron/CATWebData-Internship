<?php require '../../layout/header_user.php'; ?>
<!-- Connect DB -->
<?php 
 require '../../database/db.php';

 $sql="SELECT * FROM data_local ORDER BY local_name ASC";
 $query = mysqli_query($conn,$sql);
?>
<!-- End Connect DB -->
<!-- Container -->
<div class="container">
 <!-- Page Heading/Breadcrumbs -->
 <h1 class="mt-4 mb-3">เพิ่มข้อมูลสถานที่</h1>

 <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="home.php">หน้าแรก</a>
   </li>
   <li class="breadcrumb-item">
     <a href="node_user.php">Network Node</a>
   </li>
   <li class="breadcrumb-item active">เพิ่มข้อมูลสถานที่</li>
 </ol>
 <!-- Row 2 -->
 <div class="row">
  <div class="f-input-local">
   <form name="form_local" action="../../database/insert_local.php" method="post">
    <div class="form-row">
    <div class="form-group col-sm-6">
     <label>ชื่อสถานที่ :</label>
     <input type="text" class="form-control" id="local_name" name="local_name" placeholder="ชื่อสถานที่ ...">
    </div>
    <div class="form-group col-sm-6">
     <label>IP address :</label>
     <input type="text" class="form-control" id="local_ip" name="local_ip" placeholder="IP Address ...">
    </div>
    </div>
    <div class="form-row">
     <div class="form-group col-sm-6">
     <label>Latitude :</label>
     <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Latitude ...">
    </div>
    <div class="form-group col-sm-6">
     <label>Longitude :</label>
     <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Longitude">
    </div>
    </div>
    <div class="form-row">
     <div class="form-group col-sm-4">
     <label>ชื่อย่อ 3 หลัก :</label>
     <input type="text" class="form-control" id="initials" name="initials" placeholder="ชื่อย่อ 3 หลัก ...">
    </div>
    <div class="form-group col-sm-4">
     <label>Node :</label>
     <input type="text" class="form-control" disabled="disabled" id="node" name="node" value="L3">
    </div>
    <div class="form-group col-sm-4">
     <label>OldsiteCode :</label>
     <input type="text" class="form-control" id="old_site_code" name="old_site_code" placeholder="OldsiteCode ...">
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-sm-12">
     <button type="button" class="btn btn-success btn-lg btn-block" onclick="submitSaveLocal();"><i class="fa fa-save"></i> SAVE</button>
    </div>
    </div>
   </form>
  </div>
 </div>
 <!-- End Row 2 -->
 <!-- Table -->
 <div class="row">
  <div class="text-main">
   <label>ค้นหาข้อมูลสถานที่</label>
   <div class="input-group input-group-md mb-3">
     <div class="input-group-prepend">
       <span class="input-group-text fa fa-search" id="icon-search"></span>
     </div>
     <input type="search" class="form-control" id="search-id" placeholder="Search...">
   </div>
  </div>
  <div class="tb-scroll">
  <table class="table text-center">
   <thead class="thead-dark">
    <tr>
     <th>ลำดับ</th>
     <th>Node</th>
     <th>ชื่อสถานที่</th>
     <th>IP Address</th>
     <th>ชื่าอย่อ 3 ตัวหลัก</th>
     <th>OldsiteCode</th>
     <th>แก้ไข้/ลบ</th>
    </tr>
   </thead>
   <?php
    $count = 1;
    while ($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
   ?>
   <tbody>
    <tr class="live-search-list">
     <td><?= $count++ ?></td>
     <td><?= $result["node"]; ?></td>
     <td><?= $result["local_name"]; ?></td>
     <td><?= $result["local_ip_add"]; ?></td>
     <td><?= $result["initials"]; ?></td>
     <td><?= $result["old_site_code"]; ?></td>
     <td>
      <button type="button" class="btn edit-local" id="btn-edit" data-toggle="modal" data-target="#editLocalModal" data-local-id="<?= $result["id_local"] ?>" data-local-name="<?= $result["local_name"] ?>" data-local-ip="<?= $result["local_ip_add"] ?>" data-local-latitude="<?= $result["latitude"] ?>" data-local-longitude="<?= $result["longitude"] ?>" data-local-initials="<?= $result["initials"] ?>" data-local-node="<?= $result["node"] ?>" data-local-old="<?= $result["old_site_code"] ?>"><i class="fa fa-edit"></i></button>
      <a href="javascript:void(0);" onclick="if (! confirm('ยืนยันการลบใช่หรือไม่ ?')){return false;}else{ window.location = '../../database/delete_local.php?id_local=<?= $result["id_local"];?>'; }"><button class="btn" id="btn-delete"><i class="fa fa-trash"></i></button></a>
     </td>
    </tr>
   </tbody>
   <?php require '../modal/md_edit_local.php'; ?>
   <?php
   }
   ?>
  </table>
 </div>
 </div>
 <!-- End Table -->
</div>
<!-- End Container -->
<?php require '../../layout/footer.php'; ?>
<script><?php require '../../js/check_save_local.js'; ?></script>
<script><?php require '../../js/search_list.js'; ?></script>
<script><?php require '../../js/edit_local.js' ?></script>