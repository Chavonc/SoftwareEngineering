<?php
require("conn.php");
session_start();

header('Content-Type: text/html; charset=utf-8');
$mail = $_POST['mail'];
$password = $_POST['password'];

$_SESSION['mail_login'] = $mail;
$_SESSION['password_login'] = $password;

$sql_query_login = "SELECT * FROM member WHERE member_mail = '$mail' AND member_password = '$password'";

$result1 = mysqli_query($link, $sql_query_login) or die("查詢失敗");
if (mysqli_num_rows($result1)) {
    echo "登入成功";
} else {
    echo "登入失敗";
}
?>