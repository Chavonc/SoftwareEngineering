<?php
require_once 'db.php';
// http://localhost:8080/viewshow_php/ShowSeat.php
header('Content-Type: text/html; charset=utf-8');

//傳值
$show_id = $_GET['MOVIEid'];
$show_date = $_GET['MOVIEDATE'];
$show_time = $_GET['MOVIETIME'];


//movie_name
$sql_1 = "SELECT `movie_name` FROM `movie` WHERE `movie_id`='$show_id' ";
$result_1 = mysqli_query($link,$sql_1);
if (mysqli_num_rows($result_1)>0) {
    foreach($result_1 as $row_1){}
}

//電影時間
$sql_time = "SELECT `screening_time` FROM `screening` WHERE `screening_id` IN (SELECT `screening_id` FROM `movie_i_want` WHERE `movie_id`='$show_id' AND `movie_watching_date`='$show_date') ";
$result_time = mysqli_query($link,$sql_time);
if (mysqli_num_rows($result_time)>0) {
    foreach($result_time as $row_time){}
}




//電影日期
$sql_date0106 = "SELECT `movie_watching_date` FROM `movie_i_want` WHERE `movie_id`='$show_id' LIMIT 0, 1 ";
$result_date1 = mysqli_query($link,$sql_date0106);
if (mysqli_num_rows($result_date1)>0) {
    foreach($result_date1 as $row_date1){}
}
$sql_date0107 = "SELECT `movie_watching_date` FROM `movie_i_want` WHERE `movie_id`='$show_id' LIMIT 2, 1 ";
$result_date2 = mysqli_query($link,$sql_date0107);
if (mysqli_num_rows($result_date2)>0) {
    foreach($result_date2 as $row_date2){}
}
$sql_date0108 = "SELECT `movie_watching_date` FROM `movie_i_want` WHERE `movie_id`='$show_id' LIMIT 4, 1 ";
$result_date3 = mysqli_query($link,$sql_date0108);
if (mysqli_num_rows($result_date3)>0) {
    foreach($result_date3 as $row_date3){}
}

//電影時間
$sql_time11 = "SELECT `screening_time` FROM `screening` WHERE `screening_id` IN (SELECT `screening_id` FROM `movie_i_want` WHERE `movie_id`='$show_id' AND `movie_watching_date`='$show_date') LIMIT 0, 1 ";
$result_time11 = mysqli_query($link,$sql_time11);
if (mysqli_num_rows($result_time11)>0) {
    foreach($result_time11 as $row_time11){}
}
$sql_time12 = "SELECT `screening_time` FROM `screening` WHERE `screening_id` IN (SELECT `screening_id` FROM `movie_i_want` WHERE `movie_id`='$show_id' AND `movie_watching_date`='$show_date') LIMIT 1, 2 ";
$result_time12 = mysqli_query($link,$sql_time12);
if (mysqli_num_rows($result_time12)>0) {
    foreach($result_time12 as $row_time12){}
}
$sql_time21 = "SELECT `screening_time` FROM `screening` WHERE `screening_id` IN (SELECT `screening_id` FROM `movie_i_want` WHERE `movie_id`='$show_id' AND `movie_watching_date`='$show_date') LIMIT 0, 1 ";
$result_time21 = mysqli_query($link,$sql_time21);
if (mysqli_num_rows($result_time21)>0) {
    foreach($result_time21 as $row_time21){}
}
$sql_time22 = "SELECT `screening_time` FROM `screening` WHERE `screening_id` IN (SELECT `screening_id` FROM `movie_i_want` WHERE `movie_id`='$show_id' AND `movie_watching_date`='$show_date') LIMIT 1, 2 ";
$result_time22 = mysqli_query($link,$sql_time22);
if (mysqli_num_rows($result_time22)>0) {
    foreach($result_time22 as $row_time22){}
}
$sql_time31 = "SELECT `screening_time` FROM `screening` WHERE `screening_id` IN (SELECT `screening_id` FROM `movie_i_want` WHERE `movie_id`='$show_id' AND `movie_watching_date`='$show_date') LIMIT 0, 1 ";
$result_time31 = mysqli_query($link,$sql_time31);
if (mysqli_num_rows($result_time31)>0) {
    foreach($result_time31 as $row_time31){}
}
$sql_time32 = "SELECT `screening_time` FROM `screening` WHERE `screening_id` IN (SELECT `screening_id` FROM `movie_i_want` WHERE `movie_id`='$show_id' AND `movie_watching_date`='$show_date') LIMIT 1, 2 ";
$result_time32 = mysqli_query($link,$sql_time32);
if (mysqli_num_rows($result_time32)>0) {
    foreach($result_time32 as $row_time32){}
}


?>

<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <title>選擇電影</title>
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
     <input name="Submit" value="返回上一頁" class="btn btn-light" style="position:absolute; top:8px;;left:25%;color:red;" onclick="history.back()" >
     <img src="SeatPicture/1.png" style="position:absolute;top:150px;left:30%;width:350px;">
     <table style="position:absolute;top:60px;left:30%;">
          <tr>
               <td><?php echo $row_1['movie_name']?></td>
          </tr>
          <tr style="font-size:small;">
               <td>日期：<?php echo $_GET['MOVIEDATE']; ?></td>     
          </tr>
          <tr  style="font-size:small;">
               <td>時間：<?php echo $_GET['MOVIETIME']; ?></td>
          </tr>
     </table>
     <table style="position:absolute;top:60px;right:20%;">
          <tr>
               <th>已售座位：</th>
          </tr>
          <tr>
               <td>
                <!--sql有bug-->
                <?php 
                $sql_seat = "SELECT seat_id FROM seat WHERE movie_I_want_id IN (SELECT movie_I_want_id FROM movie_i_want WHERE movie_id='$show_id' AND movie_watching_date='$show_date' AND screening_id IN (SELECT screening_id FROM screening WHERE screening_time='10:50:00' )) AND seat_type <> 'unsold'";
                $seat_id = array();
                $result_seat = mysqli_query($link,$sql_seat);
                if($result_seat)
                {
                    if(mysqli_num_rows($result_seat)>0)
                    {
                        while($row_seat = mysqli_fetch_assoc($result_seat))
                        {
                            $seat_id[]=$row_seat;
                        }
                    }
                }
                if(!empty($result_seat))
                {
                    foreach($seat_id as $key => $row_seat)
                    {
                        echo $row_seat['seat_id'];
                    }
                }
                ?>
               </td>
          </tr>
     </table>
</body>
</html>

