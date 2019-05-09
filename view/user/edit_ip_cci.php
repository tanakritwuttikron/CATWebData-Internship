<?php require '../../layout/header_user.php'; ?>
<?php
 require '../../database/db.php';

 $strid1 = null;
 if(isset($_GET["id_edge"]))
  {
    $strid1 = $_GET["id_edge"];
  }
 $sql2 = "SELECT * FROM ip_cci ic JOIN edge ed ON ic.id_edge = ed.id_edge WHERE ic.id_edge = '".$strid1."' ";
 $query2 = mysqli_query($conn,$sql2);
 $result2 = mysqli_fetch_array($query2);
?>
<!-- Page Content -->
<div class="container">
 <!-- Page Heading/Breadcrumbs -->
 <h1 class="mt-4 mb-3">IP CCI ของ <?= $result2["edge_name"]; ?></h1>

 <ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="home.php">หน้าแรก</a>
  </li>
  <li class="breadcrumb-item">
    <a href="edge_user.php">Edge</a>
  </li>
  <li class="breadcrumb-item">
    <a href="ip_cci_user.php?id_edge=<?= $strid1 ?>">IP CCI ของ <?= $result2["edge_name"]; ?></a>
  </li>
  <li class="breadcrumb-item active">IP <?= $result2["cci_ip"]; ?></li>
 </ol>

 <form class="form-horizontal" action="../../database/update_ip_cci.php" method="post" name="edit_detail_cci">
 <?php
  $selector = $_POST["selector"];
  $row = count($selector);
 for($i=0; $i < $row; $i++)
 {
  $sql = "SELECT * FROM detail_cci WHERE id_detail_cci='".$selector[$i]."'";
  $query = mysqli_query($conn,$sql);
   while($result = mysqli_fetch_array($query))
   {
 ?>
 <div class="row">
  <div class="form-group col-md-1">
  <input name="id_edge" type="hidden" value="<?=  $result['id_edge'] ?>" />
  <input name="id_cci" type="hidden" value="<?=  $result['id_cci'] ?>" />
  <input name="id_detail_cci<?= $i; ?>" type="hidden" value="<?= $result['id_detail_cci']; ?>" />
  <label>&nbsp;</label>
  <p> IP : <?= $result['ip_num'] ?></p>
  <input name="ip_num" type="hidden" value="<?=  $result['ip_num'] ?>" />
  </div>
  <div class="form-group col-md-3">
  <label> Subnet</label>
   <input class="form-control" name="cci_subnet<?= $i; ?>" type="text" value="<?= $result['cci_subnet'] ?>" />
  </div>
  <div class="form-group col-md-2">
  <label> Vlan</label>
   <input class="form-control" name="cci_vlan<?= $i; ?>" type="text" value="<?= $result['cci_vlan'] ?>" />
  </div>
  <div class="form-group col-md-3">
  <label> CAT ID</label>
   <input class="form-control" name="cci_cat_id<?= $i; ?>" type="text" value="<?= $result['cci_cat_id'] ?>" />
  </div>
  <div class="form-group col-md-3">
  <label> Name</label>
   <input class="form-control" name="cci_name<?= $i; ?>" type="text" value="<?= $result['cci_name'] ?>" />
  </div>
 </div>
  <hr>
 <?php } } ?>
 <div class="col-sm-12 text-right">
  <button class="btn btn-success" name="submit_mult" onclick="submitUpdateCci();"><i class="fa fa-save"></i> บันทึก</button>
  <input type="hidden" name="hdnLine" value="<?php echo $i;?>">
 </div>
 </form>
</div>
<?php require '../../layout/footer.php' ?>
<script><?php require '../../js/edit_ip_cci.js' ?></script>

