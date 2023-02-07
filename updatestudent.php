<?php
include_once("database.php");
session_start();
// nhan data tu form
$sv_id = $_GET["id"];
$sv_name = $_POST["name"];
$sv_email = $_POST["email"];
$sv_mark = $_POST["mark"];
$sv_gender = $_POST["gender"];
// ket noi thanh cong
$sql = "update students set name='$sv_name',email='$sv_email',
                    mark=$sv_mark,gender='$sv_gender' where id=$sv_id";//students
$rs = update($sql);
if($rs){
    header("Location: liststudent.php");
    die();
}
$_SESSION["error"] = "Gặp lỗi khi thêm mới sinh viên.";
header("Location: updatestudent.php?id=$sv_id");

