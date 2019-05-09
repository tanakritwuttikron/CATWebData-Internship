<?php
if (!isset($_SESSION))
{
 session_start(); 
}

require 'db.php';
$detail = $_POST["edit_detail"];
$text = str_replace("\n", "<br>\n", "$detail"); 

 $sql = "UPDATE data_daily_3 SET 
 	id_member = '".$_POST["id_member"]."',
 	date_daily = '".$_POST["date_daily"]."',
 	time_work = '".$_POST["time_work"]."',
 	date_daily = '".$_POST["date_daily"]."',
 	report = '".$_POST["edit_report"]."',
 	daily_case = '".$_POST["edit_daily_case"]."', 
 	level = '".$_POST["edit_level"]."',
 	status_daily = '".$_POST["edit_status"]."',
 	location = '".$_POST["edit_location"]."',
 	detail = '".$text."'
 	WHERE id_daily_3 = '".$_POST["id_daily_3"]."'";
 $query = mysqli_query($conn,$sql);

 header("Location: ../view/user/report_day_frm2.php?date_daily=".$_POST["date_daily"]."&time_work=".$_POST["time_work"]."");

 mysqli_close($conn);

?>