<?php  

 $sql="SELECT * FROM route rt
   JOIN data_local dl 
    ON rt.id_local = dl.id_local
   JOIN core cr
    ON rt.id_core = cr.id_core

   WHERE rt.id_local = '".$strid."'";

 $query = mysqli_query($conn,$sql);

?>
<div class="container">
 <!-- Row 1 -->
 <div class="row">
  <h3 class="mt-4 mb-3">เพิ่มข้อมูล เส้นทาง</h3>
  <div class="col-md-12">
   <form name="insert_odf" id="odf" action="../../database/insert_odf.php" method="post">
    <div class="form-row">
     <input type="hidden" class="form-control" name="id_local" value="<?= $strid ?>">
     <div class="form-group col-md-2">
      <label for="core_num">เลือก Core: </label>
      <select name="core_num" class="form-control">
      <option selected value="">เลือก...</option>
      <option value="1">8</option>
      <option value="2">12</option>
      <option value="3">24</option>
      <option value="4">48</option>
      </select>
     </div>
     <div class="form-group col-md-3">
      <label for="start_path">ต้นทาง : </label>
      <input type="text" class="form-control" name="start_path" placeholder="ต้นทาง ...">
     </div>
     <div class="form-group col-md-3">
      <label for="end_path">ปลายทาง : </label>
      <input type="text" class="form-control" name="end_path" placeholder="ปลายทาง ...">
     </div>
     <div class="form-group col-md-3">
      <label for="kilometer">กี่กิโลเมตร : </label>
      <input type="text" class="form-control" name="kilometer" placeholder="กี่กิโลเมตร ...">
     </div>
    </div>
    <div class="form-row">
     <div class="form-group col-md-11" align="right">
      <button type="button" class="btn btn-success" onclick="submitSaveOdf();"><i class="fa fa-save"></i> บันทึก</button>
     </div>
    </div>
   </form>
  </div>
 </div>
 <hr>
 <!-- End Row 1 -->
  <!-- Table -->
  <div class="row">
   <div class="text-main">
    <label>ค้นหาข้อมูลเส้นทาง</label>
    <div class="input-group input-group-md mb-3">
      <input type="search" class="form-control" id="search-id-odf" placeholder="Search...">
    </div>
   </div>
   <div class="tb-scroll">
   <table class="table">
    <thead class="thead-dark text-center">
     <tr>
      <th>ลำดับ</th>
      <th>เส้นทาง</th>
      <th>กิโลเมตร</th>
      <th>ดูข้อมูล/ลบ</th>
     </tr>
    </thead>
    <?php
     $count = 1;
     while ($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
    ?>
    <tbody class="text-center">
     <tr class="live-search-list-odf">
      <td><?= $count++ ?></td>
      <td><?= $result["start_path"]; ?> - <?= $result["end_path"]; ?> (<?= $result["num_core"] ?> Core)</td>
      <td><?= $result["kilometer"]; ?></td>
      <td>
       <a href="tb_core.php?id_core=<?= $result["id_core"]; ?>&id_route=<?= $result["id_route"] ;?>"><button class="btn"><i class="fa fa-table"></i></button></a>
       <button type="button" class="btn edit-odf" id="btn-edit" data-toggle="modal" data-target="#edit_odf"
       data-route-id="<?= $result["id_route"] ?>" data-local-id="<?= $strid ?>"
       data-core-id="<?= $result["id_core"] ?>" data-start="<?= $result["start_path"] ?>" data-end="<?= $result["end_path"] ?>" data-kilometer="<?= $result["kilometer"] ?>"><i class="fa fa-edit"></i></button>
       <a href="javascript:void(0);" onclick="if (! confirm('ยืนยันการลบใช่หรือไม่ ?')){return false;}else{ window.location = '../../database/delete_odf.php?id_route=<?= $result["id_route"];?>&id_local=<?= $strid; ?>'; }"><button class="btn" id="btn-delete"><i class="fa fa-trash"></i></button></a>
      </td>
     </tr>
    </tbody>
    <?php require '../modal/md_edit_odf.php'; ?>
    <?php
    }
    ?>
   </table>
  </div>
  </div>
  <!-- End Table -->
 </div>
 <!-- End Container -->
 <?php require '../../layout/footer.php'; ?>

 <script><?php require '../../js/search_list.js'; ?></script>
 <script><?php require '../../js/edit_odf.js' ?></script>
 <script><?php require '../../js/check_save_odf.js' ?></script>
