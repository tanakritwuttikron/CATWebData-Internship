<!-- Connect DB -->
<?php 
 require '../../database/db.php';

 $strid = null;
  if(isset($_GET["id_local"]))
  {
    $strid = $_GET["id_local"];
  }

 $sql="SELECT * FROM data_node_l2 WHERE id_local = '".$strid."' ORDER BY node_name ASC";
 $query = mysqli_query($conn,$sql);

 $sql2="SELECT * FROM data_local WHERE id_local = '".$strid."'";
 $query2 = mysqli_query($conn,$sql2);
 $result2 = mysqli_fetch_array($query2);
?>
<!-- End Connect DB -->

 <!-- Page Heading/Breadcrumbs -->
 <h1 class="mt-4 mb-3">เพิ่มข้อมูล Node L2</h1>
 <hr>

 <!-- Row 2 -->
 <div class="row">
  <div class="f-input-local">
   <form name="form_node" action="../../database/insert_node_l2.php" method="post">
    <div class="form-row">
    <div class="form-group col-sm-6">
     <input type="hidden" class="form-control" id="id_local" name="id_local" value="<?= $strid; ?>">
     <label>ชื่อสถานที่ :</label>
     <input type="text" class="form-control" id="node_name" name="node_name" placeholder="ชื่อสถานที่ ...">
    </div>
    <div class="form-group col-sm-6">
     <label>IP address :</label>
     <input type="text" class="form-control" id="node_ip" name="node_ip" placeholder="IP Address ...">
    </div>
    </div>
    <div class="form-row">
     <div class="form-group col-sm-6">
     <label>Latitude :</label>
     <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Latitude ...">
    </div>
    <div class="form-group col-sm-6">
     <label>Longitude :</label>
     <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Longitude">
    </div>
    </div>
    <div class="form-row">
     <div class="form-group col-sm-4">
     <label>ชื่อย่อ 3 หลัก :</label>
     <input type="text" class="form-control" id="initials" name="initials" placeholder="ชื่อย่อ 3 หลัก ...">
    </div>
    <div class="form-group col-sm-4">
     <label>Node :</label>
     <input type="text" class="form-control" disabled="disabled" id="node" name="node" value="L2">
    </div>
    <div class="form-group col-sm-4">
     <label>OldsiteCode :</label>
     <input type="text" class="form-control" id="old_site_code" name="old_site_code" placeholder="OldsiteCode ...">
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-sm-12">
     <button type="button" class="btn btn-success btn-lg btn-block" onclick="submitSaveNode();"><i class="fa fa-save"></i> SAVE</button>
    </div>
    </div>
   </form>
  </div>
 </div>
 <!-- End Row 2 -->
 <!-- Table -->
 <div class="row">
  <div class="text-main">
   <label>ข้อมูล Node L2 ของ Node <?= $result2["node"] ?> <?= $result2["local_name"]; ?></label>
  </div>
 </div>
 <hr>

 <div class="row">
   <?php
    while ($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
   ?>
   <div class="col-sm-4">
    <a target ="_blank" href="../user/detail_node_l2_user.php?id_local=<?= $strid ?>&id_node=<?= $result["id_node"] ?>">
     <button class="btn btn-outline-primary"><?= $result["node_name"]; ?></button>
    </a>
    <a href="" class="edit-node-l2" data-toggle="modal" data-target="#edit_node_l2" data-local-id="<?= $result["id_local"] ?>" data-node-id="<?= $result["id_node"] ?>" data-node-name="<?= $result["node_name"] ?>" data-node-ip="<?= $result["node_ip"] ?>" data-node-latitude="<?= $result["latitude"] ?>" data-node-longitude="<?= $result["longitude"] ?>" data-node-initials="<?= $result["initials"] ?>" data-node-node="<?= $result["node"] ?>" data-node-old="<?= $result["old_site_code"] ?>"><i class="fa fa-edit"></i></a>
    <a href="javascript:void(0);" onclick="if (! confirm('ยืนยันการลบใช่หรือไม่ ?')){return false;}else{ window.location = '../../database/delete_node_l2.php?id_local=<?= $strid ?>&id_node=<?= $result["id_node"];?>'; }" style="color: red;"><i class="fa fa-trash"></i></a>
    <p>
   </div>
  <?php require '../modal/md_edit_node_l2.php'; ?>
  <?php } ?>
 </div>
 <!-- End Table -->

<script><?php require '../../js/check_save_local.js'; ?></script>
<script><?php require '../../js/search_list.js'; ?></script>
<script><?php require '../../js/edit_local.js' ?></script>