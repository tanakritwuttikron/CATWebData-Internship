<?php
if(!isset($_SESSION)) 
{ 
 session_start(); 
} 
 require "db.php";

 $sql = "SELECT * FROM member WHERE username='".$_POST["username"]."'AND password = '".$_POST["password"]."'";
  $query = mysqli_query($conn,$sql);
  $result  = mysqli_fetch_array($query);
  if(!$result)
  {
    echo "<script>
      alert('Username หรือ Password ไม่ถูกต้อง กรุณากรอกใหม่ !');
      location.href = '../view/index.php';
      </script>";
      exit();
  }
  else
  {
   $_SESSION["username"] = $result["username"];
   $_SESSION["id_member"] = $result["id_member"];
   $_SESSION["status"] = $result["status"];

   session_write_close();

   if ($result["status"] == "1") {
    header("location:../view/admin/mng_admin.php");
   }
   elseif ($result["status" == "2"]){
    header("location:../view/user/home.php");
   }
   echo "<script>
     alert('Username หรือ Password ไม่ถูกต้อง กรุณากรอกใหม่ !');
     location.href = '../view/index.php';
     </script>";
     exit();
  }

?>