<?php require '../../layout/header_user.php'; ?>
<?php
 $strid1 = null;
 $strid2 = null;
 $strid3 = null;
 if(isset($_GET["id_tool_l2"]))
 {
   $strid1 = $_GET["id_tool_l2"];
   $strid2 = $_GET["id_node"];
   $strid3 = $_GET["id_local"];
 } 
 require '../../database/db.php';

 $sql="SELECT * FROM data_tools_l2 dt INNER JOIN data_node_l2 dn
      ON dt.id_node = dn.id_node WHERE dt.id_tool_l2 = '".$strid1."' ";
 $query = mysqli_query($conn,$sql);
 $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
?>

<div class="container">
  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">แก้ไขข้อมูลอุปกรณ์</h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="home.php">หน้าแรก</a>
    </li>
    <li class="breadcrumb-item">
      <a href="node_user.php">Network Node</a>
    </li>
    <li class="breadcrumb-item">
      <a href="detail_node_l2_user.php?id_local=<?= $result["id_local"]; ?>&id_node=<?= $result["id_node"]; ?>">Node <?= $result["node"]; ?> <?= $result["node_name"]; ?></a>
    </li>
    <li class="breadcrumb-item active">แก้ไขข้อมูลอุปกรณ์</li>
  </ol>   

 <!-- Row 2 -->
 <div class="row">
  <div class="col-sm-12">
  <form name="update_tool_l2" id="update_tool_l2" action="../../database/update_tool_l2.php" method="post">
   <div class="form-row">
    <input type="hidden" class="form-control" name="id_tool_l2" value="<?= $strid1 ?>">
    <input type="hidden" class="form-control" name="id_node" value="<?= $strid2 ?>">
    <input type="hidden" class="form-control" name="id_local" value="<?= $strid3 ?>">
    <div class="form-group col-md-4">
     <label for="tool_ip_l2">IP : </label>
     <input type="text" class="form-control" name="tool_ip_l2" value="<?= $result["tool_ip_l2"] ?>" placeholder="IP ...">
    </div>
    <div class="form-group col-md-8">
     <label for="brand_name_l2">Brand Name : </label>
     <input type="text" class="form-control" name="brand_name_l2" value="<?= $result["brand_name_l2"] ?>" placeholder="Brand Name ...">
    </div>
   </div>
   <div class="form-row">
    <div class="form-group col-md-4">
     <label for="device_modal_l2">Device Model : </label>
     <input type="text" class="form-control" name="device_modal_l2" value="<?= $result["device_modal_l2"] ?>" placeholder="Device Model ...">
    </div>
    <div class="form-group col-md-4">
     <label for="device_shorth_name_l2">Device Shorth Name : </label>
     <input type="text" class="form-control" name="device_shorth_name_l2" value="<?= $result["device_shorth_name_l2"] ?>" placeholder="Device Shorth Name ...">
    </div>
    <div class="form-group col-md-4">
     <label for="serial_num_l2">Serial Number : </label>
     <input type="text" class="form-control" name="serial_num_l2" value="<?= $result["serial_num_l2"] ?>" placeholder="Serial Number ...">
    </div>
   </div>
   <div class="form-row">
    <div class="form-group col-md-3">
     <label for="current_name_l2">Current Name : </label>
     <input type="text" class="form-control" name="current_name_l2" value="<?= $result["current_name_l2"] ?>" placeholder="Current Name ...">
    </div>
    <div class="form-group col-md-9">
     <label for="comment_l2">Comment : </label>
     <input type="text" class="form-control" name="comment_l2" value="<?= $result["comment_l2"] ?>" placeholder="Comment ...">
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
     <input type="text" class="form-control" name="device_type_name_l2" value="<?= $result["device_type_name_l2"] ?>" placeholder="Device Type Name ...">
    </div>
   </div>
   <div class="form-row">
    <div class="form-group col-md-12">
     <button type="button" class="btn btn-success" onclick="submitUpdateToolL2();"><i class="fa fa-save"></i> Save</button>
    </div>
   </div>
  </form>
 </div>
 </div>
 <!-- End Row 2 -->
</div>
<!-- End Container -->
<?php require '../../layout/footer.php'; ?>

<script><?php require '../../js/edit_tool.js'; ?></script>