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
$ticket1=$_POST['ticketcount1'];
$ticket2=$_POST['ticketcount2'];
//print($ticket1);
//print($ticket2);

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

//食物名稱
$sql_food1 = "SELECT food_name FROM `food` WHERE food_id = 'f0001'";
$result_food1 = mysqli_query($link,$sql_food1);
if (mysqli_num_rows($result_food1)>0) {
    foreach($result_food1 as $row_food1){}
}
$sql_food2 = "SELECT food_name FROM `food` WHERE food_id = 'f0002'";
$result_food2 = mysqli_query($link,$sql_food2);
if (mysqli_num_rows($result_food2)>0) {
    foreach($result_food2 as $row_food2){}
}
$sql_food3 = "SELECT food_name FROM `food` WHERE food_id = 'f0003'";
$result_food3 = mysqli_query($link,$sql_food3);
if (mysqli_num_rows($result_food3)>0) {
    foreach($result_food3 as $row_food3){}
}
$sql_food4 = "SELECT food_name FROM `food` WHERE food_id = 'f0004'";
$result_food4 = mysqli_query($link,$sql_food4);
if (mysqli_num_rows($result_food4)>0) {
    foreach($result_food4 as $row_food4){}
}
$sql_food5 = "SELECT food_name FROM `food` WHERE food_id = 'f0008'";
$result_food5 = mysqli_query($link,$sql_food5);
if (mysqli_num_rows($result_food5)>0) {
    foreach($result_food5 as $row_food5){}
}
$sql_food6 = "SELECT food_name FROM `food` WHERE food_id = 'f0009'";
$result_food6 = mysqli_query($link,$sql_food6);
if (mysqli_num_rows($result_food6)>0) {
    foreach($result_food6 as $row_food6){}
}
$sql_food7 = "SELECT food_name FROM `food` WHERE food_id = 'f0010'";
$result_food7 = mysqli_query($link,$sql_food7);
if (mysqli_num_rows($result_food7)>0) {
    foreach($result_food7 as $row_food7){}
}

