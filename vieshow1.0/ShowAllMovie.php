<?php
// 載入db.php來連結資料庫
require_once 'db.php';
session_start();
// http://localhost:8080/viewshow_php/ShowAllMovie.php
header('Content-Type: text/html; charset=utf-8');

//連影城
$show_cinema = $_GET['cinema'];
//print($show_cinema);

//電影id
$sql_id = "SELECT `movie_id` FROM `movie` WHERE `movie_name`='黑豹 2：瓦干達萬歲' ";
$result_id = mysqli_query($link,$sql_id);
if (mysqli_num_rows($result_id)>0) {
    foreach($result_id as $row_id){}
}
$sql_id2 ="SELECT `movie_id` FROM `movie` WHERE `movie_id`='m0002'";
$result_id2 = mysqli_query($link,$sql_id2);
if (mysqli_num_rows($result_id2)>0) {
    foreach($result_id2 as $row_id2){}
}
$sql_id3 = "SELECT `movie_id` FROM `movie` WHERE `movie_id`='m0003' ";
$result_id3 = mysqli_query($link,$sql_id3);
if (mysqli_num_rows($result_id3)>0) {
    foreach($result_id3 as $row_id3){}
}
$sql_id4 ="SELECT `movie_id` FROM `movie` WHERE `movie_id`='m0004'";
$result_id4 = mysqli_query($link,$sql_id4);
if (mysqli_num_rows($result_id4)>0) {
    foreach($result_id4 as $row_id4){}
}
$sql_id5 = "SELECT `movie_id` FROM `movie` WHERE `movie_id`='m0005' ";
$result_id5 = mysqli_query($link,$sql_id5);
if (mysqli_num_rows($result_id5)>0) {
    foreach($result_id5 as $row_id5){}
}
$sql_id6 ="SELECT `movie_id` FROM `movie` WHERE `movie_id`='m0006'";
$result_id6 = mysqli_query($link,$sql_id6);
if (mysqli_num_rows($result_id6)>0) {
    foreach($result_id6 as $row_id6){}
}
$sql_id7 = "SELECT `movie_id` FROM `movie` WHERE `movie_id`='m0007' ";
$result_id7 = mysqli_query($link,$sql_id7);
if (mysqli_num_rows($result_id7)>0) {
    foreach($result_id7 as $row_id7){}
}
$sql_id8 ="SELECT `movie_id` FROM `movie` WHERE `movie_id`='m0008'";
$result_id8 = mysqli_query($link,$sql_id8);
if (mysqli_num_rows($result_id8)>0) {
    foreach($result_id8 as $row_id8){}
}
$sql_id9 = "SELECT `movie_id` FROM `movie` WHERE `movie_id`='m0009' ";
$result_id9 = mysqli_query($link,$sql_id9);
if (mysqli_num_rows($result_id9)>0) {
    foreach($result_id9 as $row_id9){}
}
$sql_id10 ="SELECT `movie_id` FROM `movie` WHERE `movie_id`='m0010'";
$result_id10 = mysqli_query($link,$sql_id10);
if (mysqli_num_rows($result_id10)>0) {
    foreach($result_id10 as $row_id10){}
}
$sql_id11 = "SELECT `movie_id` FROM `movie` WHERE `movie_id`='m0011' ";
$result_id11 = mysqli_query($link,$sql_id11);
if (mysqli_num_rows($result_id11)>0) {
    foreach($result_id11 as $row_id11){}
}
$sql_id12 ="SELECT `movie_id` FROM `movie` WHERE `movie_id`='m0012'";
$result_id12 = mysqli_query($link,$sql_id12);
if (mysqli_num_rows($result_id12)>0) {
    foreach($result_id12 as $row_id12){}
}
$sql_id13 = "SELECT `movie_id` FROM `movie` WHERE `movie_id`='m0013' ";
$result_id13 = mysqli_query($link,$sql_id13);
if (mysqli_num_rows($result_id13)>0) {
    foreach($result_id13 as $row_id13){}
}
$sql_id14 ="SELECT `movie_id` FROM `movie` WHERE `movie_id`='m0014'";
$result_id14 = mysqli_query($link,$sql_id14);
if (mysqli_num_rows($result_id14)>0) {
    foreach($result_id14 as $row_id14){}
}
$sql_id15 = "SELECT `movie_id` FROM `movie` WHERE `movie_id`='m0015' ";
$result_id15 = mysqli_query($link,$sql_id15);
if (mysqli_num_rows($result_id15)>0) {
    foreach($result_id15 as $row_id15){}
}

