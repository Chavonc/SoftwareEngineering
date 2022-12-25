<?php
require_once 'db.php';
header('Content-Type: text/html; charset=utf-8');

//傳值
$show_id = $_GET['MOVIEid'];
$show_date = $_GET['MOVIEDATE'];
$show_time = $_GET['MOVIETIME'];
$show_grading = $_GET['MOVIEGRADING'];
$show_cinema=$_GET['STUDIOid'];

$food1=$_POST['foodcount1'];
$food2=$_POST['foodcount2'];
$food3=$_POST['foodcount3'];
$food4=$_POST['foodcount4'];
$food5=$_POST['foodcount5'];
$food6=$_POST['foodcount6'];
$food7=$_POST['foodcount7'];
//print($food1);
//print($food2);
//print($food3);
//print($food4);
//print($food5);
//print($food6);
//print($food7);

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
?>

<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <title>選擇座位</title>
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
                <td><?php echo $show_cinema ?></td>
            </tr>
        </table>
     </div>
     <div>
          <table style="position:absolute;top:220px;left:5%;font-size:small;background-color:steelblue;text-align:center;">
               <tr>
                    <th style="color:whitesmoke;width:80px;">選擇座位</th>
               </tr>
          </table>
     </div>
     <div>
          <img src="SeatPicture/1.png" style="position:absolute;top:240px;left:5%;width:350px">
     </div>
     <div>
          <h6 style="position:absolute;top:220px;left:15%;">*下方為座位參考圖</h6>
            <form method="GET" action="BookingList.php?STUDIOid=<?php echo $show_cinema?>&MOVIEid=<?php echo $show_id?>&MOVIEDATE=<?php echo $show_date?>&MOVIEGRADING=<?php echo $show_grading?>&MOVIETIME=<?php echo $show_time?>&MOVIEIWANT_id=<?php echo $row_movie_I_want_id['movie_I_want_id']?>" style="position:absolute;top:220px;left:35%;">
                    <table>
                        <tr>
                            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td>1</td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td>2</td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td>3</td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td>4</td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td>5</td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td>6</td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td>7</td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td>8</td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td>9</td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>A</td>
                            <td><input type="checkbox" name="seat" value="seatA01"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatA02"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatA03"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatA04"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatA05"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatA06"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatA07"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatA08"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatA09"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatA10"></td>
                        </tr>
                        <tr>
                            <td>B</td>
                            <td><input type="checkbox" name="seat" value="seatB01"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatB02"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatB03"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatB04"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatB05"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatB06"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatB07"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatB08"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatB09"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatB10"></td>
                        </tr>
                        <tr>
                            <td>C</td>
                            <td><input type="checkbox" name="seat" value="seatC01"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatC02"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatC03"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatC04"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatC05"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatC06"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatC07"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatC08"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatC09"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatC10"></td>
                        </tr>
                        <tr>
                            <td>D</td>
                            <td><input type="checkbox" name="seat" value="seatD01"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatD02"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatD03"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatD04"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatD05"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatD06"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatD07"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatD08"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatD09"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatD10"></td>
                        </tr>
                        <tr>
                            <td>E</td>
                            <td><input type="checkbox" name="seat" value="seatE01"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatE02"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatE03"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatE04"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatE05"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatE06"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatE07"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatE08"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatE09"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatE10"></td>
                        </tr>
                        <tr>
                            <td>F</td>
                            <td><input type="checkbox" name="seat" value="seatF01"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatF02"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatF03"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatF04"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatF05"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatF06"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatF07"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatF08"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatF09"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatF10"></td>
                        </tr>
                        <tr>
                            <td>G</td>
                            <td><input type="checkbox" name="seat" value="seatG01"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatG02"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatG03"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatG04"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatG05"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatG06"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatG07"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatG08"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatG09"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatG10"></td>
                        </tr>
                        <tr>
                            <td>H</td>
                            <td><input type="checkbox" name="seat" value="seatH01"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatH02"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatH03"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatH04"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatH05"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatH06"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatH07"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatH08"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatH09"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatH10"></td>
                        </tr>
                        <tr>
                            <td>I</td>
                            <td><input type="checkbox" name="seat" value="seatI01"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatI02"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatI03"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatI04"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatI05"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatI06"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatI07"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatI08"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatI09"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatI10"></td>
                        </tr>
                        <tr>
                            <td>J</td>
                            <td><input type="checkbox" name="seat" value="seatJ01"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatJ02"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatJ03"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatJ04"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatJ05"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatJ06"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatJ07"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatJ08"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatJ09"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="seat" value="seatJ10"></td>
                        </tr>
                    </table>
            </form>
     </div>

    <input id="ok" type="Submit" value="下一步" class="btn btn-light" style="position:absolute; top:420px;left:80%;background-color:aquamarine;" onclick="location.href='BookingList.php?STUDIOid=<?php echo $show_cinema?>&MOVIEid=<?php echo $show_id?>&MOVIEDATE=<?php echo $show_date?>&MOVIEGRADING=<?php echo $show_grading?>&MOVIETIME=<?php echo $show_time?>&MOVIEIWANT_id=<?php echo $row_movie_I_want_id['movie_I_want_id']?>'">
    <input type="Submit" value="上一步" class="btn btn-light" style="position:absolute; top:420px;left:72%;background-color:aquamarine;"  onclick="history.back()">
     
     <!-- <div>
          <table style="position:absolute; top:150px;right:5%;width:240px;">
              <tr style="background-color:steelblue;color:white">
                  <th><center>會員專區</center></th>
              </tr>
              <tr style="background-color:#D6FFFF;color:black">
                  <td>
                      <text>帳號：</text><input name="myfield" autocomplete="off" required type="text" placeholder="請輸入帳號" >
                  </td>
              </tr>
              <tr style="background-color:#D6FFFF;color:black">
                  <td>
                      <text>密碼：</text><input name="myfield" autocomplete="off" required type="password" placeholder="請輸入密碼">
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
          </table>
     </div> -->
     <!-- <div>
          <table style="position:absolute; top:350px;right:5%;width:240px;">
              <tr style="background-color:steelblue;color:white">
                  <th><center>購物清單</center></th>
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
          </table>
     </div> -->
</body>
<script language="Javascript">
    //seatcheckbox
    $(document).ready(function(){
        $("#ok").click(function(){
            var selected=[];
            $("[name=seat]:checkbox:checked").each(function(){
                selected.push($(this).val());//取值
            });
            alert("您已選擇座位: "+selected.join());
            //result = selected.toString();
        });
    });
</script>
</html>