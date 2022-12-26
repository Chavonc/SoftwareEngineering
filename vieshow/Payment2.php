<?php
// 載入db.php來連結資料庫
require("conn.php");
header('Content-Type: text/html; charset=utf-8');
session_start();
//傳值
$show_id = $_GET['MOVIEid'];
$show_date = $_GET['MOVIEDATE'];
$show_time = $_GET['MOVIETIME'];
$show_grading = $_GET['MOVIEGRADING'];

//傳值 => movie_I_want_id
$sql_movie_I_want_id = "SELECT `movie_I_want_id` FROM `movie_I_want` WHERE `movie_id`='$show_id' && `movie_watching_date`= '$show_date' && `screening_id` IN (SELECT `screening_id` FROM `screening` WHERE `screening_time`='$show_time') ";
$result_movie_I_want_id = mysqli_query($link, $sql_movie_I_want_id);
if (mysqli_num_rows($result_movie_I_want_id) > 0) {
    foreach ($result_movie_I_want_id as $row_movie_I_want_id) {
    }
}

//movie_name
$sql_1 = "SELECT `movie_name` FROM `movie` WHERE `movie_id`='$show_id' ";
$result_1 = mysqli_query($link, $sql_1);
if (mysqli_num_rows($result_1) > 0) {
    foreach ($result_1 as $row_1) {
    }
}

//選擇影城
$sql = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0001' ";
$result = mysqli_query($link, $sql);
if (mysqli_num_rows($result) > 0) {
    foreach ($result as $row1) {
    }
}
$sql2 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0002' ";
$result2 = mysqli_query($link, $sql2);
if (mysqli_num_rows($result2) > 0) {
    foreach ($result2 as $row2) {
    }
}
$sql3 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0003' ";
$result3 = mysqli_query($link, $sql3);
if (mysqli_num_rows($result3) > 0) {
    foreach ($result3 as $row3) {
    }
}
$sql4 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0004' ";
$result4 = mysqli_query($link, $sql4);
if (mysqli_num_rows($result4) > 0) {
    foreach ($result4 as $row4) {
    }
}
$sql5 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0005' ";
$result5 = mysqli_query($link, $sql5);
if (mysqli_num_rows($result5) > 0) {
    foreach ($result5 as $row5) {
    }
}
$sql6 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0006' ";
$result6 = mysqli_query($link, $sql6);
if (mysqli_num_rows($result6) > 0) {
    foreach ($result6 as $row6) {
    }
}
$sql7 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0007' ";
$result7 = mysqli_query($link, $sql7);
if (mysqli_num_rows($result7) > 0) {
    foreach ($result7 as $row7) {
    }
}
$sql8 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0008' ";
$result8 = mysqli_query($link, $sql8);
if (mysqli_num_rows($result8) > 0) {
    foreach ($result8 as $row8) {
    }
}
$sql9 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0009' ";
$result9 = mysqli_query($link, $sql9);
if (mysqli_num_rows($result9) > 0) {
    foreach ($result9 as $row9) {
    }
}
$sql10 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0010' ";
$result10 = mysqli_query($link, $sql10);
if (mysqli_num_rows($result10) > 0) {
    foreach ($result10 as $row10) {
    }
}
$sql11 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0011' ";
$result11 = mysqli_query($link, $sql11);
if (mysqli_num_rows($result11) > 0) {
    foreach ($result11 as $row11) {
    }
}
$sql12 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0012' ";
$result12 = mysqli_query($link, $sql12);
if (mysqli_num_rows($result12) > 0) {
    foreach ($result12 as $row12) {
    }
}
$sql13 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0013' ";
$result13 = mysqli_query($link, $sql13);
if (mysqli_num_rows($result13) > 0) {
    foreach ($result13 as $row13) {
    }
}
$sql14 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0014' ";
$result14 = mysqli_query($link, $sql14);
if (mysqli_num_rows($result14) > 0) {
    foreach ($result14 as $row14) {
    }
}
$sql15 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0015' ";
$result15 = mysqli_query($link, $sql15);
if (mysqli_num_rows($result15) > 0) {
    foreach ($result15 as $row15) {
    }
}
$sql16 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0016' ";
$result16 = mysqli_query($link, $sql16);
if (mysqli_num_rows($result16) > 0) {
    foreach ($result16 as $row16) {
    }
}
$sql17 = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0017' ";
$result17 = mysqli_query($link, $sql17);
if (mysqli_num_rows($result17) > 0) {
    foreach ($result17 as $row17) {
    }
}
?>

