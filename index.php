<?php
  session_start();

  if(isset($_SESSION['ss_mb_id'])) {
    $mainNav_dp = '';
    $mainNav2_dp = 'none';
  } else {
    $mainNav_dp = 'none';
    $mainNav2_dp = '';
  }
?>

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
        <link rel="stylesheet" href="./css/index.css" />
    </head>
    <body>
      <!-- Navigation -->
      <!-- 로그인 전이면 mainNav display='none' -->
      <nav id="mainNav" class="navbar navbar-expand-lg navbar-light fixed-top" style="display:<?php echo $mainNav_dp?>;">
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
      <div class="main" style="display:<?php echo $mainNav2_dp?>;">
        <!-- 로그인 후면 mainNav2 display='none' -->
        <nav id="mainNav2" class="text-right">
          <div class="container-fluid go">
            <a href="./login.php" id="go_login">로그인/회원가입</a>
          </div>
        </nav>
        <header>
          <!-- <img src="./images/logo.png" alt="첫 등교는 IP로" class="logo"> -->
          <h1 class="logo">
            첫<br />
            등교는<br />
            IP로<br />
          </h1>
          <img src="./images/logo_icon.png" alt="" class="logo-icon" />
        </header>
      </div>
      <script src="./js/jquery.min.js"></script>

      <!-- Bootstrap core JavaScript -->
      <script src="js/bootstrap.bundle.min.js"></script>

      <!-- Plugin JavaScript -->
      <script src="./js/jquery.easing.min.js"></script>

      <!-- Custom scripts for this template -->
      <script src="./js/grayscale.min.js"></script>
    </body>
</html>
