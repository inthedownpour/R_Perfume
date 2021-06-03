<?php
  error_reporting(1);
  ini_set("display_errors",1);

  //퍼퓸 카테고리에 연결 //서버, 사용자 이름, 비밀번호, 데이터베이스 순서
  $connect = mysqli_connect("localhost:3307","perfume_category","category","perfume_category");
  //print_r($connect);

  if(mysqli_connect_error()){
    echo "mysql 접속중 오류가 발생했습니다.";
    echo mysqli_connect_error();
  }

  // $query = "select * from category";
  // $result = mysqli_query($connect, $query);
  //
  // while($data = mysqli_fetch_assoc($result)){
  //   echo $data["id"];
  //   echo $data["name"];
  //   echo $data["brand"];
  //   echo $data["img"];
  //
  //   echo "<hr>";
  // }
?>
