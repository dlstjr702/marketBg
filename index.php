<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marketBG</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="/marketBG/css/reset.css">
    <link rel="stylesheet" href="/marketBG/css/style.css">



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
                                <img src="./img/main/market_intro01.png" alt="마켓이미지">
                            </div>
                        </div>
                        <!-- 이미지 영역 E -->

                        <!-- 폼 영역 S -->
                        <div class="col">
                            <form action="/main/main.php" method="post">
                                <div class="form_cont">
                                    <?php
                                        echo "<div class='alert_txt'>". $login_err."</div>"  
                                    ?>
                                    <dl class="form_line">
                                        <dt>
                                            <p class="tit">아이디</p>
                                        </dt>
                                        <dd>
                                            <div class="inp_bx">
                                                <input type="text" name="id" placehoder="아이디를 입력해주세요.">
                                            </div>
                                        </dd>
                                    </dl>
                                    <dl class="form_line">
                                        <dt>
                                            <p class="tit">비밀번호</p>
                                        </dt>
                                        <dd>
                                            <div class="inp_bx">
                                                <input type="password" name="password" placehoder="비밀번호를 입력해주세요.">
                                            </div>
                                        </dd>
                                    </dl>
                                </div>
                                <div class="form_info">
                                    <div class="info_list">
                                        <a href="#!">아이디찾기</a>
                                        <a href="#!">비밀번호찾기</a>
                                        <a href="#!">회원가입</a>
                                    </div>
                                    <button type="submit" class="btn_login" onclick="button()">로그인</button>
                                </div>
                            </form>
                        </div>
                        <!-- 폼 영역 E -->





                           <?php
                           session_start();
                           $host = 'localhost';
                           $user = 'Admin';
                           $pw = 'Admin1234';
                           $db_name = 'marketBgDb';
                           $mysqli = new mysqli($host, $user, $pw, $db_name); //db 연결

                           //login.php에서 입력받은 id, password
                           $username = $_POST['id'];
                           $userpass = $_POST['pw'];

                           $q = "SELECT * FROM member WHERE id = '$username' AND pass = '$userpass'";
                           $result = $mysqli->query($q);
                           $row = $result->fetch_array(MYSQLI_ASSOC);

                           //결과가 존재하면 세션 생성
                           if ($row != null) {
                              $_SESSION['username'] = $row['id'];
                                 $_SESSION['name'] = $row['name'];
                              echo "<script>location.replace('/main/main.php');</script>";
                              exit;
                           }

                           //결과가 존재하지 않으면 로그인 실패
                           if($row == null){
                              echo "<script>alert('Invalid username or password')</script>";
                              echo "<script>location.replace('login.php');</script>";
                              exit;
                           }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>