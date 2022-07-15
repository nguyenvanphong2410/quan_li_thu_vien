<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $data = 'qlthuvien';
    $connect = mysqli_connect($host, $user, $pass, $data);
    //Kiểm tra kết nối đến sql
    if ($connect == false) {
        echo "_________Kết nối thất bại !_________";
        exit();
    } 