<?php require '../../layout/header_user.php'; ?>
<?php 
require '../../database/db.php';
require 'pagination_mng.php';

$strKeyword1 = null;
$strKeyword2 = null;
$strKeyword3 = null;
  if(isset($_POST["txtKeyword1"]))
 {
  $strKeyword1 = $_POST["txtKeyword1"];
  $strKeyword2 = $_POST["txtKeyword2"];
  $strKeyword3 = $_POST["txtKeyword3"];
 }

$num = 0;
$sql="SELECT * FROM manage_vlan vm INNER JOIN data_local dl
      ON vm.id_local = dl.id_local WHERE vm.id_manage AND vm.cat_id LIKE '%".$strKeyword1."%' AND vm.ip_address LIKE '%".$strKeyword2."%' AND vm.vlan_num LIKE '%".$strKeyword3."%'";
$query = mysqli_query($conn,$sql);
$total=$query->num_rows;

$e_page=100;
$step_num=0;
if(!isset($_GET['page']) || (isset($_GET['page']) && $_GET['page']==1)){   
 $_GET['page']=1;   
 $step_num=0;
 $s_page = 0;    
}else{   
 $s_page = $_GET['page']-1;
 $step_num=$_GET['page']-1;  
 $s_page = $s_page*$e_page;
}

$sql.=" ORDER BY ip_address  LIMIT ".$s_page.",$e_page";
$query = mysqli_query($conn,$sql);
?>
<!-- Row -->
<div class="container">
 <!-- Page Heading/Breadcrumbs -->
 <h1 class="mt-4 mb-3">ค้นหาข้อมูล Vlan</h1>

 <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="home.php">หน้าแรก</a>
   </li>
   <li class="breadcrumb-item">
     <a href="mng_vlan.php">จัดการข้อมูล Vlan</a>
   </li>
   <li class="breadcrumb-item active">ค้นหาข้อมูล Vlan</li>
 </ol>

<div class="row">
 <div class="col-sm-12" style="margin-top: 20px;">
 <form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <div class="form-row" style="margin-bottom: 20px;">
   <div class="form-group col-sm-3">
    <input class="form-control search-box" name="txtKeyword1" type="text" id="txtKeyword1" value="<?= $strKeyword1;?>" placeholder="CAT ID ...">
   </div>
   <div class="form-group col-sm-3">
    <input class="form-control search-box" name="txtKeyword2" type="text" id="txtKeyword2" value="<?= $strKeyword2;?>" placeholder="IP address ...">
   </div>
   <div class="form-group col-sm-3">
    <input class="form-control search-box" name="txtKeyword3" type="text" id="txtKeyword3" value="<?= $strKeyword3;?>" placeholder="หมายเลข Vlan...">
   </div>
   <div class="form-group col-sm-3">
    <button class="btn btn-primary" type="submit">ค้นหา</button>
   </div>
  </div>
 </form>

<!-- Table -->
<div class="tb-scroll">
<table class="table table-hover">
 <thead class="thead-dark" align="center">
  <tr>
   <th><div align="center" style="width: 25px;">ลำดับ.</div></th>
   <th><div align="center" style="width: 100px;">หมายเลข Vlan</div></th>
   <th><div align="center" style="width: 100px;">สถานที่</div></th>
   <th><div align="center" style="width: 150px;">ชื่อลูกค้า</div></th>
   <th><div align="center" style="width: 100px;">CAT ID</div></th>
   <th><div align="center" style="width: 100px;">IP address</div></th>
   <th><div align="center" style="width: 100px;">Subnet mask</div></th>
   <th><div align="center" style="width: 100px;">Gateway</div></th>
   <th><div align="center" style="width: 100px;">Model</div></th>
   <th><div align="center" style="width: 100px;">Status</div></th>
   <th><div align="center" style="width: 150px;">เรียกดู/แก้ไข/ลบ</div></th>
  </tr>
 </thead>
 <?php
 if($query && $query->num_rows>0){
 while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
 { 
   $num++;
 ?>
 <tbody align="center">
   <tr class="live-search-list">
     <td><?= ($step_num*$e_page)+$num ?></td>
     <td><?= $result["vlan_num"] ?></td>
     <td><?= $result["local_name"] ?></td>
     <td><?= $result["cust_name"] ?></td>
     <td><?= $result["cat_id"] ?></td>
     <td><?= $result["ip_address"] ?></td>
     <td><?= $result["subnet"] ?></td>
     <td><?= $result["ip_gate"] ?></td>
     <td><?= $result["remark"] ?></td>
     <td>
      <?php if ($result["status"]==1) {
       echo 'ใช้งาน';
      } else {
       echo 'ไม่ใช้งาน';
      } ?>
     </td>
     <td>
      <a href="pre_vlan.php?id_manage=<?= $result["id_manage"]; ?>"><button type="button" class="btn pre-mng" id="btn-pre-mng"><i class="fa fa-search"></i></button></a>
      <a href="edit_mng_vlan.php?id_manage=<?= $result["id_manage"]; ?>"><button type="button" class="btn edit-mng" id="btn-edit-mng"><i class="fa fa-edit"></i></button></a>
      <a href="javascript:void(0);" onclick="if (!confirm('ยืนยันการลบใช่หรือไม่ ?')){return false;}else{ window.location = '../../database/delete_mng_vlan.php?id_manage=<?= $result["id_manage"];?>'; }"><button class="btn" id="delete"><i class="fa fa-trash"></i></button></a>
     </td>
   </tr>
 <?php
  }   
 }
 ?>  
 </tbody>
 <tfoot class="thead-dark" align="center">
  <tr>
   <th><div align="center" style="width: 25px;">ลำดับ.</div></th>
   <th><div align="center" style="width: 100px;">หมายเลข Vlan</div></th>
   <th><div align="center" style="width: 100px;">สถานที่</div></th>
   <th><div align="center" style="width: 150px;">ชื่อลูกค้า</div></th>
   <th><div align="center" style="width: 100px;">CAT ID</div></th>
   <th><div align="center" style="width: 100px;">IP address</div></th>
   <th><div align="center" style="width: 100px;">Subnet mask</div></th>
   <th><div align="center" style="width: 100px;">Gateway</div></th>
   <th><div align="center" style="width: 100px;">Model</div></th>
   <th><div align="center" style="width: 100px;">Status</div></th>
   <th><div align="center" style="width: 150px;">เรียกดู/แก้ไข/ลบ</div></th>
  </tr>
 </tfoot>
</table>
</div>
<!-- End Table -->
</div>
</div>
</div>
<!-- End Row -->

<!-- Pagination -->
<?php
page_navi_mng($total,(isset($_GET['page']))?$_GET['page']:1,$e_page);

mysqli_close($conn);
?>
<!-- End Pagination -->

<?php require '../../layout/footer.php'; ?>