<meta charset="utf-8" />
<?php

$id=$_POST['id'];
$pw=$_POST['pw'];
$connect = mysqli_connect("127.0.0.1","root","1234","perfume");

if($id==""||$pw==""){
  ?>
  <script>
  alert("아이디와 비밀번호를 입력하세요");
  history.go(-1);
  </script>
  <?php
  exit;
}
else{
  //$password = $_POST['userpw'];
	$sql = "SELECT * FROM mem WHERE id='".$id."' and pw ='".$pw."'";
  $result = mysqli_query($connect, $sql);
  $row = mysqli_fetch_array($result);

  if($id==$row['id'] && $pw ==$row['pw']){
    $_SESSION['id']=$row['id'];
    $_POST['nick']=$row['id'];
    include "myPage.php";
    ?>
    <script>
    alert("로그인 되었습니다.");
    </script>
    <?php
    echo "<script>location.href='myPage.php';</script>";
  }
  else{
    echo "<script>window.alert('invalid username or password');</script>";
  }
}
  //$result = $connect->query($sql);
	/*$member = $result->fetch_array();
	$hash_pw = $member['pw']; //$hash_pw에 POSt로 받아온 아이디열의 비밀번호를 저장합니다.

	if(password_verify($password, $hash_pw)) //만약 password변수와 hash_pw변수가 같다면 세션값을 저장하고 알림창을 띄운후 main.php파일로 넘어갑니다.
	{
		$_SESSION['id'] = $member["id"];
		$_SESSION['pw'] = $member["pw"];

		echo "<script>alert('로그인되었습니다.'); </script>";
	}
  else{ // 비밀번호가 같지 않다면 알림창을 띄우고 전 페이지로 돌아갑니다
		echo "<script>alert('아이디 혹은 비밀번호를 확인하세요.');</script>";
	}
}*/

/*$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

session_start();
$_SESSION['id']=$row['id'];
?>
<script>
location.href="mainPage.php";
</script>
<?php*/

/*$password = $_POST['pw'];
$sql = mq("select * from mem where id='".$_POST['id']."'");
$member = $sql->fetch_array();
$hash_pw = $member['pw'];

if(password_verify($password, $hash_pw)){
$_SESSION['id'] = $member["id"];
$_SESSION['pw'] = $member["pw"];

echo "<script>alert('로그인되었습니다.'); location.href='/page/main.php';</script>";
}else{
echo "<script>alert('아이디 혹은 비밀번호를 확인하세요.'); history.back();</script>";
}*/

?>
