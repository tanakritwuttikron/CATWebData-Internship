<?php require '../../layout/header_admin.php'; ?>
<!-- Connect DB -->
<?php 
 require '../../database/db.php';

 $sql="SELECT * FROM notice_work";
 $query = mysqli_query($conn,$sql);
?>
<!-- End Connect DB -->
<!-- Container -->
<div class="container">
 <!-- Row 1 -->
 <h1 class="mt-4 mb-3">ข้อมูลงานที่ต้องทำ</h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="mng_admin.php">หน้าแรก</a>
    </li>
    <li class="breadcrumb-item active">ข้อมูลงานที่ต้องทำ</li>
  </ol>

 <!-- End Row 1 -->
 <div class="row" >
  <div class="col-md-12" align="right">
   <div class="form-group">
    <input type="search"  class="form-control col-sm-4" id="search-id" placeholder="Search...">
   </div>
  </div>
 </div>
 <!-- Table -->
  <div class="tb-scroll">
  <table class="table table-hover">
   <thead class="thead-dark" align="center">
    <tr>
     <th><div align="center" style="width: 25px;">ลำดับ.</div></th>
     <th><div align="center" style="width: 100px;">หัวข้อ</div></th>
     <th><div align="center" style="width: 100px;">วันที่</div></th>
     <th><div align="center" style="width: 150px;">ชื่อลูกค้า</div></th>
     <th><div align="center" style="width: 150px;">นามสกุล</div></th>
     <th><div align="center" style="width: 100px;">CAT ID</div></th>
     <th><div align="center" style="width: 150px;">เบอร์โทรศัพท์ลูกค้า</div></th>
     <th><div align="center" style="width: 250px;">รายละเอียด</div></th>
     <th><div align="center" style="width: 100px;">แก้ไข้/ลบ</div></th>
    </tr>
   </thead>
   <?php
    $count = 1;
    while ($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
   ?>
   <tbody>
    <tr class="live-search-list">
     <td  align="center" ><?= $count++ ?></td>
     <td  align="center" ><?= $result["title"]; ?></td>
     <td  align="center" ><?= $result["date_work"]; ?></td>
     <td  align="center" ><?= $result["cust_fname"]; ?></td>
     <td  align="center" ><?= $result["cust_lname"]; ?></td>
     <td  align="center" ><?= $result["cat_id"]; ?></td>
     <td  align="center" ><?= $result["tel"]; ?></td>
     <td  align="left" style="word-break: break-word;"><?= $result["descrip_work"]; ?></td>
     <td>
      <a href="edit_htr_work.php?id_work=<?= $result["id_work"] ?>"><button type="button" class="btn btn-primary edit-htr" id="btn-edit"><i class="fa fa-edit"></i></button></a> 
      <a href="javascript:void(0);" onclick="if (! confirm('ยืนยันการลบใช่หรือไม่ ?')){return false;}else{ window.location = '../../database/delete_work.php?id_work=<?= $result["id_work"];?>'; }"><button class="btn btn-danger" id="btn-delete"><i class="fa fa-trash"></i></button></a>
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
 <!-- End Table -->
</div>
<!-- End Container -->

<?php require '../../layout/footer_admin.php'; ?>


<script><?php require '../../js/check_save_member.js'; ?></script>
<script><?php require '../../js/edit_user.js'; ?></script>
<script><?php require '../../js/search_list.js'; ?></script>
