<?php
require("conn.php");
session_start();
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
  <div class="row">

    <div class="col-8">
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
          $query = "SELECT studio.studio_name, movie.movie_name, screening.screening_time, ticket_type.ticket_type_name, booking_list.ticket_amount FROM ((((booking_list INNER JOIN studio ON booking_list.studio_id=studio.studio_id) INNER JOIN ticket_type ON booking_list.ticket_type_id=ticket_type.ticket_type_id) INNER JOIN movie_i_want ON booking_list.movie_I_want_id=movie_I_want.movie_I_want_id) INNER JOIN screening ON movie_I_want.screening_id=screening.screening_id) INNER JOIN movie ON movie_I_want.movie_id=movie.movie_id WHERE booking_list.member_id='$rs[0]';";
          $result = mysqli_query($link, $query);
          $i = 0;
          $j = 0;
          while ($row = mysqli_fetch_row($result)) {
            $array[$i][$j] = $row[0];
            $j++;
            $array[$i][$j] = $row[1];
            $j++;
            $array[$i][$j] = $row[2];
            $j++;
            $array[$i][$j] = $row[3];
            $j++;
            $array[$i][$j] = $row[4];
            if ($j == 4) {
              $i++;
              $j = 0;
            } //else {$j++ ;}
          }
          ?>
          <div class="card-body">

            <div align="center">
              <h5>訂票歷史記錄</h5>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">影城</th>
                  <th scope="col">電影</th>
                  <th scope="col">場次</th>
                  <th scope="col">票種</th>
                  <th scope="col">張數</th>
                </tr>
              </thead>
              <tbody>
                <?php
                for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                  $studio_id = $array[$i][0];

                  echo "<tr>";
                  $number = $i + 1;
                  echo "<th scope='row'>$number</th>";
                  echo "<td>";
                  echo $array[$i][0];
                  echo "</td>";
                  echo "<td>";
                  echo $array[$i][1];
                  echo "</td>";
                  echo "<td>";
                  echo $array[$i][2];
                  echo "</td>";
                  echo "<td>";
                  echo $array[$i][3];
                  echo "</td>";
                  echo "<td>";
                  echo $array[$i][4];
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

  </div>
</body>

</html>