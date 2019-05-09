<?php
 require '../../database/db.php';

$strid = null;
 if(isset($_GET["id_local"]))
 {
   $strid = $_GET["id_local"];
 }
 $sql = "SELECT * FROM data_tools WHERE id_local = '".$strid."' ";
 $query = mysqli_query($conn,$sql);
?>

 <div class="row">
   <h3 class="mt-4 mb-3">เพิ่มข้อมูลอุปกรณ์</h3>
   <div class="col-md-12">
    <div class="f-input-mng">
    <form name="insert_tool" id="insert_tool" action="../../database/insert_tool.php" method="post">
     <div class="form-row">
      <input type="hidden" class="form-control" name="id_local" value="<?= $strid ?>">
      <div class="form-group col-md-4">
       <label for="tool_ip">IP : </label>
       <input type="text" class="form-control" name="tool_ip" placeholder="IP ...">
      </div>
      <div class="form-group col-md-8">
       <label for="brand_name">Brand Name : </label>
       <input type="text" class="form-control" name="brand_name" placeholder="Brand Name ...">
      </div>
     </div>
     <div class="form-row">
      <div class="form-group col-md-4">
       <label for="device_modal">Device Model : </label>
       <input type="text" class="form-control" name="device_modal" placeholder="Device Model ...">
      </div>
      <div class="form-group col-md-4">
       <label for="device_shorth_name">Device Shorth Name : </label>
       <input type="text" class="form-control" name="device_shorth_name" placeholder="Device Shorth Name ...">
      </div>
      <div class="form-group col-md-4">
       <label for="serial_num">Serial Number : </label>
       <input type="text" class="form-control" name="serial_num" placeholder="Serial Number ...">
      </div>
     </div>
     <div class="form-row">
      <div class="form-group col-md-3">
       <label for="current_name">Current Name : </label>
       <input type="text" class="form-control" name="current_name" placeholder="Current Name ...">
      </div>
      <div class="form-group col-md-9">
       <label for="comment">Comment : </label>
       <input type="text" class="form-control" name="comment" placeholder="Comment ...">
      </div>
     </div>
     <div class="form-row">
      <div class="form-group col-md-3">
       <label for="check_data">ยืนยันข้อมูล : </label>
       <select name="check_data" class="form-control">
       <option selected value="">เลือก...</option>
       <option value="1">ยืนยันข้อมูล</option>
       <option value="2">ยังไม่ได้ยืนยัน</option>
       </select>
      </div>
      <div class="form-group col-md-6">
       <label for="device_type_name">Device Type Name : </label>
       <input type="text" class="form-control" name="device_type_name" placeholder="Device Type Name ...">
      </div>
     </div>
     <div class="form-row">
      <div class="form-group col-md-12">
       <button type="button" class="btn btn-success" onclick="submitSaveTool();"><i class="fa fa-save"></i> Save</button>
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
     <td><?= $result["tool_ip"] ?></td>
     <td><?= $result["brand_name"] ?></td>
     <td><?= $result["device_modal"] ?></td>
     <td><?= $result["device_shorth_name"] ?></td>
     <td><?= $result["serial_num"] ?></td>
     <td><?= $result["current_name"] ?></td>
     <td><?= $result["comment"] ?></td>
     <td>
      <?php if ($result["check_data"]==="1") {
       echo "ยืนยันข้อมูล";
      }else{
       echo "ยังไม่ได้ยืนยัน";
      } ?>
      </td>
     <td><?= $result["device_type_name"] ?></td>
     <td>
      <a href="edit_tool.php?id_tool=<?= $result["id_tool"]; ?>&id_local=<?= $strid; ?>"><button type="button" class="btn edit-mng" id="btn-edit-mng"><i class="fa fa-edit"></i></button></a>
      <a href="javascript:void(0);" onclick="if (! confirm('ยืนยันการลบใช่หรือไม่ ?')){return false;}else{ window.location = '../../database/delete_tool.php?id_tool=<?= $result["id_tool"]; ?>&id_local=<?= $strid; ?>'; }"><button class="btn" id="btn-delete"><i class="fa fa-trash"></i></button></a>
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
