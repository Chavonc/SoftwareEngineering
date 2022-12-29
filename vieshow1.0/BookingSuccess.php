<?php
// 載入db.php來連結資料庫
require_once 'db.php';
session_start();
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

//movie_name
$sql_1 = "SELECT `movie_name` FROM `movie` WHERE `movie_id`='$show_id' ";
$result_1 = mysqli_query($link,$sql_1);
if (mysqli_num_rows($result_1)>0) {
    foreach($result_1 as $row_1){}
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
    <title>清單</title>
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
        <nav class="navbar navbar-expand-sm bg-secondary navbar-dark" id="LightBlueBar">
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
                                                       $table="";
                                                       foreach($result as $row)
                                                       {
                                                        foreach($row as $key => $value)
                                                        {
                                                            if($key=="studio_id")
                                                            {
                                                                $table.='<option value='.$value.'>';
                                                            }
                                                            else{
                                                                $table.=$value.'</option>';
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
    <div>
        <h6 style="font-size:small;position:absolute;left:2%;color:gray">1.選擇票種 2.選擇餐飲 3.選擇座位 4.確認訂單 5.訂票成功</h6>
    </div>
    <div>
          <h4 style="font-size:large;position:absolute;left:40%;top:130px;color:Black;font-weight:bold;">訂票成功!</h4>
    </div>
    <div>
          <table style="position:absolute;left:15%;top:200px;width:600px;border: 1px solid black;">
               <tr style="background-color:steelblue;color:White;font-weight:bold;border: 1px solid black;">
                    <th><center>訂單內容</center></th>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>訂單序號：</text>QAQ001(資料庫random生)</td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td>
                        <text>影城：</text>
                        <?php 
                         $show_cinema=$_GET['STUDIOid'];
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
                    <td>
                        <text>票種：</text>
                        <?php
                            $tname1=$_SESSION['ticketname1'];
                            $tprice1=$_SESSION['ticketprice1'];
                            $ticket1=$_SESSION['ticket1'];
                            $tname2=$_SESSION['ticketname2'];
                            $tprice2=$_SESSION['ticketprice2'];
                            $ticket2=$_SESSION['ticket2'];
                            if(($ticket1!='0' && $ticket2=='0')||($ticket1!='0'))
                            {
                                echo $tname1;
                                echo '$'.$tprice1;
                                echo 'x'.$ticket1;
                                $_SESSION['t1money']=$tprice1*$ticket1;
                                $t1money=$_SESSION['t1money'];
                            }
                            else if(($ticket1=='0' && $ticket2=='0')||($ticket1=='0'))
                            {
                                $_SESSION['t1money']=0;
                                $t1money=$_SESSION['t1money'];
                                //echo $t1money;
                            }
                            echo '&nbsp;';
                            if(($ticket1=='0'&&$ticket2!='0')||($ticket2!='0'))
                            {
                                echo $tname2;
                                echo '$'.$tprice2;
                                echo 'x'.$ticket2;
                                $_SESSION['t2money']=$tprice2*$ticket2;
                                $t2money=$_SESSION['t2money'];
                            }
                            else//($ticket2=='0')
                            {
                                $_SESSION['t2money']=0;
                                $t2money=$_SESSION['t2money'];
                                //echo $t2money;
                            }

                        ?>
                </td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>飲料：</text>
                        <?php
                            $fname1=$_SESSION['foodname1'];
                            $fprice1=$_SESSION['foodprice1'];
                            $food1=$_SESSION['food1'];
                            $fname2=$_SESSION['foodname2'];
                            $fprice2=$_SESSION['foodprice2'];
                            $food2=$_SESSION['food2'];
                            $fname3=$_SESSION['foodname3'];
                            $fprice3=$_SESSION['foodprice3'];
                            $food3=$_SESSION['food3'];
                            if($food1!='0')
                            {
                                echo $fname1;
                                echo '$'.$fprice1;
                                echo 'x'.$food1;
                                $_SESSION['f1money']=$fprice1*$food1;
                                $f1money=$_SESSION['f1money'];
                            }
                            else//($food1=='0')
                            {
                                $_SESSION['f1money']=0;
                                $f1money=$_SESSION['f1money'];
                                //echo '$'.$f1money;
                            }
                            echo '&nbsp;';
                            if($food2!='0')
                            {
                                echo $fname2;
                                echo '$'.$fprice2;
                                echo 'x'.$food2;
                                $_SESSION['f2money']=$fprice2*$food2;
                                $f2money=$_SESSION['f2money'];
                            }
                            else //if($food2=='0')
                            {
                                $_SESSION['f2money']=0;
                                $f2money=$_SESSION['f2money'];
                                //echo $f2money;
                            }
                            echo '&nbsp;';
                            if($food3!='0')
                            {
                                echo $fname3;
                                echo '$'.$fprice3;
                                echo 'x'.$food3;
                                $_SESSION['f3money']=$fprice3*$food3;
                                $f3money=$_SESSION['f3money'];
                            }
                            else //if($food3=='0')
                            {
                                $_SESSION['f3money']=0;
                                $f3money=$_SESSION['f3money'];
                                //echo $f3money;
                            }
                        ?>
                    </td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>餐點：</text>
                        <?php
                            $fname4=$_SESSION['foodname4'];
                            $fprice4=$_SESSION['foodprice4'];
                            $food4=$_SESSION['food4'];
                            $fname5=$_SESSION['foodname5'];
                            $fprice5=$_SESSION['foodprice5'];
                            $food5=$_SESSION['food5'];
                            $fname6=$_SESSION['foodname6'];
                            $fprice6=$_SESSION['foodprice6'];
                            $food6=$_SESSION['food6'];
                            $fname7=$_SESSION['foodname7'];
                            $fprice7=$_SESSION['foodprice7'];
                            $food7=$_SESSION['food7'];
                            if($food4!='0')
                            {
                                echo $fname4;
                                echo '$'.$fprice4;
                                echo 'x'.$food4;
                                $_SESSION['f4money']=$fprice4*$food4;
                                $f4money=$_SESSION['f4money'];

                            }
                            else //if($food4=='0')
                            {
                                $_SESSION['f4money']=0;
                                $f4money=$_SESSION['f4money'];
                                //echo $f4money;
                            }
                            echo '&nbsp;';
                            if($food5!='0')
                            {
                                echo $fname5;
                                echo '$'.$fprice5;
                                echo 'x'.$food5;
                                $_SESSION['f5money']=$fprice5*$food5;
                                $f5money=$_SESSION['f5money'];
                            }
                            else //if($food5=='0')
                            {
                                $_SESSION['f5money']=0;
                                $f5money=$_SESSION['f5money'];
                                //echo $f5money;
                            }
                            echo '&nbsp;';
                            if($food6!='0')
                            {
                                echo $fname6;
                                echo '$'.$fprice6;
                                echo 'x'.$food6;
                                $_SESSION['f6money']=$fprice6*$food6;
                                $f6money=$_SESSION['f6money'];
                            }
                            else //if($food6=='0')
                            {
                                $_SESSION['f6money']=0;
                                $f6money=$_SESSION['f6money'];
                                //echo $f6money;
                            }
                            echo '&nbsp;';
                            if($food7!='0')
                            {
                                echo $fname7;
                                echo '$'.$fprice7;
                                echo 'x'.$food7;
                                $_SESSION['f7money']=$fprice7*$food7;
                                $f7money=$_SESSION['f7money'];
                            }
                            else //if($food7=='0')
                            {
                                $_SESSION['f7money']=0;
                                $f7money=$_SESSION['f7money'];
                                //echo $f7money;
                            }

                        ?>
                    </td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>座位：</text>
                        <?php
                        ?>
                </td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>總額：</text>
                        <?php
                            $_SESSION['totalmoney']=$t1money+$t2money+$f1money+$f2money+$f3money+$f4money+$f5money+$f6money+$f7money;
                            $totalmoney=$_SESSION['totalmoney'];
                            echo '$'.$totalmoney;
                        ?>
                </td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>付款方式：</text>儲值金</td>
               </tr>
          </table>
    </div>
    <div>
          <table style="position:absolute; top:150px;right:5%;width:240px;border: 1px solid black;">
               <tr style="background-color:steelblue;color:white;border: 1px solid black;">
                    <th><center>會員專區</center></th>
                    <th></th>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><img src="anya01.png" width="50px">
                        <text>name
                            <!--not finish yet-->
                            <?php
                              //$membermail=$_SESSION['mail'];
                              //$memberpassword=$_SESSION['password'];
                              //$sql="SELECT `member_id` FROM member WHERE member_mail='$mail' AND member_password='$password'";
                              //$result1 = mysqli_query($link, $sql);
                              ?>
                        </text>
                    </td>
                    <td></td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>會員卡卡號：</text>使用者會員卡卡號</td>
                    <td></td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td>
                        <text>iShow點數：

                        </text>30
                        <?php
                        ?>
                    </td>
                    <td></td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td>
                        <text>儲值金餘額：</text>
                        $705
                        <?php
                        ?>
                    </td>
                    <td></td>
               </tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black"><td></td></tr>
               <tr style="background-color:#D6FFFF;color:black">
                    <td><text>會籍期限：永久</text></td>
               </tr>
          </table>
     </div>
     <div>
          <input type="button" value="點數記錄" class="btn btn-light" onclick="location.href='TicketPointsRecord.php'" style="position:absolute;top:250px;right:6%;background-color:lightgreen;font-weight:bold;">
     </div>
     <div>
          <input type="button" value="儲值記錄" class="btn btn-light" onclick="location.href='StoredValue.php'" style="position:absolute;top:300px;right:6%;background-color:lightgreen;font-weight:bold;">
     </div>
     <div>
          <input type="button" value="前往訂票記錄" class="btn btn-light" onclick="location.href='TicketRecord.php'" style="position:absolute;top:150px;right:35%;font-weight:bold;background-color:steelblue;color:white;">
     </div>
</body>
</html>