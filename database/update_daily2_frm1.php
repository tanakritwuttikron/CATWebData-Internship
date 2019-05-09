<?php
if (!isset($_SESSION))
{
 session_start(); 
}

require 'db.php';

 $sql = "UPDATE data_daily_2 SET 
 	id_member = '".$_POST["id_member_2"]."',
 	date_daily = '".$_POST["date_daily_2"]."',
 	time_work = '".$_POST["time_work_2"]."',
 	ticket_no = '".$_POST["edit_ticket_no_2"]."',
 	cat_id = '".$_POST["edit_cat_id_2"]."',
 	c_internet_hr1 = '".$_POST["edit_c_internet_hr1"]."', 
 	c_internet_hr2 = '".$_POST["edit_c_internet_hr2"]."',
 	total_ticket = '".$_POST["edit_total_ticket_2"]."',
 	comment = '".$_POST["edit_comment_2"]."'
 	WHERE id_daily_2 = '".$_POST["id_daily_2"]."'";
 $query = mysqli_query($conn,$sql);

 header("Location: ../view/user/report_day_frm1.php?date_daily=".$_POST["date_daily_2"]."&time_work=".$_POST["time_work_2"]."");

 mysqli_close($conn);

?>