<?php
require("db.php");
session_start();
?>
<!DOCTYPE html>
<html lang="zh-tw">

<head>
     <title>會員註冊</title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable = no">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" rel="stylesheet" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     <!-- CDN的方式(直接連到網路) -->
</head>

<body>
     <div class="row">
          <nav class="navbar navbar-expand-sm bg-primary navbar-dark" id="DeepBlueBar">
               <font size="2px">
                    <ul class="navbar-nav">
                         <li class="nav-item"><a class="nav-link" href="Home.php">VIESHOW</a></li>
                         <?php
                        if ((!isset($_SESSION['mail_login']) && !isset($_SESSION['password_login']))) 
                        {
                            echo "<li class='nav-item' style=' cursor:pointer;'><a class='nav-link' href='Login.php'>會員登入</a></li>";
                        }
                        else if ($_SESSION['mail_login'] == '' && $_SESSION['password_login'] == '') 
                        {
                            echo "<li class='nav-item'><a class='nav-link' href='Login.php'>會員登入</a></li>";
                        } 
                        else 
                        {
                            echo "<li class='nav-item'><a class='nav-link' href='Logout_php.php'>會員登出</a></li>";
                            echo "<li class='nav-item'><a class='nav-link' href='TicketRecord.php'>訂票記錄</a></li>";
                            echo "<li class='nav-item'><a class='nav-link' href='StoredValue.php'>會員儲值</a></li>";
                            echo "<li class='nav-item'><a class='nav-link' href='Logging.php'>兌換點數</a></li>";
                        }
                        //echo $_SESSION['mail_login'];//debug
                        ?>
                         <li class="nav-item"><a class="nav-link" href="MemberService1.php">會員服務</a></li>
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
                                   <input type="submit" value="查詢" style="position:absolute;top:8px;left:22%" class="btn btn-light">
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
          <div class="col-3">

          </div>
          <div class="col-6">
               <br />
               <br />
               <br />
               <br />
               <div class="shadow-lg p-3 mb-5 bg-body rounded">
                    <div class="card" style="vertical-align:middle;border-style: none;">
                         <br>
                         <div align="center">
                              <h3>會員註冊</h2>
                         </div>
                         <form method="POST" action="Signup_php.php">
                              <div class="card-body">
                                   <div class="form-input mb-3" style="text-align:center">
                                        <span><i class="bi bi-heart"></i></span><!-- icon -->
                                        <input type="text" name="name" placeholder="請輸入姓名">
                                   </div>
                                   <div class="form-input mb-3" style="text-align:center">
                                        <span><i class="bi bi-android"></i></span><!-- icon -->
                                        <input type="text" name="identity" placeholder="請輸入身分證">
                                   </div>
                                   <div class="form-input mb-3" style="text-align:center">
                                        <span><i class="bi bi-telephone"></i></span><!-- icon -->
                                        <input type="text" name="phone" placeholder="請輸入電話" length="10">
                                   </div>
                                   <div class="form-input mb-3" style="text-align:center">
                                        <span><i class="bi bi-balloon-fill"></i></span><!-- icon -->
                                        <input type="date" name="birthday" placeholder="請輸入生日">
                                   </div>

                                   <div class="form-input mb-3" style="text-align:center">
                                        <span><i class="bi bi-envelope"></i></span><!-- icon -->
                                        <input type="text" name="mail" placeholder="請輸入信箱">
                                   </div>

                                   <div class="form-input mb-3" style="text-align:center">
                                        <span><i class="bi bi-lock-fill"></i></span><!-- icon -->
                                        <input type="psaaword" name="password" placeholder="請輸入密碼">
                                   </div>

                                   <div>
                                        <a href="#" style="text-align:center"></a>
                                   </div>
                                   <br />
                                   <div class="submit" style="text-align:center">
                                        <button type="submit" class="btn btn-outline-primary button" style="width: 200px;">註冊</button>
                                   </div>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </div>
</body>

</html>