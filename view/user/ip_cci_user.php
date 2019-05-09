<?php require '../../layout/header_user.php'; ?>
<?php
  require '../../database/db.php';

   $strid = null;
  if(isset($_GET["id_edge"]))
  {
    $strid = $_GET["id_edge"];
  }

 $sql="SELECT * FROM edge WHERE id_edge = '".$strid."'";
 $query = mysqli_query($conn,$sql);
 $result = mysqli_fetch_array($query);

 $sql2 ="SELECT * FROM ip_cci WHERE id_edge = '".$strid."'";
 $query2 = mysqli_query($conn,$sql2);

?>
<!-- Page Content -->
<div class="container">
 <!-- Page Heading/Breadcrumbs -->
 <h1 class="mt-4 mb-3">IP CCI ของ <?= $result["edge_name"]; ?> (<?= $result["edge_ip"]; ?>)</h1>

 <ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="home.php">หน้าแรก</a>
  </li>
  <li class="breadcrumb-item">
    <a href="edge_user.php">Edge</a>
  </li>
  <li class="breadcrumb-item active">IP CCI ของ <?= $result["edge_name"]; ?> (<?= $result["edge_ip"]; ?>)</li>
 </ol>
 

 <div class="row">
  <?php
  while ($result2=mysqli_fetch_array($query2,MYSQLI_ASSOC)) {
  ?>
  <div class="col-sm-3">
   <a target ="_blank" href="ip_cci_page.php?id_edge=<?= $result2["id_edge"] ?>&id_cci=<?= $result2["id_cci"] ?>">
    <button class="btn btn-outline-primary"><?= $result2["cci_ip"]; ?>.XXX</button>
   </a>
   <a href="" class="edit-ip_cci" data-toggle="modal" data-target="#edit_ip_cci" data-edge-id="<?= $result2["id_edge"] ?>" data-cci-id="<?= $result2["id_cci"] ?>" data-cci-ip="<?= $result2["cci_ip"] ?>"><i class="fa fa-edit"></i></a>
   <a href="javascript:void(0);" onclick="if (! confirm('ยืนยันการลบใช่หรือไม่ ?')){return false;}else{ window.location = '../../database/delete_cci.php?id_cci=<?= $result2["id_cci"];?>&id_edge=<?= $result2["id_edge"]; ?>'; }" style="color: red;"><i class="fa fa-trash"></i></a>
   <p>
  </div>
 <?php } ?>
 </div>
 <hr>
 <div class="row">
  <div class="col-sm-12 text-right">
    <button type="button" class="btn btn-success btn-md" id="btn-add" data-toggle="modal" data-target="#add_cci"><i class="fa fa-plus"></i> เพิ่ม IP CCI</button>
  </div>
  <?php require '../modal/md_add_cci.php' ?>
  <?php require '../modal/md_edit_cci.php' ?>
 </div>
</div>

<?php require '../../layout/footer.php' ?>

<script><?php require '../../js/check_save_cci.js' ?></script>
<script><?php require '../../js/edit_cci.js' ?></script>
