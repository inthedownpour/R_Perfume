<?php
  include "connect.php";
 ?><!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>향수 목록</title>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="stylesheet" type="text/css" href="./css/nav.css">
     <link rel="stylesheet" type="text/css" href="./css/footer.css">
     <link rel="stylesheet" type="text/css" href="./css/category.css?a">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <script src="./js/categoryPage.js"></script>
     <style>


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
                <a class="navbar-brand" href="../mainPage/mainPage.php">
                 <img src="perfume.png" id="brand" class="img-responsive"></img></a>
             </div>
             <div class="dropmenu">
               <div class="collapse  navbar-collapse" id="myNav">
                 <ul class="nav navbar-nav navbar-right">
                   <!-- <li class="menu search-button"><a href="" style="color: white;">SEARCH</a></li> -->
                   <li class="menu"><a href="../testPage/testPage.php" style="color: white;" class="subMenu">TEST</a></li>
                   <li class="menu"><a href="all.php" style="color: white;" class="subMenu">CATEGORY</a>
                     <ul>
                       <li><a href="#">BRAND</a></li>
                       <li><a href="#">SERIES</a></li>
                     </ul>
                   </li>
                   <li class="menu"><a href="loginPage.html" style="color: white;">MY PAGE</a></li>
                   <li class="menu"><a href="" class="glyphicon glyphicon-heart" style="color: white;"></a></li>
                 </ul>
               </div>
             </div>
           </div>
         </div>

   <?php
    //데이터베이스에서 가져오기
     $query = "select * from detail limit 30,10";
     $result = mysqli_query($connect, $query);
      ?>
      <div class="container brandMenu">
        <span><button  class="btnMenu" id="menuAll" onclick="pageAll()">All</button></span>
        <span><button  class="btnMenu" onclick="pageDiptyque()">딥디크</button></span>
        <span><button  class="btnMenu" onclick="pageMaison()">메종 마르지엘라</button></span>
        <span><button  class="btnMenu" onclick="pageDiptyque()">바이레도</button></span>
        <span><button  class="btnMenu" onclick="pageSantamaria()">산타마리아노벨라</button></span>
        <span><button  class="btnMenu" onclick="pageAesop()">이솝</button></span>
        <span><button  class="btnMenu" onclick="pageJomalone()">조말론</button></span>
      </div>

<div class="container">
  <div class="row">
    <div class="categoryBox all">
         <?php
          while ($data = mysqli_fetch_array($result)) {
              ?>
           <div style="text-align:center; float:left;height:300; width:250px;"><a href="../P_Detail/DetailPage.php?p_id=<?php echo $data["p_id"];?>">
             <img src="<?php echo $data["pimage"]?>" style="display:block; height:250px; width:200; margin: 0px auto ;margin-top:40px;" class="img-responsive" onMouseover="OnMouseIn(this)" onmouseout="OnMouseOut(this)" alt = "Image">
             <?php echo $data["pname"]?></a>&nbsp<button type="button" onclick="liked()" class="btnLike" style=""><span class="glyphicon glyphicon-heart likelogo"></span></div>

         <?php
          }
          ?>
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
