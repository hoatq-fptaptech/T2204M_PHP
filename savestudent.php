<?php
include_once("database.php");
session_start();
// nhan data tu form
$sv_name = $_POST["name"];
$sv_email = $_POST["email"];
$sv_mark = $_POST["mark"];
$sv_gender = $_POST["gender"];
$sql = "insert into students(name,email,mark,gender)
 values('$sv_name','$sv_email',$sv_mark,'$sv_gender')";//students
$rs = update($sql);
if($rs){
    header("Location: liststudent.php");
    die();
}
$_SESSION["error"] = "Gặp lỗi khi thêm mới sinh viên.";
header("Location: createstudent.php");
