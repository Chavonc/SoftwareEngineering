<?php
require("conn.php");
session_start();

$sql_name = "SELECT `studio_name` FROM `studio` WHERE `studio_id`='stu0004' ";
$result_name = mysqli_query($link, $sql_name);
if (mysqli_num_rows($result_name) > 0) {
    foreach ($result_name as $row_name) {
    }
}

$sql_info = "SELECT `studio_info` FROM `studio` WHERE `studio_id`='stu0004' ";
$result_info = mysqli_query($link, $sql_info);
if (mysqli_num_rows($result_info) > 0) {
    foreach ($result_info as $row_info) {
    }
}

$sql_phone = "SELECT `studio_phone` FROM `studio` WHERE `studio_id`='stu0004' ";
$result_phone = mysqli_query($link, $sql_phone);
if (mysqli_num_rows($result_phone) > 0) {
    foreach ($result_phone as $row_phone) {
    }
}

$sql_address = "SELECT `studio_address` FROM `studio` WHERE `studio_id`='stu0004' ";
$result_address = mysqli_query($link, $sql_address);
if (mysqli_num_rows($result_address) > 0) {
    foreach ($result_address as $row_address) {
    }
}

$sql_traffic = "SELECT `traffic_info` FROM `studio` WHERE `studio_id`='stu0004' ";
$result_traffic = mysqli_query($link, $sql_traffic);
if (mysqli_num_rows($result_traffic) > 0) {
    foreach ($result_traffic as $row_traffic) {
    }
}

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
<html lang="zh-en">

<head>
    <title>會員訂票記錄</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0, user-scalable = no">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- CDN的方式(直接連到網路) -->
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
    <div class="row">
        <div class="col-1"></div>
        <div class="col-6">
            <div class="shadow-sm p-3 mb-5 bg-body rounded">
                <div class="card" style="vertical-align:middle;border-style: none;">
                    <br>
                    <?php
                    $member_id = $_SESSION['member_id'];
                    $query_member_data = "SELECT * FROM member WHERE member_id = '$member_id'";
                    $member_data = mysqli_query($link, $query_member_data);
                    for ($i = 1; $i <= mysqli_num_rows($member_data); $i++) {
                        $rs = mysqli_fetch_row($member_data);
                    }
                    $query = "SELECT stored_value_record_date, stored_value_record_money FROM stored_value_record WHERE member_id = '$member_id'";
                    $result = mysqli_query($link, $query);
                    $i = 0;
                    $j = 0;
                    while ($row = mysqli_fetch_row($result)) {
                        $array[$i][$j] = $row[0];
                        $j++;
                        $array[$i][$j] = $row[1];
                        if ($j == 1) {
                            $i++;
                            $j = 0;
                        } //else {$j++ ;}
                    }
                    ?>
                    <div class="card-body">

                        <div align="center">
                            <h5>儲值歷史記錄</h5>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">交易時間</th>
                                    <th scope="col">儲值金額</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                                    echo "<tr>";
                                    $number = $i + 1;
                                    echo "<th scope='row'>$number</th>";
                                    echo "<td>";
                                    echo $array[$i][0];
                                    echo "</td>";
                                    echo "<td>";
                                    echo $array[$i][1];
                                    echo "</td>";
                                    echo "</tr>";
                                }

                                ?>

                            </tbody>
                        </table>


                    </div>
                </div>

            </div>
        </div>

        <div class="col-4">
            <!-- 分隔線 -->
            <br>
            <div class="card border-info mb-3" style="max-width:500px">
                <h5>
                    <div class="card-header" style="text-align:center">會員專區</div>
                </h5>
                <br>
                <div class="row row-cols-default">
                    <div class="col-1"></div>
                    <div class="col-6">
                        <?php
                        echo "<span class='card-text'>iShow點數:</span>";
                        echo "<span class='card-text'>$rs[5]</span>";
                        ?>
                    </div>
                    <div class="col-5">
                        <span><a href="TicketCointsRecord.php" class="btn btn-outline-primary button" style="width: default;">點數紀錄</a>
                    </div>
                </div>
                <br>
                <div class="row row-cols-default">
                    <div class="col-1"></div>
                    <div class="col-6">
                        <?php
                        echo "<span class='card-text'>儲值金額:</span>";
                        echo "<span class='card-text'>$rs[3]</span>";
                        ?>
                    </div>
                    <div class="col-5">
                        <span><a href="TicketStoreRecord.php" class="btn btn-outline-primary button" style="width: default;">儲值紀錄</a>
                    </div>
                </div>
                <br>
                <div class="row row-cols-default">
                    <div class="col-1"></div>
                    <div class="col-6">
                        <span class="card-text">會員期限:</span>
                        <span class="card-text">永久會員會員</span>
                    </div>
                    <div class="col-5">
                        <span><a href="TicketRecord.php" class="btn btn-outline-primary button" style="width: default;">訂票紀錄</a>
                    </div>
                </div>
                <br>
                <div class="row row-cols-default">
                    <div class="col-1"></div>
                    <div class="col-6">

                    </div>
                    <div class="col-5">
                        <span><a href="StoredValue.php" class="btn btn-outline-primary button" style="width: default;">我要儲值</a>
                    </div>
                </div>
                <br>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
</body>

</html>