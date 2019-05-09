<?php
if (!isset($_SESSION))
{
 session_start(); 
}

require 'db.php';
 $comment = $_POST["edit_comment"];
 $text = str_replace("\n", "<br>\n", "$comment");

 $sql = "UPDATE data_daily SET 
 	id_member = '".$_POST["id_member"]."',
 	date_daily = '".$_POST["date_daily"]."',
 	time_work = '".$_POST["time_work"]."',
 	ticket_no = '".$_POST["edit_ticket_no"]."',
 	cat_id = '".$_POST["edit_cat_id"]."',
 	cat_mpls_hr1 = '".$_POST["edit_cat_mpls_hr1"]."', 
 	cat_mpls_hr2 = '".$_POST["edit_cat_mpls_hr2"]."',
 	cat_ethernet_hr3 = '".$_POST["edit_cat_ethernet_hr3"]."',
 	cat_ethernet_hr4 = '".$_POST["edit_cat_ethernet_hr4"]."',
 	cat_internet_hr5 = '".$_POST["edit_cat_internet_hr5"]."',
 	cat_internet_hr6 = '".$_POST["edit_cat_internet_hr6"]."',
 	cat_other_hr7 = '".$_POST["edit_cat_other_hr7"]."',
 	cat_other_hr8 = '".$_POST["edit_cat_other_hr8"]."',
 	total_ticket = '".$_POST["edit_total_ticket"]."',
 	comment = '".$text."'
 	WHERE id_daily = '".$_POST["id_daily"]."'";
 $query = mysqli_query($conn,$sql);

 header("Location: ../view/user/history_month_frm1.php");

 mysqli_close($conn);

?>