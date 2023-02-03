<?php
session_start();
// nhan data tu form
$sv_name = $_POST["name"];
$sv_email = $_POST["email"];
$sv_mark = $_POST["mark"];
$sv_gender = $_POST["gender"];

$db = "t2204m";
$host = "localhost";
$user = "root";
$pwd = "root";

$conn = new mysqli($host,$user,$pwd,$db);
if($conn->connect_error){
    echo $conn->error;
    die();
}
// ket noi thanh cong
$sql = "insert into students(name,email,mark,gender)
 values('$sv_name','$sv_email',$sv_mark,'$sv_gender')";//students
$rs = $conn->query($sql);
if($rs){
    header("Location: liststudent.php");
    die();
}
$_SESSION["error"] = "Gặp lỗi khi thêm mới sinh viên.";
header("Location: createstudent.php");
