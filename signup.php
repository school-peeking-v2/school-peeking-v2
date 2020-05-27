<?php
    session_start();

    if(isset($_SESSION['ss_mb_id'])) {
        echo "<script>location.href = './index.php';</script>";
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

    <title>회원가입</title>

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

    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/signup.css" />
  </head>
  <body>

    <div class="view">
        <div class="logo">
            <img src="images/mirim.PNG" />
            <span class="school-name">미림여자정보과학고등학교</span>
        </div>
        <div class="profile">
            <img class="person" src="images/person.png" />
        </div>
        <div class="login">
            <form action="src/signup_back.php" onsubmit="return signUp_submit(this);" method="post">
                <input type="text" name="name" id="name" placeholder="이름" /><br/>
                <input type="email" name="email" id="email" placeholder="이메일" /><br/>
                <input type="password" placeholder="비밀번호"><br/>
                <button type="submit" id="btn_login">회원가입</button>
            </form>
        </div>
    </div>

    <script>
        function signUp_submit(f) {
                if(!f.name.value) {
                    alert("이름을 입력하세요");
                    f.name.focus();
                    return false;
                }

                if(!f.email.value) {
                    alert("이메일을 입력하세요");
                    f.email.focus();
                    return false;
                }

                if(f.pwd.value.length < 4) {
                    if(!f.pwd.value) alert("비밀번호를 입력하세요");
                    else alert("비밀번호를 4글자 이상 입력하세요");
                    f.pwd.focus();
                    f.pwd.value = null;
                    return false;
                }
            }
    </script>
  </body>
</html>