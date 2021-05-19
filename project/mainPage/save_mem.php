<html>
<meta charset="utf-8">

<?php

$connect = mysqli_connect("127.0.0.1","root","1234","perfume");
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
/*
$name=$_POST['name'];
$id=$_POST['id'];
$pw=$_POST['pw'];
$phone=$_POST['phone'];
$sql = "INSERT INTO mem(name, id, pw, phone, perfume1, perfume2, perfume3) VALUES('$name','$id','$pw','$phone',NULL,NULL,NULL)";
$test = mq("select * from mem where id = '".$id."'");
$testId=$test->fetch_array();
$result = $connect->query($sql);
if($result){
if($testId==0){
?>
<script>
alert("회원가입 완료");
</script>
<?php
}
}
else{
?>
<script>
alert("중복된 아이디입니다.")
}*/

$name=$_POST['name'];
$id=$_POST['id'];
$pw=$_POST['pw'];
$phone=$_POST['phone'];

$test = "SELECT id FROM mem WHERE id='".$id."'";
$testId= $connect->query($test);
$exist = mysqli_num_rows($testId);
if($exist==0){
  $sql = "INSERT INTO mem(name, id, pw, phone, perfume1, perfume2, perfume3) VALUES('$name','$id','$pw','$phone',NULL,NULL,NULL)";
  $result = $connect->query($sql);
  if($result){
    ?>
    <script>
    alert("회원가입 완료");
    </script>
    <?php
  }
}
  else{
    ?>
    <script>
    alert("중복된 아이디입니다.");
    exit(1);
    </script>

    <?php
}

mysqli_close($connect);
/*
$sql = "INSERT INTO mem(name, id, pw, phone, perfume1, perfume2, perfume3) VALUES('1','2','3','4','5','6','7')";

$result = $connect->query($sql);

if($result === false){
echo mysqli_error($connect);
}*/
include 'loginPage.php';
?>

</html>
