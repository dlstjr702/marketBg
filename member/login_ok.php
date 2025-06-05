<?php
session_start(); // 세션을 시작합니다.

include("./db_conn.php");



if($_SERVER["REQUEST_METHOD"]=="POST"){

    $id = $_POST['id'];//입력아이디 가져오기
    $pw = $_POST['password'];//입력 패스워드 가져오기
    
    
    $sql = "SELECT * FROM member WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    
    
    if (!$row) { // 아이디가 존재하지 않으면 로그인 페이지로
        echo "<script>alert(\"일치하는 아이디가 없습니다.\");history.back();</script>";
        exit;
    } else { // 아이디가 존재하면 비밀번호 확인
        if ($row['password'] != $pw) { // 비밀번호 불일치 시 로그인 페이지로
            echo "<script>alert(\"비밀번호가 일치하지 않습니다.\");history.back();</script>";
            exit;
        } else { // 비밀번호 일치 시 세션 변수 생성
            $_SESSION['id'] = $row['id'];
            $_SESSION['name'] = $row['name'];
            mysqli_close($conn);
            header("Location: ../main/main.php");
        }
    }
}

?>


