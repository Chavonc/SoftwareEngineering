<?php
require_once 'db.php';
header('Content-Type: text/html; charset=utf-8');
session_start();
//傳值
$show_id = $_GET['MOVIEid'];
$show_date = $_GET['MOVIEDATE'];
$show_time = $_GET['MOVIETIME'];
$show_grading = $_GET['MOVIEGRADING'];
$show_cinema=$_GET['STUDIOid'];

// $ss="SELECT `studio_id` , `studio_name` FROM `studio`";
// $rr=mysqli_query($link,$ss);
// foreach($rr as $row0)
// {
//     if($show_cinema=="studio_id")
//     {
//         foreach($row0 as $key=>$value)
//         {

//         }
//     }
// }
// $_SESSION['show_cinemaname']=$show_cinema;

//傳值 => movie_I_want_id
$sql_movie_I_want_id = "SELECT `movie_I_want_id` FROM `movie_I_want` WHERE `movie_id`='$show_id' && `movie_watching_date`= '$show_date' && `screening_id` IN (SELECT `screening_id` FROM `screening` WHERE `screening_time`='$show_time') ";
$result_movie_I_want_id = mysqli_query($link,$sql_movie_I_want_id);
if (mysqli_num_rows($result_movie_I_want_id)>0) {
    foreach($result_movie_I_want_id as $row_movie_I_want_id){}
}
//movie_name
$sql_1 = "SELECT `movie_name` FROM `movie` WHERE `movie_id`='$show_id' ";
$result_1 = mysqli_query($link,$sql_1);
if (mysqli_num_rows($result_1)>0) {
    foreach($result_1 as $row_1){}
}

//票種
$sql_tt1 ="SELECT `ticket_type_name` FROM `ticket_type` WHERE ticket_type_id = 't0001'";
$result_tt1 = mysqli_query($link,$sql_tt1);
if (mysqli_num_rows($result_tt1)>0) {
    foreach($result_tt1 as $row_tt1){}
}
$sql_tt2 ="SELECT `ticket_type_name` FROM `ticket_type` WHERE ticket_type_id = 't0002'";
$result_tt2 = mysqli_query($link,$sql_tt2);
if (mysqli_num_rows($result_tt2)>0) {
    foreach($result_tt2 as $row_tt2){}
}
//票價
$sql_tp1 ="SELECT `ticket_type_price` FROM `ticket_type` WHERE ticket_type_id = 't0001'";
$result_tp1 = mysqli_query($link,$sql_tp1);
if (mysqli_num_rows($result_tp1)>0) {
    foreach($result_tp1 as $row_tp1){}
}
$sql_tp2 ="SELECT `ticket_type_price` FROM `ticket_type` WHERE ticket_type_id = 't0002'";
$result_tp2 = mysqli_query($link,$sql_tp2);
if (mysqli_num_rows($result_tp2)>0) {
    foreach($result_tp2 as $row_tp2){}
}

