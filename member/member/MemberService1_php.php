<?php
require("conn.php");
session_start();

header('Content-Type: text/html; charset=utf-8');
$mail = $_POST['mail'];
$password = $_POST['password'];

$_SESSION['mail_service'] = $mail;
$_SESSION['password_service'] = $password;

function show_msg($msg, $url)
{
    echo "<script>alert('{$msg}');window.location.href='{$url}';</script>";
    exit();
}

$sql_query_login = "SELECT * FROM member WHERE member_mail = '$mail' AND member_password = '$password'";

$result1 = mysqli_query($link, $sql_query_login) or die("查詢失敗");
if (mysqli_num_rows($result1)) {
    header("Location: http://localhost/member/MemberService1_show.php");
} else {
    show_msg("帳號或密碼錯誤!",'http://localhost/member/MemberService1.html');
}
?>