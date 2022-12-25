<?php
// 載入db.php來連結資料庫
require_once 'db.php';
header('Content-Type: text/html; charset=utf-8');

//傳值
$show_id = $_GET['MOVIEid'];
$show_date = $_GET['MOVIEDATE'];
$show_time = $_GET['MOVIETIME'];
$show_grading = $_GET['MOVIEGRADING'];

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
                    <li class="nav-item"><a class="nav-link" href="Login.html">會員登入</a></li>
                    <li class="nav-item"><a class="nav-link" href="TicketRecord.html">訂票記錄</a></li>
                    <li class="nav-item"><a class="nav-link" href="StoredValue.html">會員儲值</a></li>
                    <li class="nav-item"><a class="nav-link" href="MemberService.html">會員服務</a></li>
                    <li class="nav-item"><a class="nav-link" href="Explaination.html">操作說明</a></li> 
                </ul> 
            </font>
        </nav>
        <nav class="navbar navbar-expand-sm bg-secondary navbar-dark" id="LightBlueBar">
            <font size="2px">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <li class="nav-item">
                        <form method="POST" action="ShowAllMovie.php">
                                        <select name="test" class="form-select" id="cinemal">
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
    </div>
    <div>
          <h4 style="font-size:large;position:absolute;left:40%;top:130px;color:Black;font-weight:bold;">訂票成功!</h4>
    </div>
    <div>
          <table style="position:absolute;left:30%;top:200px;width:350px;border: 1px solid black;">
               <tr style="background-color:steelblue;color:White;font-weight:bold;border: 1px solid black;">
                    <th><center>訂單內容</center></th>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>訂單序號：</text>QAQ001(資料庫random生)</td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>影城：</text>台北信義威秀影城</td>
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
                    <td><text>票種：</text>全票$340x2</td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>餐飲：</text></td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>座位：</text>J10、J11</td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>總額：</text>$680</td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>付款方式：</text>儲值金</td>
               </tr>
          </table>
    </div>
    <div>
          <table style="position:absolute; top:150px;right:5%;width:240px;border: 1px solid black;">
               <tr style="background-color:steelblue;color:white;border: 1px solid black;">
                    <th><center>會員專區</center></th>
                    <th></th>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><img src="MemberPicture/anya01.png" width="50px"><text>使用者名字</text></td>
                    <td></td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>會員卡卡號：</text>使用者會員卡卡號</td>
                    <td></td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>iShow點數：</text>30</td>
                    <td></td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>儲值金餘額：</text>$705</td>
                    <td></td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>會籍期限：永久</text></td>
               </tr>
          </table>
     </div>
     <div>
          <input type="button" value="點數記錄" class="btn btn-light" onclick="location.href='點數記錄.html'" style="position:absolute;top:250px;right:6%;background-color:lightgreen;font-weight:bold;">
     </div>
     <div>
          <input type="button" value="儲值記錄" class="btn btn-light" onclick="location.href='儲值記錄.html'" style="position:absolute;top:300px;right:6%;background-color:lightgreen;font-weight:bold;">
     </div>
     <div>
          <input type="button" value="前往訂票記錄" class="btn btn-light" onclick="location.href='訂票記錄.html'" style="position:absolute;top:150px;right:35%;font-weight:bold;background-color:steelblue;color:white;">
     </div>
</body>
</html>