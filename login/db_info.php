<?php
    $mysql_hostname = "localhost"; // 자기 자신을 의미
    $mysql_username = "USER_ID"; // root 계정으로 접속한다. 자신의 db ID 입력
    $mysql_password = "USER_PASSWORD"; // 자신의 계정에 설정된 비밀번호
    $mysql_database = "USER_DATABASE"; // 접속하고자 하는 데이터 베이스
    $mysql_port = '3306'; // 접속할 대 사용하는 포트 번호
    $mysql_charset = 'UTF8';
    //db 연결
    $mysqli = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port, $mysql_charset);
 ?>
