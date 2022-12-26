<?php
// 設定資料庫參數
$hostname = 'localhost'; // 主機名稱
$username = 'root'; //帳號
$password = '12345678'; //密碼
$database = 'vieshow'; //資料庫名稱

// 建立SQL連線
$link = mysqli_connect($hostname, $username, $password); // 取得物件連線，link 用來檢查連線
mysqli_query($link, "SET NAMES 'UTF8'"); //設定編碼
mysqli_select_db($link, $database) or die("無法選擇資料庫"); // 選擇資料庫，檢查連線

?>