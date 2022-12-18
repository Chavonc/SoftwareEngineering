<?php
require("conn.php");
session_start();
?>
<!DOCTYPE html>
<html lang="zh-tw">

<head>
  <title>兌換點數</title>
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
    $query = "SELECT * FROM member WHERE member_mail = '$mail' AND member_password = '$password'"; //取member資料
    $data = mysqli_query($link, $query);
    for ($i = 1; $i <= mysqli_num_rows($data); $i++) {
      $rs = mysqli_fetch_row($data);
    }
    ?>
    <div class="row">
      <div class="col-1">
      </div>
      <div class="col-3">
        <div class="shadow-sm p-3 mb-5 bg-body rounded">
          <div class="card" style="vertical-align:middle;border-style: none;">
            <br>
            <div align="center">
              <h5>點數兌換</h5>
            </div>
            <div class="card-body">
              <p align="center">請選擇欲兌換的品項(點數兌換後，恕無法退換)</p>
              <hr>
              <div class="row row-cols-default" style="text-align:center">
                <div class="col">
                  <span class="card-text">iShow點數:</span>
                </div>
                <div class="col">
                  <span>
                    <?php
                    echo "<p>$rs[5]點</p>";
                    ?>
                  </span>
                </div>
              </div>
              <div class="row row-cols-default" style="text-align:center">
                <div class="col">
                  <span class="card-text">儲值金餘額:</span>
                </div>
                <div class="col">
                  <span>
                    <?php
                    echo "<p>$rs[3]元</p>";
                    ?>
                  </span>
                </div>
              </div>
              <div align="center">
                <h5>我的票卷</h5>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">名稱</th>
                    <th scope="col">數量</th>
                    <th scope="col">到期日</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $query2 = "SELECT exchange_item_id, exchange_item_period FROM point_exchange_record WHERE member_id = '$rs[0]' GROUP BY exchange_item_id"; //拿來輸出名稱、到期日
                  $data2 = mysqli_query($link, $query2);
                  $i = 0;
                  $j = 0;
                  while ($row = mysqli_fetch_row($data2)) {
                    $name_period[$i][$j] = $row[0]; //name_period拿來存名稱、到期日
                    $j++;
                    $name_period[$i][$j] = $row[1];
                    if ($j == 1) {
                      $i++;
                      $j = 0;
                    } //else {$j++ ;}
                  }
                  for ($j = 0; $j < mysqli_num_rows($data2); $j++) { //輸出
                    echo "<tr>";
                    $number = $j + 1;
                    echo "<th scope='row'> $number</th>";
                    $exchange_item_id = $name_period[$j][0];
                    $query3 = "SELECT exchange_item_name FROM exchange_item WHERE exchange_item_id = '$exchange_item_id'"; //取物品名字(名稱)
                    $data3 = mysqli_query($link, $query3);
                    for ($i = 1; $i <= mysqli_num_rows($data3); $i++) {
                      $rs3 = mysqli_fetch_row($data3);
                    }
                    echo "<td>";
                    echo $rs3[0]; //名稱
                    echo "</td>";
                    echo "<td>";
                    $query4 = "SELECT exchange_item_id, exchange_item_period FROM point_exchange_record WHERE member_id = '$rs[0]' AND exchange_item_id = '$exchange_item_id'"; //拿來輸出某物的數量
                    $data4 = mysqli_query($link, $query4);
                    for ($i = 1; $i <= mysqli_num_rows($data4); $i++) {
                      $rs4 = mysqli_fetch_row($data4);
                    }
                    $num = mysqli_num_rows($data4);
                    echo $num; //數量
                    echo "</td>";
                    echo "<td>";
                    echo $name_period[$j][1]; //到期日
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
      <div class="col-7">
        <div class="shadow-sm p-3 mb-5 bg-body rounded">
          <div class="card" style="vertical-align:middle;border-style: none;">
            <div class="card-body">
              <!-- 這裡是card起始第一行 -->
              <div class="row row-cols-default" style="text-align:center">
                <div class="col-4">
                  <span class="card-text">商品名稱:</span>
                  <span> <input type="text" class="form-control" placeholder="請輸入商品名稱" aria-label="Username" aria-describedby="addon-wrapping"></span>
                </div>
                <div class="col">
                  <span class="card-text">領取影城:</span>

                  <div class="input-group">
                    <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                      <option selected>選擇影城</option>
                      <?php
                      $query = "SELECT studio_name FROM studio";
                      $result = mysqli_query($link, $query);
                      $q = 0;
                      while ($row = mysqli_fetch_row($result)) {
                        $rs[$q] = $row[0];
                        $q = $q + 1;
                      }
                      for ($k = 0; $k < $q; $k++) {
                        echo "<option value='1'>$rs[$k]</option>";
                      }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="col-2">
                  <br>
                  <button class="btn btn-outline-primary" type="button">搜尋</button>
                </div>
              </div>
              <br>
              <!-- 這裡是card起始第二行 -->
              <?php
              $query = "SELECT exchange_item_name, point_needed FROM exchange_item";
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
              echo "<form method='POST' action='Logging_php.php'>";
              // echo "<form method='POST' action='Logging.php'>"; //no
              for ($k = 0; $k < $i; $k = $k) {
                echo "<div class='row row-cols-default' style='text-align:center'>";
                echo "<div class='col-4'>";
                echo "<div class='card'>";
                echo "<div class='card-body'>";
                echo "<img src='anya01.png' class='card-img-top' alt=''>";
                echo $array[$k][0];
                echo "<p> 兌換點數:";
                echo $array[$k][1];
                echo "</p>";
                echo "<p>庫存數量:999 </p>";
                if ($k == 0) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button0'>我要兌換 </button>";
                  $_SESSION['item_name0'] = $array[$k][0];
                }
                if ($k == 3) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button3'>我要兌換 </button>";
                  $_SESSION['item_name3'] = $array[$k][0];
                }
                if ($k == 6) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button6'>我要兌換 </button>";
                  $_SESSION['item_name6'] = $array[$k][0];
                }
                if ($k == 9) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button9'>我要兌換 </button>";
                  $_SESSION['item_name9'] = $array[$k][0];
                }
                if ($k == 12) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button12'>我要兌換 </button>";
                  $_SESSION['item_name12'] = $array[$k][0];
                }
                if ($k == 15) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button15'>我要兌換 </button>";
                  $_SESSION['item_name15'] = $array[$k][0];
                }
                if ($k == 18) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button18'>我要兌換 </button>";
                  $_SESSION['item_name18'] = $array[$k][0];
                }
                if ($k == 21) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button21'>我要兌換 </button>";
                  $_SESSION['item_name21'] = $array[$k][0];
                }
                if ($k == 24) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button24'>我要兌換 </button>";
                  $_SESSION['item_name24'] = $array[$k][0];
                }
                if ($k == 27) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button27'>我要兌換 </button>";
                  $_SESSION['item_name27'] = $array[$k][0];
                }
                if ($k == 30) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button30'>我要兌換 </button>";
                  $_SESSION['item_name30'] = $array[$k][0];
                }
                if ($k == 33) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button33'>我要兌換 </button>";
                  $_SESSION['item_name33'] = $array[$k][0];
                }
                if ($k == 36) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button36'>我要兌換 </button>";
                  $_SESSION['item_name36'] = $array[$k][0];
                }
                if ($k == 39) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button39'>我要兌換 </button>";
                  $_SESSION['item_name39'] = $array[$k][0];
                }
                if ($k == 42) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button42'>我要兌換 </button>";
                  $_SESSION['item_name42'] = $array[$k][0];
                }
                if ($k == 45) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button45'>我要兌換 </button>";
                  $_SESSION['item_name45'] = $array[$k][0];
                }
                if ($k == 48) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button48'>我要兌換 </button>";
                  $_SESSION['item_name48'] = $array[$k][0];
                }
                if ($k == 51) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button51'>我要兌換 </button>";
                  $_SESSION['item_name51'] = $array[$k][0];
                }
                if ($k == 54) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button54'>我要兌換 </button>";
                  $_SESSION['item_name54'] = $array[$k][0];
                }
                if ($k == 57) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button57'>我要兌換 </button>";
                  $_SESSION['item_name57'] = $array[$k][0];
                }
                if ($k == 60) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button60'>我要兌換 </button>";
                  $_SESSION['item_name60'] = $array[$k][0];
                }
                echo "</div>";
                echo "</div>";
                echo "<br>";
                echo "</div>";
                echo "<tr>";
                $k = $k + 1;

                echo "<div class='col-4'>";
                echo "<div class='card'>";
                echo "<div class='card-body'>";
                echo "<img src='anya02.png' class='card-img-top' alt=''>";
                echo $array[$k][0];
                echo "<p> 兌換點數:";
                echo $array[$k][1];
                echo "</p>";
                echo "<p>庫存數量:999 </p>";
                if ($k == 1) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button1'>我要兌換 </button>";
                  $_SESSION['item_name1'] = $array[$k][0];
                }
                if ($k == 4) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button4'>我要兌換 </button>";
                  $_SESSION['item_name4'] = $array[$k][0];
                }
                if ($k == 7) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button7'>我要兌換 </button>";
                  $_SESSION['item_name7'] = $array[$k][0];
                }
                if ($k == 10) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button10'>我要兌換 </button>";
                  $_SESSION['item_name10'] = $array[$k][0];
                }
                if ($k == 13) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button13'>我要兌換 </button>";
                  $_SESSION['item_name13'] = $array[$k][0];
                }
                if ($k == 16) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button16'>我要兌換 </button>";
                  $_SESSION['item_name16'] = $array[$k][0];
                }
                if ($k == 19) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button19'>我要兌換 </button>";
                  $_SESSION['item_name19'] = $array[$k][0];
                }
                if ($k == 22) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button22'>我要兌換 </button>";
                  $_SESSION['item_name22'] = $array[$k][0];
                }
                if ($k == 25) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button25'>我要兌換 </button>";
                  $_SESSION['item_name25'] = $array[$k][0];
                }
                if ($k == 28) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button28'>我要兌換 </button>";
                  $_SESSION['item_name28'] = $array[$k][0];
                }
                if ($k == 31) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button31'>我要兌換 </button>";
                  $_SESSION['item_name31'] = $array[$k][0];
                }
                if ($k == 34) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button34'>我要兌換 </button>";
                  $_SESSION['item_name34'] = $array[$k][0];
                }
                if ($k == 37) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button37'>我要兌換 </button>";
                  $_SESSION['item_name37'] = $array[$k][0];
                }
                if ($k == 40) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button40'>我要兌換 </button>";
                  $_SESSION['item_name40'] = $array[$k][0];
                }
                if ($k == 43) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button43'>我要兌換 </button>";
                  $_SESSION['item_name43'] = $array[$k][0];
                }
                if ($k == 46) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button46'>我要兌換 </button>";
                  $_SESSION['item_name46'] = $array[$k][0];
                }
                if ($k == 49) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button49'>我要兌換 </button>";
                  $_SESSION['item_name49'] = $array[$k][0];
                }
                if ($k == 52) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button52'>我要兌換 </button>";
                  $_SESSION['item_name52'] = $array[$k][0];
                }
                if ($k == 55) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button55'>我要兌換 </button>";
                  $_SESSION['item_name55'] = $array[$k][0];
                }
                if ($k == 58) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button58'>我要兌換 </button>";
                  $_SESSION['item_name58'] = $array[$k][0];
                }
                if ($k == 61) {
                  echo "<button class='btn btn-outline-primary' type='submit' name='button61'>我要兌換 </button>";
                  $_SESSION['item_name61'] = $array[$k][0];
                }
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "<tr>";
                $k = $k + 1;

                if ($k == $i) {
                  break;
                } else {
                  echo "<div class='col-4'>";
                  echo "<div class='card'>";
                  echo "<div class='card-body'>";
                  echo "<img src='anya03.png' class='card-img-top' alt=''>";
                  echo $array[$k][0];
                  echo "<p> 兌換點數:";
                  echo $array[$k][1];
                  echo "</p>";
                  echo "<p>庫存數量:999";
                  echo "</p>";
                  if ($k == 2) {
                    echo "<button class='btn btn-outline-primary' type='submit' name='button2'>我要兌換 </button>";
                    $_SESSION['item_name2'] = $array[$k][0];
                  }
                  if ($k == 5) {
                    echo "<button class='btn btn-outline-primary' type='submit' name='button5'>我要兌換 </button>";
                    $_SESSION['item_name5'] = $array[$k][0];
                  }
                  if ($k == 8) {
                    echo "<button class='btn btn-outline-primary' type='submit' name='button8'>我要兌換 </button>";
                    $_SESSION['item_name8'] = $array[$k][0];
                  }
                  if ($k == 11) {
                    echo "<button class='btn btn-outline-primary' type='submit' name='button11'>我要兌換 </button>";
                    $_SESSION['item_name11'] = $array[$k][0];
                  }
                  if ($k == 14) {
                    echo "<button class='btn btn-outline-primary' type='submit' name='button14'>我要兌換 </button>";
                    $_SESSION['item_name14'] = $array[$k][0];
                  }
                  if ($k == 17) {
                    echo "<button class='btn btn-outline-primary' type='submit' name='button17'>我要兌換 </button>";
                    $_SESSION['item_name17'] = $array[$k][0];
                  }
                  if ($k == 20) {
                    echo "<button class='btn btn-outline-primary' type='submit' name='button20'>我要兌換 </button>";
                    $_SESSION['item_name20'] = $array[$k][0];
                  }
                  if ($k == 23) {
                    echo "<button class='btn btn-outline-primary' type='submit' name='button23'>我要兌換 </button>";
                    $_SESSION['item_name23'] = $array[$k][0];
                  }
                  if ($k == 26) {
                    echo "<button class='btn btn-outline-primary' type='submit' name='button26'>我要兌換 </button>";
                    $_SESSION['item_name26'] = $array[$k][0];
                  }
                  if ($k == 29) {
                    echo "<button class='btn btn-outline-primary' type='submit' name='button29'>我要兌換 </button>";
                    $_SESSION['item_name29'] = $array[$k][0];
                  }
                  if ($k == 32) {
                    echo "<button class='btn btn-outline-primary' type='submit' name='button32'>我要兌換 </button>";
                    $_SESSION['item_name32'] = $array[$k][0];
                  }
                  if ($k == 35) {
                    echo "<button class='btn btn-outline-primary' type='submit' name='button35'>我要兌換 </button>";
                    $_SESSION['item_name35'] = $array[$k][0];
                  }
                  if ($k == 38) {
                    echo "<button class='btn btn-outline-primary' type='submit' name='button38'>我要兌換 </button>";
                    $_SESSION['item_name38'] = $array[$k][0];
                  }
                  if ($k == 41) {
                    echo "<button class='btn btn-outline-primary' type='submit' name='button41'>我要兌換 </button>";
                    $_SESSION['item_name41'] = $array[$k][0];
                  }
                  if ($k == 44) {
                    echo "<button class='btn btn-outline-primary' type='submit' name='button44'>我要兌換 </button>";
                    $_SESSION['item_name44'] = $array[$k][0];
                  }
                  if ($k == 47) {
                    echo "<button class='btn btn-outline-primary' type='submit' name='button47'>我要兌換 </button>";
                    $_SESSION['item_name47'] = $array[$k][0];
                  }
                  if ($k == 50) {
                    echo "<button class='btn btn-outline-primary' type='submit' name='button50'>我要兌換 </button>";
                    $_SESSION['item_name50'] = $array[$k][0];
                  }
                  if ($k == 53) {
                    echo "<button class='btn btn-outline-primary' type='submit' name='button53'>我要兌換 </button>";
                    $_SESSION['item_name53'] = $array[$k][0];
                  }
                  if ($k == 56) {
                    echo "<button class='btn btn-outline-primary' type='submit' name='button56'>我要兌換 </button>";
                    $_SESSION['item_name56'] = $array[$k][0];
                  }
                  if ($k == 59) {
                    echo "<button class='btn btn-outline-primary' type='submit' name='button59'>我要兌換 </button>";
                    $_SESSION['item_name59'] = $array[$k][0];
                  }
                  if ($k == 61) {
                    echo "<button class='btn btn-outline-primary' type='submit' name='button61'>我要兌換 </button>";
                    $_SESSION['item_name61'] = $array[$k][0];
                  }
                  echo "</div>";
                  echo "</div>";
                  echo "</div>";
                  echo "<tr>";
                  echo "</div>";
                  $k = $k + 1;
                }
              }
              echo "</form>";
              echo "</form>";
              echo "</tr>";
              ?>
              <!-- </div> -->
              <!-- 這裡是card結尾 -->
            </div>
          </div>
        </div>
      </div>
      <div class="col-1">

      </div>
    </div>


</body>

</html>