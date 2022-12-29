<?php
// 載入db.php來連結資料庫
require_once 'db.php';
header('Content-Type: text/html; charset=utf-8');

//傳值
$show_id = $_GET['MOVIEid'];
$show_date = $_GET['MOVIEDATE'];
$show_time = $_GET['MOVIETIME'];
$show_grading = $_GET['MOVIEGRADING'];
$show_cinema=$_GET['STUDIOid'];

//傳值 => movie_I_want_id
$sql_movie_I_want_id = "SELECT `movie_I_want_id` FROM `movie_I_want` WHERE `movie_id`='$show_id' && `movie_watching_date`= '$show_date' && `screening_id` IN (SELECT `screening_id` FROM `screening` WHERE `screening_time`='$show_time') ";
$result_movie_I_want_id = mysqli_query($link,$sql_movie_I_want_id);
if (mysqli_num_rows($result_movie_I_want_id)>0) {
    foreach($result_movie_I_want_id as $row_movie_I_want_id){}
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
    <title>訂票規定</title>
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
          <h5 style="position:absolute;top:110px;left:2%;color:royalblue;font-weight:bold;">一、訂票及取票規定</h5>
          <ol style="position:absolute;top:150px;">
               <ul>
                    <li>每筆訂票張數以 10 張為限。</li>
                    <li>請注意此交易金額將於購票步驟完成後，即刻於您的信用卡帳戶或儲值金帳戶中進行扣款。</li>
                    <li>完成付款後，請憑「訂票序號」至購票影城進行取票。</li>
                    <li>購票完成亦可至超商進行取票，但若交易內含餐飲品項，須至購票影城臨櫃領取電影票與餐點。</li>
               </ul>
          </ol>
          <h5 style="position:absolute;top:260px;left:2%;color:royalblue;font-weight:bold;">二、退換票規定</h5>
          <ol style="position:absolute;top:300px;">
               <ul>
                    <li>線上購票後若已領取電影票，因故無法如期觀影，請於開演前 20 分鐘持未使用之電影票與原訂購之信用卡親至觀影影城辦理退換票。已取票或取餐者，無法進行線上退款。</li>
                    <li>線上購票後若尚未領取電影票，因故無法如期觀影，可於威秀影城官網登入會員訂票紀錄中進行線上退票，電影票最遲應於影片開演2小時前完成線上退票程序。</li>
                    <li>電影票遺失恕不補發，亦無法辦理退換票。線上購票完成後退、換票，訂票手續費恕不退還，且不保證相同座位。</li>
                    <li>因天災或特殊事故取消電影放映時，請於購票場次7日內憑『未使用之原票券』至原購票影城櫃台辦理退換票，影城未營業期間均不收取手續費。</li>
                    <li>退、換票注意事項：儲值金付款，進行線上退款便可。</li>
                    <li>其餘未盡事項依影城現場公告為主。</li>
               </ul>
          </ol>
     </div>
     <div style="position:absolute;top:500px;left:45%;color:Black;font-weight:bold;">
          <input type="checkbox" id="read" name="read">
          <label for="read">我已閱讀並同意上述規定</label>
     </div>
     <div>
          <input type="button" name="Submit" value="確認訂票" class="btn btn-light" style="position:absolute; top:540px;left:55%" onclick="location.href='Payment2.php?STUDIOid=<?php echo $show_cinema?>&MOVIEid=<?php echo $show_id?>&MOVIEDATE=<?php echo $show_date?>&MOVIEGRADING=<?php echo $show_grading?>&MOVIETIME=<?php echo $show_time?>&MOVIEIWANT_id=<?php echo $row_movie_I_want_id['movie_I_want_id']?>'">
     </div>
     <div>
          <input type="button" name="Submit" value="返回確認訂單" class="btn btn-light" style="position:absolute; top:540px;left:38%" onclick="location.href='BookingList.php?STUDIOid=<?php echo $show_cinema?>MOVIEid=<?php echo $show_id?>&MOVIEDATE=<?php echo $show_date?>&MOVIEGRADING=<?php echo $show_grading?>&MOVIETIME=<?php echo $show_time?>&MOVIEIWANT_id=<?php echo $row_movie_I_want_id['movie_I_want_id']?>'">
     </div>
</body>
</html>