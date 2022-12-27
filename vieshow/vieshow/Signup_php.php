<?php
require("conn.php");

header('Content-Type: text/html; charset=utf-8');
$name = $_POST['name'];
$identity = $_POST['identity'];
$phone = $_POST['phone'];
$birthday = $_POST['birthday'];
$mail = $_POST['mail'];
$password = $_POST['password'];

function show_msg($msg, $url)
{
    echo "<script>alert('{$msg}');window.location.href='{$url}';</script>";
    exit();
}

$sql = "INSERT INTO  `member` (`member_name`,`identity_number`, `member_phone`, `member_birthday`, `member_mail`, `member_password`
, `member_money`, `member_point`,`member_login_status_id`,`member_point_period`) VALUE ('$name','$identity','$phone','$birthday','$mail'
,'$password','0','0','mls0001','2022-12-31') ";

$result = mysqli_query($link,$sql);
if (mysqli_affected_rows($link)>0) {
    // 如果有一筆以上代表有更新
    // mysqli_insert_id可以抓到第一筆的id
    $new_id= mysqli_insert_id ($link);
    show_msg("註冊成功!",'http://localhost/member/Login.php');
}
elseif(mysqli_affected_rows($link)==0) {
    echo "無資料新增";
}
else {
    echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($link);
}
mysqli_close($link);
?>