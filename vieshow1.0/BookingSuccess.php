<?php
// 載入db.php來連結資料庫
require_once 'db.php';
session_start();
header('Content-Type: text/html; charset=utf-8');

//傳值
$show_id = $_GET['MOVIEid'];
$show_date = $_GET['MOVIEDATE'];
$show_time = $_GET['MOVIETIME'];
$show_grading = $_GET['MOVIEGRADING'];
$show_cinema=$_GET['STUDIOid'];
$movie_I_want_id = $_GET['MOVIEIWANT_id'];
$seatlist = $_GET['show_seat'];

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

//insert 全票 into Booking_list database
$tname1=$_SESSION['ticketname1'];
$t1=$_SESSION['ticket1'];
$t1money=$_SESSION['t1money'];
$member_id=$_SESSION['member_id'];
$query0="SELECT `screening_id` FROM `screening` WHERE screening_time='$show_time'";
$result_query0 = mysqli_query($link,$query0);
if (mysqli_num_rows($result_query0)>0) 
{
    foreach($result_query0 as $row_query0){}
}
$_SESSION['scid']=$row_query0['screening_id'];
$scid=$_SESSION['scid'];
$query1="SELECT `movie_i_want_id` FROM `movie_i_want` WHERE movie_id='$show_id' AND screening_id='$scid' AND movie_watching_date='$show_date'";
$result_query1 = mysqli_query($link,$query1);
if (mysqli_num_rows($result_query1)>0) 
{
    foreach($result_query1 as $row_query1){}
}
$_SESSION['miwid']=$row_query1['movie_i_want_id'];
$miwid=$_SESSION['miwid'];
$query2="SELECT `ticket_type_id` FROM `ticket_type` WHERE ticket_type_name='$tname1'";
$result_query2 = mysqli_query($link,$query2);
if (mysqli_num_rows($result_query2)>0) 
{
    foreach($result_query2 as $row_query2){}
}
$_SESSION['ttid1']=$row_query2['ticket_type_id'];
$ttid1=$_SESSION['ttid1'];
$insert_sql ="INSERT INTO  `booking_list` (`movie_i_want_id`,`ticket_type_id`, `ticket_amount`, `total_money_amount`, `member_id`, `status_type_id`
, `booking_feedback_point`, `studio_id`) VALUE ('$miwid','$ttid1','$t1','$t1money','$member_id','sta0001','100','$show_cinema') ";
$queryresult = mysqli_query($link,$insert_sql);
if (mysqli_affected_rows($link)>0) 
{
    // 如果有一筆以上代表有更新
    // mysqli_insert_id可以抓到第一筆的id
    $new_id= mysqli_insert_id ($link);
}

//insert 優待票 into Booking_list database
$tname2=$_SESSION['ticketname2'];
$t2=$_SESSION['ticket2'];
$t2money=$_SESSION['t2money'];
$query3="SELECT `ticket_type_id` FROM `ticket_type` WHERE ticket_type_name='$tname2'";
$result_query3 = mysqli_query($link,$query3);
if (mysqli_num_rows($result_query3)>0) 
{
    foreach($result_query3 as $row_query3){}
}
$_SESSION['ttid2']=$row_query3['ticket_type_id'];
$ttid2=$_SESSION['ttid2'];
$insert_sql2 ="INSERT INTO  `booking_list` (`movie_i_want_id`,`ticket_type_id`, `ticket_amount`, `total_money_amount`, `member_id`, `status_type_id`
, `booking_feedback_point`, `studio_id`) VALUE ('$miwid','$ttid2','$t2','$t2money','$member_id','sta0002','100','$show_cinema') ";
$queryresult2 = mysqli_query($link,$insert_sql2);
if (mysqli_affected_rows($link)>0) 
{
    // 如果有一筆以上代表有更新
    // mysqli_insert_id可以抓到第一筆的id
    $new_id= mysqli_insert_id ($link);
}
//show 訂單number
$bookingid1="SELECT `booking_id` FROM `booking_list` WHERE movie_i_want_id='$miwid' AND member_id='$member_id' AND studio_id='$show_cinema' AND status_type_id='sta0001'";
$bookingt1 = mysqli_query($link,$bookingid1);
if (mysqli_num_rows($bookingt1)>0) 
{
    foreach($bookingt1 as $bookinglist_id1){}
}
$_SESSION['bid1']=$bookinglist_id1['booking_id'];
$bid1=$_SESSION['bid1'];

