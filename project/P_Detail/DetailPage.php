<?php
  include "connect.php";
 ?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <script src="review_action.js"></script>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwn-xB_WCcZ-iDeQcC0gEn7EY3HYd_uRY"></script>
    <link rel="stylesheet" type="text/css" href="Detail_pg.css">
    <link rel="stylesheet" type="text/css" href="Navbar.css">
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
        .bg-1{
          margin: 50px 0px 40px 0px;
          padding : 30px 0px 30px 0px;
          background-color: rgba(205,136,175,0.7);
          color: #828282;
          font-family: 'Nanum Myeongjo', serif;
          font-size: 7px;
        }
        .glyphicon{
          font-size: 25px;
        }

        *{
          margin: 0px;
          padding: 0px;
          text-decoration: none;
        }

    </style>

    <?php

    $p_id=$_GET["p_id"];
    $query="SELECT * FROM detail where p_id='$p_id'";
    //$query="SELECT * FROM detail where p_id='8'";
    $result=mysqli_query($connect, $query)or die(mysqli_error($connect));
    $data=mysqli_fetch_array($result);

    // $query2="SELECT * FROM review";
    // $result2=mysqli_query($connect, $query2)or die(mysqli_error($connect));
    // $data2=mysqli_fetch_array($result2);
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
            <a class="navbar-brand" href="mainPage.php">
              <img src="perfume.png" id="brand" class="img-responsive"></img></a>
            </div>
            <div class="dropmenu">
              <div class="collapse  navbar-collapse" id="myNav">
                <ul class="nav navbar-nav navbar-right">
                <!--  <li class="menu search-button"><a href="" style="color: white;">SEARCH</a></li>-->
                <li class="menu"><a href="../testPage/testPage.php" style="color: white;" class="subMenu">TEST</a></li>
                <li class="menu"><a href="../categoryPage/all.php" style="color: white;" class="subMenu">CATEGORY</a></li>
                  <li class="menu"><a href="choosePage.php" style="color: white;">MY PAGE</a></li>
                  <li class="menu"><a href="choosePage2.php" class="glyphicon glyphicon-heart" style="color: white;"></a></li>
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
            <img src="<?php echo $data['pimage']; ?>" style="margin: 0px auto;" class="img-responsive"  alt="Image">

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
              <?ph
                echo $data['ptag2'];
              ?>
              </p>
            </h4>
          </div>

                <div id="reviews">


                  <h5>~REVIEW~</h5>

                  <div id="write_coment">
                    <form>
                      <input type="text" id="new_review" style="width:100%;" placeholder="Write your review"><br/>
                      <button type="button" id="btn_coment" onclick="submitReview()" style="float:right;">등록</button>
                    </form>
                  </div>
                  <div id="dateset">

                  </div>

                  <div class="review_row">

                    <div class="review_content">
                      I'm fully satisfied
                    </div>
                    <div class="review_date">
                      2021. 6. 7. 오전 10:34:35
                    </div>
                  </div>

                  <div class="review_row">

                    <div class="review_content">
                      nothing
                    </div>
                    <div class="review_date">
                      2021. 6. 4. 오후 2:05:03
                    </div>
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
