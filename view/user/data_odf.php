<?php  

 $sql="SELECT * FROM route rt
   JOIN data_local dl 
    ON rt.id_local = dl.id_local 

   WHERE rt.id_local = '".$strid."'";
 $query = mysqli_query($conn,$sql);
?>

<div class="row">
 <h3 class="text-main">ข้อมูล Optical Distribution Frame</h3>
</div>

<table class="table">
 <thead class="thead-dark">
  <tr>
   <th class="col-sm-1">ลำดับ</th>
   <th class="col-sm-3">เส้นทาง</th>
   <th class="col-sm-3">กิโลเมตร</th>
   <th class="col-sm-1">แก้ไข้/ลบ</th>
  </tr>
 </thead>
 <tbody>
 <?php
  $count = 1;
  while ($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
 ?>
  <tr class="live-search-list">
   <td><?= $count++ ?></td>
   <td><?= $result["start_path"] ?> - <?= $result["end_path"] ?></td>
   <td><?= $result["kilometer"] ?></td>
   <td>
    <a href="tb_core.php?id_core=<?= $result["id_core"]; ?>&id_route=<?= $result["id_route"] ;?>"><button class="btn"><i class="fa fa-table"></i></button></a>
   </td>
  </tr>
<?php } ?>
</tbody>
</table>