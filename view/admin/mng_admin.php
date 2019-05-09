<?php require '../../layout/header_admin.php'; ?>
<!-- Connect DB -->
<?php 
 require '../../database/db.php';

 $sql="SELECT * FROM member";
 $query = mysqli_query($conn,$sql);
?>
<!-- End Connect DB -->
<!-- Container -->
<div class="container">
  <!-- Page Heading/Breadcrumbs -->
 <h1 class="mt-4 mb-3">ข้อมูล User</h1>

 <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="mng_admin.php">หน้าแรก</a>
   </li>
   <li class="breadcrumb-item active">ข้อมูล User</li>
 </ol>

 <!-- Table -->
 <div class="row">
  <div class="col-sm-12">
  <div class="text-search">
   <label>ค้นหา</label>
  </div>
  <div class="form-row">
   <div class="form-group col-md-4">
    <input type="search" class="form-control" id="search-id" placeholder="Search...">
   </div>
   <div class="form-group col-md-2"></div>
   <div class="form-group col-md-6" align="right">
    <button type="button" class="btn btn-success btn-md" id="btn-add" data-toggle="modal" data-target="#addUser"><i class="fa fa-plus"></i> เพิ่ม User </button>
   </div>
  </div>
  
  <div class="tb-scroll">
  <table class="table">
   <thead class="thead-dark">
    <tr>
     <th>ลำดับ</th>
     <th>Username</th>
     <th>Password</th>
     <th>Status</th>
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
     <td><?= $result["username"]; ?></td>
     <td><?= $result["password"]; ?></td>
     <td>
      <?php if ($result["status"]==1) {
       echo 'Admin';
      } else {
       echo 'User';
      } ?></td>
     <td>
      <button type="button" class="btn btn-primary edit-user" id="btn-edit" data-toggle="modal" data-target="#editUser" data-user-id="<?= $result["id_member"] ?>" data-user-name="<?= $result["username"] ?>" data-user-pass="<?= $result["password"] ?>" data-user-status="<?= $result["status"] ?>"><i class="fa fa-edit"></i></button>
      <a href="javascript:void(0);" onclick="if (! confirm('ยืนยันการลบใช่หรือไม่ ?')){return false;}else{ window.location = '../../database/delete_user.php?id_member=<?= $result["id_member"];?>'; }"><button class="btn btn-danger" id="btn-delete"><i class="fa fa-trash"></i></button></a>
     </td>
    </tr>
   </tbody>
   <?php require '../modal/md_edit_member.php'; ?>
   <?php require '../modal/md_add_member.php'; ?>
   <?php
   }
   ?>
  </table>
 </div>
 </div>
 <!-- End Table -->
 </div>
</div>
<!-- End Container -->
<?php require '../../layout/footer_admin.php'; ?>

<script><?php require '../../js/check_save_member.js'; ?></script>
<script><?php require '../../js/edit_user.js'; ?></script>
<script><?php require '../../js/search_list.js'; ?></script>