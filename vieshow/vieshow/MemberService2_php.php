<?php
require("conn.php");
session_start();

header('Content-Type: text/html; charset=utf-8');
$identity = $_POST['identity'];

$_SESSION['identity'] = $identity;

function show_msg($msg, $url)
{
    echo "<script>alert('{$msg}');window.location.href='{$url}';</script>";
    exit();
}

$sql_query_identity = "SELECT * FROM member WHERE identity_number = '$identity'";

$result1 = mysqli_query($link, $sql_query_identity) or die("查詢失敗");
if (mysqli_num_rows($result1)) {
    header("Location: MemberService2_show.php");
} else {
    show_msg("身分證錯誤!",'MemberService2.php');
}
?>