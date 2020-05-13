<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
      shrink-to-fit="no"
    />

    <title>첫 등교는 IP로!</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/faviconSchool.ico" />
    <link rel="icon" href="images/faviconSchool.ico" />

    <link rel="stylesheet" href="./css/bootstrap.min.css" />

    <!-- Font -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/gh/moonspam/NanumSquare@1.0/nanumsquare.css"
    />

    <link rel="stylesheet" href="./css/grayscale.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/coupon.css" />
  </head>
  <body>
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger" href="./index.php">첫 등교는 IP로!</a>
        <button
          class="navbar-toggler navbar-toggler-right"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          Menu
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto list-unstyled">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="./roadview.php" id="roadview">로드뷰</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="./inventory.php" id="inventory">인벤토리</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="./coupon.php" id="coupon">인증서</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="./rank.php" id="ranking">랭킹</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="src/logout_back.php" id="logout">로그아웃</a>
                        </li>
                    </ul>
                </div>
      </div>
    </nav>

    <div class="invent-section text-center">
      <div class="inven">
        <h1 class="inven-title">인증서</h1>
      </div>
      <p class="inven-inst" id="inven-inst">
        곧 인증서가 보입니다!
      </p>
      <div id="inven-list">
        <div class="row">
          <div class="col-md">
            <div class="inven-item">
              <img class="item-img" src="images/coupon0.png" id="img0">
              <div class="inven-item-name">기본 인증서</div>
            </div>
          </div>
          <div class="col-md">
            <div class="inven-item">
                <img class="item-img" src="images/coupon0.png" id="img0">
                <div class="inven-item-name">기본 인증서</div>
            </div>
          </div>
          <div class="col-md">
            <div class="inven-item">
                <img class="item-img" src="images/coupon0.png" id="img0">
                <div class="inven-item-name">기본 인증서</div>
            </div>
          </div>
          <div class="col-md">
            <div class="inven-item">
              <img class="item-img" src="images/coupon0.png" id="img0">
              <div class="inven-item-name">기본 인증서</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="./js/jquery.min.js"></script>
    <script src="js/coupon.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="./js/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="./js/grayscale.min.js"></script>
  </body>
</html>
