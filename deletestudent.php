<?php
session_start();
$sv_id = $_POST["id"];

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
$sql = "delete from students where id=$sv_id";//students
$rs = $conn->query($sql);
if($rs){
    header("Location: liststudent.php");
    die();
}
$_SESSION["error"] = "Gặp lỗi khi thêm mới sinh viên.";
header("Location: liststudent.php");

