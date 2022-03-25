<?php
include_once("include/config.php");
include_once("include/session.php");

$qry = "SELECT * FROM `stresshistory`";
$result = $conn->query($qry);
$result->setFetchMode(PDO::FETCH_ASSOC);
$search=1;
?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Virtual Reality (VR)">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<style>

@import url('https://fonts.googleapis.com/css?family=Montserrat:100');
@import url('https://css.gg/profile.css');
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
@import url('https://css.gg/copyright.css');

body, html{
    margin: 0;
    padding: 0;
    scroll-behavior: smooth;
    font-family: 'Montserrat',sans-serif;
}

.view{
    background: #0a0a0a;
    height: 100vh;
    width: 100%;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background:linear-gradient(rgba(214, 214, 214, 0.6), rgba(0, 0, 0, 0.9)),  url("https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/5304eb5f-7e2c-4fee-85d4-38469f1623e8/d9q64rt-5f474f82-5670-4dd8-9d04-53e910165331.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzUzMDRlYjVmLTdlMmMtNGZlZS04NWQ0LTM4NDY5ZjE2MjNlOFwvZDlxNjRydC01ZjQ3NGY4Mi01NjcwLTRkZDgtOWQwNC01M2U5MTAxNjUzMzEuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.5kMnIwzxCr69-yaIvnYa_AP1lKW0XJxS2Q9yOOjFXgY");
    background-size: cover;
    background-position: center;
    z-index: 1;
    
}

.navbar {
    display: -webkit-flex;
    -webkit-flex-wrap: wrap;
    -webkit-align-items: center;
    -webkit-justify-content: space-between;
    width: 100%;
    height: 80px;
    position: fixed;
    background: #262527 ;
    opacity: 0.7;
}

.logo{
    padding-top: 40px;
    padding-bottom: 30px;
    padding-left: 16%;
    margin-left: 186;
    font-weight: bold;
    color: white;
    background-image: url("log.png");
    background-size: cover;
    background-position: 50% 50%;
}
    

.navigations{
    display:inline-flex;
    width: 650px;
    padding-top: 5px;
    height: 45px;
    align-items: center;
}
a{
    text-decoration: none;
    font-weight: bold;
}

a.navigation{
    margin-right: 5%;
    text-decoration: none;
    color: rgb(255, 255, 255);
    cursor: pointer;
}

a.navigation:hover{
    transform: scale(1.08);
}

.navigationButton{
    border: white;
    border-radius: 15px;
    border-width: 2px;
    border-style: solid;
    width: 80px;
    height: 30px;
    position: relative;
    margin-right: 5%;
    
}

a.login{
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    color: rgb(255, 255, 255);
}

.navigationButton:hover{
    background-color: rgb(37, 224, 102);
    border: rgb(37, 224, 102);
    transform: scale(1.08);
}

.tableview{
    width: 70%;
    height: 70%;
    border-radius: 5px;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    position: absolute;
}

.header{
    display: inline-flex;
    flex-direction: row;
    align-items: center;
    width: 100%;
}

.title{
    font-family: 'Montserrat',sans-serif;
    color: rgb(255, 255, 255);
    font-weight: bold;
    padding-bottom: 0.5%;
    margin-left: 2%;
    width: 50%;

}

.calendar{
    padding-bottom: 1%;
    margin-left: 50%;
    width: 50%;
}

form{
  display:inline-flex;
    flex-direction:row;
}

.calendar input[type = "date"]{
    border:0;
    background: none;
    display: block;
    text-align: center;
    border: 2px solid #faeacb;
    padding: 10px 5px;
    width: 150px;
    outline: none;
    color: rgb(255, 255, 255);
    border-radius: 24px;
    transition: 0.25s;
}

.calendar input[type = "submit"]{
    border:0;
    background: none;
    display: block;
    text-align: center;
    border: 2px solid #faeacb;
    padding: 10px 5px;
    width: 80px;
    outline: none;
    color: rgb(255, 255, 255);
    border-radius: 24px;
    transition: 0.25s;
    margin-left:2%;
}

.calendar input[type = "date"]:focus{
  border-color: #000000;
}

.calendar input[type = "submit"]:hover{
  background:#faeacb;
  cursor:pointer;
  color:black;
}

table{
    width: 100%;
    table-layout: fixed;
  }

  .tbl-header{
    background-color: rgba(0, 0, 0, 0.3);
    
   }
  .tbl-content{
    height:600px;
    overflow-x:auto;
    margin-top: 0px;
    border: 1px solid rgba(240, 234, 234, 0.3);
    background-color: rgba(138, 137, 137, 0.3);
  }

  .leftColumn{
      width : 15%
  }

  th{
    padding: 20px 15px;
    text-align: left;
    font-size: 14px;
    color: #fff;
    text-transform: uppercase;
  }
  td{
    padding: 15px;
    text-align: left;
    vertical-align:middle;
    font-size: 12px;
    color: #fff;
    border-bottom: solid 1px rgba(255,255,255,0.1);
    font-weight: bold;
  }

  .empty{
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    position: absolute;
    align-items:center;
    text-align:center;
    color:white;
    font-size:20px;
  }
  a.login2{
    text-decoration:none;
    display: inline-block;
    padding: 10px;
    width: 55px;
    border-radius: 10px;
    background-color: white;
    color: black;
  }
  a.login2:hover{
    background-color: rgb(45, 194, 97);
    color: white;
  }

  ::-webkit-scrollbar {
      width: 3px;
  } 
  ::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 3px rgba(252, 252, 252, 0.3); 
  } 
  ::-webkit-scrollbar-thumb {
      -webkit-box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.459); 
  }

  .footer{
    display: inline-flex;
    flex-direction: column;
    width: 100%;
    margin-top: 0%;
    background-color: #262527;
}

