<?php
require("conn.php");
session_start();

header('Content-Type: text/html; charset=utf-8');

function show_msg($msg, $money, $url)
{
    echo "<script>alert('{$msg} {$money}');window.location.href='{$url}';</script>";
    exit();
}

$StoredMoney = $_POST['StoredMoney'];
$date = date("Y-m-d");

$mail = $_SESSION['mail_login'];
$password = $_SESSION['password_login'];

if ($mail == 0){
    show_msg("尚未登入，請先登入會員!", '', 'http://localhost/member/Login.html');
}

$sql_member_id = "SELECT member_id, member_money FROM member WHERE member_mail = '$mail' AND member_password = '$password'";

$data = mysqli_query($link, $sql_member_id);
for ($i = 1; $i <= mysqli_num_rows($data); $i++) {
    $rs = mysqli_fetch_row($data);
}

$rs[1] = $rs[1] + $StoredMoney ;

$sql = "INSERT INTO `stored_value_record` (`member_id`, `stored_value_record_money`) VALUE ('$rs[0]', '$StoredMoney') ";
$result1 = mysqli_query($link, $sql) or die("查詢失敗");

$sql2 = "UPDATE  `member` SET `member_money` = $rs[1] WHERE `member_id`= $rs[0];";
// 用mysqli_query方法執行(sql語法)將結果存在變數中
$result = mysqli_query($link,$sql2);

// 如果有異動到資料庫數量(更新資料庫) debug用的
if (mysqli_affected_rows($link)>0) {
echo "資料已更新";
}
elseif(mysqli_affected_rows($link)==0) {
    echo "無資料更新";
}

show_msg("儲值成功!此次儲值總金額: ", $StoredMoney, 'http://localhost/member/Login.html');
