<?php require '../../layout/header_user.php'; ?>
<?php
 $strid = null;
 if(isset($_GET["id_manage"]))
 {
   $strid = $_GET["id_manage"];
 } 
 require '../../database/db.php';

 $sql="SELECT * FROM manage_vlan vm INNER JOIN data_local dl
      ON vm.id_local = dl.id_local WHERE vm.id_manage = '".$strid."' ";
 $query = mysqli_query($conn,$sql);
 $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
?>

<div class="container">
  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">แก้ไขข้อมูล Vlan</h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="home.php">หน้าแรก</a>
    </li>
    <li class="breadcrumb-item">
      <a href="node_user.php">Network Node</a>
    </li>
    <li class="breadcrumb-item">
      <a href="menu_node.php?id_local=<?= $result["id_local"]; ?>">Node <?= $result["local_name"]; ?></a>
    </li>
    <li class="breadcrumb-item active">แก้ไขข้อมูล Vlan</li>
  </ol>   

 <!-- Row 2 -->
 <div class="row">
  <div class="f-input-mng">
  <form name="edit_mng_vlan" id="edit_mng_vlan" action="../../database/update_vlan.php" method="post">
   <div class="form-row">
    <div class="form-group col-md-3">
     <input type="hidden" class="form-control" name="id_mng" value="<?= $result["id_manage"] ?>">
     <input type="hidden" class="form-control" name="id_local" value="<?= $result["id_local"] ?>">
     <label for="vlan_number">หมายเลข Vlan: </label>
     <input type="text" class="form-control" name="vlan_number" placeholder="หมายเลข Vlan..." value="<?= $result["vlan_num"] ?>">
    </div>
    <div class="form-group col-md-9">
     <label for="cust_name">ชื่อลูกค้า : </label>
     <input type="text" class="form-control" name="cust_name" placeholder="ชื่อลูกค้า..." value="<?= $result["cust_name"] ?>">
    </div>
   </div>
   <div class="form-row">
    <div class="form-group col-md-4">
     <label for="ip_add">IP Address</label>
     <input type="text" class="form-control" name="ip_add" placeholder="IP Address..." value="<?= $result["ip_address"] ?>">
    </div>
    <div class="form-group col-md-4">
     <label for="subnet_mask">Subnet mask</label>
     <input type="text" class="form-control" name="subnet_mask" placeholder="Subnet mask..." value="<?= $result["subnet"] ?>">
    </div>
    <div class="form-group col-md-4">
     <label for="gateway">Gateway</label>
     <input type="text" class="form-control" name="gateway" placeholder="Gateway..." value="<?= $result["ip_gate"] ?>">
    </div>
   </div>
   <div class="form-row">
    <div class="form-group col-md-4">
     <label for="remark">Modal : </label>
     <input type="text" class="form-control" name="remark" placeholder="Modal..." value="<?= $result["remark"] ?>">
    </div>
    <div class="form-group col-md-3">
     <label for="status">Status : </label>
     <select name="status" class="form-control">
     <option selected value="">เลือก...</option>
     <option value="1">ใช้งาน</option>
     <option value="0">ไม่ใช้งาน</option>
     </select>
    </div>
    <div class="form-group col-md-5">
     <label for="mac_add">Mac Address : </label>
     <input type="text" class="form-control" name="mac_add" placeholder="Mac Address..." value="<?= $result["mac_address"] ?>">
    </div>
   </div>
   <div class="form-row">
    <label for="address">ที่อยู่ : </label>
    <textarea style="margin-bottom: 10px;" type="text" class="form-control" name="address" placeholder="ที่อยู่..."><?= $result["address"] ?></textarea>
   </div>
   <div class="form-row">
    <div class="form-group col-md-6">
     <label for="longitude">Longitude : </label>
     <input type="text" class="form-control" name="longitude" placeholder="Longitude..." value="<?= $result["longitude"] ?>">
    </div>
    <div class="form-group col-md-6">
     <label for="latitude">Latitude : </label>
     <input type="text" class="form-control" name="latitude" placeholder="Latitude..." value="<?= $result["latitude"] ?>">
    </div>
   </div>
   <div class="form-row">
    <div class="form-group col-md-4">
     <label for="cat_id">CAT ID : </label>
     <input type="text" class="form-control" name="cat_id" placeholder="CAT ID..." value="<?= $result["cat_id"] ?>">
    </div>
    <div class="form-group col-md-4">
     <label for="phone">หมายเลขโทรศัพท์: </label>
     <input type="text" class="form-control" name="phone" placeholder="หมายเลขโทรศัพท์..." value="<?= $result["phone"] ?>">
    </div>
    <div class="form-group col-md-4">
     <label for="pwd">Password : </label>
     <input type="text" class="form-control" name="pwd" placeholder="Password..." value="<?= $result["password"] ?>">
    </div>
   </div>
   <div class="form-row">
    <div class="form-group col-md-6">
     <label for="serial_num">Serial number : </label>
     <input type="text" class="form-control" name="serial_num" placeholder="Serial number..." value="<?= $result["serial_num"] ?>">
    </div>
    <div class="form-group col-md-6">
     <label for="asset_code">Asset code : </label>
     <input type="text" class="form-control" name="asset_code" placeholder="Asset code..." value="<?= $result["asset_code"] ?>">
    </div>
    </div>
   <div class="form-row">
    <div class="form-group col-md-12" align="right">
     <button type="button" class="btn btn-success" onclick="submitUpdate();"><i class="fa fa-edit"></i> Update</button>
     <button type="button" class="btn btn-danger" onclick="clearEditFunction();"><i class="fa fa-sync-alt"></i> Reset</button>
    </div>
   </div>
  </form>
 </div>
 </div>
 <!-- End Row 2 -->
</div>
<!-- End Container -->
<?php require '../../layout/footer.php'; ?>

<script><?php require '../../js/check_edit_mng.js'; ?></script>