<?php  
require 'db.php';

 $strDate = null;
 $strTime = null;

 if(isset($_GET["date_daily"]))
 {
  $strDate = $_GET["date_daily"];
  $strTime = $_GET["time_work"];
  function DateThai($strDate)
   {
     $strYear = date("Y",strtotime($strDate))+543;
     $strMonth= date("n",strtotime($strDate));
     $strDay= date("j",strtotime($strDate));
     $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
     $strMonthThai=$strMonthCut[$strMonth];
     return "$strDay $strMonthThai $strYear";
   }
 }

  $sql = "SELECT * FROM data_daily_3 WHERE date_daily = '".$strDate."' AND time_work = '".$strTime."' ";
 $query = mysqli_query($conn,$sql);

 $sql2 = "SELECT * FROM data_daily_3 dd
 JOIN member mb ON dd.id_member = mb.id_member
 WHERE dd.date_daily = '".$strDate."' AND dd.time_work = '".$strTime."' GROUP BY dd.id_member Having count(dd.id_member) >= 1 ORDER BY dd.id_member ASC";
 $query2 = mysqli_query($conn,$sql2);

 //excel.php  
 // header('Content-Type: application/xls');  
 // header('Content-disposition: attachment; filename='.rand().'.xls'); 

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap Core CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

   <!-- CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="../css/style_web.css">

   <!-- Javascript -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

   <!-- Fonts awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

   <!-- Font -->
   <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
  </head>
 <body onload="window.print();">
 <div class="container">
  <h3>สรุปสถานการณ์ของ สค.เชียงราย  ส่งต่อเจ้าหน้าที่เวร</h3>
  <h5> ประจำวันที่ : <?= DateThai($strDate); ?> </h5>
  <h5> เวรผลัด : <?= $strTime; ?> </h5>
  <h5> ชื่อ : 
  <?php 
   while ($result2=mysqli_fetch_array($query2,MYSQLI_ASSOC)) { 
  ?>
    <?= $result2["username"] ?>
  <?php } ?>  
  </h5>
  <br>

   <table class="table table-bordered" id="tb-export" id="tb_daily_check2_frm1">
    <thead class="text-center">
     <tr>
      <th id="tb-export">Report</th>
      <th id="tb-export">Case</th>
      <th id="tb-export">Level</th>
      <th id="tb-export">Status</th>
      <th id="tb-export">Location</th>
      <th id="tb-export">Detail</th>
     </tr>
     </thead>
     <?php 
      while ($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) {
     ?>
    <tbody>
    <tr>
      <td id="tb-export"><?= $result["report"] ?></td>
      <td id="tb-export"><?= $result["daily_case"] ?></td>
      <td id="tb-export"><?= $result["level"] ?></td>
      <td id="tb-export"><?= $result["status"] ?></td>
      <td id="tb-export"><?= $result["location"] ?></td>
      <td id="tb-export"><?= $result["detail"] ?></td>
    </tr>
    </tbody>
  <?php } ?>
   </table>

   <div class="row text-center">
    <div class="col-sm-6" style="margin-top: 100px;">
     <label>.....................................................................................</label><br>
     <label>(.....................................................................................)</label><br>
     <label>พนักงานประจำรอบเวร</label>
    </div>
    <div class="col-sm-6" style="margin-top: 100px;">
     <label>.....................................................................................</label><br>
     <label>(  นายปรัญชา  พันธ์แก้ว  )</label><br>
     <label> นทค.7 หัวหน้าฝ่ายงาน </label>
    </div>
   </div>
 </div>
</body>
</html>
