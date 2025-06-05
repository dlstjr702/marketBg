<?php  
  $host = 'localhost';
  $user = 'admin';
  $pass = 'admin1234';

  $conn = mysqli_connect($host, $user, $pass, "marketbgdb");

  if(! $conn )  
  {  
      die('데이터베이스 연결이 실패 : ' . mysqli_connect_error());
  }  

?>