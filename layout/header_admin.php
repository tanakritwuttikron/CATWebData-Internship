<?php 
if(!isset($_SESSION)) 
{ 
 session_start(); 
}
if($_SESSION["username"] == "")
  {
    echo "<script>
    alert('Please Login!');
    location.href = '../index.php';
    </script>";
    exit();
  }

  if($_SESSION['status'] != "1")
  {
    echo "<script>
    alert('This page for Admin only!');
    location.href = '../index.php';
    </script>";
    exit();
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
  <link rel="stylesheet" type="text/css" href="../../css/style_web.css">

  <!-- Javascript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <!-- Fonts awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
 </head>
 <body>
<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg" id="navber-index">
 <div class="container">
  <div id="navber-slide">
   <span id="navber-slide" onclick="openNav()">
    <i class="fa fa-bars"></i> CAT Web Data </span>
  </div>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" id="navbar-text">
    <span class="fa fa-bars"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarResponsive">
   <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownNetwork" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       ชื่อผู้เข้าใช้งาน : <?= $_SESSION["username"] ?>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownNetwork">
        <a class="dropdown-item" href="../../database/check_logout.php"><i class="fa fa-sign-out-alt"></i> ออกจาระบบ</a>
      </div>
    </li>
   </ul>
  </div>
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="fa fa-exit text-right" onclick="closeNav()" id="icon-exit">&times;</a>
  <a href="../admin/mng_admin.php">ข้อมูลUser</a>
  <a href="../admin/mng_manual.php">อัพโหลดคู่มือ</a>
  <div class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   ข้อมูลข่าวสาร
  </a>
  <div class="dropdown-menu col-sm-12">
    <a href="../admin/mng_notice.php" style="color: #000;"><i class="fa fa-plus"></i> เพิ่มข้อมูลข่าวสาร</a>
    <a href="../admin/history_notice.php" style="color: #000;"><i class="fa fa-sticky-note"></i> ดูข้อมูลข่าวสาร</a>
  </div>
 </div> 
 <div class="dropdown">
 <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  งานที่ต้องทำ
 </a>
 <div class="dropdown-menu col-sm-12">
   <a href="../admin/mng_word.php" style="color: #000;"><i class="fa fa-plus"></i> เพิ่มข้อมูลงานที่ต้องทำ</a>
   <a href="../admin/history_work.php" style="color: #000;"><i class="fa fa-sticky-note"></i> ดูข้อมูลงานที่ต้องทำ</a>
 </div>
 </div>
 <a href="link_page.php"><i class="fa fa-globe-asia"></i> Link page</a>
</div>
</nav>
<!-- End Navigation -->
<script>
function openNav() {
 document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
 document.getElementById("mySidenav").style.width = "0";
}
</script>