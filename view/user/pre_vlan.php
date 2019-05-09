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
  <h1 class="mt-4 mb-3">ข้อมูล Vlan</h1>

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
      <li class="breadcrumb-item active">ข้อมูล Vlan</li>
    </ol>  

 <!-- Row 2 -->
 <div class="row">
  <div class="f-input-mng">
   <div class="form-row">
    <div class="form-group col-md-3">
     <label for="vlan_number">หมายเลข Vlan: <?= $result["vlan_num"] ?></label>
     <input type="hidden" class="form-control" name="id_mng" value="<?= $result["id_manage"] ?>">
     <div></div>
    </div>
    <div class="form-group col-md-4">
     <label for="local_name">สถานที่: <?= $result["local_name"] ?></label>
    </div>
    <div class="form-group col-md-5">
     <label for="cust_name">ชื่อลูกค้า: <?= $result["cust_name"] ?></label>
    </div>
   </div>
   <div class="form-row">
    <div class="form-group col-md-3">
     <label for="ip_add">IP Address : <?= $result["ip_address"] ?></label>
    </div>
    <div class="form-group col-md-4">
     <label for="subnet_mask">Subnet mask : <?= $result["subnet"] ?></label>
    </div>
    <div class="form-group col-md-5">
     <label for="gateway">Gateway : <?= $result["ip_gate"] ?></label>
    </div>
   </div>
   <div class="form-row">
    <div class="form-group col-md-3">
     <label for="remark">Modal : <?= $result["remark"] ?></label>
    </div>
    <div class="form-group col-md-4">
     <label for="status">Status : 
      <?php if ($result["status"]==1) {
        echo 'ใช้งาน';
       } else {
        echo 'ไม่ใช้งาน';
       } ?>
     </label>
    </div>
    <div class="form-group col-md-5">
     <label for="mac_add">Mac Address : <?= $result["mac_address"] ?></label>
    </div>
   </div>
   <div class="form-row">
    <div class="form-group col-md-12">
      <label for="address">ที่อยู่: <?= $result["address"] ?></label>
    </div>
   </div>
   <div class="form-row">
    <div class="form-group col-md-6">
     <label for="longitude">Longitude : <?= $result["longitude"] ?></label>
    </div>
    <div class="form-group col-md-6">
     <label for="latitude">Latitude : <?= $result["latitude"] ?></label>
    </div>
   </div>
   <div class="form-row">
    <div class="form-group col-md-3">
     <label for="cat_id">CAT ID : <?= $result["cat_id"] ?></label>
    </div>
    <div class="form-group col-md-4">
     <label for="phone">หมายเลขโทรศัพท์: <?= $result["phone"] ?></label>
    </div>
    <div class="form-group col-md-5">
     <label for="pwd">Password : <?= $result["password"] ?></label>
    </div>
   </div>
   <div class="form-row">
    <div class="form-group col-md-6">
     <label for="serial_num">Serial number : <?= $result["serial_num"] ?></label>
    </div>
    <div class="form-group col-md-6">
     <label for="asset_code">Asset code : <?= $result["asset_code"] ?></label>
    </div>
    </div>
 </div>
 </div>
 <!-- End Row 2 -->
</div>
<!-- End Container -->
<?php require '../../layout/footer_mng.php'; ?>