$bookingid2="SELECT `booking_id` FROM `booking_list` WHERE movie_i_want_id='$miwid' AND member_id='$member_id' AND studio_id='$show_cinema' AND status_type_id='sta0002'";
$bookingt2 = mysqli_query($link,$bookingid2);
if (mysqli_num_rows($bookingt2)>0) 
{
    foreach($bookingt2 as $bookinglist_id2){}
}
$_SESSION['bid2']=$bookinglist_id2['booking_id'];
$bid2=$_SESSION['bid2'];

//food insert
$fname1=$_SESSION['foodname1'];
$fname2=$_SESSION['foodname2'];
$fname3=$_SESSION['foodname3'];
$fname4=$_SESSION['foodname4'];
$fname5=$_SESSION['foodname5'];
$fname6=$_SESSION['foodname6'];
$fname7=$_SESSION['foodname7'];

$f1amount=$_SESSION['food1'];
$f2amount=$_SESSION['food2'];
$f3amount=$_SESSION['food3'];
$f4amount=$_SESSION['food4'];
$f5amount=$_SESSION['food5'];
$f6amount=$_SESSION['food6'];
$f7amount=$_SESSION['food7'];

$foodquery1 = "SELECT `food`.`food_id` FROM `food`,`food_booking_have` WHERE food.food_name = '$fname1'";
$fq1 = mysqli_query($link,$foodquery1);
if (mysqli_num_rows($fq1)>0) 
{
    foreach($fq1 as $foodlist_id1){}
}
$_SESSION['fid1']=$foodlist_id1['food_id'];
$fid1=$_SESSION['fid1'];

$foodquery2 = "SELECT `food`.`food_id` FROM `food`,`food_booking_have` WHERE food.food_name = '$fname2'";
$fq2 = mysqli_query($link,$foodquery2);
if (mysqli_num_rows($fq2)>0) 
{
    foreach($fq2 as $foodlist_id2){}
}
$_SESSION['fid2']=$foodlist_id2['food_id'];
$fid2=$_SESSION['fid2'];

$foodquery3 = "SELECT `food`.`food_id` FROM `food`,`food_booking_have` WHERE food.food_name = '$fname3'";
$fq3 = mysqli_query($link,$foodquery3);
if (mysqli_num_rows($fq3)>0) 
{
    foreach($fq3 as $foodlist_id3){}
}
$_SESSION['fid3']=$foodlist_id3['food_id'];
$fid3=$_SESSION['fid3'];

$foodquery4 = "SELECT `food`.`food_id` FROM `food`,`food_booking_have` WHERE food.food_name = '$fname4'";
$fq4 = mysqli_query($link,$foodquery4);
if (mysqli_num_rows($fq4)>0) 
{
    foreach($fq4 as $foodlist_id4){}
}
$_SESSION['fid4']=$foodlist_id4['food_id'];
$fid4=$_SESSION['fid4'];

$foodquery5 = "SELECT `food`.`food_id` FROM `food`,`food_booking_have` WHERE food.food_name = '$fname5'";
$fq5 = mysqli_query($link,$foodquery5);
if (mysqli_num_rows($fq5)>0) 
{
    foreach($fq5 as $foodlist_id5){}
}
$_SESSION['fid5']=$foodlist_id5['food_id'];
$fid5=$_SESSION['fid5'];

$foodquery6 = "SELECT `food`.`food_id` FROM `food`,`food_booking_have` WHERE food.food_name = '$fname6'";
$fq6 = mysqli_query($link,$foodquery6);
if (mysqli_num_rows($fq6)>0) 
{
    foreach($fq6 as $foodlist_id6){}
}
$_SESSION['fid6']=$foodlist_id6['food_id'];
$fid6=$_SESSION['fid6'];

