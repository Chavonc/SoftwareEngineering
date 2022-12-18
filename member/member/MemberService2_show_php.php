<?php
require("conn.php");
session_start();

$identity = $_SESSION['identity'];

function show_msg($msg, $url)
{
    echo "<script>alert('{$msg}');window.location.href='{$url}';</script>";
    exit();
}

header('Content-Type: text/html; charset=utf-8');
$mail = $_POST['mail'];
$password = $_POST['password'];

$sql_update_identity = "UPDATE member SET member_mail = '$mail', member_password = '$password' WHERE identity_number = '$identity'"; //修改帳號密碼

$result1 = mysqli_query($link, $sql_update_identity) or die("查詢失敗");

show_msg("修改成功!",'http://localhost/member/MemberService2.html');
?>