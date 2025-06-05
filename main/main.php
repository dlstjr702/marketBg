<?php include("../inc/header.php") ?>



<?php
session_start();
if(!isset($_SESSION['username'])) {
    echo "<script>location.replace('login.php');</script>";            
}

else {
    $username = $_SESSION['username'];
    $name = $_SESSION['name'];
} 
?>


<!-- MAIN S -->
<main>
    <section id="ms_contain">
        <div class="ms_wrap">
            <div class="cm_inner">
                <div class="ms_ir">
                    <!-- 슬라이드 S -->
                    <article id="cont01">
                        <ul class="cont_sd">
                            <li>
                                <div class="img_bx">
                                    <img src="../img/main/ms_visual01.png" alt="상품01">
                                </div>
                                <div class="txt_ovly">
                                    <p class="txt">2025 SALE FESTIVAL</p>
                                </div>
                            </li>
                            <li>
                                <div class="img_bx">
                                    <img src="../img/main/ms_visual02.jpg" alt="상품02">
                                </div>
                                <div class="txt_ovly">
                                    <p class="txt">2025 BLACK FRIDAY</p>
                                </div>
                            </li>
                        </ul>
                    </article>
                    <!-- 슬라이드 E -->

                    <!-- 신상품 S -->
                    <article id="cont02">
                        <h4 class="tit">PRODUCTS</h4>
                        <ul class="cont_prd_list">
                            <li>
                                <a href="../sub/notice_list.php">
                                    <i class="xi-tags"></i>
                                    NEW
                                </a>
                            </li>
                            <li>
                                <a href="../sub/notice_list.php">
                                    <i class="xi-bookmark"></i>
                                    BEST
                                </a>
                            </li>
                            <li>
                                <a href="../sub/notice_list.php">
                                    <i class="xi-percent"></i>
                                    SALE
                                </a>
                            </li>
                        </ul>
                    </article>
                    <!-- 신상품 E -->

                    <!-- 내정보 S -->
                    <article id="cont03">
                        <div class="cont_my">
                            <div class="my_info">
                                <div class="img_bx">
                                    <img src="../img/icon/ico_man01.png" alt="사람아이콘">
                                </div>
                                <div class="txt_bx">
                                    <h3 class="tit">
                                        <?php echo "<b>$username($name)</b> 님, 반갑습니다!";?>
                                        <b>2025.06.04.14:58</b> 접속하셨습니다.
                                    </h3>
                                </div>
                            </div>
                            <ul class="info_list">
                                <li>
                                    <a href="#!">
                                        <i class="xi-profile"></i>
                                        내정보
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="xi-basket"></i>
                                        장바구니
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="xi-coupon"></i>
                                        쿠폰정보
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="xi-truck"></i>
                                        배송조회
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </article>
                    <!-- 내정보 E -->

                    <!-- 상품리스트 S -->
                    <article id="cont04">
                        <div class="tit_bx">
                            <h4 class="tit"></h4>
                            <a href="#!" class="btn btn_move">
                                <i class="xi-plus"></i>
                            </a>
                        </div>
                    </article>
                    <!-- 상품리스트 E -->
                     
                    <!-- 게시판 S -->
                    <article id="cont05">
                        <div class="tit_bx">
                            <h4 class="tit">공지사항</h4>
                            <a href="#!" class="btn btn_move">
                                <i class="xi-plus"></i>
                            </a>
                        </div>
                        <ul class="cont_notice">
                            <li>
                                <a href="#!"> 
                                    <span class="ntc_tit"></span>
                                    <span class="ntc_date"></span>
                                </a>
                            </li>
                        </ul>

                    </article>
                    <!-- 게시판 E -->

                    <!-- 문의사항 S -->
                    <article id="cont06">
                        <h4 class="tit">고객센터</h4>
                        <p class="des">문의가능시간 : 09시 ~ 18시</p>
                        <div class="cont_inq">
                            <a href="#!">
                                <i class="xi-call"></i>032-1234-5678
                            </a>
                            <a href="#!">
                                <i class="xi-kakaotalk"></i> 카카오 문의하기
                            </a>
                            <a href="#!">
                                <i class="xi-gmail"></i> 메일 문의하기
                            </a>
                        </div>
                    </article>
                    <!-- 문의사항 E -->
                </div>
            </div>
        </div>
    </section>
</main>
<!-- MAIN E -->


<?php include("../inc/footer.php") ?>
