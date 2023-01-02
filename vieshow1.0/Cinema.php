<?php
// http://localhost:8080/viewshow_php/Cinema.php
// 載入db.php來連結資料庫
require_once 'db.php';
session_start();
header('Content-Type: text/html; charset=utf-8');
//$studio_name = $_POST['studio_name']; <!-----------------------------------------------------!>
// sql語法存在變數中
$sql = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0001' ";
//$sql = "SELECT `studio_name` FROM `studio`";
// 用mysqli_query方法執行(sql語法)將結果存在變數中
$result = mysqli_query($link,$sql);
// 如果有資料
if (mysqli_num_rows($result)>0) {
    foreach($result as $row1)
	{
    }
    // mysqli_num_rows方法可以回傳我們結果總共有幾筆資料
    // 取得大於0代表有資料
    //$search_name = mysqli_fetch_assoc($result);
}
$sql2 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0002' ";
$result2 = mysqli_query($link,$sql2);
if (mysqli_num_rows($result2)>0) {
    foreach($result2 as $row2){}
}
$sql3 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0003' ";
$result3 = mysqli_query($link,$sql3);
if (mysqli_num_rows($result3)>0) {
    foreach($result3 as $row3){}
}
$sql4 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0004' ";
$result4 = mysqli_query($link,$sql4);
if (mysqli_num_rows($result4)>0) {
    foreach($result4 as $row4){}
}
$sql5 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0005' ";
$result5 = mysqli_query($link,$sql5);
if (mysqli_num_rows($result5)>0) {
    foreach($result5 as $row5){}
}
$sql6 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0006' ";
$result6 = mysqli_query($link,$sql6);
if (mysqli_num_rows($result6)>0) {
    foreach($result6 as $row6){}
}
$sql7 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0007' ";
$result7 = mysqli_query($link,$sql7);
if (mysqli_num_rows($result7)>0) {
    foreach($result7 as $row7){}
}
$sql8 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0008' ";
$result8 = mysqli_query($link,$sql8);
if (mysqli_num_rows($result8)>0) {
    foreach($result8 as $row8){}
}
$sql9 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0009' ";
$result9 = mysqli_query($link,$sql9);
if (mysqli_num_rows($result9)>0) {
    foreach($result9 as $row9){}
}
$sql10 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0010' ";
$result10 = mysqli_query($link,$sql10);
if (mysqli_num_rows($result10)>0) {
    foreach($result10 as $row10){}
}
$sql11 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0011' ";
$result11 = mysqli_query($link,$sql11);
if (mysqli_num_rows($result11)>0) {
    foreach($result11 as $row11){}
}
$sql12 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0012' ";
$result12 = mysqli_query($link,$sql12);
if (mysqli_num_rows($result12)>0) {
    foreach($result12 as $row12){}
}
$sql13 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0013' ";
$result13 = mysqli_query($link,$sql13);
if (mysqli_num_rows($result13)>0) {
    foreach($result13 as $row13){}
}
$sql14 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0014' ";
$result14 = mysqli_query($link,$sql14);
if (mysqli_num_rows($result14)>0) {
    foreach($result14 as $row14){}
}
$sql15 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0015' ";
$result15 = mysqli_query($link,$sql15);
if (mysqli_num_rows($result15)>0) {
    foreach($result15 as $row15){}
}
$sql16 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0016' ";
$result16 = mysqli_query($link,$sql16);
if (mysqli_num_rows($result16)>0) {
    foreach($result16 as $row16){}
}
$sql17 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0017' ";
$result17 = mysqli_query($link,$sql17);
if (mysqli_num_rows($result17)>0) {
    foreach($result17 as $row17){}
}
?>
<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <title>影城據點</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable = no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark" id="DeepBlueBar">
            <font size="2px">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="Home.php">VIESHOW</a></li>
                    <?php
                        if ((!isset($_SESSION['mail_login']) && !isset($_SESSION['password_login']))) 
                        {
                            echo "<li class='nav-item' style=' cursor:pointer;'><a class='nav-link' href='Login.php'>會員登入</a></li>";
                        }
                        else if ($_SESSION['mail_login'] == '' && $_SESSION['password_login'] == '') 
                        {
                            echo "<li class='nav-item'><a class='nav-link' href='Login.php'>會員登入</a></li>";
                        } 
                        else 
                        {
                            echo "<li class='nav-item'><a class='nav-link' href='Logout_php.php'>會員登出</a></li>";
                            echo "<li class='nav-item'><a class='nav-link' href='TicketRecord.php'>訂票記錄</a></li>";
                            echo "<li class='nav-item'><a class='nav-link' href='StoredValue.php'>會員儲值</a></li>";
                            echo "<li class='nav-item'><a class='nav-link' href='Logging.php'>兌換點數</a></li>";
                        }
                        //echo $_SESSION['mail_login'];//debug
                    ?>
                    <li class="nav-item"><a class="nav-link" href="MemberService1.php">會員服務</a></li>
                </ul>
            </font>
        </nav>
        <nav class="navbar navbar-expand-sm bg-secondary navbar-dark" id="LightBlueBar">
            <font size="2px">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <li class="nav-item">
                        <form method="GET" action="ShowAllMovie.php">
                                        <select name="cinema" class="form-select" id="cinemal">
                                             <option selected>請選擇影城</option>
                                                  <?php
                                                       $query = "SELECT studio_id,studio_name FROM studio";
                                                       $result = mysqli_query($link, $query);
                                                       $table="";
                                                       foreach($result as $row){
                                                        foreach($row as $key => $value){
                                                            if($key=="studio_id"){
                                                                $table.='<option value='.$value.'>';
                                                            }
                                                            else{
                                                                $table.=$value.'</option>';
                                                            }
                                                           
                                                        }
                                                       }
                                                       echo $table;
                                                  ?>
                                        </select>
                                        <input type="submit" value="查詢" style="position:absolute;top:8px;left:22%" class="btn btn-light">
                                   </form>
                        </li>
                    </li>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item" color="black"><a class="nav-link" href="Cinema.php">影城資訊</a></li>
                    <li class="nav-item"><a class="nav-link" href="ClassExplain.php">級數說明</a></li>
                    <li class="nav-item"><a class="nav-link" href="TicketExplain.php">票種說明</a></li>
                </ul>
            </font>
        </nav>
    </div>
    <div id="area">
        <table>
            <tr style="font-size:x-large;color:blue;">
                <td>雙北</td>
                <td></td>
                <td>桃竹苗</td>
                <td></td>
                <td>中、東部</td>
                <td></td>
                <td>南部</td>
            </tr>
            <tr>
                <td><img src="CinemaPicture/1.png" width="150"></td>
                <td width="140">
                    <font size="2"><a href="台北信義威秀影城.php" style="text-decoration:blink;"><?php echo $row1['studio_name']; ?></a></font>
                </td>
                <td><img src="CinemaPicture/6.png" width="150"></td>
                <td width="140">
                    <font size="2"><a href="桃園統領威秀影城.php" style="text-decoration:blink;"><?php echo $row6['studio_name']; ?></a></font>
                </td>
                <td><img src="CinemaPicture/10.png" width="150"></td>
                <td width="140">
                    <font size="2"><a href="台中大遠百威秀影城.php" style="text-decoration:blink;"><?php echo $row10['studio_name']; ?></a></font>
                </td>
                <td><img src="CinemaPicture/14.png" width="150"></td>
                <td width="140">
                    <font size="2"><a href="台南大遠百威秀影城.php" style="text-decoration:blink;"><?php echo $row13['studio_name']; ?></a></font>
                </td>
            </tr>
            <tr>
                <td><img src="CinemaPicture/2.png" width="150"></td>
                <td>
                    <font size="2"><a href="台北京站威秀影城.php" style="text-decoration:blink;"><?php echo $row2['studio_name']; ?></a></font>
                </td>
                <td><img src="CinemaPicture/7.png" width="150"></td>
                <td>
                    <font size="2"><a href="頭份尚順威秀影城.php" style="text-decoration:blink;"><?php echo $row9['studio_name']; ?></a></font>
                </td>
                <td><img src="CinemaPicture/11.png" width="150"></td>
                <td>
                    <font size="2"><a href="台中大魯閣新時代威秀影城.php" style="text-decoration:blink;"><?php echo $row12['studio_name']; ?></a></font>
                </td>
                <td><img src="CinemaPicture/15.png" width="150"></td>
                <td>
                    <font size="2"><a href="台南FOCUS 威秀影城.php" style="text-decoration:blink;"><?php echo $row14['studio_name']; ?></a></font>
                </td>
            </tr>
            <tr>
                <td><img src="CinemaPicture/3.png" width="150"></td>
                <td>
                    <font size="2"><a href="板橋大遠百威秀影城.php" style="text-decoration:blink;"><?php echo $row3['studio_name']; ?></a></font>
                </td>
                <td><img src="CinemaPicture/8.png" width="150"></td>
                <td>
                    <font size="2"><a href="新竹巨城威秀影城.php" style="text-decoration:blink;"><?php echo $row8['studio_name']; ?></a></font>
                </td>
                <td><img src="CinemaPicture/12.png" width="150"></td>
                <td>
                    <font size="2"><a href="台中TIGER CITY威秀影城.php" style="text-decoration:blink;"><?php echo $row11['studio_name']; ?></a></font>
                </td>
                <td><img src="CinemaPicture/16.png" width="150"></td>
                <td>
                    <font size="2"><a href="台南南紡威秀影城.php" style="text-decoration:blink;"><?php echo $row15['studio_name']; ?></a></font>
                </td>
            </tr>
            <tr>
                <td><img src="CinemaPicture/4.png" width="150"></td>
                <td>
                    <font size="2"><a href="中和環球威秀影城.php" style="text-decoration:blink;"><?php echo $row4['studio_name']; ?></a></font>
                </td>
                <td><img src="CinemaPicture/9.png" width="150"></td>
                <td>
                    <font size="2"><a href="新竹大遠百威秀影城.php" style="text-decoration:blink;"><?php echo $row7['studio_name']; ?></a></font>
                </td>
                <td><img src="CinemaPicture/13.png" width="150"></td>
                <td>
                    <font size="2"><a href="花蓮新天堂樂園威秀影城.php" style="text-decoration:blink;"><?php echo $row17['studio_name']; ?></a></font>
                </td>
                <td><img src="CinemaPicture/17.png" width="150"></td>
                <td>
                    <font size="2"><a href="高雄大遠百威秀影城.php" style="text-decoration:blink;"><?php echo $row16['studio_name']; ?></a></font>
                </td>
            </tr>
            <tr>
                <td><img src="CinemaPicture/5.png" width="150"></td>
                <td>
                    <font size="2"><a href="林口MITSUI OUTLET PARK威秀影城.php" style="text-decoration:blink;"><?php echo $row5['studio_name']; ?></a></font>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>