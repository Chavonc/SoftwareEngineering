<?php
require_once 'db.php';
session_start();
header('Content-Type: text/html; charset=utf-8');

//傳值MOVIEid
$show_id = $_GET['MOVIEid'];
$show_cinema=$_GET['STUDIOid'];
//電影日期
$sql_date0106 = "SELECT `movie_watching_date` FROM `movie_i_want` WHERE (`movie_id`='$show_id' && `movie_I_want_id` = 'miw0001')";
$result_date0106 = mysqli_query($link,$sql_date0106);
if (mysqli_num_rows($result_date0106)>0) {
    foreach($result_date0106 as $row_date0106){}
}
$sql_date0107 = "SELECT `movie_watching_date` FROM `movie_i_want` WHERE (`movie_id`='$show_id' && `movie_I_want_id` = 'miw0001')";
$result_date0107 = mysqli_query($link,$sql_date0107);
if (mysqli_num_rows($result_date0107)>0) {
    foreach($result_date0107 as $row_date0107){}
}
$sql_date0108 = "SELECT `movie_watching_date` FROM `movie_i_want` WHERE (`movie_id`='$show_id' && `movie_I_want_id` = 'miw0001')";
$result_date0108 = mysqli_query($link,$sql_date0108);
if (mysqli_num_rows($result_date0108)>0) {
    foreach($result_date0108 as $row_date0108){}
}

//電影時間
$sql_time11 = "SELECT `screening_time` FROM `screening` WHERE `screening_id` IN (SELECT `screening_id` FROM `movie_i_want` WHERE `movie_id`='$show_id' AND `movie_watching_date`='2023-01-06') LIMIT 0, 1 ";
$result_time11 = mysqli_query($link,$sql_time11);
if (mysqli_num_rows($result_time11)>0) {
    foreach($result_time11 as $row_time11){}
}
$sql_time12 = "SELECT `screening_time` FROM `screening` WHERE `screening_id` IN (SELECT `screening_id` FROM `movie_i_want` WHERE `movie_id`='$show_id' AND `movie_watching_date`='2023-01-06') LIMIT 1, 2 ";
$result_time12 = mysqli_query($link,$sql_time12);
if (mysqli_num_rows($result_time12)>0) {
    foreach($result_time12 as $row_time12){}
}
$sql_time21 = "SELECT `screening_time` FROM `screening` WHERE `screening_id` IN (SELECT `screening_id` FROM `movie_i_want` WHERE `movie_id`='$show_id' AND `movie_watching_date`='2023-01-07') LIMIT 0, 1 ";
$result_time21 = mysqli_query($link,$sql_time21);
if (mysqli_num_rows($result_time21)>0) {
    foreach($result_time21 as $row_time21){}
}
$sql_time22 = "SELECT `screening_time` FROM `screening` WHERE `screening_id` IN (SELECT `screening_id` FROM `movie_i_want` WHERE `movie_id`='$show_id' AND `movie_watching_date`='2023-01-07') LIMIT 1, 2 ";
$result_time22 = mysqli_query($link,$sql_time22);
if (mysqli_num_rows($result_time22)>0) {
    foreach($result_time22 as $row_time22){}
}
$sql_time31 = "SELECT `screening_time` FROM `screening` WHERE `screening_id` IN (SELECT `screening_id` FROM `movie_i_want` WHERE `movie_id`='$show_id' AND `movie_watching_date`='2023-01-08') LIMIT 0, 1 ";
$result_time31 = mysqli_query($link,$sql_time31);
if (mysqli_num_rows($result_time31)>0) {
    foreach($result_time31 as $row_time31){}
}
$sql_time32 = "SELECT `screening_time` FROM `screening` WHERE `screening_id` IN (SELECT `screening_id` FROM `movie_i_want` WHERE `movie_id`='$show_id' AND `movie_watching_date`='2023-01-08') LIMIT 1, 2 ";
$result_time32 = mysqli_query($link,$sql_time32);
if (mysqli_num_rows($result_time32)>0) {
    foreach($result_time32 as $row_time32){}
}

