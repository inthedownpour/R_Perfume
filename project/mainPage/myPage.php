<?php
header('P3P: CP="NOI CURa ADMa DEVa TAIa OUR DELa BUS IND PHY ONL UNI COM NAV INT DEM PRE"');
ini_set("session.cookie_lifetime", "86400");
ini_set("session.cache_expire", "86400");
ini_set("session.gc_maxlifetime","1400");
session_start();?>
<html lang="en">
<head>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
  <title>Find Your Perfume!</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Navbar.css">
  <style>
  .glyphicon{
    font-size: 25px;
  }

  *{
    margin: 0px;
    padding: 0px;
    text-decoration: none;
  }

  .joinForm {
    position:absolute;
    width:450px;
    height:500px;
    margin-top: 40px;
    margin-bottom: 40px;
    padding: 30px, 20px;
    background-color:#FFFFFF;
    text-align:center;
    top: 50%;
    left:50%;
    transform: translate(-50%,-50%);
    border: 3px solid rgb(210,108,159);
    border-radius: 15px;
    font-family: 'Cormorant Garamond', serif;
  }

  .joinForm h2{
    text-align: center;
    margin: 30px;
    font-family: 'Cormorant Garamond', serif;
  }

  .idForm{
    margin: 30px;
    padding: 10px 10px;
    font-family: 'Cormorant Garamond', serif;
  }


  .nameForm{
    margin: 30px;
    padding: 10px 10px;
    font-family: 'Cormorant Garamond', serif;
  }
  .numberForm{
    margin: 30px;
    padding: 10px 10px;
    font-family: 'Cormorant Garamond', serif;
  }

  .id {
    width: 100%;
    border:none;
    outline:none;
    color: #636e72;
    font-size:16px;
    height:25px;
    background: none;
    font-family: 'Cormorant Garamond', serif;
  }

  .name{
    width: 100%;
    border:none;
    outline:none;
    color: #636e72;
    font-size:16px;
    height:25px;
    background: none;
    font-family: 'Cormorant Garamond', serif;
  }

  .number{
    width: 100%;
    border:none;
    outline:none;
    color: #636e72;
    font-size:16px;
    height:25px;
    background: none;
    font-family: 'Cormorant Garamond', serif;
  }

  .btn {
    position:relative;
    left:40%;
    transform: translateX(-50%);
    margin-bottom: 40px;
    width:80%;
    height:40px;
    background-color: rgba(205,136,175,0.7);
    /*background-position: left;*/
    background-size: 200%;
    color:white;
    font-weight: bold;
    border:none;
    cursor:pointer;
    transition: 0.4s;
    display:inline;
    font-family: 'Cormorant Garamond', serif;
  }

  .btn:hover {
    color: #828282;
    font-family: 'Cormorant Garamond', serif;
  }

  .bottomText {
    text-align: center;
    font-family: 'Cormorant Garamond', serif;
  }

  .signUp{
    color: rgb(210,108,159);
    font-family: 'Cormorant Garamond', serif;
  }

  .signUp:hover{
    color: #D9418C;
    font-family: 'Cormorant Garamond', serif;
  }

  .bg-1{
    position: absolute;
    top: 75%;
    margin: 150px 0px 40px 0px;
    width: 100%;
    padding: 30px 0px 30px 0px;
    background-color: rgba(205,136,175,0.7);
    color: #828282;
    font-family: 'Nanum Myeongjo', serif;
    font-size: 7px;
  }

  .gly{
    font-size: 4px;
    color: #828282;
    margin-right: 20px;
    float: right;
  }
  .gly:hover{
    color: #F15F5F;
  }
  .business{
    margin-left: 20px;

  }
  .profile{
    margin-top: 15px;
  }
  </style>
</head>
<body>
  <div class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNav">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="mainPage.php">
          <img src="perfume.png" id="brand" class="img-responsive"></img></a>
        </div>
        <div class="dropmenu">
          <div class="collapse  navbar-collapse" id="myNav">
            <ul class="nav navbar-nav navbar-right">
            <!--  <li class="menu search-button"><a href="" style="color: white;">SEARCH</a></li>-->
            <li class="menu"><a href="../testPage/testPage.php" style="color: white;" class="subMenu">TEST</a></li>
            <li class="menu"><a href="../categoryPage/all.php" style="color: white;" class="subMenu">CATEGORY</a>
                <ul>
                  <li><a href="#">BRAND</a></li>
                  <li><a href="#">SERIES</a></li>
                </ul>
              </li>
              <li class="menu"><a href="choosePage.php" style="color: white;">MY PAGE</a></li>
              <li class="menu"><a href="choosePage2.php" class="glyphicon glyphicon-heart" style="color: white;"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <form name="join" class="joinForm">
        <h2>Welcome, <?php
        if(isset($_SESSION['name'])){
          $name = $_SESSION['name'];
        }
        echo $name ?>!</h2>
        <div class="row">
          <div class="col-sm-2">
            <img src="오 드 뚜왈렛 오 데 썽.jpg" width="150" height="150" class="profile"></img>
          </div>
          <div class="col-sm-10">
        <div class="nameForm">
          <span class="name" name="name">Name : <?php if(isset($_SESSION['name'])){
            $name = $_SESSION['name'];
          }
          echo $name ?> </span>
        </div>
        <div class="idForm">
          <span class="id" name="id">ID : <?php if(isset($_SESSION['id'])){
            $id = $_SESSION['id'];
          }
          echo $id ?></span>
        </div>
        <div class="numberForm">
          <span class="number" name="phone">Phone Number : <?php if(isset($_SESSION['phone'])){
            $phone = $_SESSION['phone'];
          }
          echo $phone ?></span>
        </div>
    </div>
    </div>

    <a href=""><input type="button" class="btn" value="LIKE LIST"></a>
    <a href="logout.php"><input type="button" class="btn" value="LOGOUT"></a>
  </div>
</form>
    <div class="container-fluid bg-1">
      <div class="row">
        <div class="col-sm-9">
          <p class="business"> 상호 : Find your perfume! | 대표 : 이보현, 양희진, 심지연 | 전화 : 010-0000-0000</p>
          <p class="business"> 이메일 : bohyun1999@naver.com | 주소 : 충청북도 청주시 서원구 개신동 131</p>
          <p class="business"> copyright ⓒ Team DA. all rights reserved</p>
        </div>
        <div class="col-sm-3">
          <a href="mailto:bohyun1999@gmail.com" class="gly"><span class="glyphicon glyphicon-envelope"></span></a>
          <a href="https://map.naver.com/v5/search/%EC%B6%A9%EB%B6%81%EB%8C%80?c=14187873.3370958,4387595.3017973,15,0,0,0,dh" class="gly"><span class="glyphicon glyphicon-map-marker"></span></a>
          <a href="tel: 010-0000-0000" class="gly"><span class="glyphicon glyphicon-phone"></span></a>
        </div>
      </div>
    </div>
  </body>
  </html>
