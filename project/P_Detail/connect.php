<?php
$dVer='localhost:3307';
$dUser='root';
$dassword='111111';
$dbName='perfume_category';

$connect=mysqli_connect($dVer, $dUser, $dassword, $dbName);

if(mysqli_connect_error()){
  echo "mysql 접속중 오류 발생";
  echo mysqli_connect_error();
}
?>
