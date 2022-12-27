<?php
// 載入db.php來連結資料庫
require("conn.php");
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <title>VieShow主頁</title>
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
    <div class="text">
        <p>
        <h5 class="h5" style="color:blue">訂票注意事項</h5>
        <p>
        <ol>
            <ul>
                <li>網絡預訂以電影播放日期為準。</li>
                <li>未滿2歲且不佔位之兒童無需購票。</li>
                <li>購票完成可至影城臨櫃取票及餐點。</li>
            </ul>
        </ol>
        </p>
        </p>
        <br>
        <br>
        <p>
        <h5 class="h5" style="color:blue">場次開放時間說明</h5>
        <p>
        <ol>
            <ul>
                <li>週五上映之電影，新場次於每週三中午12:00~下午18:00開放當週五至下週四之場次。</li>
                <li>週三上映之電影，新場次於每週一晚上20:00~22:00開放週三、週四之場次。</li>
                <li>週四上映之電影，新場次於每週二晚上20:00~22:00開放週四之場次。</li>
                <li>其他因預售活動或特殊假期、特殊開片日之電影，會另行公告場次開放時間。</li>
            </ul>
        </ol>
        </p>

        </p>

    </div>
</body>

</html>