<?php
require("db.php");
session_start();

header('Content-Type: text/html; charset=utf-8');

function show_msg($msg, $url)
{
    echo "<script>alert('{$msg}');window.location.href='{$url}';</script>";
    exit();
}

$mail = $_POST['mail'];
$password = $_POST['password'];

$_SESSION['mail_login'] = $mail;
$_SESSION['password_login'] = $password;

$sql_query_login = "SELECT * FROM member WHERE member_mail = '$mail' AND member_password = '$password'";

$result1 = mysqli_query($link, $sql_query_login) or die("查詢失敗");
for ($i = 1; $i <= mysqli_num_rows($result1); $i++) 
{
    $rs = mysqli_fetch_row($result1);
}
$_SESSION['member_id'] = $rs[0];

if (mysqli_num_rows($result1) && isset($_POST['login'])) 
{ //登入成功
    //狀態變登入
    $sql_update_login = "UPDATE `member` SET `member_login_status_id` = 'mls0001' WHERE member_mail = '$mail' AND member_password = '$password'";
    $result1 = mysqli_query($link, $sql_update_login) or die("修改失敗");
    show_msg("登入成功!", 'Home.php');
} else if (isset($_POST['login'])) 
{
    $_SESSION['mail_login'] = '';
    $_SESSION['password_login'] = '';
    $_SESSION['member_id'] = '';
    show_msg("登入失敗!帳號或密碼有誤!", 'Login.php');
}

if (isset($_POST['signup'])) 
{
    header("Location:Signup.php");
}
