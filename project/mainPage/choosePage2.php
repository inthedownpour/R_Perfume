<?php
session_start();

if(isset($_SESSION['id'])){

  echo "<script>location.href='likedlistPage.php';</script>";
}

else {
  echo "<script>window.alert('Please Login!'); location.href='loginPage.php'</script>";

}

 ?>
