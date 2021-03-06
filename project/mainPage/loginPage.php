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

  .loginForm {
    position:absolute;
    width:350px;
    height:400px;
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

  .loginForm h2{
    text-align: center;
    margin: 30px;
    font-family: 'Cormorant Garamond', serif;
  }

  .idForm{
    border-bottom: 2px solid #adadad;
    margin: 30px;
    padding: 10px 10px;
    font-family: 'Cormorant Garamond', serif;
  }

  .passForm{
    border-bottom: 2px solid #adadad;
    margin: 30px;
    padding: 10px 10px;
    font-family: 'Cormorant Garamond', serif;
  }

  #id {
    width: 100%;
    border:none;
    outline:none;
    color: #636e72;
    font-size:16px;
    height:25px;
    background: none;
    font-family: 'Cormorant Garamond', serif;
  }

  #pw {
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
    margin: 60px 0px 40px 0px;
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
            <li class="menu"><a href="../categoryPage/all.php" style="color: white;" class="subMenu">CATEGORY</a></li>
              <li class="menu"><a href="" style="color: white;">MY PAGE</a></li>
              <li class="menu"><a href="choosePage2.php" class="glyphicon glyphicon-heart" style="color: white;"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <form name="login" class="loginForm" method="post" action="login_ok.php">
        <h2>Login</h2>
        <div class="idForm">
          <input type="text" id="id" placeholder="ID" name="id">
        </div>
        <div class="passForm">
          <input type="password" id="pw" placeholder="PW" name="pw">
        </div>
        <input type="submit" value="LOGIN" class="btn">
        <div class="bottomText">
          Don't you have ID? <a href="joinPage.php" class="signUp">sign up</a>
        </div>
      </form>
    </div>
    <div class="container-fluid bg-1">
      <div class="row">
        <div class="col-sm-9">
          <p class="business"> ?????? : Find your perfume! | ?????? : ?????????, ?????????, ????????? | ?????? : 010-0000-0000</p>
          <p class="business"> ????????? : bohyun1999@naver.com | ?????? : ???????????? ????????? ????????? ????????? 131</p>
          <p class="business"> copyright ??? Team DA. all rights reserved</p>
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
