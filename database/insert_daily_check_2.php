<?php 
if (!isset($_SESSION))
{
 session_start(); 
}

require 'db.php';

if ($_SESSION["status"] === "1") {

for($i=1;$i<=$_POST["hdnCount"];$i++)
 {
  $id_member = $_SESSION["id_member"];
  $date_daily = $_POST["date_daily"];
  $time_work = $_POST["time_work"];
  $detail = $_POST["txtdetail$i"];
  $text = str_replace("\n", "<br>\n", "$detail"); 

  $strSQL = "INSERT INTO data_daily_3 (id_member, date_daily, time_work, report, daily_case, level, status_daily, location, detail) VALUES ('".$id_member."', '".$date_daily."', '".$time_work."', '".$_POST["txtreport$i"]."', '".$_POST["txtcase$i"]."', '".$_POST["txtlevel$i"]."', '".$_POST["txtstatus$i"]."', '".$_POST["txtlocation$i"]."', '".$text."'); ";
  $objQuery = mysqli_query($conn,$strSQL);
  echo $strSQL;
 // header("Location: ../view/user/daily_check.php");
 } 
 

 header("Location: ../view/admin/report_day_frm2.php?date_daily=".$date_daily."&time_work=".$time_work."");
 
}elseif ($_SESSION["status"] === "2") {

 for($i=1;$i<=$_POST["hdnCount"];$i++)
 {
  $id_member = $_SESSION["id_member"];
  $date_daily = $_POST["date_daily"];
  $time_work = $_POST["time_work"];
  $detail = $_POST["txtdetail$i"];
  $text = str_replace("\n", "<br>\n", "$detail"); 
  
  $strSQL = "INSERT INTO data_daily_3 (id_member, date_daily, time_work, report, daily_case, level, status_daily, location, detail) VALUES ('".$id_member."', '".$date_daily."', '".$time_work."', '".$_POST["txtreport$i"]."', '".$_POST["txtcase$i"]."', '".$_POST["txtlevel$i"]."', '".$_POST["txtstatus$i"]."', '".$_POST["txtlocation$i"]."', '".$text."'); ";
  $objQuery = mysqli_query($conn,$strSQL);
  echo $strSQL;
 // header("Location: ../view/user/daily_check.php");
 } 
 

 header("Location: ../view/user/report_day_frm2.php?date_daily=".$date_daily."&time_work=".$time_work."");
}

?>
