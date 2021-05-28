<?php
header('P3P: CP="NOI CURa ADMa DEVa TAIa OUR DELa BUS IND PHY ONL UNI COM NAV INT DEM PRE"');
ini_set("session.cookie_lifetime", "86400");
ini_set("session.cache_expire", "86400");
ini_set("session.gc_maxlifetime","1400");
session_start(); ?>
<html>
<html lang="en">
<head>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
  <title>Find Your Perfume!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>

  .navbar {
    padding-top: 21px;
    padding-bottom: 30px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 13px;
    position: fixed;
    width: 100%;
    letter-spacing: 5px;
    background-color: rgba(205,136,175,0.8);
    font-family: 'Cormorant Garamond', serif;
    z-index: 1;
  }
  .navbar-nav a:hover {
    color: #F15F5F !important;
  }
  .navbar-brand{
    float: left;
    margin: 0;
    padding: 0;
  }
  .navbar-nav a:link {
    text-decoration: none;
    color: white;
  }
  .row{
    clear: both;
  }
  .recommend{
    margin: 0;
    width: 100%;
    padding-top: 30px;
    padding-bottom: 20px;
    letter-spacing: 5px;
  }
  .dropmenu{
    border:none;
    border:0px;
    margin:0px;
    padding:0px;
  }

  .dropmenu ul{
    list-style:none;
    margin:0;
    padding:0;
  }

  .dropmenu li{
    float:left;
    padding:0px;
  }

  .dropmenu li a{
    display:block;
    margin:0px;
    text-align:center;
    text-decoration:none;
  }

  .dropmenu li a:hover, .dropmenu ul li:hover a{
    text-decoration:none;
    color:white;
  }

  .dropmenu li ul{
    display:none;
    border:0px;
    position:absolute;
    z-index:200;
    /*top:1em;
    /*left:0;*/
  }

  .dropmenu li:hover ul{
    display:block;
  }

  .dropmenu li li {
    display:block;
    float:none;
    margin:0px;
    padding:0px;
    height: 50px;
  }

  .dropmenu li:hover li a{
    background:none;
  }

  .dropmenu li ul a{
    display:block;
    margin:0px;
    padding-top: 15px;
    padding-left: 15px;
    text-align:left;
  }

  .dropmenu li ul a:hover, .dropmenu li ul li:hover a{
    border:0px;
    text-decoration:none;
  }

  .dropmenu p{
    clear:left;
  }
  .glyphicon{
    font-size: 25px;
  }
  .summer{
    margin-top: 20px;
    color: #828282;
  }
  .subMenu:visited{
    color: white;
  }
  .subMenu:active{
    color: white;
  }
  .subMenu {
    color: white;
  }
  .eng{
    font-family: 'Cormorant Garamond', serif;
  }
  .kor{
    font-family: 'Nanum Myeongjo', serif;
  }
  .bg-1{
    margin: 50px 0px 40px 0px;
    padding : 30px 0px 30px 0px;
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
  .liked{
    margin-top: 130px;
  }
  .tit{
    font-size: 20px;
  }
  hr{
    background: rgb(205,136,175);
    border: 0;
    height: 1.5px;
  }
  .per{
    margin-top: 20px;
  }
  .list{
    padding-top: 15px;
  }
  </style>
</head>
<body>
  <div id="back">
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
                <li>
                  <!--<span class="search-box"><input type="text" class="search-txt" placeholder="Search"></span></li>-->
                  <li class="menu search-button"><a href="" style="color: white;">SEARCH</a></li>
                  <li class="menu"><a href="" style="color: white;" class="subMenu">TEST</a></li>
                  <li class="menu"><a href="" style="color: white;" class="subMenu">CATEGORY</a>
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
      </div>
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 liked">

          <div class="col-sm-12 list">
            <hr>
            <p class="tit eng" >Liked List</p>
            <hr>
            <div class="col-sm-2">
              <a href=""><img src="오 드 뚜왈렛 오 데 썽.jpg" width="80px" height="80px"></img></a>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-4">
              <p class="kor per"> 딥디크 </p>
            </div>
            <div class="col-sm-5">
              <p class="kor per"> 오 드 뚜왈렛 오 데 썽 </p>
            </div>
          </div>
          <div class="col-sm-12 list">
            <div class="col-sm-2">
              <a href=""><img src="프리지아.jpg" width="80px" height="80px"></img></a>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-4">
              <p class="kor per"> 산타마리아노벨라 </p>
            </div>
            <div class="col-sm-5">
              <p class="kor per"> 프리지아 </p>
            </div>
          </div>
        </div>
        <div class="col-sm-4"></div>
      </div>
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <div class="col-sm-12">
            <hr>
          </div>
        </div>
        <div class="col-sm-4"></div>
      </div>
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
