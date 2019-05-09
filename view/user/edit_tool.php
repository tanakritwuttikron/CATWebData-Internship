<?php require '../../layout/header_user.php'; ?>
<?php
 $strid1 = null;
 $strid2 = null;
 if(isset($_GET["id_tool"]))
 {
   $strid1 = $_GET["id_tool"];
   $strid2 = $_GET["id_local"];
 } 
 require '../../database/db.php';

 $sql="SELECT * FROM data_tools dt INNER JOIN data_local dl
      ON dt.id_local = dl.id_local WHERE dt.id_tool = '".$strid1."' ";
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
      <a href="menu_node.php?id_local=<?= $result["id_local"]; ?>">Node <?= $result["node"]; ?> <?= $result["local_name"]; ?></a>
    </li>
    <li class="breadcrumb-item active">แก้ไขข้อมูลอุปกรณ์</li>
  </ol>   

 <!-- Row 2 -->
 <div class="row">
  <div class="col-sm-12">
  <form name="update_tool" id="update_tool" action="../../database/update_tool.php" method="post">
   <div class="form-row">
    <input type="hidden" class="form-control" name="id_tool" value="<?= $strid1 ?>">
    <input type="hidden" class="form-control" name="id_local" value="<?= $strid2 ?>">
    <div class="form-group col-md-4">
     <label for="tool_ip">IP : </label>
     <input type="text" class="form-control" name="tool_ip" value="<?= $result["tool_ip"] ?>" placeholder="IP ...">
    </div>
    <div class="form-group col-md-8">
     <label for="brand_name">Brand Name : </label>
     <input type="text" class="form-control" name="brand_name" value="<?= $result["brand_name"] ?>" placeholder="Brand Name ...">
    </div>
   </div>
   <div class="form-row">
    <div class="form-group col-md-4">
     <label for="device_modal">Device Model : </label>
     <input type="text" class="form-control" name="device_modal" value="<?= $result["device_modal"] ?>" placeholder="Device Model ...">
    </div>
    <div class="form-group col-md-4">
     <label for="device_shorth_name">Device Shorth Name : </label>
     <input type="text" class="form-control" name="device_shorth_name" value="<?= $result["device_shorth_name"] ?>" placeholder="Device Shorth Name ...">
    </div>
    <div class="form-group col-md-4">
     <label for="serial_num">Serial Number : </label>
     <input type="text" class="form-control" name="serial_num" value="<?= $result["serial_num"] ?>" placeholder="Serial Number ...">
    </div>
   </div>
   <div class="form-row">
    <div class="form-group col-md-3">
     <label for="current_name">Current Name : </label>
     <input type="text" class="form-control" name="current_name" value="<?= $result["current_name"] ?>" placeholder="Current Name ...">
    </div>
    <div class="form-group col-md-9">
     <label for="comment">Comment : </label>
     <input type="text" class="form-control" name="comment" value="<?= $result["comment"] ?>" placeholder="Comment ...">
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
     <input type="text" class="form-control" name="device_type_name" value="<?= $result["device_type_name"] ?>" placeholder="Device Type Name ...">
    </div>
   </div>
   <div class="form-row">
    <div class="form-group col-md-12">
     <button type="button" class="btn btn-success" onclick="submitUpdateTool();"><i class="fa fa-save"></i> Save</button>
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