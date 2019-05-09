<?php  
require 'db.php';
 $strnum_time = null;
 $strnum_month = null;
 $strnum_year = null;

 if ($_POST["txtnum_time"] != "") {
   $strnum_time = $_POST["txtnum_time"];
   $strnum_month = $_POST["txtnum_month"];
   $strnum_year = $_POST["txtnum_year"];

   $sql1="SELECT * FROM data_daily dd JOIN member mb ON dd.id_member = mb.id_member WHERE MONTH(dd.date_daily) = '".$strnum_month."' AND dd.time_work = '".$strnum_time."' AND YEAR(dd.date_daily) = '".$strnum_year."' ";
   $query1 = mysqli_query($conn,$sql1);

   $sql2="SELECT * FROM data_daily_2 dd JOIN member mb ON dd.id_member = mb.id_member WHERE MONTH(dd.date_daily) = '".$strnum_month."' AND dd.time_work = '".$strnum_time."' AND YEAR(dd.date_daily) = '".$strnum_year."'";
   $query2 = mysqli_query($conn,$sql2);

   $sql3 = "SELECT * FROM data_daily dd JOIN member mb ON dd.id_member = mb.id_member WHERE MONTH(dd.date_daily) = '".$strnum_month."' AND dd.time_work = '".$strnum_time."' AND YEAR(dd.date_daily) = '".$strnum_year."' GROUP BY dd.date_daily,dd.time_work Having count(dd.date_daily) >= 1 ORDER BY dd.date_daily ASC ";
   $query3 = mysqli_query($conn,$sql3);
   $result3 = mysqli_fetch_array($query3);

   $sql4 = "SELECT * FROM data_daily dd JOIN member mb ON dd.id_member = mb.id_member WHERE MONTH(dd.date_daily) = '".$strnum_month."' AND dd.time_work = '".$strnum_time."' AND YEAR(dd.date_daily) = '".$strnum_year."' GROUP BY dd.time_work Having count(dd.time_work) >= 1 ORDER BY dd.time_work ASC";
  $query4 = mysqli_query($conn,$sql4);

  if (!$result3) {
   echo "<script>
      alert('ไม่พบข้อมูลที่คุณต้องการ กรุณากรอกใหม่ !');
      location.href = '../user/history_month_frm1.php';
      </script>";
      exit();
  }

 }elseif ($_POST["txtnum_time"] == "") {
  $strnum_month = $_POST["txtnum_month"];
  $strnum_year = $_POST["txtnum_year"];

  $sql1="SELECT * FROM data_daily dd JOIN member mb ON dd.id_member = mb.id_member WHERE MONTH(dd.date_daily) = '".$strnum_month."' AND YEAR(dd.date_daily) = '".$strnum_year."'";
  $query1 = mysqli_query($conn,$sql1);

  $sql2="SELECT * FROM data_daily_2 dd JOIN member mb ON dd.id_member = mb.id_member WHERE MONTH(dd.date_daily) = '".$strnum_month."' AND YEAR(dd.date_daily) = '".$strnum_year."'";
   $query2 = mysqli_query($conn,$sql2);

  $sql3 = "SELECT * FROM data_daily dd JOIN member mb ON dd.id_member = mb.id_member WHERE MONTH(dd.date_daily) = '".$strnum_month."' AND YEAR(dd.date_daily) = '".$strnum_year."' GROUP BY dd.date_daily,dd.time_work Having count(dd.date_daily) >= 1 ORDER BY dd.date_daily ASC ";
  $query3 = mysqli_query($conn,$sql3);
  $result3 = mysqli_fetch_array($query3);

  $sql4 = "SELECT * FROM data_daily dd JOIN member mb ON dd.id_member = mb.id_member WHERE MONTH(dd.date_daily) = '".$strnum_month."' AND YEAR(dd.date_daily) = '".$strnum_year."' GROUP BY dd.time_work Having count(dd.time_work) >= 1 ORDER BY dd.time_work ASC";
  $query4 = mysqli_query($conn,$sql4);

  if (!$result3) {
   echo "<script>
      alert('ไม่พบข้อมูลที่คุณต้องการ กรุณากรอกใหม่ !');
      location.href = '../user/history_month_frm1.php';
      </script>";
      exit();
  }
 }

 $strTime = null;
 $strDate = null;


 if(isset($result3["date_daily"]))
 {
  $strTime = $result3["time_work"];
  $strDate = $result3["date_daily"];
  function DateThai($strDate)
   {
     $strYear = date("Y",strtotime($strDate))+543;
     $strMonth= date("n",strtotime($strDate));
     $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
     $strMonthThai=$strMonthCut[$strMonth];
     return "$strMonthThai $strYear";
   }
 }

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
  <h3>สรุปเหตุขัดข้องวงจร ของ สค.เชียงราย  ส่งต่อเจ้าหน้าที่เวร</h3>
  <h5> ประจำวันที่ : <?= DateThai($strDate); ?> </h5>
  <h5> เวรผลัด : <?= $result3["time_work"]; ?> </h5>
  <h5> ชื่อ : 
  <?php 
   while ($result4=mysqli_fetch_array($query4,MYSQLI_ASSOC)) { 
  ?>
    <?= $result4["username"] ?>
  <?php } ?> 
  </h5>
  <br>

  <table class="table table-bordered" id="tb-export" style="page-break-after: always;">
    <thead class="text-center">
     <tr>
      <th rowspan="3" id="tb-export"><div class="tr-daily">Ticket No.</div></th>
      <th rowspan="3" id="tb-export"><div class="tr-daily">CAT ID</div></th>
      <th colspan="8" id="tb-export">Service</th>
      <th rowspan="3" id="tb-export"><div class="tr-daily">Total Ticket</div></th>
      <th rowspan="3" id="tb-export"><div class="tr-daily">Comment</div></th>
     </tr>
     <tr>
      <td colspan="2" id="tb-export">CAT MPLS</td>
      <td colspan="2" id="tb-export">CAT Ethernet</td>
      <td colspan="2" id="tb-export">CAT internet (CCI)</td>
      <td colspan="2" id="tb-export">CAT Orther</td>
     </tr>
     <tr>
      <td id="tb-export"> < 4Hr. </td>
      <td id="tb-export"> > 4Hr. </td>
      <td id="tb-export"> < 4Hr. </td>
      <td id="tb-export"> > 4Hr. </td>
      <td id="tb-export"> < 4Hr. </td>
      <td id="tb-export"> > 4Hr. </td>
      <td id="tb-export"> < 4Hr. </td>
      <td id="tb-export"> > 4Hr. </td>
     </tr>
    </thead>
    <?php 
     $sum = 0;
     while ($result1=mysqli_fetch_array($query1,MYSQLI_ASSOC)) { 
      $sum += (int)$result1['total_ticket'];
    ?>
    <tbody>
    <tr>
      <td id="tb-export"><?= $result1["ticket_no"] ?></td>
      <td id="tb-export"><?= $result1["cat_id"] ?></td>
      <td id="tb-export"><?= $result1["cat_mpls_hr1"] ?></td>
      <td id="tb-export"><?= $result1["cat_mpls_hr2"] ?></td>
      <td id="tb-export"><?= $result1["cat_ethernet_hr3"] ?></td>
      <td id="tb-export"><?= $result1["cat_ethernet_hr4"] ?></td>
      <td id="tb-export"><?= $result1["cat_internet_hr5"] ?></td>
      <td id="tb-export"><?= $result1["cat_internet_hr6"] ?></td>
      <td id="tb-export"><?= $result1["cat_other_hr7"] ?></td>
      <td id="tb-export"><?= $result1["cat_other_hr8"] ?></td>
      <td id="tb-export"><?= $result1["total_ticket"] ?></td>
      <td id="tb-export" style="word-break: break-word;"><?= $result1["comment"] ?></td>
    </tr>
    </tbody>
   <?php } ?>
   <tfoot>
    <tr>
     <td colspan="10" id="tb-export">สรุปเหตุขัดข้องวงจร ของ สค.เชียงราย ประจำวันทั้งหมด :</td>
     <td id="tb-export"><?= $sum; ?> ราย</td>
     <td></td>
    </tr> 
   </tfoot>
   </table>
   <br>

   <table class="table table-bordered" id="tb-export">
    <thead class="text-center">
     <tr>
      <th rowspan="3" id="tb-export"><div class="tr-daily">Ticket No.</div></th>
      <th rowspan="3" id="tb-export"><div class="tr-daily">CAT ID</div></th>
      <th colspan="2" id="tb-export">Service</th>
      <th rowspan="3" id="tb-export"><div class="tr-daily">Total Ticket</div></th>
      <th rowspan="3" id="tb-export"><div class="tr-daily">Comment</div></th>
     </tr>
     <tr>
      <td colspan="2" id="tb-export">C Internet</td>
     </tr>
     <tr>
      <td id="tb-export"> < 22Hr. </td>
      <td id="tb-export"> > 22Hr. </td>
     </tr>
     </thead>
     <?php 
      $sum2 = 0;
      while ($result2=mysqli_fetch_array($query2,MYSQLI_ASSOC)) { 
      $sum2 += (int)$result2['total_ticket'];
     ?>
    <tbody>
    <tr>
      <td id="tb-export"><?= $result2["ticket_no"] ?></td>
      <td id="tb-export"><?= $result2["cat_id"] ?></td>
      <td id="tb-export"><?= $result2["c_internet_hr1"] ?></td>
      <td id="tb-export"><?= $result2["c_internet_hr2"] ?></td>
      <td id="tb-export"><?= $result2["total_ticket"] ?></td>
      <td id="tb-export" style="word-break: break-word;"><?= $result2["comment"] ?></td>
    </tr>
    </tbody>
  <?php } ?>
   <tfoot>
    <tr>
     <td colspan="4" id="tb-export">สรุปเหตุขัดข้องวงจร ของ สค.เชียงราย ประจำวันทั้งหมด :</td>
     <td id="tb-export"><?= $sum2; ?> ราย</td>
     <td></td>
    </tr> 
   </tfoot>
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
