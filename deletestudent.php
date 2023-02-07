<?php
include_once("database.php");
session_start();
$sv_id = $_POST["id"];
$sql = "delete from students where id=$sv_id";//students
$rs = update($sql);
if($rs){
    header("Location: liststudent.php");
    die();
}
$_SESSION["error"] = "Gặp lỗi khi thêm mới sinh viên.";
header("Location: liststudent.php");

