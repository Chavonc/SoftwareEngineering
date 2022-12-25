<?php
require_once 'db.php';

header('Content-Type: text/html; charset=utf-8');
$name = $_POST['name'];
$identity = $_POST['identity'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$studio_info = $_POST['studio_info'];
$traffic = $_POST['traffic'];

$sql = "SELECT `studio_id`,`studio_name`, `studio_address`, `studio_phone`, `studio_info`, `traffic_info`
) FROM `member`";

$result = mysqli_query($sql);

if ($result->num_rows > 0) {
    $new_id= mysqli_insert_id ($link);
    }
elseif(mysqli_affected_rows($link)==0) {
    echo "無資料新增";
}
else {
    echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($link);
}
mysqli_close($link);

?>