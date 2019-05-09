<?php require '../../layout/header_user.php'; ?>
<?php
  require '../../database/db.php';

   $strid1 = null;
   $strid2 = null;
   $strKeyword1 = null;
  if(isset($_GET["id_edge"]))
  {
    $strid1 = $_GET["id_edge"];
    $strid2 = $_GET["id_cci"];
  }
  if(isset($_POST["txtKeyword1"]))
 {
  $strKeyword1 = $_POST["txtKeyword1"];
 }


 $sql = "SELECT * FROM ip_cci ic JOIN edge ed ON ic.id_edge = ed.id_edge WHERE ic.id_cci = '".$strid2."' ";
 $query = mysqli_query($conn,$sql);
 $result = mysqli_fetch_array($query);

 $sql2 = "SELECT * FROM detail_cci dcc 
  JOIN ip_cci ic ON ic.id_cci = dcc.id_cci
  JOIN edge ed ON ic.id_edge = ed.id_edge

  WHERE dcc.id_cci = '".$strid2."' AND dcc.cci_cat_id LIKE '%".$strKeyword1."%' ";
 
 $query2 = mysqli_query($conn,$sql2);
?>
<!-- Page Content -->
<div class="container">
 <!-- Page Heading/Breadcrumbs -->
 <h1 class="mt-4 mb-3">IP CCI ของ <?= $result["edge_name"]; ?></h1>

 <ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="home.php">หน้าแรก</a>
  </li>
  <li class="breadcrumb-item">
    <a href="edge_user.php">Edge</a>
  </li>
  <li class="breadcrumb-item">
    <a href="ip_cci_user.php?id_edge=<?= $strid1 ?>">IP CCI ของ <?= $result["edge_name"]; ?></a>
  </li>
  <li class="breadcrumb-item active">IP <?= $result["cci_ip"]; ?></li>
 </ol>

 <!-- Table -->
  <div class="col-sm-4">
   <div class="input-group">
     <div class="input-group-prepend">
       <span class="input-group-text fa fa-search" id="icon-search"></span>
     </div>
     <input type="search" class="form-control" id="search-id" placeholder="CAT ID...">
   </div>
  </div>

 <form action="edit_ip_cci.php?id_edge=<?= $result["id_edge"] ?>&id_cci=<?= $result["id_cci"] ?>" method="post" name="edit_ip_cci">
  <div class="row" style="margin-bottom: 20px;">
   <div class="col-sm-12 text-right">
    <button class="btn btn-success pull-right" name="submit_mult" id="buttonClass" type="button"><i class="fa fa-edit"></i> แก้ไข</button>
   </div>
  </div>
 <div class="row">
  <table class="table">
   <thead class="thead-dark">
    <tr>
     <th>IP</th>
     <th>Subnet</th>
     <th>Vlan</th>
     <th>CAT ID</th>
     <th>Name</th>
     <th>เลือก</th>
    </tr>
   </thead>
   <?php 
    while ($result2=mysqli_fetch_array($query2,MYSQLI_ASSOC)) { 
   ?>
   <tbody>
    <tr class="live-search-list">
     <td><?= $result2["ip_num"] ?></td>
     <td><?= $result2["cci_subnet"] ?></td>
     <td><?= $result2["cci_vlan"] ?></td>
     <td><?= $result2["cci_cat_id"] ?></td>
     <td><?= $result2["cci_name"] ?></td>
     <td><input class="chk" name="selector[]" type="checkbox" value="<?= $result2["id_detail_cci"]; ?>"></td>
    </tr>
   </tbody>
  <?php } ?>
  </table>
 </form>
 </div>
</div>

<?php require '../../layout/footer.php' ?>

<script><?php require '../../js/check_selecter.js' ?></script>
<script><?php require '../../js/search_list.js'; ?></script>
