<?php 
if (!isset($_SESSION))
{
 session_start(); 
}

require 'db.php';
 $comment = $_POST["txtcomment$i"];
 $text = str_replace("\n", "<br>\n", "$descrip"); 

if ($_SESSION["status"] === "1") {

 for($i=1;$i<=$_POST["hdnCount1"];$i++)
 { 
   $id_member = $_SESSION["id_member"];
   $date_daily = $_POST["date_daily"];
   $time_work = $_POST["time_work"];
   $comment = $_POST["txtcomment$i"];
   $text = str_replace("\n", "<br>\n", "$comment"); 

   $strSQL = "INSERT INTO data_daily (id_member, date_daily, time_work, ticket_no, cat_id, cat_mpls_hr1,  cat_mpls_hr2, cat_ethernet_hr3, cat_ethernet_hr4, cat_internet_hr5, cat_internet_hr6, cat_orther_hr7, cat_other_hr8, total_ticket, comment) VALUES ('".$id_member."', '".$date_daily."', '".$time_work."', '".$_POST["txtticket_no$i"]."', '".$_POST["txtcat_id$i"]."', '".$_POST["txthr1$i"]."', '".$_POST["txthr2$i"]."', '".$_POST["txthr3$i"]."', '".$_POST["txthr4$i"]."', '".$_POST["txthr5$i"]."', '".$_POST["txthr6$i"]."', '".$_POST["txthr7$i"]."', '".$_POST["txthr8$i"]."', '".$_POST["txttotal_ticket$i"]."', '".$text."'); ";
 $objQuery = mysqli_query($conn,$strSQL);
 echo $strSQL;
 // header("Location: ../view/user/daily_check.php");
 }
 for($i=1;$i<=$_POST["hdnCount2"];$i++)
 {
   $id_member = $_SESSION["id_member"];
   $date_daily = $_POST["date_daily"];
   $time_work = $_POST["time_work"];
   $comment2 = $_POST["txtcomment2$i"];
   $text2 = str_replace("\n", "<br>\n", "$comment2"); 

   $strSQL = "INSERT INTO data_daily_2 (id_member, date_daily, time_work, ticket_no, cat_id, c_internet_hr1, c_internet_hr2, total_ticket, comment) VALUES ('".$id_member."', '".$date_daily."', '".$time_work."', '".$_POST["txtticket_no2$i"]."', '".$_POST["txtcat_id2$i"]."', '".$_POST["txtcat_internet2_hr1$i"]."', '".$_POST["txtcat_internet2_hr2$i"]."', '".$_POST["txttotal_ticket2$i"]."', '".$text2."'); ";
 $objQuery = mysqli_query($conn,$strSQL);
 echo $strSQL;
 // header("Location: ../view/user/daily_check.php");
 } 
 
 header("Location: ../view/admin/daily_check.php?date_daily=".$date_daily."&time_work=".$time_work."");
 
}elseif ($_SESSION["status"] === "2") {

  for($i=1;$i<=$_POST["hdnCount1"];$i++)
 {
  $id_member = $_SESSION["id_member"];
  $date_daily = $_POST["date_daily"];
  $time_work = $_POST["time_work"];
  $comment = $_POST["txtcomment$i"];
  $text = str_replace("\n", "<br>\n", "$comment");

  $strSQL = "INSERT INTO data_daily (id_member, date_daily, time_work, ticket_no, cat_id, cat_mpls_hr1,  cat_mpls_hr2, cat_ethernet_hr3, cat_ethernet_hr4, cat_internet_hr5, cat_internet_hr6, cat_other_hr7, cat_other_hr8, total_ticket, comment) VALUES ('".$id_member."', '".$date_daily."', '".$time_work."', '".$_POST["txtticket_no$i"]."', '".$_POST["txtcat_id$i"]."', '".$_POST["txthr1$i"]."', '".$_POST["txthr2$i"]."', '".$_POST["txthr3$i"]."', '".$_POST["txthr4$i"]."', '".$_POST["txthr5$i"]."', '".$_POST["txthr6$i"]."', '".$_POST["txthr7$i"]."', '".$_POST["txthr8$i"]."', '".$_POST["txttotal_ticket$i"]."', '".$text."'); ";
  $objQuery = mysqli_query($conn,$strSQL);
  echo $strSQL;
 // header("Location: ../view/user/daily_check.php");
 }
 for($i=1;$i<=$_POST["hdnCount2"];$i++)
 {
  $id_member = $_SESSION["id_member"];
  $date_daily = $_POST["date_daily"];
  $time_work = $_POST["time_work"];
  $comment2 = $_POST["txtcomment2$i"];
  $text2 = str_replace("\n", "<br>\n", "$comment2"); 
   
  $strSQL = "INSERT INTO data_daily_2 (id_member, date_daily, time_work, ticket_no, cat_id, c_internet_hr1, c_internet_hr2, total_ticket, comment) VALUES ('".$id_member."', '".$date_daily."', '".$time_work."', '".$_POST["txtticket_no2$i"]."', '".$_POST["txtcat_id2$i"]."', '".$_POST["txtcat_internet2_hr1$i"]."', '".$_POST["txtcat_internet2_hr2$i"]."', '".$_POST["txttotal_ticket2$i"]."', '".$text2."'); ";
  $objQuery = mysqli_query($conn,$strSQL);
  echo $strSQL;
 // header("Location: ../view/user/daily_check.php");
 } 
 

 header("Location: ../view/user/report_day_frm1.php?date_daily=".$date_daily."&time_work=".$time_work."");
}

?>