<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <title>訂票付款</title>
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
                    <li class="nav-item" style=" cursor:pointer;"><a class="nav-link" href="Login.php">會員登入</a></li>
                    <li class="nav-item"><a class="nav-link" href="TicketRecord.php">訂票記錄</a></li>
                    <li class="nav-item"><a class="nav-link" href="StoredValue.php">會員儲值</a></li>
                    <li class="nav-item"><a class="nav-link" href="MemberService1.php">會員服務</a></li>
                    <li class="nav-item"><a class="nav-link" href="Explaination.html">操作說明</a></li>
                    <li class="nav-item"><a class="nav-link" href="Logging.php">兌換點數</a></li>
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
                                $table = "";
                                foreach ($result as $row) {
                                    foreach ($row as $key => $value) {
                                        if ($key == "studio_id") {
                                            $table .= '<option value=' . $value . '>';
                                        } else {
                                            $table .= $value . '</option>';
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
        <table style="position:absolute;top:150px;left:5%;width:240px;border: 1px solid black;">
            <tr style="background-color:steelblue;color:white;border: 1px solid black;">
                <th>
                    <center>本次訂購資訊</center>
                </th>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td><text>影城：</text>
                    <?php
                    $Test = $_SESSION['test'];
                    echo $Test;
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
                <td><text>票數：</text>2</td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td>
                    <text>使用者訂購資料(資料庫)</text>
                </td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td style="text-align:left">
                    <text>總計：</text>（放目前統計的金額）
                </td>
            </tr>
        </table>
    </div>
    <div>
        <table style="position:absolute;top:150px;left:30%;width:240px;border: 1px solid black;">
            <tr style="background-color:steelblue;color:white;border: 1px solid black;">
                <th>
                    <center>付款人資訊</center>
                </th>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td>電子信箱：</td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td>tester@gmail.com(資料庫)</td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td>會員卡卡號：</td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td>9552101110467948(資料庫)</td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td>會員卡密碼：</td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td><input name="myfield" type="password" placeholder="請輸入8位數字密碼"></td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td></td>
            </tr>
        </table>
    </div>
    <div>
        <table style="position:absolute;top:150px;left:60%;width:240px;border: 1px solid black;">
            <tr style="background-color:steelblue;color:white;border: 1px solid black;">
                <th>
                    <center>電子發票開立方式</center>
                </th>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>
            <tr style="background-color:#D6FFFF;">
                <td></td>
            </tr>

        </table>
    </div>
    <input type="button" style="position:absolute;top:180px;right:34%;" value="歸戶" onclick="btn1()">
    <input type="button" style="position:absolute;top:180px;right:27%;" value="捐贈" onclick="btn2()">
    <input type="button" style="position:absolute;top:180px;right:20%;" value="紙本" onclick="btn3()">
    <div id="show1" style="position:absolute;top:220px;left:61%;display:none;">
        個人載具&nbsp;&nbsp;<input name="myfield" type="text" placeholder="請輸入手機條碼" style="width:150px;">
    </div>
    <div id="show2" style="position:absolute;top:220px;left:61%;display:none;">
        愛心捐贈&nbsp;&nbsp;<input name="myfield" type="text" placeholder="請輸入愛心碼" style="width:150px;">
    </div>
    <div id="show3" style="position:absolute;top:220px;left:61%;display:none;">
        統一編號&nbsp;&nbsp;<input name="myfield" type="text" placeholder="非必填" style="width:150px;">
    </div>
    <script>
        function btn1() {
            document.getElementById('show1').style.display = 'block';
            document.getElementById('show2').style.display = 'none';
            document.getElementById('show3').style.display = 'none';
        }

        function btn2() {
            document.getElementById('show1').style.display = 'none';
            document.getElementById('show2').style.display = 'block';
            document.getElementById('show3').style.display = 'none';
        }

        function btn3() {
            document.getElementById('show1').style.display = 'none';
            document.getElementById('show2').style.display = 'none';
            document.getElementById('show3').style.display = 'block';
        }
    </script>
    <div>
        <table style="position:absolute;top:380px;left:5%;width:500px;border: 1px solid black;">
            <tr style="background-color:steelblue;color:white;border: 1px solid black;">
                <th>
                    <center>線上購票付款政策</center>
                </th>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td>1. 請注意此交易金額將於購票步驟完成後，即刻於您的信用卡帳戶中進行線上付款，或儲值金帳戶中進行扣款。</td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td>2. 線上購票後若尚未領取電影票，因故無法如期觀影，可於影片開演2小時前進行線上退款；使用儲值金付款者，則是完成退款後金額將歸還儲值金帳戶。</td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td>3. 線上購票後若已領取電影票，因故無法如期觀影，請於開演前 20 分鐘持未使用之電影票與原訂購之信用卡、iShow卡等，親至觀影影城辦理退換票。已取票或取餐者，無法進行線上退款。</td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td>4. 電影票遺失恕不補發，亦無法辦理退換票。線上購票完成後退、換票，訂票手續費恕不退還，且不保證相同座位。</td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td>5. 因天災或特殊事故取消電影放映時，請於購票場次7日內至原購票影城櫃台辦理退換票，影城未營業期間均不收取手續費。</td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td>6. 依統一發票使用辦法第4條第27款規定，電影票免開立統一發票。</td>
            </tr>
            <tr style="background-color:#D6FFFF;color:black">
                <td>7. 其餘未盡事項依影城現場公告為主。</td>
            </tr>
        </table>
    </div>
    <div>
        <table style="position:absolute;top:380px;left:60%;width:240px;border: 1px solid black;">
            <tr style="background-color:steelblue;color:white;border: 1px solid black;">
                <th>
                    <center>付款金額</center>
                </th>
            </tr>
            <tr style="background-color:#D6FFFF;color:red;font-weight:bold;">
                <td>
                    <center>$680(總計金額,來自資料庫)</center>
                </td>
            </tr>
        </table>
    </div>
    <div style="position:absolute;top:500px;left:60%;color:black;font-size:larger;font-weight:bold;">
        <input type="checkbox" id="read2" name="read2">
        <label for="read2">我同意上述付款政策</label>
    </div>
    <div>
        <input type="button" name="Submit" value="確認付款" class="btn btn-light" style="position:absolute; top:540px;right:20%;background-color:green;color:white;font-weight:bold;" onclick="location.href='BookingSuccess.php?MOVIEid=<?php echo $show_id ?>&MOVIEDATE=<?php echo $show_date ?>&MOVIEGRADING=<?php echo $show_grading ?>&MOVIETIME=<?php echo $show_time ?>&MOVIEIWANT_id=<?php echo $row_movie_I_want_id['movie_I_want_id'] ?>'">
    </div>
    <div>
        <input type="button" name="Submit" value="取消付款" class="btn btn-light" style="position:absolute; top:540px;right:35%;background-color:red;color:white;font-weight:bold;" onclick="location.href='Home.php'">
    </div>
</body>

</html>