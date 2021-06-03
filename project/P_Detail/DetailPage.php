<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="./review_action.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="Detail_pg.css">
    <title>Find Your Perfume!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwlNqAEil52XRPHmSVb4Luk18qQG9GqcM&sensor=false&language=en"></script>

<script>
  function initialize() {
var myLatlng = new google.maps.LatLng(36.62990490050947, 127.45642593069294); // 좌표값
  var mapOptions = {
        zoom: 14, // 지도 확대레벨 조정
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
  var marker = new google.maps.Marker({
position: myLatlng,
map: map,
title: "Store" // 마커에 마우스를 올렸을때 간략하게 표기될 설명글
});
  }
window.onload = initialize;
</script>
    <style>
      #back{
          background-size: cover;
          background-attatchment: scrolld;
          background-repeat: no-repeat;
          background-position: center;
          height: 100px;
        }
        .navbar {
          top:0;
          lest:0;
          width:100%;
          height:70px;
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
        .nav-up{
          top:-40px;
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
        .eng{
          font-family: 'Cormorant Garamond', serif;
        }
        .kor{
          font-family: 'Nanum Myeongjo', serif;
        }
        .bg-1{
          margin: 50px 0px 40px 0px;
          padding : 30px 0px 30px 0px;
          background-color: rgba(210,108,159,0.5);
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
        img{
          object-fit:cover;
          margin:0;
          max-width: 100%;
          max-height: 100%;
        }

        .details{
          margin-top:10px;
          margin-left:10px;
          margin-right:10px;
          border:5px solid rgba(210,108,159,0.5);
          border-radius: 20px;
          padding:12px;
        }
        .recommended{
          border:5px solid rgba(210,108,159,0.5);
          border-radius: 20px;
        }
        #review{
          height:100px;
        }
        #first{
          height:60px;
          background-color: red;
        }
        #second{
          height:60px;
        }
        #third{
          height:60px;
        }

        div.row{
          display:flex;
          width:100%;
        }


    </style>

    <?php
    $dVer='localhost';
    $dUser='root';
    $dassword='';
    $dbName='perfumedetail';


    $connect=mysqli_connect($dVer, $dUser, $dassword, $dbName);

    if(mysqli_connect_error()){
      echo "mysql 접속중 오류 발생";
      echo mysqli_connect_error();
    }

    $query="SELECT * FROM detail where p_id=8";
    $result=mysqli_query($connect, $query);
    $data=mysqli_fetch_array($result);

    $query2="SELECT * FROM review";
    $result2=mysqli_query($connect, $query2);
    $data2=mysqli_fetch_array($result2);
    ?>
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
          <a class="navbar-brand" href="mainPage.html">
            <img src="perfume.png" id="brand" class="img-responsive"></img></a>
        </div>
        <div class="dropmenu">
          <div class="collapse  navbar-collapse" id="myNav">
            <ul class="nav navbar-nav navbar-right">
              <li class="menu search-button"><a href="" style="color: white;">SEARCH</a></li>
              <li class="menu"><a href="" style="color: white;">TEST</a></li>
              <li class="menu"><a href="" style="color: white;">CATEGORY</a>
              <ul>
                <li><a href="#">BRAND</a></li>
                <li><a href="#">SERIES</a></li>
              </ul>
            </li>
              <li class="menu"><a href="" style="color: white;">MY PAGE</a></li>
              <li class="menu"><a href="" class="glyphicon glyphicon-heart" style="color: white;"></a></li>
            </ul>
          </div>
        </div>
      </div>
      </div>
    </div>
  <div class="details">
    <div class="container-fluid summer eng">
      <div class="row">
        <div class="col-sm-4">
            <img src="<?php echo $data['pimage']; ?>" class="img-responsive"  alt="Image">

        </div>
        <div class="col-sm-8">
          <div>
            <h4>Name:
              <?php
                echo $data['pname'];
              ?></h4>
            <h4>Brand:
              <?php
                echo $data['pbrand'];
              ?></h4>
            <h4>Category:
              <?php
                echo $data['ptag1'];
              ?>
              ,
              <?php
                echo $data['ptag1'];
              ?>
              </p>
            </h4>
          </div>

                <div id="review">
                  <h5>~REVIEW~</h5>
                  <button type="button" onclick="on()">연결</button>

                  <div class="review_row">
                    <div class="review_content">
                      <?php
                      echo $data2["r_content"];
                       ?>
                    </div>
                    <div class="review_date">
                      <?php
                      echo $data2["r_date"];
                       ?>
                    </div>
                  </div>
                  <div class="review_row">
                    <div class="review_content">
                    </div>
                    <div class="review_date">

                    </div>
                  </div>
                  <div class="review_row">
                    <form>
                      <textarea type="text" name="new_review" rows="2" cols="60" placeholder="Can write your review until 300 letter"></textarea><br/>
                      <button type="submit" onclick="submitReview()">등록</button>
                    </form>
                  </div>


                  </div>
                </div>

        </div>

        </div>
      </div>
    </div>
  </div>
<div class="details">
  <div class="container-fluid summer eng">
    <div class="row">
      <div class="col-sm-6">
          <div class="details">
            <div id="map_canvas" style="width: 100%; height: 550px; margin:0px;"></div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="details">
            <div style="width: 100%; margin:0px;">
              <img src="<?php echo $data["pnote"]; ?>" class="img-responsive" alt="Image">
            </div>
          </div>
        </div>
      </div>
    </div>
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