.copyright{
    display: inline-block;
    text-align: center;
    margin-top: 2%;
    margin-bottom: 1%;
}

.footerDesc {
    text-align: center;
    align-items: center;
    justify-content: center;
    vertical-align: middle;
    display: flex;
    font-weight: bold;
    color: white;
}

.social-btns .btn,
.social-btns .btn:before,
.social-btns .btn .fa {
  transition: all 0.35s;
  transition-timing-function: cubic-bezier(0.31, -0.105, 0.43, 1.59);
}
.social-btns .btn:before {
  top: 90%;
  left: -110%;
}
.social-btns .btn .fa {
  transform: scale(0.8);
}
.social-btns .btn.facebook:before {
  background-color: #3b5998;
}
.social-btns .btn.facebook .fa {
  color: #3b5998;
}
.social-btns .btn.twitter:before {
  background-color: #3cf;
}
.social-btns .btn.twitter .fa {
  color: #3cf;
}
.social-btns .btn.google:before {
  background-color: #dc4a38;
}
.social-btns .btn.google .fa {
  color: #dc4a38;
}
.social-btns .btn.dribbble:before {
  background-color: #f26798;
}
.social-btns .btn.dribbble .fa {
  color: #f26798;
}
.social-btns .btn.skype:before {
  background-color: #00aff0;
}
.social-btns .btn.skype .fa {
  color: #00aff0;
}
.social-btns .btn:focus:before,
.social-btns .btn:hover:before {
  top: -10%;
  left: -10%;
}
.social-btns .btn:focus .fa,
.social-btns .btn:hover .fa {
  color: #fff;
  transform: scale(1);
}
.social-btns {
  height: 45px;
  margin: auto;
  font-size: 0;
  text-align: center;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin-top: 2%;
}
.social-btns .btn {
  display: inline-block;
  background-color: #fff;
  width: 45px;
  height: 45px;
  line-height: 45px;
  margin: 0 10px;
  text-align: center;
  position: relative;
  overflow: hidden;
  border-radius: 28%;
  box-shadow: 0 5px 15px -5px rgba(0,0,0,0.1);
  opacity: 0.99;
}
.social-btns .btn:before {
  content: '';
  width: 120%;
  height: 120%;
  position: absolute;
  transform: rotate(45deg);
}
.social-btns .btn .fa {
  font-size: 38px;
  vertical-align: middle;
}

</style>

<body>

<?php 
    if(isset($_SESSION['id'])){
      include_once("include/navigation2.php");
    }
    else{
      include_once("include/navigation.php");
    }

?>
<div class="view">
<div class="tableview">
<div class="header">
<div class="title">Stress History</div>
<div class="calendar">
  <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <input type="date" name="date" required>
    <input type="submit" name="submit" value="Search">
  </form>
</div>
</div>


<div class="tbl-header">
    <table cellpadding="0" cellspacing="0" >
      <thead>
        <tr>
          <th class="leftColumn">Date</th>
          <th>Time</th>
          <th>Stress Level</th>
          <th>Method</th>
          <th>Eye Blinking Rate/minute</th>
          
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" >
      <tbody>

      <?php
      if(isset($_SESSION['id'])){
        $id = $_SESSION['id'];

        if(isset($_POST['submit'])){

          if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $search=null;
            $date=$_POST['date'];
            $postDate= date_create($date);
            $searchDate = date_format($postDate,"Y-m-d");
            $qry = "SELECT * FROM `stresshistory` WHERE `userID` = '$id' AND `date` = '$searchDate'";
            $result = $conn->query($qry);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            
            if($result){
            while ($row = $result->fetch()) {
              $date = $row['date'];
              $time = $row['time'];
              $stressLevel = $row['stressLevel'];
              $method = $row['method'];
              $eyeBlinkRate = $row['eyeBlinkRate'];
  
              echo "<tr>";
              echo "<td class=\"leftColumn\">$date</td>";
              echo "<td>$time</td>";
              echo "<td>$stressLevel</td>";
              echo "<td>$method</td>";
              echo "<td>$eyeBlinkRate</td>";
      }
    }
    else{
      echo "There is no record for this date.";
    }

          }
    }
    if(isset($search)){
        $qry = "SELECT * FROM `stresshistory` WHERE `userID` = $id";
        $result = $conn->query($qry);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        while ($row = $result->fetch()) {
            $date = $row['date'];
            $time = $row['time'];
            $stressLevel = $row['stressLevel'];
            $method = $row['method'];
            $eyeBlinkRate = $row['eyeBlinkRate'];

            echo "<tr>";
            echo "<td class=\"leftColumn\">$date</td>";
            echo "<td>$time</td>";
            echo "<td>$stressLevel</td>";
            echo "<td>$method</td>";
            echo "<td>$eyeBlinkRate</td>";
        }
    }
  }
  

  else{
    echo "<div class=\"empty\">Login to View Stress History";
    echo "<br><a class=\"login2\" href=\"login.php\">Login</a>";
    echo "</div>";
  }
?>
        
        
        </tbody>
        </table>
</div>
</div>
</div>

<div class="footer">
    <div class="social-btns">
        <a class="btn facebook" href="#"><i class="fa fa-facebook"></i></a>
        <a class="btn twitter" href="#"><i class="fa fa-twitter"></i></a>
        <a class="btn google" href="#"><i class="fa fa-google"></i></a>
        <a class="btn dribbble" href="#"><i class="fa fa-instagram"></i></i></a>
        <a class="btn skype" href="#"><i class="fa fa-skype"></i></a>
</div>
<div class="copyright">
    <div class="footerDesc">
        <i class="gg-copyright"></i> 
        &#160;&#160;Copyright 2021 EXTRESS - All Right Reserved
    </div>
    </div>

</div>

</body>