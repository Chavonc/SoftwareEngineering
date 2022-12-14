<?php
require("conn.php");
session_start();
?>

<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <title>會員服務</title>
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
    <!-- CDN的方式(直接連到網路) -->
</head>

<body>
    <div class="row">
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark" id="DeepBlueBar">
            <font size="2px">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="TicketRecord.html">VIESHOW</a></li>
                    <li class="nav-item" style=" cursor:pointer;"><a class="nav-link" href="Login.html">會員登入</a></li>
                    <li class="nav-item"><a class="nav-link" href="TicketRecord.html">訂票記錄</a></li>
                    <li class="nav-item"><a class="nav-link" href="StoredValue.html">會員儲值</a></li>
                    <li class="nav-item"><a class="nav-link" href="MemberService1.html">會員服務</a></li>
                    <li class="nav-item"><a class="nav-link" href="Explaination.html">操作說明</a></li>
                    <li class="nav-item"><a class="nav-link" href="Logging.html">兌換點數</a></li>
                </ul>
            </font>
        </nav>
        <nav class="navbar navbar-expand-sm bg-secondary navbar-dark" id="LightBlueBar">
            <font size="2px">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <select>
                            <option>請選擇影城</option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </li>
                    <li class="nav-item" color="black"><a class="nav-link" href="Cinema.html">影城資訊</a></li>
                    <li class="nav-item"><a class="nav-link" href="ClassExplain.html">級數說明</a></li>
                    <li class="nav-item"><a class="nav-link" href="TicketExplain.html">票種說明</a></li>
                    <li class="nav-item"><a class="nav-link" href="VersionExplain.html">版本介紹</a></li>
                </ul>
            </font>
        </nav>
    </div>
    <br>

    <br>
    <form method="POST" action="MemberService2_show_php.php">
        <div class="row">

            <div align="center">
                <h4>更改網路訂票帳號與密碼</h4>
            </div>
            <?php
            $identity = $_SESSION['identity'];

            $query = "SELECT * FROM member WHERE identity_number = '$identity'";
            $data = mysqli_query($link, $query);
            for ($i = 1; $i <= mysqli_num_rows($data); $i++) {
                $rs = mysqli_fetch_row($data);
            }

            ?>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">會員帳號</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $rs[1] ?>" name="mail">


            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">會員密碼</span>
                <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" value="<?php echo $rs[2] ?>" name="password">

            </div>

            <input type="submit" value="網路會員帳號密碼修改" class="btn btn-outline-primary button" style="width: default;">
        </div>
    </form>
</body>

</html>