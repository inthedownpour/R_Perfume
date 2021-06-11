<?php
  error_reporting(1);
  ini_set("display_errors",1);

  $dVer='localhost';
  $dUser='root';
  $dassword='';
  $dbName='perfumedetail';

  $connect=mysqli_connect($dVer, $dUser, $dassword, $dbName);

  if(mysqli_connect_error()){
    echo "mysql 접속중 오류 발생";
    echo mysqli_connect_error();
  }
?>