//電影名稱
$sql_1 = "SELECT `movie_name` FROM `movie` WHERE `movie_id`='m0001' ";
$result_1 = mysqli_query($link,$sql_1);
if (mysqli_num_rows($result_1)>0) {
    foreach($result_1 as $row_1){}
}
$sql_2 = "SELECT `movie_name` FROM `movie` WHERE `movie_id`='m0002' ";
$result_2 = mysqli_query($link,$sql_2);
if (mysqli_num_rows($result_2)>0) {
    foreach($result_2 as $row_2){}
}
$sql_3 = "SELECT `movie_name` FROM `movie` WHERE `movie_id`='m0003' ";
$result_3 = mysqli_query($link,$sql_3);
if (mysqli_num_rows($result_3)>0) {
    foreach($result_3 as $row_3){}
}
$sql_4 = "SELECT `movie_name` FROM `movie` WHERE `movie_id`='m0004' ";
$result_4 = mysqli_query($link,$sql_4);
if (mysqli_num_rows($result_4)>0) {
    foreach($result_4 as $row_4){}
}
$sql_5 = "SELECT `movie_name` FROM `movie` WHERE `movie_id`='m0005' ";
$result_5 = mysqli_query($link,$sql_5);
if (mysqli_num_rows($result_5)>0) {
    foreach($result_5 as $row_5){}
}
$sql_6 = "SELECT `movie_name` FROM `movie` WHERE `movie_id`='m0006' ";
$result_6 = mysqli_query($link,$sql_6);
if (mysqli_num_rows($result_6)>0) {
    foreach($result_6 as $row_6){}
}
$sql_7 = "SELECT `movie_name` FROM `movie` WHERE `movie_id`='m0007' ";
$result_7 = mysqli_query($link,$sql_7);
if (mysqli_num_rows($result_7)>0) {
    foreach($result_7 as $row_7){}
}
$sql_8 = "SELECT `movie_name` FROM `movie` WHERE `movie_id`='m0008' ";
$result_8 = mysqli_query($link,$sql_8);
if (mysqli_num_rows($result_8)>0) {
    foreach($result_8 as $row_8){}
}
$sql_9 = "SELECT `movie_name` FROM `movie` WHERE `movie_id`='m0009' ";
$result_9 = mysqli_query($link,$sql_9);
if (mysqli_num_rows($result_9)>0) {
    foreach($result_9 as $row_9){}
}
$sql_10 = "SELECT `movie_name` FROM `movie` WHERE `movie_id`='m0010' ";
$result_10 = mysqli_query($link,$sql_10);
if (mysqli_num_rows($result_10)>0) {
    foreach($result_10 as $row_10){}
}
$sql_11 = "SELECT `movie_name` FROM `movie` WHERE `movie_id`='m0011' ";
$result_11 = mysqli_query($link,$sql_11);
if (mysqli_num_rows($result_11)>0) {
    foreach($result_11 as $row_11){}
}
$sql_12 = "SELECT `movie_name` FROM `movie` WHERE `movie_id`='m0012' ";
$result_12 = mysqli_query($link,$sql_12);
if (mysqli_num_rows($result_12)>0) {
    foreach($result_12 as $row_12){}
}
$sql_13 = "SELECT `movie_name` FROM `movie` WHERE `movie_id`='m0013' ";
$result_13 = mysqli_query($link,$sql_13);
if (mysqli_num_rows($result_13)>0) {
    foreach($result_13 as $row_13){}
}
$sql_14 = "SELECT `movie_name` FROM `movie` WHERE `movie_id`='m0014' ";
$result_14 = mysqli_query($link,$sql_14);
if (mysqli_num_rows($result_14)>0) {
    foreach($result_14 as $row_14){}
}
$sql_15 = "SELECT `movie_name` FROM `movie` WHERE `movie_id`='m0015' ";
$result_15 = mysqli_query($link,$sql_15);
if (mysqli_num_rows($result_15)>0) {
    foreach($result_15 as $row_15){}
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
    <title>選擇電影</title>
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
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark" id="DeepBlueBar" width="100%">
            <font size="2px">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="Home.php">VIESHOW</a></li>
                    <li class="nav-item"><a class="nav-link" href="Login.html">會員登入</a></li>
                    <li class="nav-item"><a class="nav-link" href="TicketRecord.html">訂票記錄</a></li>
                    <li class="nav-item"><a class="nav-link" href="StoredValue.html">會員儲值</a></li>
                    <li class="nav-item"><a class="nav-link" href="MemberService.html">會員服務</a></li>
                    <li class="nav-item"><a class="nav-link" href="Explaination.html">操作說明</a></li> 
                </ul> 
            </font>
        </nav>
        <nav class="navbar navbar-expand-sm bg-secondary navbar-dark" id="LightBlueBar" width="100%">
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
                                                            else
                                                            {
                                                                $table.=$value.'</option>';
                                                            }
                                                        }
                                                       }
                                                       echo $table;
                                                  ?>
                                        </select>
                                        <input type="submit" value="查詢" style="position:absolute;top:8px;left:27%" class="btn btn-light">
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
    <div style="position:absolute;top:100px;left:2%;">
        <br>
        <ol>
            <ul>
                <li style="font-weight:bold;"><a href="<?php echo "Movie_Black.php?STUDIOid=".$show_cinema."&MOVIEid=".$row_id['movie_id']?>" style="text-decoration:blink;color:royalblue;"><?php echo $row_1['movie_name']; ?></a></li>
                <br>
                <li style="font-weight:bold;"><a href="<?php echo "Movie_Black.php?STUDIOid=".$show_cinema."&MOVIEid=".$row_id2['movie_id']?>" style="text-decoration:blink;color:royalblue;"><?php echo $row_2['movie_name']; ?></a></li>
                <br>
                <li style="font-weight:bold;"><a href="<?php echo "Movie_Black.php?STUDIOid=".$show_cinema."&MOVIEid=".$row_id3['movie_id']?>" style="text-decoration:blink;color:royalblue;"><?php echo $row_3['movie_name']; ?></a></li>
                <br>
                <li style="font-weight:bold;"><a href="<?php echo "Movie_Black.php?STUDIOid=".$show_cinema."&MOVIEid=".$row_id4['movie_id']?>" style="text-decoration:blink;color:royalblue;"><?php echo $row_4['movie_name']; ?></a></li>
                <br>
                <li style="font-weight:bold;"><a href="<?php echo "Movie_Black.php?STUDIOid=".$show_cinema."&MOVIEid=".$row_id5['movie_id']?>" style="text-decoration:blink;color:royalblue;"><?php echo $row_5['movie_name']; ?></a></li>
                <br>
                <li style="font-weight:bold;"><a href="<?php echo "Movie_Black.php?STUDIOid=".$show_cinema."&MOVIEid=".$row_id6['movie_id']?>" style="text-decoration:blink;color:royalblue;"><?php echo $row_6['movie_name']; ?></a></li>
                <br>
                <li style="font-weight:bold;"><a href="<?php echo "Movie_Black.php?STUDIOid=".$show_cinema."&MOVIEid=".$row_id7['movie_id']?>" style="text-decoration:blink;color:royalblue;"><?php echo $row_7['movie_name']; ?></a></li>
                <br>
                <li style="font-weight:bold;"><a href="<?php echo "Movie_Black.php?STUDIOid=".$show_cinema."&MOVIEid=".$row_id12['movie_id']?>" style="text-decoration:blink;color:royalblue;"><?php echo $row_12['movie_name']; ?></a></li>
            </ul>
        </ol>
    </div>
    <div style="position:absolute;top:100px;left:40%;">
        <br>
        <ol>
            <ul>
                <li style="font-weight:bold;"><a href="<?php echo "Movie_Black.php?STUDIOid=".$show_cinema."&MOVIEid=".$row_id8['movie_id']?>" style="text-decoration:blink;color:royalblue;"><?php echo $row_8['movie_name']; ?></a></li>
                <br>
                <li style="font-weight:bold;"><a href="<?php echo "Movie_Black.php?STUDIOid=".$show_cinema."&MOVIEid=".$row_id9['movie_id']?>" style="text-decoration:blink;color:royalblue;"><?php echo $row_9['movie_name']; ?></a></li>
                <br>
                <li style="font-weight:bold;"><a href="<?php echo "Movie_Black.php?STUDIOid=".$show_cinema."&MOVIEid=".$row_id10['movie_id']?>" style="text-decoration:blink;color:royalblue;"><?php echo $row_10['movie_name']; ?></a></li>
                <br>
                <li style="font-weight:bold;"><a href="<?php echo "Movie_Black.php?STUDIOid=".$show_cinema."&MOVIEid=".$row_id11['movie_id']?>" style="text-decoration:blink;color:royalblue;"><?php echo $row_11['movie_name']; ?></a></li>
                <br>
                <li style="font-weight:bold;"><a href="<?php echo "Movie_Black.php?STUDIOid=".$show_cinema."&MOVIEid=".$row_id13['movie_id']?>" style="text-decoration:blink;color:royalblue;"><?php echo $row_13['movie_name']; ?></a></li>
                <br>
                <li style="font-weight:bold;"><a href="<?php echo "Movie_Black.php?STUDIOid=".$show_cinema."&MOVIEid=".$row_id14['movie_id']?>" style="text-decoration:blink;color:royalblue;"><?php echo $row_14['movie_name']; ?></a></li>
                <br>
                <li style="font-weight:bold;"><a href="<?php echo "Movie_Black.php?STUDIOid=".$show_cinema."&MOVIEid=".$row_id15['movie_id']?>" style="text-decoration:blink;color:royalblue;"><?php echo $row_15['movie_name']; ?></a></li>
            </ul>
        </ol>
    </div>
    <?php
        // $T=$_SESSION['foodcount1'];
        // echo $T;
        // $T2=$_SESSION['foodcount2'];
        // echo $T2;     
        // $T3=$_SESSION['foodcount3'];
        // echo $T3;        
        // $T4=$_SESSION['foodcount4'];
        // echo $T4;        
        // $T5=$_SESSION['foodcount5'];
        // echo $T5;        
        // $T6=$_SESSION['foodcount6'];
        // echo $T6;        
        // $T7=$_SESSION['foodcount7'];
        // echo $T7;           
    ?>
</body>
</html>