//食物價格
$sql_foodprice1 = "SELECT food_price FROM `food` WHERE food_id = 'f0001'";
$result_foodprice1 = mysqli_query($link,$sql_foodprice1);
if (mysqli_num_rows($result_foodprice1)>0) {
    foreach($result_foodprice1 as $row_foodprice1){}
}
$sql_foodprice2 = "SELECT food_price FROM `food` WHERE food_id = 'f0002'";
$result_foodprice2 = mysqli_query($link,$sql_foodprice2);
if (mysqli_num_rows($result_foodprice2)>0) {
    foreach($result_foodprice2 as $row_foodprice2){}
}
$sql_foodprice3 = "SELECT food_price FROM `food` WHERE food_id = 'f0003'";
$result_foodprice3 = mysqli_query($link,$sql_foodprice3);
if (mysqli_num_rows($result_foodprice3)>0) {
    foreach($result_foodprice3 as $row_foodprice3){}
}
$sql_foodprice4 = "SELECT food_price FROM `food` WHERE food_id = 'f0004'";
$result_foodprice4 = mysqli_query($link,$sql_foodprice4);
if (mysqli_num_rows($result_foodprice4)>0) {
    foreach($result_foodprice4 as $row_foodprice4){}
}
$sql_foodprice5 = "SELECT food_price FROM `food` WHERE food_id = 'f0008'";
$result_foodprice5 = mysqli_query($link,$sql_foodprice5);
if (mysqli_num_rows($result_foodprice5)>0) {
    foreach($result_foodprice5 as $row_foodprice5){}
}
$sql_foodprice6 = "SELECT food_price FROM `food` WHERE food_id = 'f0009'";
$result_foodprice6 = mysqli_query($link,$sql_foodprice6);
if (mysqli_num_rows($result_foodprice6)>0) {
    foreach($result_foodprice6 as $row_foodprice6){}
}
$sql_foodprice7 = "SELECT food_price FROM `food` WHERE food_id = 'f0010'";
$result_foodprice7 = mysqli_query($link,$sql_foodprice7);
if (mysqli_num_rows($result_foodprice7)>0) {
    foreach($result_foodprice7 as $row_foodprice7){}
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
    <title>選擇餐飲</title>
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
                <td><?php echo $show_cinema?></td>
            </tr>
        </table>
    </div>
    <div>
        <table style="position:absolute;top:220px;left:5%;font-size:small;background-color:steelblue;text-align:center;">
            <tr>
                <th style="color:whitesmoke;width:80px;">選擇餐飲</th>
            </tr>
        </table>
        <form method="POST" action="BookingSeat.php?STUDIOid=<?php echo $show_cinema?>&MOVIEid=<?php echo $show_id?>&MOVIEDATE=<?php echo $show_date?>&MOVIEGRADING=<?php echo $show_grading?>&MOVIETIME=<?php echo $show_time?>&MOVIEIWANT_id=<?php echo $row_movie_I_want_id['movie_I_want_id']?>">
            <table>
                <tr style="position:absolute;top:250px;left:5%;font-size:small;background-color:lightgray">
                    <th>飲料</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;價格</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;數量&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                </tr>
                <tr style="position:absolute;top:280px;left:5%;font-size:small;background-color:white">
                    <td><?php echo $row_food1['food_name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td style="color:red;">$<?php echo $row_foodprice1['food_price']; ?></td>
                </tr>
                <tr style="position:absolute;top:280px;left:20%;font-size:small;background-color:white">
                    <td>
                        <select name="foodcount1" class="form-select form-select-sm">
                            <option selected>數量</option>
                            <option value="0">0</option>
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
                    <td><?php echo $row_food2['food_name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td style="color:red;">$<?php echo $row_foodprice2['food_price']; ?></td>
                </tr>
                <tr style="position:absolute;top:320px;left:20%;font-size:small;background-color:white">
                    <td>
                        <select name="foodcount2" class="form-select form-select-sm">
                            <option selected>數量</option>
                            <option value="0">0</option>
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
                <tr style="position:absolute;top:360px;left:5%;font-size:small;background-color:white">
                    <td><?php echo $row_food3['food_name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td style="color:red;">$<?php echo $row_foodprice3['food_price']; ?></td>
                </tr>
                <tr style="position:absolute;top:360px;left:20%;font-size:small;background-color:white">
                    <td>
                        <select name="foodcount3" class="form-select form-select-sm">
                            <option selected>數量</option>
                            <option value="0">0</option>
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
                <tr style="position:absolute;top:250px;left:35%;font-size:small;background-color:lightgray">
                    <th>餐點</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;價格</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;數量&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                </tr>
                <tr style="position:absolute;top:280px;left:35%;font-size:small;background-color:white">
                    <td><?php echo $row_food4['food_name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td style="color:red;">$<?php echo $row_foodprice4['food_price']; ?></td>
                </tr>
            </table>
            <table>
                <tr style="position:absolute;top:280px;left:50%;font-size:small;background-color:white">
                    <td>
                        <select name="foodcount4" class="form-select form-select-sm">
                            <option selected>數量</option>
                            <option value="0">0</option>
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
                <tr style="position:absolute;top:320px;left:35%;font-size:small;background-color:white">
                    <td><?php echo $row_food5['food_name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td style="color:red;">$<?php echo $row_foodprice5['food_price']; ?></td>
                </tr>
                <tr style="position:absolute;top:320px;left:50%;font-size:small;background-color:white">
                    <td>
                        <select name="foodcount5" class="form-select form-select-sm">
                            <option selected>數量</option>
                            <option value="0">0</option>
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
                <tr style="position:absolute;top:360px;left:35%;font-size:small;background-color:white">
                    <td><?php echo $row_food6['food_name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td style="color:red;">$<?php echo $row_foodprice6['food_price']; ?></td>
                </tr>
                <tr style="position:absolute;top:360px;left:50%;font-size:small;background-color:white">
                    <td>
                        <select name="foodcount6" class="form-select form-select-sm">
                            <option selected>數量</option>
                            <option value="0">0</option>
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
                <tr style="position:absolute;top:400px;left:35%;font-size:small;background-color:white">
                    <td><?php echo $row_food7['food_name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td style="color:red;">$<?php echo $row_foodprice7['food_price']; ?></td>
                </tr>
                <tr style="position:absolute;top:400px;left:50%;font-size:small;background-color:white">
                    <td>
                        <select name="foodcount7" class="form-select form-select-sm">
                            <option selected>數量</option>
                            <option value="0">0</option>
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
            <input type="Submit" value="下一步" class="btn btn-light" style="position:absolute; top:420px;left:80%;background-color:aquamarine;" onclick="location.href='BookingSeat.php?STUDIOid=<?php echo $show_cinema?>&MOVIEid=<?php echo $show_id?>&MOVIEDATE=<?php echo $show_date?>&MOVIEGRADING=<?php echo $show_grading?>&MOVIETIME=<?php echo $show_time?>&MOVIEIWANT_id=<?php echo $row_movie_I_want_id['movie_I_want_id']?>'">
        </form>
        <div>
            <input type="Submit" value="上一步" class="btn btn-light" style="position:absolute; top:420px;left:72%;background-color:aquamarine;"  onclick="history.back()">
        </div>
    </div>
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
    <?php
        // $tt=$_SESSION['ticketcount1'];
        // echo $tt;
    ?>
</body>
</html>