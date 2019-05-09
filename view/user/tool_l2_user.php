<?php
 require '../../database/db.php';

$strid = null;
$strid2 = null;
 if(isset($_GET["id_node"]))
 {
   $strid = $_GET["id_node"];
   $strid2 = $_GET["id_local"];
 }
 $sql = "SELECT * FROM data_tools_l2 WHERE id_node = '".$strid."' AND id_local = '".$strid2."' ";
 $query = mysqli_query($conn,$sql);
?>

 <div class="row">
   <h3 class="mt-4 mb-3">เพิ่มข้อมูลอุปกรณ์</h3>
   <div class="col-md-12">
    <div class="f-input-mng">
    <form name="insert_tool_l2" id="insert_tool_l2" action="../../database/insert_tool_l2.php" method="post">
     <div class="form-row">
      <input type="hidden" class="form-control" name="id_node" value="<?= $strid ?>">
      <input type="hidden" class="form-control" name="id_local" value="<?= $strid2 ?>">
      <div class="form-group col-md-4">
       <label for="tool_ip_l2">IP : </label>
       <input type="text" class="form-control" name="tool_ip_l2" placeholder="IP ...">
      </div>
      <div class="form-group col-md-8">
       <label for="brand_name_l2">Brand Name : </label>
       <input type="text" class="form-control" name="brand_name_l2" placeholder="Brand Name ...">
      </div>
     </div>
     <div class="form-row">
      <div class="form-group col-md-4">
       <label for="device_modal_l2">Device Model : </label>
       <input type="text" class="form-control" name="device_modal_l2" placeholder="Device Model ...">
      </div>
      <div class="form-group col-md-4">
       <label for="device_shorth_name_l2">Device Shorth Name : </label>
       <input type="text" class="form-control" name="device_shorth_name_l2" placeholder="Device Shorth Name ...">
      </div>
      <div class="form-group col-md-4">
       <label for="serial_num_l2">Serial Number : </label>
       <input type="text" class="form-control" name="serial_num_l2" placeholder="Serial Number ...">
      </div>
     </div>
     <div class="form-row">
      <div class="form-group col-md-3">
       <label for="current_name_l2">Current Name : </label>
       <input type="text" class="form-control" name="current_name_l2" placeholder="Current Name ...">
      </div>
      <div class="form-group col-md-9">
       <label for="comment_l2">Comment : </label>
       <input type="text" class="form-control" name="comment_l2" placeholder="Comment ...">
      </div>
     </div>
     <div class="form-row">
      <div class="form-group col-md-3">
       <label for="check_data_l2">ยืนยันข้อมูล : </label>
       <select name="check_data_l2" class="form-control">
       <option selected value="">เลือก...</option>
       <option value="1">ยืนยันข้อมูล</option>
       <option value="2">ยังไม่ได้ยืนยัน</option>
       </select>
      </div>
      <div class="form-group col-md-6">
       <label for="device_type_name_l2">Device Type Name : </label>
       <input type="text" class="form-control" name="device_type_name_l2" placeholder="Device Type Name ...">
      </div>
     </div>
     <div class="form-row">
      <div class="form-group col-md-12">
       <button type="button" class="btn btn-success" onclick="submitSaveToolL2();"><i class="fa fa-save"></i> Save</button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
 <hr>
 <!-- End Row -->
 <!-- Table -->
 <div class="row">
  <div class="text-main">
   <label>ค้นหาข้อมูลอุปกรณ์</label>
   <div class="input-group input-group-md mb-3">
     <input type="search" class="form-control" id="search-id" placeholder="Search...">
   </div>
  </div>
  <div class="tb-scroll">
  <table class="table text-center">
   <thead class="thead-dark">
    <tr>
     <th><div style="width: 50px;">ลำดับ</div></th>
     <th><div style="width: 100px;">IP</div></th>
     <th><div style="width: 100px;">Brand Name</div></th>
     <th><div style="width: 130px;">Device Model</div></th>
     <th><div style="width: 170px;">Device Shorth Name</div></th>
     <th><div style="width: 120px;">Serial Number</div></th>
     <th><div style="width: 120px;">Current Name</div></th>
     <th><div style="width: 100px;">Comment</div></th>
     <th><div style="width: 100px;">ยืนยันข้อมูล</div></th>
     <th><div style="width: 140px;">Device Type Name</div></th>
     <th><div style="width: 100px;">แก้ไข้/ลบ</div></th>
    </tr>
   </thead>
   <?php
    $count = 1;
    while ($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
   ?>
   <tbody>
    <tr class="live-search-list">
     <td><?= $count++ ?></td>
     <td><?= $result["tool_ip_l2"] ?></td>
     <td><?= $result["brand_name_l2"] ?></td>
     <td><?= $result["device_modal_l2"] ?></td>
     <td><?= $result["device_shorth_name_l2"] ?></td>
     <td><?= $result["serial_num_l2"] ?></td>
     <td><?= $result["current_name_l2"] ?></td>
     <td><?= $result["comment_l2"] ?></td>
     <td>
      <?php if ($result["check_data_l2"]==="1") {
       echo "ยืนยันข้อมูล";
      }else{
       echo "ยังไม่ได้ยืนยัน";
      } ?>
      </td>
     <td><?= $result["device_type_name_l2"] ?></td>
     <td>
      <a href="edit_tool_l2.php?id_local=<?= $strid2 ?>&id_tool_l2=<?= $result["id_tool_l2"]; ?>&id_node=<?= $strid; ?>"><button type="button" class="btn edit-mng" id="btn-edit-mng"><i class="fa fa-edit"></i></button></a>
      <a href="javascript:void(0);" onclick="if (! confirm('ยืนยันการลบใช่หรือไม่ ?')){return false;}else{ window.location = '../../database/delete_tool_l2.php?id_local=<?= $strid2 ?>&id_tool_l2=<?= $result["id_tool_l2"]; ?>&id_node=<?= $strid; ?>'; }"><button class="btn" id="btn-delete"><i class="fa fa-trash"></i></button></a>
     </td>
    </tr>
   </tbody>
   <?php
   }
   ?>
  </table>
 </div>
 </div>
 <!-- End Table -->


<script><?php require '../../js/check_save_tool.js' ?></script>
<script><?php require '../../js/search_list.js' ?></script>
