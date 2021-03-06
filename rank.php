<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" shrink-to-fit="no">

    <title>첫 등교는 IP로!</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/faviconSchool.ico" />
    <link rel="icon" href="images/faviconSchool.ico" />

    <link rel="stylesheet" href="./css/bootstrap.min.css" />

    <!-- Font -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/moonspam/NanumSquare@1.0/nanumsquare.css">

    <link rel="stylesheet" href="./css/grayscale.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/rank.css" />
  </head>
  <body>
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger" href="index.php"
          >첫 등교는 IP로!</a
        >
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
              <a class="nav-link js-scroll-trigger" href="./roadview.php" id="roadview"
                >로드뷰</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link js-scroll-trigger"
                href="./inventory.php"
                id="inventory"
                >인벤토리</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./coupon.php" id="coupon"
                >인증서</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./rank.php" id="ranking"
                >랭킹</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="src/logout_back.php" id="logout"
                >로그아웃</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="invent-section text-center">
        <div class="inven">
            <h1 class="inven-title">랭킹</h1>
        </div>
        <div class="container">
            <div class="col-sm">
                <p class="inven-inst" id="inven-inst">퀴즈 전체 랭킹을 확인하세요!</p>
            </div>

            <table class="table table-hover">
                <thead>
                <tr class="view">
                <th>순위</th>
                <th>이름</th>
                <th>점수</th>
                </tr>
                </thead>
                <tbody>
            <?php

              include('src/DB.php');

              $sql = "select (select count(*)+1 from rank where exp > r.exp) as grade, (select m.name from member as m where m.id = r.id) as name , r.exp from rank as r order by exp desc";
              $result = mysqli_query($conn, $sql);

              while($rows = mysqli_fetch_assoc($result)){
                
                
                echo '<tr>';
                echo '<td>'.$rows['grade'].'</td>';
                echo '<td>'.$rows['name'].'</td>';
                echo '<td>'.$rows['exp'].'</td>';
                echo '</tr>';
                
              }

              ?>
              </tbody>
              </table>

        </div>
    </div>



    <script src="./js/jquery.min.js"></script>
    <script src="js/rank.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="./js/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="./js/grayscale.min.js"></script>
  </body>
</html>