//電影資訊
//movie_name
$sql_1 = "SELECT `movie_name` FROM `movie` WHERE `movie_id`='$show_id' ";
$result_1 = mysqli_query($link,$sql_1);
if (mysqli_num_rows($result_1)>0) {
    foreach($result_1 as $row_1){}
}
$sql_2 = "SELECT `grading_name` FROM `grading` WHERE `grading_id` IN (SELECT `grading_id` FROM `movie` WHERE `movie_id`='$show_id') ";
$result_2 = mysqli_query($link,$sql_2);
if (mysqli_num_rows($result_2)>0) {
    foreach($result_2 as $row_2){}
}
$sql_3 = "SELECT `release_date` FROM `movie` WHERE `movie_id`='$show_id' ";
$result_3 = mysqli_query($link,$sql_3);
if (mysqli_num_rows($result_3)>0) {
    foreach($result_3 as $row_3){}
}
$sql_4 = "SELECT `director_name` FROM `director` WHERE `director_id` IN (SELECT `director_id` FROM `movie` WHERE `movie_id`='$show_id') ";
$result_4 = mysqli_query($link,$sql_4);
if (mysqli_num_rows($result_4)>0) {
    foreach($result_4 as $row_4){}
}
$sql_5 = "SELECT `actor_name` FROM `actor` WHERE `actor_id` IN (SELECT `actor_id` FROM `movie` WHERE `movie_id`='$show_id') ";
$result_5 = mysqli_query($link,$sql_5);
if (mysqli_num_rows($result_5)>0) {
    foreach($result_5 as $row_5){}
}
$sql_6 = "SELECT `movie_type_name` FROM `movie_type` WHERE `movie_type_id` IN (SELECT `movie_type_id` FROM `movie` WHERE `movie_id`='$show_id') ";
$result_6 = mysqli_query($link,$sql_6);
if (mysqli_num_rows($result_6)>0) {
    foreach($result_6 as $row_6){}
}
$sql_7 = "SELECT `movie_length` FROM `movie` WHERE `movie_id`='$show_id' ";
$result_7 = mysqli_query($link,$sql_7);
if (mysqli_num_rows($result_7)>0) {
    foreach($result_7 as $row_7){}
}
$sql_8 = "SELECT `movie_synopsis` FROM `movie` WHERE `movie_id`='$show_id' ";
$result_8 = mysqli_query($link,$sql_8);
if (mysqli_num_rows($result_8)>0) {
    foreach($result_8 as $row_8){}
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
?>
<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <title>電影介紹及查詢</title>
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
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark" id="DeepBlueBar" width="100%">
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
        <nav class="navbar navbar-expand-sm bg-secondary navbar-dark" id="LightBlueBar" width="100%">
            <font size="2px">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <li class="nav-item">
                            <form method="GET" action="ShowAllMovie.php">
                                        <select name="cinema" class="form-select">
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
                                                                else
                                                                {
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
        <br>
        <h4 style="position:absolute;left:10%;"><?php echo $row_1['movie_name']; ?></h4>
        <img src="
            <?php
                $show_id = $_GET['MOVIEid'];
                if($show_id=="m0001")  
                {
                    $_SESSION['mpicture1']="MoviePicture/1.png";
                    $mpicture1=$_SESSION['mpicture1'];
                    echo $mpicture1;
                }        
                if($show_id=="m0002")  
                {
                    $_SESSION['mpicture2']="MoviePicture/2.png";
                    $mpicture2=$_SESSION['mpicture2'];
                    echo $mpicture2;
                }   
                if($show_id=="m0003")  
                {
                    $_SESSION['mpicture3']="MoviePicture/3.png";
                    $mpicture3=$_SESSION['mpicture3'];
                    echo $mpicture3;
                }             
                if($show_id=="m0004")  
                {
                    $_SESSION['mpicture4']="MoviePicture/4.png";
                    $mpicture4=$_SESSION['mpicture4'];
                    echo $mpicture4;
                }  
                if($show_id=="m0005")  
                {
                    $_SESSION['mpicture5']="MoviePicture/5.png";
                    $mpicture5=$_SESSION['mpicture5'];
                    echo $mpicture5;
                }  
                if($show_id=="m0006")  
                {
                    $_SESSION['mpicture6']="MoviePicture/6.png";
                    $mpicture6=$_SESSION['mpicture6'];
                    echo $mpicture6;
                } 
                if($show_id=="m0007")  
                {
                    $_SESSION['mpicture7']="MoviePicture/7.png";
                    $mpicture7=$_SESSION['mpicture7'];
                    echo $mpicture7;
                }   
                if($show_id=="m0008")  
                {
                    $_SESSION['mpicture8']="MoviePicture/8.png";
                    $mpicture8=$_SESSION['mpicture8'];
                    echo $mpicture8;
                }  
                if($show_id=="m0009")  
                {
                    $_SESSION['mpicture9']="MoviePicture/9.png";
                    $mpicture9=$_SESSION['mpicture9'];
                    echo $mpicture9;
                }  
                if($show_id=="m0010")  
                {
                    $_SESSION['mpicture10']="MoviePicture/10.png";
                    $mpicture10=$_SESSION['mpicture10'];
                    echo $mpicture10;
                }  
                if($show_id=="m0011")  
                {
                    $_SESSION['mpicture11']="MoviePicture/11.png";
                    $mpicture11=$_SESSION['mpicture11'];
                    echo $mpicture11;
                }
                if($show_id=="m0012")  
                {
                    $_SESSION['mpicture12']="MoviePicture/12.png";
                    $mpicture12=$_SESSION['mpicture12'];
                    echo $mpicture12;
                }    
                if($show_id=="m0013")  
                {
                    $_SESSION['mpicture13']="MoviePicture/13.png";
                    $mpicture13=$_SESSION['mpicture13'];
                    echo $mpicture13;
                }  
                if($show_id=="m0014")  
                {
                    $_SESSION['mpicture14']="MoviePicture/14.png";
                    $mpicture14=$_SESSION['mpicture14'];
                    echo $mpicture14;
                }  
                if($show_id=="m0015")  
                {
                    $_SESSION['mpicture15']="MoviePicture/15.png";
                    $mpicture15=$_SESSION['mpicture15'];
                    echo $mpicture15;
                }  
            ?>" 
            width="150" style="position:absolute;top:180px;left:10%;"
        >
        <table>
            <tr>
                <td style="position:absolute;top:180px;left:25%;">級數： <?php echo $row_2['grading_name']; ?></td>
            </tr>
            <tr>
                <td style="position:absolute;top:210px;left:25%;">上映日期：<?php echo $row_3['release_date']; ?></td>
            </tr>
            <tr>
                <td style="position:absolute;top:240px;left:25%;">導演：<?php echo $row_4['director_name']; ?></td>
            </tr>
            <tr>
                <td style="position:absolute;top:270px;left:25%;">演員：<?php echo $row_5['actor_name']; ?></td>
            </tr>
            <tr>
                <td style="position:absolute;top:300px;left:25%;">類型：<?php echo $row_6['movie_type_name']; ?></td>
            </tr>
            <tr>
                <td style="position:absolute;top:330px;left:25%;">片長：<?php echo $row_7['movie_length']; ?></td>
            </tr>
        </table>
        <table>
            <tr>
                <th style="position:absolute;top:400px;left:10%;color:darkblue;">劇情簡介/ABOUT THE STORY</th>
            </tr>
            <tr>
                <td style="position:absolute;top:430px;left:10%;"><?php echo $row_8['movie_synopsis']; ?>
                </td>
            </tr>
        </table>
        <!--$sql_date0106['movie_watching_date']; --->
        <input type="button" class="form-control" style="position:absolute; top:180px;right:40%;background-color:lightblue;width:min-content;" value="2023/01/06" onclick="btn1()">
        <input type="button" class="form-control" style="position:absolute; top:180px;right:30%;background-color:lightblue;width:min-content;" value="2023/01/07" onclick="btn2()">
        <input type="button" class="form-control" style="position:absolute; top:180px;right:20%;background-color:lightblue;width:min-content;" value="2023/01/08" onclick="btn3()">
        <div id="Date1" style="position:absolute;top:230px;left:47%;display:none;">
            <ol>
                <ul>
                    <li><!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
                        <a href="BookingTicket.php?STUDIOid=<?php echo $show_cinema?>&MOVIEid=<?php echo $show_id?>&MOVIEDATE=2023/01/06&MOVIETIME=<?php echo $row_time11['screening_time']?>&MOVIEGRADING=<?php echo $row_2['grading_name']?>" style="text-decoration:blink;"><?php echo $row_time11['screening_time']; ?></a>
                        &nbsp;&nbsp;&nbsp;
                        <img src="MoviePicture/16.png" style="position:absolute;width:30px;" onclick="location.href='ShowSeat.php?MOVIEid=<?php echo $show_id?>&MOVIEDATE=2023/01/06&MOVIETIME=<?php echo $row_time11['screening_time']?>'">
                    </li>
                    <br>
                    <li>
                        <a href="BookingTicket.php?STUDIOid=<?php echo $show_cinema?>&MOVIEid=<?php echo $show_id?>&MOVIEDATE=2023/01/06&MOVIETIME=<?php echo $row_time12['screening_time']?>&MOVIEGRADING=<?php echo $row_2['grading_name']?>" style="text-decoration:blink;"><?php echo $row_time12['screening_time']; ?></a>
                        &nbsp;&nbsp;&nbsp;
                        <img src="MoviePicture/16.png" style="position:absolute;width:30px;" onclick="location.href='ShowSeat.php?MOVIEid=<?php echo $show_id?>&MOVIEDATE=2023/01/06&MOVIETIME=<?php echo $row_time12['screening_time']?>'">
                    </li>
                </ul>
            </ol>
        </div>
        <div id="Date2" style="position:absolute;top:230px;left:47%;display:none;">
            <ol>
                <ul>
                    <li>
                        <a href="BookingTicket.php?STUDIOid=<?php echo $show_cinema?>&MOVIEid=<?php echo $show_id?>&MOVIEDATE=2023/01/07&MOVIETIME=<?php echo $row_time21['screening_time']?>&MOVIEGRADING=<?php echo $row_2['grading_name']?>" style="text-decoration:blink;"><?php echo $row_time21['screening_time']; ?></a>
                        &nbsp;&nbsp;&nbsp;
                        <img src="MoviePicture/16.png" style="position:absolute;width:30px;" onclick="location.href='ShowSeat.php?MOVIEid=<?php echo $show_id?>&MOVIEDATE=2023/01/07&MOVIETIME=<?php echo $row_time21['screening_time']?>'">
                    </li>
                    <br>
                    <li>
                        <a href="BookingTicket.php?STUDIOid=<?php echo $show_cinema?>&MOVIEid=<?php echo $show_id?>&MOVIEDATE=2023/01/07&MOVIETIME=<?php echo $row_time22['screening_time']?>&MOVIEGRADING=<?php echo $row_2['grading_name']?>" style="text-decoration:blink;"><?php echo $row_time22['screening_time']; ?></a>
                        &nbsp;&nbsp;&nbsp;
                        <img src="MoviePicture/16.png" style="position:absolute;width:30px;" onclick="location.href='ShowSeat.php?MOVIEid=<?php echo $show_id?>&MOVIEDATE=2023/01/07&MOVIETIME=<?php echo $row_time22['screening_time']?>'">
                    </li>
                </ul>
            </ol>
        </div>
        <div id="Date3" style="position:absolute;top:230px;left:47%;display:none;">
            <ol>
                <ul>
                    <li>
                        <a href="BookingTicket.php?STUDIOid=<?php echo $show_cinema?>&MOVIEid=<?php echo $show_id?>&MOVIEDATE=2023/01/08&MOVIETIME=<?php echo $row_time31['screening_time']?>&MOVIEGRADING=<?php echo $row_2['grading_name']?>" style="text-decoration:blink;"><?php echo $row_time31['screening_time']; ?></a>
                        &nbsp;&nbsp;&nbsp;
                        <img src="MoviePicture/16.png" style="position:absolute;width:30px;" onclick="location.href='ShowSeat.php?MOVIEid=<?php echo $show_id?>&MOVIEDATE=2023/01/08&MOVIETIME=<?php echo $row_time31['screening_time']?>'">
                    </li>
                    <br>
                    <li>
                        <a href="BookingTicket.php?STUDIOid=<?php echo $show_cinema?>&MOVIEid=<?php echo $show_id?>&MOVIEDATE=2023/01/08&MOVIETIME=<?php echo $row_time32['screening_time']?>&MOVIEGRADING=<?php echo $row_2['grading_name']?>" style="text-decoration:blink;"><?php echo $row_time32['screening_time']; ?></a>
                        &nbsp;&nbsp;&nbsp;
                        <img src="MoviePicture/16.png" style="position:absolute;width:30px;" onclick="location.href='ShowSeat.php?MOVIEid=<?php echo $show_id?>&MOVIEDATE=2023/01/08&MOVIETIME=<?php echo $row_time32['screening_time']?>'">
                    </li>
                </ul>
            </ol>
        </div>
        <script>
            function btn1()
            {
                document.getElementById('Date1').style.display='block';
                document.getElementById('Date2').style.display='none';
                document.getElementById('Date3').style.display='none';     
            }
            function btn2()
            {
                document.getElementById('Date1').style.display='none';
                document.getElementById('Date2').style.display='block';
                document.getElementById('Date3').style.display='none';     
            }
            function btn3()
            {
                document.getElementById('Date1').style.display='none';
                document.getElementById('Date2').style.display='none';
                document.getElementById('Date3').style.display='block'; 
            }
        </script> 
    </div>
</body>
</html>