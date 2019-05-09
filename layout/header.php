<?php 
if(!isset($_SESSION)) 
{ 
 session_start(); 
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
  <a class="navbar-brand" href="home.php" id="navbar-text">CAT Web Data</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" id="navbar-text">
    <span class="fa fa-bars"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
   <ul class="navbar-nav ml-auto">
    <li class="nav-item">
     <a class="nav-link" href="notice_user.php" id="navbar-text">ข่าวสาร</a>
    </li>
    <li class="nav-item">
     <a class="nav-link" href="home.php" id="navbar-text">งานที่ต้องทำ</a>
    </li>
    <li class="nav-item">
     <a class="nav-link" href="#" id="navbar-text">Daily check</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownNetwork" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Network
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownNetwork">
        <a class="dropdown-item" href="mng_vlan.php">Node</a>
        <a class="dropdown-item" href="mng_vlan.php">Cacti</a>
        <a class="dropdown-item" href="mng_vlan.php">Network Notepads</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownNetwork" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       ชื่อผู้เข้าใช้งาน : <?= $_SESSION["username"] ?>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownNetwork">
       <a class="dropdown-item" href="../../database/check_logout.php">ออกจาระบบ</a>
      </div>
    </li>
   </ul>
  </div>
</div>
</nav>
<!-- End Navigation -->