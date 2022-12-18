<?php
require("conn.php");
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
for ($i = 1; $i <= mysqli_num_rows($result1); $i++) {
    $rs = mysqli_fetch_row($result1);
}
$_SESSION['member_id'] = $rs[0];

if (mysqli_num_rows($result1) && isset($_POST['login'])) {
    show_msg("登入成功!",'http://localhost/member/TicketRecord.php');
}
else if (isset($_POST['login'])) {
    show_msg("登入失敗!帳號或密碼有誤!",'http://localhost/member/login.html');
}

if (isset($_POST['signup'])){
    header("Location:http://localhost/member/signup.html"); 
}

?>