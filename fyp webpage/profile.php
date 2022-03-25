<?php
include_once("include/config.php");
include_once("include/session.php");

?>
<head>

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

.container{
    background: #0a0a0a;
    height: 100vh;
    width: 100%;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background:linear-gradient(rgb(228, 218, 218), rgba(189, 178, 178, 0.9)),  url("https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/0f57ce83-c7df-40bd-8332-d04ca17322f5/d1bed6i-b7bb32d0-89cf-49ae-8211-992c26e928cd.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzBmNTdjZTgzLWM3ZGYtNDBiZC04MzMyLWQwNGNhMTczMjJmNVwvZDFiZWQ2aS1iN2JiMzJkMC04OWNmLTQ5YWUtODIxMS05OTJjMjZlOTI4Y2QuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.jdcIqmb4wtFbR5yTXIwD1_jNLNYLDGNVQM4qtS29Ob8");
    background-size: cover;
    background-position: center;
    z-index: 1;
}

.profileCard{
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    width: 800px;
    height: 500px;
    border-radius: 10px;
    border: #0a0a0a;
    border-width: 10px;
    display: inline-flex;
    flex-direction: row;
    box-shadow: #9d95a5;
    background-color: aliceblue;
}

.left{
    display: inline-flex;
    flex-direction: column;
    margin-top: 8%;
    width: 40%;
    margin-left: 5%;
    align-items: center;
}

.icon{
    background-image: url("https://cdn.dribbble.com/users/1577045/screenshots/4914645/media/028d394ffb00cb7a4b2ef9915a384fd9.png?compress=1&resize=800x600&vertical=top");
    background-position: 50% 50%;
    background-repeat: no-repeat;
    background-size: cover;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    align-items: center;
}
.description{
    display: inline-flex;
    flex-direction: column;
    align-items: center;
}

text{
    font-family: 'Montserrat',sans-serif;
    font-weight: bold;
}

.name{
    text-transform:uppercase;
    margin-bottom: 3%;
    margin-top: 5%;
}

.right{
    margin-top: 8%;
    display: inline-flex;
    flex-direction: column;
    width: 60%;
}

.right text{
    margin-bottom: 2%;
}

.details{
    margin-bottom: 2%;
    font-family: 'Montserrat',sans-serif;
    font-weight: bold;
    border: #262527;
    border-style:groove;
    border-radius: 4px;
    border-width: 0.1px;
    width: 70%;
    padding-left: 3%;
    border-color: #bcaec9;
}

.edit{
    margin-top: 10%;
    margin-left: 61%;
}

.edit a{
    border:0;
    background: none;
    display: block;
    text-align: center;
    border: 2px solid #bcaec9;
    padding: 6px 1px;
    width: 60px;
    outline: none;
    color: rgb(0, 0, 0);
    border-radius: 24px;
    transition: 0.25s;
    font-size: 15px;
}

.edit a:hover{
    background-color: #bcaec9;
}

.footer{
    display: inline-flex;
    flex-direction: column;
    width: 100%;
    margin-top: 40%;
}

.copyright{
    display: inline-block;
    text-align: center;
    margin-top: 2%;
    margin-bottom: 2%;
}

.footerDesc {
    text-align: center;
    align-items: center;
    justify-content: center;
    vertical-align: middle;
    display: flex;
    font-weight: bold;
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

    <div class="cover">
    <div class="container">
        <div class="profileCard">
            <div class="left">
                <div class="icon"> </div>

                <?php
                    if(isset($_SESSION['id'])){
                        $id = $_SESSION['id'];
                        $qry = "SELECT * FROM `user` WHERE `id` = $id";
                        $result = $conn->query($qry);
                        $result->setFetchMode(PDO::FETCH_ASSOC);

                        while ($row = $result->fetch()) {
                            $username = $row['username'];
                            $email = $row['email'];
                            $gender = $row['gender'];
                            $height = $row['height'];
                            $weight = $row['weight'];
        }
      }
      else {
        $username = $email = $gender = $height = $weight = "Guest";
      }
?>


                 <div class="description">
                   <?php
                echo "<text class=\"name\">$username</text> ";
                echo "<text>$email</text> ";
                ?>

            </div>
            </div>

            <div class="right">
                <text>Username</text>
                <?php echo "<div class=\"details\">$username</div> ";?>
                <text>Email</text>
                <?php echo "<div class=\"details\">$email</div>";?>
                <text>Gender</text>
                <?php echo "<div class=\"details\">$gender</div> ";?>
                <text>Weight(kg)</text>
                <?php echo "<div class=\"details\">$weight</div> ";?>
                <text>Height(cm)</text>
                <?php echo "<div class=\"details\">$height</div>";?>
                

                <div class="edit">
                    <?php
                    if(isset($_SESSION['id'])){ 
                    echo "<a href=\"editUser.php\">Edit</a>";
                    }
                    else
                    echo "<a href=\"login.php\">Edit</a>";
                    ?>
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
    </div>

    


    </body>
    