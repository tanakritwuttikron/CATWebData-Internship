<?php 

  $objsql="SELECT * FROM manage_vlan vm INNER JOIN data_local dl
        ON vm.id_local = dl.id_local WHERE vm.id_local = '".$strid."'";
  $objquery = mysqli_query($conn,$objsql);
?>
 <!-- Row 2 -->
 <div class="row">
  <h3 class="mt-4 mb-3">ค้นหาข้อมูล Vlan</h3>
  <div class="input-group" style="margin-bottom: 10px;">
   <div class="col-sm-5">
    <input type="search" class="form-control" id="search-id" placeholder="Search...">
   </div>
  </div>

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
  $count = 1;
  while($objresult=mysqli_fetch_array($objquery,MYSQLI_ASSOC))
  { 
  ?>
  <tbody align="center">
    <tr class="live-search-list">
      <td><?= $count++ ?></td>
      <td><?= $objresult["vlan_num"] ?></td>
      <td><?= $objresult["local_name"] ?></td>
      <td><?= $objresult["cust_name"] ?></td>
      <td><?= $objresult["cat_id"] ?></td>
      <td><?= $objresult["ip_address"] ?></td>
      <td><?= $objresult["subnet"] ?></td>
      <td><?= $objresult["ip_gate"] ?></td>
      <td><?= $objresult["remark"] ?></td>
      <td>
       <?php if ($objresult["status"]==1) {
        echo 'ใช้งาน';
       } else {
        echo 'ไม่ใช้งาน';
       } ?>
      </td>
      <td>
       <a href="pre_vlan.php?id_manage=<?= $objresult["id_manage"]; ?>"><button type="button" class="btn pre-mng" id="btn-pre-mng"><i class="fa fa-search"></i></button></a>
       <a href="edit_mng_vlan.php?id_manage=<?= $objresult["id_manage"]; ?>"><button type="button" class="btn edit-mng" id="btn-edit-mng"><i class="fa fa-edit"></i></button></a>
       <a href="javascript:void(0);" onclick="if (!confirm('ยืนยันการลบใช่หรือไม่ ?')){return false;}else{ window.location = '../../database/delete_mng_vlan.php?id_manage=<?= $objresult["id_manage"];?>&id_local=<?= $objresult["id_local"] ?>'; }"><button class="btn" id="delete"><i class="fa fa-trash"></i></button></a>
      </td>
    </tr>
  <?php
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
 <!-- End Row 2 -->

 <script><?php require '../../js/search_list.js'; ?></script>