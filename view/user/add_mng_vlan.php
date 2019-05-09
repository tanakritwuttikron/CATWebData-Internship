  <?php
 require '../../database/db.php';

$strid = null;
 if(isset($_GET["id_local"]))
 {
   $strid = $_GET["id_local"];
 }

 $sql="SELECT * FROM data_local WHERE id_local = '".$strid."' ";
 $query = mysqli_query($conn,$sql);
?>

<div class="container">
 <!-- Row 1 -->
 <div class="row">
  <h3 class="mt-4 mb-3">เพิ่ม 
  ข้อมูล Vlan</h3>
  <div class="col-md-12">
   <div class="f-input-mng">
   <form name="insert_mng_vlan" id="mng_vlan" action="../../database/insert_mng_vlan.php" method="post">
    <div class="form-row">
     <input type="hidden" class="form-control" name="id_local" value="<?= $strid ?>">
     <div class="form-group col-md-3">
      <label for="vlan_number">หมายเลข Vlan: </label>
      <input type="text" class="form-control" name="vlan_number" placeholder="หมายเลข Vlan...">
     </div>
     <div class="form-group col-md-9">
      <label for="cust_name">ชื่อลูกค้า : </label>
      <input type="text" class="form-control" name="cust_name" placeholder="ชื่อลูกค้า ...">
     </div>
    </div>
    <div class="form-row">
     <div class="form-group col-md-4">
      <label for="ip_add">IP Address</label>
      <input type="text" class="form-control" name="ip_add" placeholder="IP Address...">
     </div>
     <div class="form-group col-md-4">
      <label for="subnet_mask">Subnet mask</label>
      <input type="text" class="form-control" name="subnet_mask" placeholder="Subnet mask...">
     </div>
     <div class="form-group col-md-4">
      <label for="gateway">Gateway</label>
      <input type="text" class="form-control" name="gateway" placeholder="Gateway...">
     </div>
    </div>
    <div class="form-row">
     <div class="form-group col-md-4">
      <label for="remark">Modal : </label>
      <input type="text" class="form-control" name="remark" placeholder="Modal...">
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
      <input type="text" class="form-control" name="mac_add" placeholder="Mac Address...">
     </div>
    </div>
    <div class="form-row">
     <label for="address">ที่อยู่ : </label>
     <textarea style="margin-bottom: 10px;" type="text" class="form-control" name="address" placeholder="ที่อยู่..."></textarea>
    </div>
    <div class="form-row">
     <div class="form-group col-md-6">
      <label for="longitude">Longitude : </label>
      <input type="text" class="form-control" name="longitude" placeholder="Longitude...">
     </div>
     <div class="form-group col-md-6">
      <label for="latitude">Latitude : </label>
      <input type="text" class="form-control" name="latitude" placeholder="Latitude...">
     </div>
    </div>
    <div class="form-row">
     <div class="form-group col-md-4">
      <label for="cat_id">CAT ID : </label>
      <input type="text" class="form-control" name="cat_id" placeholder="CAT ID...">
     </div>
     <div class="form-group col-md-4">
      <label for="phone">หมายเลขโทรศัพท์ : </label>
      <input type="text" class="form-control" name="phone" placeholder="หมายเลขโทรศัพท์...">
     </div>
     <div class="form-group col-md-4">
      <label for="pwd">Password : </label>
      <input type="text" class="form-control" name="pwd" placeholder="Password...">
     </div>
    </div>
    <div class="form-row">
     <div class="form-group col-md-6">
      <label for="serial_num">Serial number : </label>
      <input type="text" class="form-control" name="serial_num" placeholder="Serial number...">
     </div>
     <div class="form-group col-md-6">
      <label for="asset_code">Asset code : </label>
      <input type="text" class="form-control" name="asset_code" placeholder="Asset code...">
     </div>
     </div>
    <div class="form-row">
     <div class="form-group col-md-12" align="right">
      <button type="button" class="btn btn-success" onclick="submitSave();"><i class="fa fa-save"></i> Save</button>
      <button type="button" class="btn btn-danger" onclick="clearFunction();"><i class="fa fa-sync-alt"></i> Reset</button>
     </div>
    </div>
   </form>
  </div>
 </div>
 </div>
 <hr>
 <!-- End Row 1 -->
</div>
<!-- End Container -->

<script><?php require '../../js/check_save_mng.js'; ?></script>