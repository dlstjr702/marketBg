<?php
    $host='localhost';
    $user='admin';
    $pass='admin1234';
    $conn=new mysqli($host,$user,$pass,"marketBgDB");

    if(! $conn){
        die('데이터베이스 연결이 실패 : '. $conn->connect_error);
    }

    $sql = "create table member(
        id varchar(10) not null,
        password varchar(10) not null,
        name varchar(10) not null,
        gender varchar(4),
        birth varchar(10),
        mail varchar(30),
        phone varchar(20),
        address varchar(90),
        regist_day varchar(50),
        primary key(id)
        ) default CHARSET = utf8;";

        if($conn-> query($sql)){
            echo "테이블 생성 성공";
        }else{
            echo"테이블 생성실패". $conn->connect_error;
        }

        $sql = "INSERT INTO member (id, password, name, gender, birth, mail, phone, address, regist_day) VALUES ('Admin','Admin1234','관리자','','','','','','')";
        $conn->query($sql);
        $conn->close();

?>