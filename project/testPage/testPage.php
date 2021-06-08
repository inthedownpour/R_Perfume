<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>향수 추천 테스트</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/testStart.css">
  <link rel="stylesheet" href="./css/navbar.css?a">
  <link rel="stylesheet" href="./css/qna.css?a">
  <link rel="stylesheet" href="./css/animation.css">

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script>
  function gotoDiptyque(){
    location.href = '../categoryPage/diptyque.php';
  }

  function gotoMaison(){
    location.href = '../categoryPage/maison.php';
  }

  function gotoByredo(){
    location.href = '../categoryPage/byredo.php';
  }

  function gotoSantamaria(){
    location.href = '../categoryPage/santamaria.php';
  }

  function gotoAesop(){
    location.href = '../categoryPage/aesop.php';
  }

  function gotoJomalone(){
    location.href = '../categoryPage/jomalone.php';
  }

  </script>

  <style>
    body {
      -ms-overflow-style: none;
    }

    ::-webkit-scrollbar {
      display: none;
    }

    .details{
      margin-top:10px;
      margin-left:10px;
      margin-right:10px;
      border:5px solid rgba(210,108,159,0.5);
      border-radius: 20px;
      padding:12px;
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
        <a class="navbar-brand" href="../mainPage/mainPage.php">
          <img src="./img/perfume.png" id="brand" class="img-responsive"></img></a>
      </div>
      <div class="dropmenu">
        <div class="collapse  navbar-collapse" id="myNav">
          <ul class="nav navbar-nav navbar-right">
            <!-- <li class="menu search-button"><a href="" style="color: white;">SEARCH</a></li> -->
            <li class="menu"><a href="testPage.php" style="color: white;">TEST</a></li>
            <li class="menu"><a href="../categoryPage/all.php" style="color: white;">CATEGORY</a>
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

  <div class="container-fluid">
    <div id="testStart">
      <h1>향수 추천 테스트</h1><br>
      <div><img src="./img/testImg.jpg" alt="mainImage" style="display:block; height:450px; width:auto; margin: 0px auto" alt="Image" class="img-rounded img-responsive"></div>
      <br>

      <!-- need fix 글씨 간격 수정 하고싶음-->
      <p>향수 추천 테스트 입니다.<br>
        이 테스트를 통해서 자신에게 어울리는 향수를 추천받을 수 있습니다.<br>
        아래 시작하기 버튼을 눌러 시작하십시오.
      </p>
      <div><button type="button" class="btn btn-default" onclick="start()">시작하기</button></div>
    </div>
  </div>

  <div class="qna" id="qSex">
    <h2>당신의 성별은 무엇인가요?</h2><br><br><br>
    <div>
      <span><button type="button" class="btnQsex woman" onclick="begin(1,0)" style="margin-right:70px; background-color:pink;" onmousein="OnMouseIn(this)" onmouseout="OnMouseOut(this)">여자</span>
      <span><button type="button" class="btnQsex man" onclick="begin(0,1)" style="background-color:skyblue" onmousein="OnMouseIn2(this)" onmouseout="OnMouseOut(this)">남자</span>


    </div>
  </div>

  <div class="qna" id="qFirst">
    <h2>다음 중 가장 마음에 드는 사진은?</h2><br><br>
    <div>
      <span><button type="button" class="btnImg" id=btnFloral onclick="selectFloral()"><img src="./img/floral2.jpg" alt="failed" Onmouseover="OnMouseIn(this)" onmouseout="OnMouseOut(this)"></button>&nbsp&nbsp&nbsp</span>
      <span><button type="button" class="btnImg" id=btnFruit onclick="selectFruit()"><img src="./img/fruit.jpg" alt="failed" Onmouseover="OnMouseIn(this)" onmouseout="OnMouseOut(this)"></button>&nbsp&nbsp&nbsp</span>
      <span><button type="button" class="btnImg" id=btnAroma onclick="selectAroma()"><img src="./img/aroma.jpg" alt="failed" Onmouseover="OnMouseIn(this)" onmouseout="OnMouseOut(this)"></button></span>
    </div>
  </div>

  <div class="qna" id="qFromFloral">
    <h2>다음 중 가장 마음에 드는 사진은?</h2><br><br>
    <div>
      <span><button type="button" class="btnImg" id=btnFloral onclick="selectSoap()"><img src="./img/soap3.jpg" alt="failed" Onmouseover="OnMouseIn(this)" onmouseout="OnMouseOut(this)"></button>&nbsp&nbsp&nbsp</span>
      <span><button type="button" class="btnImg" id=btnFruit onclick="selectSpicy()"><img src="./img/spicy.jpg" alt="failed" Onmouseover="OnMouseIn(this)" onmouseout="OnMouseOut(this)"></button>&nbsp&nbsp&nbsp</span>
    </div>
  </div>

  <div class="qna" id="qFromFruit">
    <h2>다음 중 가장 마음에 드는 사진은?</h2><br><br>
    <div>
      <span><button type="button" class="btnImg" id=btnFloral onclick="selectRose()"><img src="./img/rose.jpg" alt="failed" Onmouseover="OnMouseIn(this)" onmouseout="OnMouseOut(this)"></button>&nbsp&nbsp&nbsp</span>
      <span><button type="button" class="btnImg" id=btnFruit onclick="selectCitrus()"><img src="./img/citrus.jpg" alt="failed" Onmouseover="OnMouseIn(this)" onmouseout="OnMouseOut(this)"></button>&nbsp&nbsp&nbsp</span>
    </div>
  </div>

  <div class="qna" id="qFromAroma">
    <h2>다음 중 가장 마음에 드는 사진은?</h2><br><br>
    <div>
      <span><button type="button" class="btnImg" id=btnFloral onclick="selectWoody()"><img src="./img/woody.jpg" alt="failed" Onmouseover="OnMouseIn(this)" onmouseout="OnMouseOut(this)"></button>&nbsp&nbsp&nbsp</span>
      <span><button type="button" class="btnImg" id=btnFruit onclick="selectVanilla()"><img src="./img/vanilla.jpg" alt="failed" Onmouseover="OnMouseIn(this)" onmouseout="OnMouseOut(this)"></button>&nbsp&nbsp&nbsp</span>
    </div>
  </div>






  <div class="container-fluid qna " id="soap">
    <div class="row details">
    <h2>산타마리아노벨라 추천!</h2>
    <div>
      <br>
      <p>플로럴과 비누를 선택한 당신, 은은하고 잔잔한 향을 좋아하는 군요. 비누향이 대표적인 브랜드 산타마리아 노벨라를 추천합니다.<br>
        산타마리아 노벨라는 약국에서 시작된 이탈리아 천연 화장품 브랜드로,400년이 넘는 역사를 가지고 있습니다.<br>
        프랑스에 여행가면 화장품사러 꼭 들르는 몽쥬약국처럼, 피렌체에 위치한산타마리아 노벨라 약국 역시빼놓을 수 없는 관광지입니다.
      </p>
    </div>
    <br>
    <div class="row">
      <div id="columnchart_soap" style="width: 900px; height: 300px; margin:0px auto; margin-bottom:200px;"></div>
    </div>
    </div>
    <hr>
    <div class="row details">
      <div class="col-sm-4">
        <h3>아쿠아 디 콜로니아 프리지아</h3>
        <img src="img/프리지아.jpg" alt="failed" class="img-responsive" style="display:block; margin: 0px auto; height:300px; width:auto">
        <br>
        <p style="margin-left:90px; margin-right:90px;">남아프리카 태생의 프리지아 꽃에서 영감을 받은 플로럴 싱글 노트<br> 프리지아 꽃에서 추출한 은은한 비누향이 특징</p>
      </div>
      <div class="col-sm-4">
        <h3>아쿠아 디 콜로니아 아이리스</h3>
        <img src="img/아이리스.jpg" alt="failed" class="img-responsive" style="display:block; margin: 0px auto; height:300px; width:auto">
        <br>
        <p style="margin-left:90px; margin-right:90px;">은은한 바이올렛 계열의 꽃향기</p>
      </div>
      <div class="col-sm-4">
        <h3>아쿠아 디 콜로니아 멜로그라노</h3>
        <img src="img/멜로그라노.jpg" alt="failed" class="img-responsive" style="display:block; margin: 0px auto; height:300px; width:auto">
        <br>
        <p style="margin-left:90px; margin-right:90px;">남아프리카 태생의 프리지아 꽃에서 영감을 받은 플로럴 싱글 노트<br> 프리지아 꽃에서 추출한 은은한 비누향이 특징</p>
      </div>
    </div>
    <br>
    <div><button class="btn_gotobrand" onclick="gotoSantamaria()" style="margin-top:100px">산타마리아노벨라 보러가기</button></div>
  </div>







  <div class="container-fluid qna" id="spicy">
    <div class="row details">
    <h2>딥디크 추천!</h2>
    <div>
      <br>
      <p>플로럴과 비누를 선택한 당신, 은은하고 잔잔한 향을 좋아하는 군요. 비누향이 대표적인 브랜드 산타마리아 노벨라를 추천합니다.<br>
        산타마리아 노벨라는 약국에서 시작된 이탈리아 천연 화장품 브랜드로,400년이 넘는 역사를 가지고 있습니다.<br>
        프랑스에 여행가면 화장품사러 꼭 들르는 몽쥬약국처럼, 피렌체에 위치한산타마리아 노벨라 약국 역시빼놓을 수 없는 관광지입니다.
      </p>
    </div>
    <br>
    <div class="row">
      <div id="columnchart_spicy" style="width: 900px; height: 300px; margin:0px auto; margin-bottom:200px;"></div>
    </div>
  </div>
    <hr>

    <div class="row details">
      <div class="col-sm-4">
        <h3>베티베리오</h3>
        <img src="img/베티베리오.jpg" alt="failed" class="img-responsive" style="display:block; margin: 0px auto; height:300px; width:auto">
        <br>
        <p style="margin-left:100px; margin-right:100px;">플로리다 산 자몽과 터키산 장미의 향기로운 조화</p>
      </div>

      <div class="col-sm-4">
        <h3>오데썽</h3>
        <img src="img/오데썽.png" alt="failed" class="img-responsive" style="display:block; margin: 0px auto; height:300px; width:auto">
        <br>
        <p style="margin-left:100px; margin-right:100px;">오렌지와 시원한 주니퍼베리향</p>
      </div>

      <div class="col-sm-4">
        <h3>탐다오</h3>
        <img src="img/탐다오.jpg" alt="failed" class="img-responsive" style="display:block; margin: 0px auto; height:300px; width:auto">
        <br>
        <p style="margin-left:100px; margin-right:100px;">신성한 숲을 거니는 향</p>
      </div>
    </div>
    <div><button class="btn_gotobrand" onclick="gotoDiptyque()" style="margin-top:100px">딥디크 보러가기</button></div>
  </div>






  <div class="container-fluid qna" id="rose">
    <div class="row details">
    <h2>바이레도 추천!</h2>
      <div>
        <p>프루티와 로즈를 선택한 당신, 상큼한 과일과 장미를 좋아하는군요. 로즈향이 대표적인 바이레도를 추천드립니다.</p>
      </div>
    <br>
      <div class="row">
        <div id="columnchart_rose" style="width: 900px; height: 300px; margin:0px auto; margin-bottom:200px;"></div>
      </div>
    </div>
    <hr>
    <div class="row details">
      <div class="col-sm-4">
        <h3>라 튤립</h3>
        <img src="img/라튤립.jpg" alt="failed" class="img-responsive" style="display:block; margin: 0px auto; height:300px; width:auto">
        <br>
        <p style="margin-left:90px; margin-right:90px;">싱그러운 프리지아 향에서 튤립향으로 이어지는 사랑스럽고 은은한 플로럴 향수</p>
      </div>

      <div class="col-sm-4">
        <h3>릴 플레르</h3>
        <img src="img/릴플레르.jpg" alt="failed" class="img-responsive" style="display:block; margin: 0px auto; height:300px; width:auto">
        <br>
        <p style="margin-left:90px; margin-right:90px;">블랜 커런트와 탠저린의 아찔하면서도 생기있는 향</p>
      </div>

      <div class="col-sm-4">
        <h3>로즈 오브 맨즈 랜드</h3>
        <img src="img/로즈오브맨즈랜드.jpg" alt="failed" class="img-responsive" style="display:block; margin: 0px auto; height:300px; width:auto">
        <br>
        <p style="margin-left:90px; margin-right:90px;">날카로운 알콜향과 함께 플로럴향과 약간의 스파이시향, 그리고 미세한 파우더리 향</p>
      </div>
    </div>
    <div><button class="btn_gotobrand" onclick="gotoByredo()" style="margin-top:100px">바이레도 보러가기</button></div>
  </div>







  <div class="container-fluid qna" id="citrus">
    <div class="row details">
    <h2>조말론 추천!</h2>
    <div>
      <p>프루티와 시트러스를 선택한 당신, 상쾌하고 달콤한 향을 좋아하는군요. 시트러스향이 대표적인 브랜드 조말론 런던을 추천합니다.<br>
        조말론은 인공적인 원료를 사용하지 않고 천연원료를 사용하며 일반적으로 향수에 사용하지 않는 원료들을 사용함으로써 다채로운 조말론만의 특별함을 느낄 수 있습니다. </p>
    </div>
    <br>
    <div class="row">
      <div id="columnchart_citrus" style="width: 900px; height: 300px; margin:0px auto; margin-bottom:200px;"></div>
    </div>
    </div>
    <hr>

    <div class="row details">
      <div class="col-sm-4">
        <h3>블랙베리 앤 베이</h3>
        <img src="img/블랙베리 앤 베이.jpg" alt="failed" class="img-responsive" style="display:block; margin: 0px auto; height:300px; width:auto">
        <br>
        <p style="margin-left:100px; margin-right:100px;">블랙베리의 상큼하며 달콤한 과일향 이후에 시원한 향 <br>사계절 사용하기 좋은 향</p>
      </div>

      <div class="col-sm-4">
        <h3>라임 바질 앤 만다린</h3>
        <img src="img/라임 바질 앤 만다린.jpg" alt="failed" class="img-responsive" style="display:block; margin: 0px auto; height:300px; width:auto">
        <br>
        <p style="margin-left:100px; margin-right:100px;">달콤, 상큼한 향이 첫 향과 잔향의 우디함</p>
      </div>

      <div class="col-sm-4">
        <h3>넥타린 블로썸 앤 허니</h3>
        <img src="img/넥타린 블로썸 앤 허니.png" alt="failed" class="img-responsive" style="display:block; margin: 0px auto; height:300px; width:auto">
        <br>
        <p style="margin-left:100px; margin-right:100px;">복숭아의 달콤함에 꿀을 섞어 달달과 부드러움의 완벽한 조화</p>
      </div>
    </div>
    <div><button class="btn_gotobrand" onclick="gotoJomalone()" style="margin-top:100px">조말론 보러가기</button></div>
  </div>







  <div class="qna" id="woody">
    <div class="row details">
    <h2>이솝 추천!</h2>
    <div>
      <p>풍부하고 관능적인 아로마가 특징인. 우디 노트와 흡사하지만 세련된 플로럴 향과 발사믹의 유향 내음으로 그려집니다.<br> 이솝에서 자주 사용하는 성분으로는 파촐리, 샌달우드, 프랑킨센스가 있습니다.</p>
    </div>
    <br>
    <div class="row">
      <div id="columnchart_woody" style="width: 900px; height: 300px; margin:0px auto; margin-bottom:200px;"></div>
    </div>
    </div>

    <hr>
    <div class="row details">
      <div class="col-sm-4">
        <h3>휠</h3>
        <img src="img/휠.jpg" alt="failed" class="img-responsive" style="display:block; margin: 0px auto; height:300px; width:auto">
        <br>
        <p style="margin-left:100px; margin-right:100px;">자연 그대로의 나무향</p>
      </div>

      <div class="col-sm-4">
        <h3>로주</h3>
        <img src="img/로주.jpg" alt="failed" class="img-responsive" style="display:block; margin: 0px auto; height:300px; width:auto">
        <br>
        <p style="margin-left:100px; margin-right:100px;">자연 그대로의 장미향</p>
      </div>

      <div class="col-sm-4">
        <h3>마라캐시</h3>
        <img src="img/마라캐시.jpg" alt="failed" class="img-responsive" style="display:block; margin: 0px auto; height:300px; width:auto">
        <br>
        <p style="margin-left:100px; margin-right:100px;">스파이시한 샌달우드의 향</p>
      </div>
    </div>
    <div><button class="btn_gotobrand" onclick="gotoAesop()" style="margin-top:100px">이솝 보러가기</button></div>
  </div>








  <div class="qna" id="vanilla">
    <div class="row details">
    <h2>메종마르지엘라 추천!</h2>
    <div>
      <p>아로마와 바닐라를 선택한 당신에게 메종 마르지엘라를 추천합니다! 메종마르지엘라는 부드러운 향으로 유명합니다. <br>부드럽고 고급진 향이라 할 수 있습니다.  고혹적이면서 매력적인 향수입니다.</p>
    </div>
    <div class="row">
      <div id="columnchart_vanilla" style="width: 900px; height: 300px; margin:0px auto; margin-bottom:200px;"></div>
    </div>
    </div>

    <div class="row details">
      <div class="col-sm-4">
        <h3>버블 바스</h3>
        <img src="img/버블 바스.png" alt="failed" class="img-responsive" style="display:block; margin: 0px auto; height:300px; width:auto">
        <br>
        <p style="margin-left:100px; margin-right:100px;">거품 목욕의 향 <br>사계절 사용하기 좋은 향</p>
      </div>

      <div class="col-sm-4">
        <h3>세일링 데이</h3>
        <img src="img/세일링 데이.png" alt="failed" class="img-responsive" style="display:block; margin: 0px auto; height:300px; width:auto">
        <br>
        <p style="margin-left:100px; margin-right:100px;">바다를 담은 향</p>
      </div>

      <div class="col-sm-4">
        <h3>비치 워크</h3>
        <img src="img/비치 워크.png" alt="failed" class="img-responsive" style="display:block; margin: 0px auto; height:300px; width:auto">
        <br>
        <p style="margin-left:100px; margin-right:100px;">여름 바다를 따라 산책하는 듯한 향</p>
      </div>
    </div>
    <div><button class="btn_gotobrand" onclick="gotoMaison()" style="margin-top:100px">메종마르지엘라 보러가기</button></div>
  </div>







  <div class="container-fluid footer">
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

  <script src="./js/start.js"></script>

</body>

</html>