//選擇影城
$sql = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0001' ";
$result = mysqli_query($link,$sql);
if (mysqli_num_rows($result)>0) {
    foreach($result as $row1){}
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

function show_msg($msg, $money, $url)
{
    echo "<script>alert('{$msg} {$money}');window.location.href='{$url}';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <title>選擇票種</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable = no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="row">
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark" id="DeepBlueBar">
            <font size="2px">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="Home.php">VIESHOW</a></li>
                    <li class="nav-item"><a class="nav-link" href="Login.php">會員登入</a></li>
                    <li class="nav-item"><a class="nav-link" href="TicketRecord.php">訂票記錄</a></li>
                    <li class="nav-item"><a class="nav-link" href="StoredValue.php">會員儲值</a></li>
                    <li class="nav-item"><a class="nav-link" href="MemberService1.php">會員服務</a></li>
                </ul>
            </font>
        </nav>
        <nav class="navbar navbar-expand-sm bg-secondary navbar-dark" id="LightBlueBar" width="100%">
            <font size="2px">
                <ul class="navbar-nav">
                    <li class="nav-item" style="color:white;font-size:large;font-family:Times New Roman;font-weight:lighter;">
                        <?php
                                $show_cinema=$_GET['STUDIOid'];
                                echo '&nbsp;&nbsp;&nbsp;';
                                if($show_cinema=="stu0001")
                                {
                                    $cinema1="台北信義威秀影城";
                                    $_SESSION['stu0001']=$cinema1;
                                    $cinema1=$_SESSION['stu0001'];
                                    echo $cinema1;
                                } 
                                else if($show_cinema=="stu0002")
                                {
                                    $cinema2="台北京站威秀影城";
                                    $_SESSION['stu0002']=$cinema2;
                                    $cinema2=$_SESSION['stu0002'];
                                    echo $cinema2;
                                } 
                                else if($show_cinema=="stu0003")
                                {
                                    $cinema3="板橋大遠百威秀影城";
                                    $_SESSION['stu0003']=$cinema3;
                                    $cinema3=$_SESSION['stu0003'];
                                    echo $cinema3;
                                } 
                                else if($show_cinema=="stu0004")
                                {
                                    $cinema4="中和環球威秀影城";
                                    $_SESSION['stu0004']=$cinema4;
                                    $cinema4=$_SESSION['stu0004'];
                                    echo $cinema4;
                                } 
                                else if($show_cinema=="stu0005")
                                {
                                    $cinema5="林口MITSUI OUTLET PARK威秀影城";
                                    $_SESSION['stu0005']=$cinema5;
                                    $cinema3=$_SESSION['stu0005'];
                                    echo $cinema5;
                                } 
                                else if($show_cinema=="stu0006")
                                {
                                    $cinema6="桃園統領威秀影城";
                                    $_SESSION['stu0006']=$cinema6;
                                    $cinema6=$_SESSION['stu0006'];
                                    echo $cinema6;
                                } 
                                else if($show_cinema=="stu0007")
                                {
                                    $cinema7="新竹大遠百威秀影城";
                                    $_SESSION['stu0007']=$cinema7;
                                    $cinema7=$_SESSION['stu0007'];
                                    echo $cinema7;
                                } 
                                else if($show_cinema=="stu0008")
                                {
                                    $cinema8="新竹巨城威秀影城";
                                    $_SESSION['stu0008']=$cinema8;
                                    $cinema8=$_SESSION['stu0008'];
                                    echo $cinema8;
                                } 
                                else if($show_cinema=="stu0009")
                                {
                                    $cinema9="頭份尚順威秀影城";
                                    $_SESSION['stu0009']=$cinema9;
                                    $cinema9=$_SESSION['stu0009'];
                                    echo $cinema9;
                                } 
                                else if($show_cinema=="stu0010")
                                {
                                    $cinema10="台中大遠百威秀影城";
                                    $_SESSION['stu0010']=$cinema10;
                                    $cinema10=$_SESSION['stu0010'];
                                    echo $cinema10;
                                } 
                                else if($show_cinema=="stu0011")
                                {
                                    $cinema11="台中TIGER CITY威秀影城";
                                    $_SESSION['stu0011']=$cinema11;
                                    $cinema11=$_SESSION['stu0011'];
                                    echo $cinema11;
                                } 
                                else if($show_cinema=="stu0012")
                                {
                                    $cinema12="台中大魯閣新時代威秀影城";
                                    $_SESSION['stu0012']=$cinema12;
                                    $cinema3=$_SESSION['stu0012'];
                                    echo $cinema12;
                                } 
                                else if($show_cinema=="stu0013")
                                {
                                    $cinema13="台南大遠百威秀影城";
                                    $_SESSION['stu0013']=$cinema13;
                                    $cinema13=$_SESSION['stu0013'];
                                    echo $cinema13;
                                } 
                                else if($show_cinema=="stu0014")
                                {
                                    $cinema14="台南FOCUS 威秀影城";
                                    $_SESSION['stu0014']=$cinema14;
                                    $cinema14=$_SESSION['stu0014'];
                                    echo $cinema14;
                                } 
                                else if($show_cinema=="stu0015")
                                {
                                    $cinema15="台南南紡威秀影城";
                                    $_SESSION['stu0015']=$cinema15;
                                    $cinema15=$_SESSION['stu0015'];
                                    echo $cinema15;
                                } 
                                else if($show_cinema=="stu0016")
                                {
                                    $cinema16="高雄大遠百威秀影城";
                                    $_SESSION['stu0016']=$cinema16;
                                    $cinema16=$_SESSION['stu0016'];
                                    echo $cinema16;
                                } 
                                else if($show_cinema=="stu0017")
                                {
                                    $cinema17="花蓮新天堂樂園威秀影城";
                                    $_SESSION['stu0017']=$cinema17;
                                    $cinema17=$_SESSION['stu0017'];
                                    echo $cinema17;
                                }
                        ?>
                    </li>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item"><a class="nav-link" href="Cinema.php">影城資訊</a></li>
                    <li class="nav-item"><a class="nav-link" href="ClassExplain.php">級數說明</a></li>
                    <li class="nav-item"><a class="nav-link" href="TicketExplain.php">票種說明</a></li>
                </ul>
            </font>
        </nav>
    </div>
    <div>
        <h6 style="font-size:small;position:absolute;left:2%;color:gray">1.選擇票種 2.選擇餐飲 3.選擇座位 4.確認訂單 5.訂票成功</h6>
        <table style="border:2px lightgray solid;position:absolute;top:160px;left:5%;" border="1">
            <tr>
                <td><?php echo $_GET['MOVIEGRADING']; ?></td>
            </tr>
        </table>
        <table>
            <tr style="position:absolute;top:160px;left:10%;font-size:x-large">
                <td><?php echo $row_1['movie_name']; ?></td>
            </tr>
            <tr style="position:absolute;top:160px;left:62%;font-size:small;color:royalblue;">
                <text style="position:absolute;top:160px;left:58%;font-size:small;color:royalblue;">日期：</text>
                <td><?php echo $_GET['MOVIEDATE']; ?></td>
            </tr>
            <tr style="position:absolute;top:180px;left:62%;font-size:small;color:royalblue;">
                <text style="position:absolute;top:180px;left:58%;font-size:small;color:royalblue;">時段：</text>
                <td><?php echo $_GET['MOVIETIME']; ?></td>
            </tr>
            <tr style="position:absolute;top:200px;left:62%;font-size:small;color:royalblue;">
                <text style="position:absolute;top:200px;left:58%;font-size:small;color:royalblue;">影城：</text>
                <td>
                    <form>
                        <?php
                            $show_cinema=$_GET['STUDIOid'];
                            if($show_cinema=="stu0001")
                            {
                                $cinema1="台北信義威秀影城";
                                $_SESSION['stu0001']=$cinema1;
                                $cinema1=$_SESSION['stu0001'];
                                echo $cinema1;
                            } 
                            else if($show_cinema=="stu0002")
                            {
                                $cinema2="台北京站威秀影城";
                                $_SESSION['stu0002']=$cinema2;
                                $cinema2=$_SESSION['stu0002'];
                                echo $cinema2;
                            } 
                            else if($show_cinema=="stu0003")
                            {
                                $cinema3="板橋大遠百威秀影城";
                                $_SESSION['stu0003']=$cinema3;
                                $cinema3=$_SESSION['stu0003'];
                                echo $cinema3;
                            } 
                            else if($show_cinema=="stu0004")
                            {
                                $cinema4="中和環球威秀影城";
                                $_SESSION['stu0004']=$cinema4;
                                $cinema4=$_SESSION['stu0004'];
                                echo $cinema4;
                            } 
                            else if($show_cinema=="stu0005")
                            {
                                $cinema5="林口MITSUI OUTLET PARK威秀影城";
                                $_SESSION['stu0005']=$cinema5;
                                $cinema3=$_SESSION['stu0005'];
                                echo $cinema5;
                            } 
                            else if($show_cinema=="stu0006")
                            {
                                $cinema6="桃園統領威秀影城";
                                $_SESSION['stu0006']=$cinema6;
                                $cinema6=$_SESSION['stu0006'];
                                echo $cinema6;
                            } 
                            else if($show_cinema=="stu0007")
                            {
                                $cinema7="新竹大遠百威秀影城";
                                $_SESSION['stu0007']=$cinema7;
                                $cinema7=$_SESSION['stu0007'];
                                echo $cinema7;
                            } 
                            else if($show_cinema=="stu0008")
                            {
                                $cinema8="新竹巨城威秀影城";
                                $_SESSION['stu0008']=$cinema8;
                                $cinema8=$_SESSION['stu0008'];
                                echo $cinema8;
                            } 
                            else if($show_cinema=="stu0009")
                            {
                                $cinema9="頭份尚順威秀影城";
                                $_SESSION['stu0009']=$cinema9;
                                $cinema9=$_SESSION['stu0009'];
                                echo $cinema9;
                            } 
                            else if($show_cinema=="stu0010")
                            {
                                $cinema10="台中大遠百威秀影城";
                                $_SESSION['stu0010']=$cinema10;
                                $cinema10=$_SESSION['stu0010'];
                                echo $cinema10;
                            } 
                            else if($show_cinema=="stu0011")
                            {
                                $cinema11="台中TIGER CITY威秀影城";
                                $_SESSION['stu0011']=$cinema11;
                                $cinema11=$_SESSION['stu0011'];
                                echo $cinema11;
                            } 
                            else if($show_cinema=="stu0012")
                            {
                                $cinema12="台中大魯閣新時代威秀影城";
                                $_SESSION['stu0012']=$cinema12;
                                $cinema3=$_SESSION['stu0012'];
                                echo $cinema12;
                            } 
                            else if($show_cinema=="stu0013")
                            {
                                $cinema13="台南大遠百威秀影城";
                                $_SESSION['stu0013']=$cinema13;
                                $cinema13=$_SESSION['stu0013'];
                                echo $cinema13;
                            } 
                            else if($show_cinema=="stu0014")
                            {
                                $cinema14="台南FOCUS 威秀影城";
                                $_SESSION['stu0014']=$cinema14;
                                $cinema14=$_SESSION['stu0014'];
                                echo $cinema14;
                            } 
                            else if($show_cinema=="stu0015")
                            {
                                $cinema15="台南南紡威秀影城";
                                $_SESSION['stu0015']=$cinema15;
                                $cinema15=$_SESSION['stu0015'];
                                echo $cinema15;
                            } 
                            else if($show_cinema=="stu0016")
                            {
                                $cinema16="高雄大遠百威秀影城";
                                $_SESSION['stu0016']=$cinema16;
                                $cinema16=$_SESSION['stu0016'];
                                echo $cinema16;
                            } 
                            else if($show_cinema=="stu0017")
                            {
                                $cinema17="花蓮新天堂樂園威秀影城";
                                $_SESSION['stu0017']=$cinema17;
                                $cinema17=$_SESSION['stu0017'];
                                echo $cinema17;
                            }
                        ?>
                    </form>
                </td>
            </tr>
        </table>
    </div>
    <div>
        <table
            style="position:absolute;top:220px;left:5%;font-size:small;background-color:steelblue;text-align:center;">
            <tr>
                <th style="color:whitesmoke;width:80px;">選擇票種</th>
            </tr>
        </table>
        <form method="POST" action="BookingFood.php?STUDIOid=<?php echo $show_cinema?>&MOVIEid=<?php echo $show_id?>&MOVIEDATE=<?php echo $show_date?>&MOVIEGRADING=<?php echo $show_grading?>&MOVIETIME=<?php echo $show_time?>&MOVIEIWANT_id=<?php echo $row_movie_I_want_id['movie_I_want_id']?>">
            <table>
                <tr style="position:absolute;top:250px;left:5%;font-size:small;background-color:lightgray">
                    <th>票種</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;價格
                    </th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;數量&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </th>
                </tr>
                <tr style="position:absolute;top:280px;left:5%;font-size:small;background-color:white">
                    <td><?php echo $row_tt1['ticket_type_name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    <td style="color:red;">$<?php echo $row_tp1['ticket_type_price']; ?></td>
                </tr>
                <tr style="position:absolute;top:280px;left:20%;font-size:small;background-color:white">
                    <td>
                        <select name="ticketcount1" class="form-select form-select-sm">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </td>
                </tr>
            </table>
            <table>
                <tr style="position:absolute;top:320px;left:5%;font-size:small;background-color:white">
                    <td><?php echo $row_tt2['ticket_type_name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td style="color:red;">$<?php echo $row_tp2['ticket_type_price']; ?></td>
                    <?php
                        $_SESSION['ticketprice1']=$row_tp1['ticket_type_price'];//左是存的地方;右是值
                        $_SESSION['ticketprice2']=$row_tp2['ticket_type_price'];  
                        $_SESSION['ticketname1']=$row_tt1['ticket_type_name'];
                        $_SESSION['ticketname2']=$row_tt2['ticket_type_name'];
                    ?>
                </tr>
                <tr style="position:absolute;top:320px;left:20%;font-size:small;background-color:white">
                    <td>
                        <select name="ticketcount2" class="form-select form-select-sm">
                            <option selected value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </td>
                </tr>
            </table>
            <div>
                <input type="Submit" value="下一步" class="btn btn-light" style="position:absolute; top:420px;left:80%;background-color:aquamarine;" 
                onclick="location.href='BookingFood.php?STUDIOid=<?php echo $show_cinema?>&MOVIEid=<?php echo $show_id?>&MOVIEDATE=<?php echo $show_date?>&MOVIEGRADING=<?php echo $show_grading?>&MOVIETIME=<?php echo $show_time?>&MOVIEIWANT_id=<?php echo $row_movie_I_want_id['movie_I_want_id']?>'">
            </div>
        </form>
    </div>
    <div>
        <input type="Submit" value="上一步" class="btn btn-light" style="position:absolute; top:420px;left:72%;background-color:aquamarine;"  onclick="history.back()">
    </div>
    <div>
        <p>
        <h6 style="position:absolute;top:460px;left:2%;font-weight:bold;color:red;">*注意事項：</h6>
        <ul style="position:absolute;top:480px;left:1%;">
            <li>為維護顧客權益，惡意佔位或影響他人正常訂位使用者，影城保有調整或取消訂位之權利。</li>
        </ul>
        </p>
    </div>
    <!-- <div>
        <table style="position:absolute; top:150px;right:5%;width:240px;">
            <tr style="background-color:steelblue;color:white">
                <th>
                    <center>會員專區</center>
                </th>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td>
                    <text>帳號：</text><input name="myfield" autocomplete="off" required type="text" placeholder="請輸入帳號">
                </td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td>
                    <text>密碼：</text><input name="myfield" autocomplete="off" required type="password"
                        placeholder="請輸入密碼">
                </td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td>
                    <a href="忘記密碼.html" style="text-decoration:blink;">*忘記密碼?</a>
                </td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td>
                    <a href="註冊.html" style="text-decoration:blink;">*還沒註冊?</a>
                </td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td>
                    <input type="button" style="float:right;top:200px;" class="btn btn-light" value="登入">
                </td>
            </tr>
        </table> -->
        <!-- <table style="position:absolute; top:350px;right:5%;width:240px;">
            <tr style="background-color:steelblue;color:white">
                <th>
                    <center>購物清單</center>
                </th>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td>
                    <text>使用者訂購資料(資料庫)</text>
                </td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td style="text-align:right">
                    <text>合計：（放目前統計的金額）</text>
                </td>
            </tr>
        </table> -->
    <!-- </div> -->
</body>
</html>