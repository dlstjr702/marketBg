<?php
session_start(); // 세션을 시작합니다.

include("./db_conn.php");


session_unset();
header("Location: ../main/main.php");

?>


