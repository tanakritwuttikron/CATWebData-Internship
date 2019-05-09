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
<body>
<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg" id="navber-index">
<div class="container">
 <a class="navbar-brand" href="index.php" id="navbar-text">CAT web data</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" id="navbar-text">
   <span class="fa fa-bars"></span>
  </button>
 <div class="collapse navbar-collapse" id="navbarResponsive">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item">
   <a class="nav-link" href="../view/about_index.php" id="navbar-text">เกี่ยวกับ</a>
  </li>
  <li class="nav-item">
   <a class="nav-link" href="notice_index.php" id="navbar-text">ข่าวสาร</a>
  </li>
  <li class="nav-item dropdown">
   <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownFacility" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   เข้าสู่ระบบ
   </a>
   <div class="dropdown-menu dropdown-menu-right" id="navbarDropdownLogin" aria-labelledby="navbarDropdownLogin">
    <form class="form" role="form" method="post" action="../database/check_login.php" accept-charset="UTF-8" id="login-nav">
     <div class="form-group">
      <label for="Username">Username :</label>
      <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
     </div>
     <div class="form-group">
      <label for="Password">Password :</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
     </div>
     <div class="form-group">
      <button type="submit" class="btn btn-success btn-block">เข้าสู่ระบบ</button>
     </div>
    </form>
   </div>
  </li>
  </ul>
 </div>
</div>
</nav>
<!-- End Navigation -->