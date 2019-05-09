<?php require '../../layout/header_user.php'; ?>
<?php 
 require '../../database/db.php';

$strid = null;
  if(isset($_GET["id_node"]))
  {
    $strid = $_GET["id_node"];
    $strid2 = $_GET["id_local"];
  }

 $sql="SELECT * FROM data_node_l2 WHERE id_node = '".$strid."' ";
 $query = mysqli_query($conn,$sql);
 $result= mysqli_fetch_array($query);
?>

<!-- Page Content -->
<div class="container">
 <!-- Page Heading/Breadcrumbs -->
 <h1 class="mt-4 mb-3">Node <?= $result["node"]; ?> <?= $result["node_name"]; ?></h1>

 <ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="home.php">หน้าแรก</a>
  </li>
  <li class="breadcrumb-item">
    <a href="node_user.php">Network Node</a>
  </li>
  <li class="breadcrumb-item active">Node <?= $result["node"]; ?> <?= $result["node_name"]; ?></li>
 </ol>
 
 <div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
     <a class="nav-link active" id="v-pills-facility-tab" data-toggle="pill" href="#v-pills-facility" role="tab" aria-controls="v-pills-facility" aria-selected="true">Facility</a>
     <a class="nav-link" id="v-pills-odf-tab" data-toggle="pill" href="#v-pills-odf" role="tab" aria-controls="v-pills-odf" aria-selected="false">Optical Distribution Frame</a>
     <a class="nav-link" id="v-pills-eqm-tab" data-toggle="pill" href="#v-pills-eqm" role="tab" aria-controls="v-pills-eqm" aria-selected="false">ข้อมูลอุปกรณ์</a>
    </div>
   </div>
   <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
     <div class="tab-pane fade show active" id="v-pills-facility" role="tabpanel" aria-labelledby="v-pills-facility-tab"><?php require 'facility_node.php'; ?></div>
     <div class="tab-pane fade" id="v-pills-odf" role="tabpanel" aria-labelledby="v-pills-odf-tab"><?php require 'add_odf_node.php' ?></div>
     <div class="tab-pane fade" id="v-pills-eqm" role="tabpanel" aria-labelledby="v-pills-eqm-tab"><?php require 'tool_l2_user.php' ?></div>
    </div>
   </div>
 </div>
</div>

<?php require '../../layout/footer.php' ?>

