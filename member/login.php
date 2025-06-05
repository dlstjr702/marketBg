<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marketBG</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="/marketBG/css/reset.css">
    <link rel="stylesheet" href="/marketBG/css/style.css">


    <!-- SCRIPT -->
    <script type="text/javascript">
        function login_check() {
            let userid = document.getElementById("id");
            let userpw = document.getElementById("pw");
            if (userid.value == "") {
                let id_txt = document.querySelector(".err_id");
                id_txt.textContent = "아이디를 입력하세요.";
                userid.focus();
                return false;
            };
            if (userpw.value == "") {
                let pw_txt = document.querySelector(".err_pw");
                pw_txt.textContent = "비밀번호를 입력하세요.";
                userpw.focus();
                return false;
            };
        };
  </script>

</head>
<body>
    <div class="wrap">
        <div id="shp_intro_cont">
            <div class="shp_wrap">
                <div class="cm_inner">
                    <div class="shp_ir row">
                        <!-- 이미지 영역 S -->
                        <div class="col">
                            <div class="img_bx">
                                <img src="/marketBG/img/main/market_intro01.png" alt="마켓이미지">
                            </div>
                        </div>
                        <!-- 이미지 영역 E -->

                        <!-- 폼 영역 S -->
                        <div class="col">
                        <?php
                            if(!isset($_SESSION['id']) || !isset($_SESSION['password'])) { ?>
                                <form action="/marketBG/member/login_ok.php" method="post">
                                    <div class="form_cont">
                                        <dl class="form_line">
                                            <dt>
                                                <p class="tit">아이디</p>
                                            </dt>
                                            <dd>
                                                <div class="inp_bx">
                                                    <input type="text" name="id" id="id" placehoder="아이디를 입력해주세요.">
                                                </div>
                                                <span class="err_id"></span>
                                            </dd>
                                        </dl>
                                        <dl class="form_line">
                                            <dt>
                                                <p class="tit">비밀번호</p>
                                            </dt>
                                            <dd>
                                                <div class="inp_bx">
                                                    <input type="password" name="password" id="password" placehoder="비밀번호를 입력해주세요.">
                                                </div>
                                                <span class="err_pw"></span>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="form_info">
                                        <button type="submit" class="btn_login">로그인</button>
                                        <div class="info_list">
                                            <a href="/marketBG/member/join.php">회원가입</a>
                                        </div>
                                    </div>
                                </form>
                         <?php } ?>
                        </div>
                        <!-- 폼 영역 E -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>