<?php
session_start();

if(isset($_SESSION['id'])){

  echo "<script>location.href='myPage.php';</script>";
}

else {

  echo "<script>location.href='loginPage.php';</script>";
}

 ?>