$foodquery7 = "SELECT `food`.`food_id` FROM `food`,`food_booking_have` WHERE food.food_name = '$fname7'";
$fq7 = mysqli_query($link,$foodquery7);
if (mysqli_num_rows($fq7)>0) 
{
    foreach($fq7 as $foodlist_id7){}
}
$_SESSION['fid7']=$foodlist_id7['food_id'];
$fid7=$_SESSION['fid7'];
// echo $fid7;
if($f1amount!='0')
{
    $insertfood_sql1 ="INSERT INTO  `food_booking_have` (`food_booking_have_id`,`food_id`, `booking_id`, `food_amount`) 
    VALUE ('NULL','$fid1','$bid1','$f1amount')";
    $queryf1 = mysqli_query($link,$insertfood_sql1);
    if (mysqli_affected_rows($link)>0) 
    {
        // 如果有一筆以上代表有更新// mysqli_insert_id可以抓到第一筆的id
        $new_id= mysqli_insert_id ($link);
    }
}
if($f2amount!='0')
{
    $insertfood_sql2 ="INSERT INTO  `food_booking_have` (`food_booking_have_id`,`food_id`, `booking_id`, `food_amount`) 
    VALUE ('NULL','$fid2','$bid1','$f2amount') ";
    $queryf2 = mysqli_query($link,$insertfood_sql2);
    if (mysqli_affected_rows($link)>0) 
    {
        // 如果有一筆以上代表有更新// mysqli_insert_id可以抓到第一筆的id
        $new_id= mysqli_insert_id ($link);
    }
}
if($f3amount!='0')
{
    $insertfood_sql3 ="INSERT INTO  `food_booking_have` (`food_booking_have_id`,`food_id`, `booking_id`, `food_amount`) 
    VALUE ('NULL','$fid3','$bid1','$f3amount') ";
    $queryf3 = mysqli_query($link,$insertfood_sql3);
    if (mysqli_affected_rows($link)>0) 
    {
        // 如果有一筆以上代表有更新// mysqli_insert_id可以抓到第一筆的id
        $new_id= mysqli_insert_id ($link);
    }
}
if($f4amount!='0')
{
    $insertfood_sql4 ="INSERT INTO  `food_booking_have` (`food_booking_have_id`,`food_id`, `booking_id`, `food_amount`) 
    VALUE ('NULL','$fid4','$bid1','$f4amount') ";
    $queryf4 = mysqli_query($link,$insertfood_sql4);
    if (mysqli_affected_rows($link)>0) 
    {
        // 如果有一筆以上代表有更新// mysqli_insert_id可以抓到第一筆的id
        $new_id= mysqli_insert_id ($link);
    }
}
if($f5amount!='0')
{
    $insertfood_sql5 ="INSERT INTO  `food_booking_have` (`food_booking_have_id`,`food_id`, `booking_id`, `food_amount`) 
    VALUE ('NULL','$fid5','$bid1','$f5amount') ";
    $queryf5 = mysqli_query($link,$insertfood_sql5);
    if (mysqli_affected_rows($link)>0) 
    {
        // 如果有一筆以上代表有更新// mysqli_insert_id可以抓到第一筆的id
        $new_id= mysqli_insert_id ($link);
    }
}
if($f6amount!='0')
{
    $insertfood_sql6 ="INSERT INTO  `food_booking_have` (`food_booking_have_id`,`food_id`, `booking_id`, `food_amount`) 
    VALUE ('NULL','$fid6','$bid1','$f6amount') ";
    $queryf6 = mysqli_query($link,$insertfood_sql6);
    if (mysqli_affected_rows($link)>0) 
    {
        // 如果有一筆以上代表有更新// mysqli_insert_id可以抓到第一筆的id
        $new_id= mysqli_insert_id ($link);
    }
}
if($f7amount!='0')
{
    $insertfood_sql7 ="INSERT INTO  `food_booking_have` (`food_booking_have_id`,`food_id`, `booking_id`, `food_amount`) 
    VALUE ('NULL','$fid7','$bid1','$f7amount') ";
    $queryf7 = mysqli_query($link,$insertfood_sql7);
    if (mysqli_affected_rows($link)>0) 
    {
        // 如果有一筆以上代表有更新// mysqli_insert_id可以抓到第一筆的id
        $new_id= mysqli_insert_id ($link);
    }
}
?>


