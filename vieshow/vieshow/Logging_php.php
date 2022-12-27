<?php
require("conn.php");
session_start();

header('Content-Type: text/html; charset=utf-8');

function show_msg($msg, $money, $url)
{
    echo "<script>alert('{$msg} {$money}');window.location.href='{$url}';</script>";
    exit();
}

$member_id = $_SESSION['member_id'];

if (isset($_POST['button0'])) $item_name = $_SESSION['item_name0'];
else if (isset($_POST['button1'])) $item_name = $_SESSION['item_name1'];
else if (isset($_POST['button2'])) $item_name = $_SESSION['item_name2'];
else if (isset($_POST['button3'])) $item_name = $_SESSION['item_name3'];
else if (isset($_POST['button4'])) $item_name = $_SESSION['item_name4'];
else if (isset($_POST['button5'])) $item_name = $_SESSION['item_name5'];
else if (isset($_POST['button6'])) $item_name = $_SESSION['item_name6'];
else if (isset($_POST['button7'])) $item_name = $_SESSION['item_name7'];
else if (isset($_POST['button8'])) $item_name = $_SESSION['item_name8'];
else if (isset($_POST['button9'])) $item_name = $_SESSION['item_name9'];
else if (isset($_POST['button10'])) $item_name = $_SESSION['item_name10'];
else if (isset($_POST['button11'])) $item_name = $_SESSION['item_name11'];
else if (isset($_POST['button12'])) $item_name = $_SESSION['item_name12'];
else if (isset($_POST['button13'])) $item_name = $_SESSION['item_name13'];
else if (isset($_POST['button14'])) $item_name = $_SESSION['item_name14'];
else if (isset($_POST['button15'])) $item_name = $_SESSION['item_name15'];
else if (isset($_POST['button16'])) $item_name = $_SESSION['item_name16'];
else if (isset($_POST['button17'])) $item_name = $_SESSION['item_name17'];
else if (isset($_POST['button18'])) $item_name = $_SESSION['item_name18'];
else if (isset($_POST['button19'])) $item_name = $_SESSION['item_name19'];
else if (isset($_POST['button20'])) $item_name = $_SESSION['item_name20'];
else if (isset($_POST['button21'])) $item_name = $_SESSION['item_name21'];
else if (isset($_POST['button22'])) $item_name = $_SESSION['item_name22'];
else if (isset($_POST['button23'])) $item_name = $_SESSION['item_name23'];
else if (isset($_POST['button24'])) $item_name = $_SESSION['item_name24'];
else if (isset($_POST['button25'])) $item_name = $_SESSION['item_name25'];
else if (isset($_POST['button26'])) $item_name = $_SESSION['item_name26'];
else if (isset($_POST['button27'])) $item_name = $_SESSION['item_name27'];
else if (isset($_POST['button28'])) $item_name = $_SESSION['item_name28'];
else if (isset($_POST['button29'])) $item_name = $_SESSION['item_name29'];
else if (isset($_POST['button30'])) $item_name = $_SESSION['item_name30'];
else if (isset($_POST['button31'])) $item_name = $_SESSION['item_name31'];
else if (isset($_POST['button32'])) $item_name = $_SESSION['item_name32'];
else if (isset($_POST['button33'])) $item_name = $_SESSION['item_name33'];
else if (isset($_POST['button34'])) $item_name = $_SESSION['item_name34'];
else if (isset($_POST['button35'])) $item_name = $_SESSION['item_name35'];
else if (isset($_POST['button36'])) $item_name = $_SESSION['item_name36'];
else if (isset($_POST['button37'])) $item_name = $_SESSION['item_name37'];
else if (isset($_POST['button38'])) $item_name = $_SESSION['item_name38'];
else if (isset($_POST['button39'])) $item_name = $_SESSION['item_name39'];
else if (isset($_POST['button40'])) $item_name = $_SESSION['item_name40'];
else if (isset($_POST['button41'])) $item_name = $_SESSION['item_name41'];
else if (isset($_POST['button42'])) $item_name = $_SESSION['item_name42'];
else if (isset($_POST['button43'])) $item_name = $_SESSION['item_name43'];
else if (isset($_POST['button44'])) $item_name = $_SESSION['item_name44'];
else if (isset($_POST['button45'])) $item_name = $_SESSION['item_name45'];
else if (isset($_POST['button46'])) $item_name = $_SESSION['item_name46'];
else if (isset($_POST['button47'])) $item_name = $_SESSION['item_name47'];
else if (isset($_POST['button48'])) $item_name = $_SESSION['item_name48'];
else if (isset($_POST['button49'])) $item_name = $_SESSION['item_name49'];
else if (isset($_POST['button50'])) $item_name = $_SESSION['item_name50'];
else if (isset($_POST['button51'])) $item_name = $_SESSION['item_name51'];
else if (isset($_POST['button52'])) $item_name = $_SESSION['item_name52'];
else if (isset($_POST['button53'])) $item_name = $_SESSION['item_name53'];
else if (isset($_POST['button54'])) $item_name = $_SESSION['item_name54'];
else if (isset($_POST['button55'])) $item_name = $_SESSION['item_name55'];
else if (isset($_POST['button56'])) $item_name = $_SESSION['item_name56'];
else if (isset($_POST['button57'])) $item_name = $_SESSION['item_name57'];
else if (isset($_POST['button58'])) $item_name = $_SESSION['item_name58'];
else if (isset($_POST['button59'])) $item_name = $_SESSION['item_name59'];
else if (isset($_POST['button60'])) $item_name = $_SESSION['item_name60'];
else if (isset($_POST['button61'])) $item_name = $_SESSION['item_name61'];

$query_member_data = "SELECT * FROM member WHERE member_id = '$member_id'";
$member_data = mysqli_query($link, $query_member_data);
for ($i = 1; $i <= mysqli_num_rows($member_data); $i++) {
    $rs_mem = mysqli_fetch_row($member_data);
}

$sql_query = "SELECT * FROM exchange_item WHERE exchange_item_name = '$item_name'";
$result = mysqli_query($link, $sql_query) or die("查詢失敗");
for ($i = 1; $i <= mysqli_num_rows($result); $i++) {
    $rs = mysqli_fetch_row($result);
}

if ($rs_mem[5] >= $rs[1]) {
    $rs_mem[5] = $rs_mem[5] - $rs[1];

    $sql = "INSERT INTO `point_exchange_record` (`member_id`, `exchange_item_id`) VALUE ('$member_id', '$rs[2]') ";
    $result1 = mysqli_query($link, $sql) or die("新增失敗");

    $sql_sub_point = "UPDATE  `member` SET `member_point` = $rs_mem[5] WHERE `member_id`= $member_id;";
    $result2 = mysqli_query($link, $sql_sub_point) or die("新增失敗");

    show_msg("兌換成功! ", $item_name, 'Logging.php');
}
else{
    show_msg("兌換失敗! 您的點數不足! ", $item_name, 'Logging.php');
}