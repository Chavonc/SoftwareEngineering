<?php
require("conn.php");
session_start();
?>

<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <title>會員儲值</title>
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
                    <li class="nav-item"><a class="nav-link" href="TicketRecord.php">訂票記錄</a></li>
                    <li class="nav-item"><a class="nav-link" href="StoredValue.php">會員儲值</a></li>
                    <li class="nav-item"><a class="nav-link" href="MemberService1.html">會員服務</a></li>
                    <li class="nav-item"><a class="nav-link" href="Explaination.html">操作說明</a></li>
                    <li class="nav-item"><a class="nav-link" href="Logging.php">兌換點數</a></li>
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
    <?php
    $mail = $_SESSION['mail_login'];
    $password = $_SESSION['password_login'];

    $query = "SELECT * FROM member WHERE member_mail = '$mail' AND member_password = '$password'";
    $data = mysqli_query($link, $query);
    for ($i = 1; $i <= mysqli_num_rows($data); $i++) {
        $rs = mysqli_fetch_row($data);
    }

    ?>

    <form method="POST" action="StoredValue_php.php">
        <div class="row">
            <!-- <div align="center"><h4>會員儲值</h4></div> -->

            <div class="shadow-sm p-3 mb-5 bg-body rounded">

                <div class="card" style="vertical-align:middle;border-style: none;">
                    <br>

                    <div class="card-body">

                        <div class="row row-cols-default">
                            <div class="col-1">

                            </div>
                            <div class="col-10">
                                <lable>
                                    <h5>儲值資訊</h5>
                                </lable>
                                <hr>
                            </div>
                            <div class="col-1">

                            </div>

                        </div>

                        <div class="row row-cols-default">
                            <div class="col-1">

                            </div>
                            <div class="col-2">
                                <span class="card-text">目前餘額</span>
                            </div>
                            <div class="col-9">
                                <span>
                                    <p><?php echo $rs[3] ?></p>
                                </span>
                            </div>
                        </div>

                        <div class="row row-cols-default">
                            <div class="col-1">

                            </div>
                            <div class="col-2">
                                <span class="card-text">儲值金額</span>
                            </div>
                            <div class="col-2">
                                <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example" name="StoredMoney">
                                    <option selected>請選擇儲值金額</option>
                                    <option value="1000">儲值 NT$1000</option>
                                    <option value="2000">儲值 NT$2000</option>
                                    <option value="3000">儲值 NT$3000</option>
                                    <option value="4000">儲值 NT$4000</option>
                                    <option value="5000">儲值 NT$5000</option>

                                </select>

                            </div>
                        </div>
                        <br>
                        <div class="row row-cols-default">
                            <div class="col-1">

                            </div>
                            <div class="col-10">
                                <lable>
                                    <h5>付款人資訊</h5>
                                </lable>
                                <hr>
                            </div>
                            <div class="col-1">
                            </div>
                        </div>

                        <div class="row row-cols-default">
                            <div class="col-1">

                            </div>
                            <div class="col-2">
                                <span class="card-text">信箱</span>
                            </div>
                            <div class="col-9">
                                <span>
                                    <p><?php echo $rs[1] ?></p>
                                </span>
                            </div>
                        </div>

                        <div class="row row-cols-default">
                            <div class="col-1">

                            </div>
                            <div class="col-2">
                                <span class="card-text">電話</span>
                            </div>
                            <div class="col-9">
                                <span>
                                    <p><?php echo $rs[6] ?></p>
                                </span>
                            </div>
                        </div>
                        <br>
                        <div class="row row-cols-default">
                            <div class="col-1">

                            </div>
                            <div class="col-10">
                                <lable>
                                    <h5>信用卡資訊</h5>
                                </lable>
                                <hr>
                            </div>
                            <div class="col-1">

                            </div>
                        </div>

                        <div class="row row-cols-default">
                            <div class="col-1">

                            </div>
                            <div class="col-2">
                                <span class="card-text">信用卡卡號</span>
                            </div>
                            <div class="col-9">
                                <div class="form-input mb-4">
                                    <input type="text" name="ID" maxlength="16" id="card" placeholder="請輸入卡號" pattern="[0-9]*">
                                </div>
                            </div>
                        </div>

                        <div class="row row-cols-default">
                            <div class="col-1">

                            </div>
                            <div class="col-2">
                                <span class="card-text">卡片安全碼</span>
                            </div>
                            <div class="col-9">
                                <div class="form-input mb-4">
                                    <input type="text" name="ID" maxlength="3" id="card" placeholder="請輸入安全碼" pattern="[0-9]*">
                                </div>
                            </div>
                        </div>

                        <div class="row row-cols-default">
                            <div class="col-1">

                            </div>
                            <div class="col-2">
                                <span class="card-text">卡片到期日</span>
                            </div>
                            <div class="col-1">
                                <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                    <option selected>月份</option>
                                    <option value="1">01</option>
                                    <option value="2">02</option>
                                    <option value="3">03</option>
                                    <option value="4">04</option>
                                    <option value="5">05</option>
                                    <option value="5">06</option>
                                    <option value="5">07</option>
                                    <option value="5">08</option>
                                    <option value="5">09</option>
                                    <option value="5">10</option>
                                    <option value="5">11</option>
                                    <option value="5">12</option>

                                </select>
                            </div>
                            <div class="col-1">
                                <span>
                                    <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                                        <option selected>年份</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>

                                    </select></span>
                            </div>

                        </div>
                        <br>

                        <div class="submit" style="text-align:center">
                            <input type="submit" value="確認" class="btn btn-outline-primary button" style="width: 100px;">
                        </div>

                    </div>
                </div>
            </div>
    </form>
</body>

</html>