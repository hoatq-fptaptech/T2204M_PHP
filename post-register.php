<?php
session_start();
//$usr = $_GET["username"];
//$email = $_GET["email"];
$usr = $_POST["username"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
$cfpwd = $_POST["cfm_pwd"];
//echo "username: $usr email: $email";
// kiểm tra nhập thông tin có đúng hay không ( so sanh 2 pwd)
if($pwd != $cfpwd){
    $msg = "Mật khẩu không khớp nhau. Vui lòng kiểm tra lại!";
    $_SESSION["error"] = $msg;
    $_SESSION["username"] = $usr;
    $_SESSION["email"] = $email;
    // quay trở về trang register
    header("Location: register.php");
    die(); // làm cho luồng web chết tại đây mà ko đi tiếp
}
// xử lý data nhận được

header("Location: index.php");