<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <title>清單</title>
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
                                                       foreach($result as $row)
                                                       {
                                                        foreach($row as $key => $value)
                                                        {
                                                            if($key=="studio_id")
                                                            {
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
    <div>
        <h6 style="font-size:small;position:absolute;left:2%;color:gray">1.選擇票種 2.選擇餐飲 3.選擇座位 4.確認訂單 5.訂票成功</h6>
    </div>
    <div>
          <h4 style="font-size:large;position:absolute;left:40%;top:130px;color:Black;font-weight:bold;">訂票成功!</h4>
    </div>
    <div>
          <table style="position:absolute;left:15%;top:200px;width:600px;border: 1px solid black;">
               <tr style="background-color:steelblue;color:White;font-weight:bold;border: 1px solid black;">
                    <th><center>訂單內容</center></th>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>訂單序號：</text>
                        <?php
                            echo $bid1;
                            echo '、';
                            echo $bid2;
                        ?>
                    </td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td>
                        <text>影城：</text>
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
                </td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>電影：</text><?php echo $row_1['movie_name']; ?></td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>日期：</text><?php echo $_GET['MOVIEDATE']; ?></td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>場次：</text><?php echo $_GET['MOVIETIME']; ?></td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td>
                        <text>票種：</text>
                        <?php
                            $tname1=$_SESSION['ticketname1'];
                            $tprice1=$_SESSION['ticketprice1'];
                            $ticket1=$_SESSION['ticket1'];
                            $tname2=$_SESSION['ticketname2'];
                            $tprice2=$_SESSION['ticketprice2'];
                            $ticket2=$_SESSION['ticket2'];
                            if(($ticket1!='0' && $ticket2=='0')||($ticket1!='0'))
                            {
                                echo $tname1;
                                echo '$'.$tprice1;
                                echo 'x'.$ticket1;
                                $_SESSION['t1money']=$tprice1*$ticket1;
                                $t1money=$_SESSION['t1money'];
                            }
                            else if(($ticket1=='0' && $ticket2=='0')||($ticket1=='0'))
                            {
                                $_SESSION['t1money']=0;
                                $t1money=$_SESSION['t1money'];
                                //echo $t1money;
                            }
                            echo '&nbsp;';
                            if(($ticket1=='0'&&$ticket2!='0')||($ticket2!='0'))
                            {
                                echo $tname2;
                                echo '$'.$tprice2;
                                echo 'x'.$ticket2;
                                $_SESSION['t2money']=$tprice2*$ticket2;
                                $t2money=$_SESSION['t2money'];
                            }
                            else//($ticket2=='0')
                            {
                                $_SESSION['t2money']=0;
                                $t2money=$_SESSION['t2money'];
                                //echo $t2money;
                            }

                        ?>
                </td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>飲料：</text>
                        <?php
                            $fname1=$_SESSION['foodname1'];
                            $fprice1=$_SESSION['foodprice1'];
                            $food1=$_SESSION['food1'];
                            $fname2=$_SESSION['foodname2'];
                            $fprice2=$_SESSION['foodprice2'];
                            $food2=$_SESSION['food2'];
                            $fname3=$_SESSION['foodname3'];
                            $fprice3=$_SESSION['foodprice3'];
                            $food3=$_SESSION['food3'];
                            if($food1!='0')
                            {
                                echo $fname1;
                                echo '$'.$fprice1;
                                echo 'x'.$food1;
                                $_SESSION['f1money']=$fprice1*$food1;
                                $f1money=$_SESSION['f1money'];
                            }
                            else//($food1=='0')
                            {
                                $_SESSION['f1money']=0;
                                $f1money=$_SESSION['f1money'];
                                //echo '$'.$f1money;
                            }
                            echo '&nbsp;';
                            if($food2!='0')
                            {
                                echo $fname2;
                                echo '$'.$fprice2;
                                echo 'x'.$food2;
                                $_SESSION['f2money']=$fprice2*$food2;
                                $f2money=$_SESSION['f2money'];
                            }
                            else //if($food2=='0')
                            {
                                $_SESSION['f2money']=0;
                                $f2money=$_SESSION['f2money'];
                                //echo $f2money;
                            }
                            echo '&nbsp;';
                            if($food3!='0')
                            {
                                echo $fname3;
                                echo '$'.$fprice3;
                                echo 'x'.$food3;
                                $_SESSION['f3money']=$fprice3*$food3;
                                $f3money=$_SESSION['f3money'];
                            }
                            else //if($food3=='0')
                            {
                                $_SESSION['f3money']=0;
                                $f3money=$_SESSION['f3money'];
                                //echo $f3money;
                            }
                        ?>
                    </td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>餐點：</text>
                        <?php
                            $fname4=$_SESSION['foodname4'];
                            $fprice4=$_SESSION['foodprice4'];
                            $food4=$_SESSION['food4'];
                            $fname5=$_SESSION['foodname5'];
                            $fprice5=$_SESSION['foodprice5'];
                            $food5=$_SESSION['food5'];
                            $fname6=$_SESSION['foodname6'];
                            $fprice6=$_SESSION['foodprice6'];
                            $food6=$_SESSION['food6'];
                            $fname7=$_SESSION['foodname7'];
                            $fprice7=$_SESSION['foodprice7'];
                            $food7=$_SESSION['food7'];
                            if($food4!='0')
                            {
                                echo $fname4;
                                echo '$'.$fprice4;
                                echo 'x'.$food4;
                                $_SESSION['f4money']=$fprice4*$food4;
                                $f4money=$_SESSION['f4money'];

                            }
                            else //if($food4=='0')
                            {
                                $_SESSION['f4money']=0;
                                $f4money=$_SESSION['f4money'];
                                //echo $f4money;
                            }
                            echo '&nbsp;';
                            if($food5!='0')
                            {
                                echo $fname5;
                                echo '$'.$fprice5;
                                echo 'x'.$food5;
                                $_SESSION['f5money']=$fprice5*$food5;
                                $f5money=$_SESSION['f5money'];
                            }
                            else //if($food5=='0')
                            {
                                $_SESSION['f5money']=0;
                                $f5money=$_SESSION['f5money'];
                                //echo $f5money;
                            }
                            echo '&nbsp;';
                            if($food6!='0')
                            {
                                echo $fname6;
                                echo '$'.$fprice6;
                                echo 'x'.$food6;
                                $_SESSION['f6money']=$fprice6*$food6;
                                $f6money=$_SESSION['f6money'];
                            }
                            else //if($food6=='0')
                            {
                                $_SESSION['f6money']=0;
                                $f6money=$_SESSION['f6money'];
                                //echo $f6money;
                            }
                            echo '&nbsp;';
                            if($food7!='0')
                            {
                                echo $fname7;
                                echo '$'.$fprice7;
                                echo 'x'.$food7;
                                $_SESSION['f7money']=$fprice7*$food7;
                                $f7money=$_SESSION['f7money'];
                            }
                            else //if($food7=='0')
                            {
                                $_SESSION['f7money']=0;
                                $f7money=$_SESSION['f7money'];
                                //echo $f7money;
                            }

                        ?>
                    </td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>座位：</text>
                        <?php
                            $resultSeat = explode(",", $seatlist);
                            for ($x = 0; $x < count($resultSeat); $x++) 
                            {
                                $Seat = $resultSeat[$x];
                                echo $Seat.'&nbsp';
                                //echo $bid1;
                                $sql_seat_insert = "INSERT INTO `seat_booking_have` (`seat_booking_have_id`, `seat_id`,`booking_id`)
                                 VALUE ('NULL','$Seat','$bid1') ";
                                $result_seat_insert = mysqli_query($link,$sql_seat_insert);
                                $sql_change_sold_status = "UPDATE seat SET seat_type = 'sold' WHERE seat_id = '$Seat' AND movie_I_want_id = '$movie_I_want_id'";
                                $result_change_sold_status = mysqli_query($link,$sql_change_sold_status);
                            }
                            //echo $seatlist;
                        ?>
                </td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>總額：</text>
                        <?php
                            $_SESSION['totalmoney']=$t1money+$t2money+$f1money+$f2money+$f3money+$f4money+$f5money+$f6money+$f7money;
                            $totalmoney=$_SESSION['totalmoney'];
                            echo '$'.$totalmoney;
                        ?>
                </td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>付款方式：</text>儲值金</td>
               </tr>
          </table>
    </div>
    <div>
          <table style="position:absolute; top:150px;right:5%;width:260px;border: 1px solid black;">
               <tr style="background-color:steelblue;color:white;border: 1px solid black;">
                    <th colspan="2"><center>會員專區</center></th>
                    <th></th>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><center><img src="anya01.png" width="50px"></center></td>
                    <td>
                        <?php
                            $membermail=$_SESSION['mail_login'];
                            $memberpassword=$_SESSION['password_login'];
                            $sql="SELECT `member_name` FROM `member` WHERE member_mail='$membermail' AND member_password='$memberpassword' AND member_id='$member_id'";
                            $membername = mysqli_query($link, $sql);
                            if (mysqli_num_rows($membername)>0) 
                            {
                                foreach($membername as $row_membername){}
                            }
                            $_SESSION['mname']=$row_membername['member_name'];
                            $mname=$_SESSION['mname'];
                            echo '<center>'.$mname.'</center>';
                        ?>
                    </td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black;font-size:small;">
                    <td>

                    </td>
                    <td>
                        <?php 
                            echo '<center>'.$membermail.'</center>';
                        ?>
                    </td>
                </tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td>
                        <text>iShow點數：</text>
                    </td>
                    <td><center>
                        <?php
                            //after booking member_points+100
                            $_SESSION['feedback']=100;
                            $addpoint=$_SESSION['feedback'];
                            $pointquery="SELECT `booking_feedback_point` FROM `booking_list` WHERE studio_id='$show_cinema' AND movie_i_want_id='$miwid' AND member_id='$member_id'";
                            $p1 = mysqli_query($link,$pointquery);
                            if (mysqli_num_rows($p1)>0) 
                            {
                                foreach($p1 as $points){}
                            }
                            $_SESSION['point']=$points['booking_feedback_point'];
                            $point=$_SESSION['point'];

                            $mpointquery="SELECT `member_point` FROM `member` WHERE member_id='$member_id'";
                            $mp1 = mysqli_query($link,$mpointquery);
                            if (mysqli_num_rows($mp1)>0) 
                            {
                                foreach($mp1 as $mpoints){}
                            }
                            $_SESSION['mpoint']=$mpoints['member_point'];
                            $mpoint=$_SESSION['mpoint'];
                            $_SESSION['addpoint']=$mpoint+$point;
                            $newpoint=$_SESSION['addpoint'];

                            $sql_add_point = "UPDATE `member` SET `member_point`='$newpoint' WHERE `member_id`= '$member_id'";
                            $amp = mysqli_query($link, $sql_add_point);

                            $update_mpointquery="SELECT `member_point` FROM `member` WHERE member_id='$member_id'";
                            $update_mp1 = mysqli_query($link,$update_mpointquery);
                            if (mysqli_num_rows($update_mp1)>0) 
                            {
                                foreach($update_mp1 as $update_mpoints){}
                            }

                            $update_mpoint=$update_mpoints['member_point'];
                            echo $update_mpoint;
                            echo '點';
                        ?>
                        </center>
                    </td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td>
                        <text>儲值金餘額：</text>

                    </td>
                    <td><center>
                        <?php
                            //sub point
                            $mail = $_SESSION['mail_login'];
                            $password = $_SESSION['password_login'];
                            $query = "SELECT * FROM member WHERE member_mail = '$mail' AND member_password = '$password'"; //取member資料
                            $data = mysqli_query($link, $query);
                            for ($i = 1; $i <= mysqli_num_rows($data); $i++) 
                            {
                                $rs = mysqli_fetch_row($data);
                            }
                            $rs[3] = $rs[3]-$totalmoney;
                            $sql_sub_money = "UPDATE  `member` SET `member_money` = $rs[3] WHERE member_mail = '$mail' AND member_password = '$password'";
                            $update_money = mysqli_query($link, $sql_sub_money) or die("新增失敗");
                            echo "$rs[3]元";
                        ?></center>
                    </td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td>會籍期限：</td>
                    <td><center>永久</center></td>
               </tr>
          </table>
     </div>
     <div>
          <input type="button" value="前往訂票記錄" class="btn btn-light" onclick="location.href='TicketRecord.php'" style="position:absolute;top:150px;right:35%;font-weight:bold;background-color:steelblue;color:white;">
     </div>
</body>
</html>