<?php
require("db.php");
session_start();

header('Content-Type: text/html; charset=utf-8');

function show_msg($msg, $url)
{
    echo "<script>alert('{$msg}');window.location.href='{$url}';</script>";
    exit();
}

$mail = $_SESSION['mail_login'];
$password = $_SESSION['password_login'];

//狀態變登出
$sql_update_logout = "UPDATE `member` SET `member_login_status_id` = 'mls0002' WHERE member_mail = '$mail' AND member_password = '$password'";
$result1 = mysqli_query($link, $sql_update_logout) or die("修改失敗");

$_SESSION['mail_login'] = '';
$_SESSION['password_login'] = '';
$_SESSION['member_id'] = '';

show_msg("登出成功!", 'Home.php');

?>