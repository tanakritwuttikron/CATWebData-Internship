<?php require '../../layout/header_user.php'; ?>
<!-- Third Container (Grid) -->
<div class="container"> 
  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">การจัดการข้อมูล Vlan</h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="home.php">หน้าแรก</a>
    </li>
    <li class="breadcrumb-item active">การจัดการข้อมูล Vlan</li>
  </ol>   
 
 <div class="row text-center">
   <div class="col-sm-4" id="menu-mng">
    <a href="add_local.php">
     <div class="btn">
      <i class="fa fa-plus" id="icon-index"></i>
      <p id="text-mng">Add Location</p>
     </div>
    </a>
      <p id="subtext-mng">เพิ่มข้อมูลสถานที่</p>
   </div>
   <div class="col-sm-4" id="menu-mng">
    <a href="add_mng_vlan.php">
     <div class="btn">
      <i class="fa fa-plus" id="icon-index"></i>
      <p id="text-mng">Add Vlan</p>
     </div>
    </a>
      <p id="subtext-mng">เพิ่มข้อมูล Vlan</p>
   </div>
   <div class="col-sm-4" id="menu-mng">
    <a href="modify.php">
     <div class="btn">
      <i class="fa fa-edit" id="icon-index"></i>
      <p id="text-mng">Modify</p>
     </div>
    </a>
      <p id="subtext-mng">เรียกดู/แก้ไข ข้อมูล</p>
   </div>
 </div>
</div>
<?php require '../../layout/footer_mng.php'; ?>