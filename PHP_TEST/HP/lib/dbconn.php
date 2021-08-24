<?php
  //PHP versions prior to 5.2.9 and 5.3.0,
  $servername = "sql212.epizy.com";
  $username = "epiz_27429861";
  $password = "Start2020";
  $db_name = "epiz_27429861_startcoding";

  // 데이터베이스 접속도 공통 모듈에 작성해서 사용
  $conn= mysqli_connect($servername, $username, $password, $db_name);

  // 한글깨짐 방지 쿼리 실행
  mysqli_query($conn,"set names utf8");
?>