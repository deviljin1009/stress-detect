<?php
include_once("include/config.php");
include_once("include/session.php");

?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Stress">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:100');
@import url('https://css.gg/profile.css');
@import url('https://css.gg/bolt.css');
@import url('https://css.gg/danger.css');
@import url('https://css.gg/smile-mouth-open.css');
@import url('https://css.gg/thermostat.css');
@import url('https://css.gg/drop.css');
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
@import url('https://css.gg/copyright.css');



body, html{
    margin: 0;
    padding: 0;
    scroll-behavior: smooth;
}

.container1{
    font-family: 'Montserrat',sans-serif;
    width: 100%;
    height: 100%;
    text-align: center;
    align-items: center;
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

.div1{
    display: inline-flex;
    flex-direction: row;
    height: 700px;
    width: 100%;
    background-image: url("https://ideascale.com/wp-content/uploads/2018/06/yay-20326122-digital-1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 50% 50%;
    
}

.innerDiv1{
    margin-top: 10%;
    margin-left: 20%;
    margin-right: 20%;
    width: 60%;
    height: 55%;
    opacity: 0.8;
    background: rgb(228, 225, 219);
    border-radius: 10px;
    display: inline-flex;
    flex-direction: column;
    align-items: center;
    align-content: center;
    text-align: center;
    
}

.Title1{
    color: black;
    font-size: 30px;
    margin-top: 5%;
    font-weight: bold;
    opacity: 1;
}

.Description1{
    color: black;
    font-size: 16px;
    margin-top: 3%;
    justify-content: center;
    font-weight: 900;
    text-align: justify;
    width: 80%;
    margin-left: 10%;
    margin-right: 10%;
    line-height: 30px;
    opacity: 1;
}

#div2{
    display: inline-flex;
    flex-direction: row;
    height: 500px;
    width: 100%;
    background-color: #fce0ce;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 50% 50%;
}

.innerDiv2{
    display: inline-flex;
    flex-direction: column;
    height: 70%;
    background-color: white;
    text-align: center;
    align-items: center;
    margin-left: 7%;
    margin-top: 3%;
    border-radius: 10px;
    width: 40%;
}

.Title2{
    font-size: 20px;
    font-weight: bold;
    text-transform: capitalize;
    width: fit-content;
    letter-spacing: 0.55px;
    color: #000000;
    font-weight: bolder;
    margin-top: 3.5%;
}

.Description2{
    text-align: justify;
    margin-top: 2.5%;
    padding-left: 3%;
    padding-right: 3%;
    line-height: 25px;
    font-weight: bold;
}

.Picture1{
    margin-top: 3%;
    margin-left: 6%;
    width: 35%;
    height: 70%;
    background-image: url("http://www.clipartbest.com/cliparts/di6/XLo/di6XLoL7T.gif");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 50% 50%;
}

#div3{
    margin-right: 5%;
    margin-left: 6%;
    border-top-left-radius: 5px;
    background-image: rgba(128, 123, 122, 0.384);
}

.Title3{
    font-size: 30px;
    font-weight: bold;
    text-transform: capitalize;
    width: fit-content;
    letter-spacing: 0.55px;
    color: #000000;
    font-weight: bolder;
    text-align: center;
    margin-top: 3%;
    margin-left: 40%;
    margin-right: 40%;
    background-image: linear-gradient(to top, rgb(208, 173, 255), rgba(255, 255, 255, 0.5));
    background-repeat: no-repeat;
    background-position: 0% 10%;
    border-radius: 5px;
}
.innerContainerA{
    width: fit-content;
    margin-top: 3%;
    margin-left: 5%;
    margin-right: 5%;
    display: inline-flex;
    flex-direction: row;
}
.card1{
    background-image: linear-gradient(to bottom, rgb(255, 179, 200), rgb(255, 255, 255));
    background-repeat: no-repeat;
    background-position: 0% 50%;
    display: inline-flex;
    flex-direction: row;
    align-items: center;
    margin-right: 3%;
    width: 30%;
    margin-left: 2%;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}
.card2{
    background-image: linear-gradient(to bottom, rgb(163, 235, 253), rgb(255, 255, 255));
    background-repeat: no-repeat;
    background-position: 0% 50%;
    display: inline-flex;
    flex-direction: row;
    align-items: center;
    margin-right: 3%;
    width: 30%;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}
.card3{
    background-image: linear-gradient(to bottom, rgb(151, 255, 198), rgb(255, 255, 255));
    background-repeat: no-repeat;
    background-position: 50% 70%;
    display: inline-flex;
    flex-direction: row;
    align-items: center;
    width: 30%;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}
.card4{
    background-image: linear-gradient(to top, rgb(248, 204, 164), rgb(255, 255, 255));
    background-repeat: no-repeat;
    background-position: 0% 50%;
    display: inline-flex;
    flex-direction: row;
    align-items: center;
    margin-right: 3%;
    width: 30%;
    margin-left: 2%;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
}
.card5{
    background-image: linear-gradient(to top, rgb(164, 163, 253), rgb(255, 255, 255));
    background-repeat: no-repeat;
    background-position: 0% 50%;
    display: inline-flex;
    flex-direction: row;
    align-items: center;
    margin-right: 3%;
    width: 30%;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
}
.card6{
    background-image: linear-gradient(to top, rgb(255, 151, 151), rgb(255, 255, 255));
    background-repeat: no-repeat;
    background-position: 50% 70%;
    display: inline-flex;
    flex-direction: row;
    align-items: center;
    width: 30%;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
}
.smallIcon{
    margin:3%;
    width: fit-content;
    margin-right: 4%;
}
.smallDescription{
    margin-top: 3%;
    margin-bottom: 3%;
    margin-right: 3%;
    text-align: justify;
    align-items: center;
    vertical-align: center;
    font-weight: bold;
}

.button{
    border-radius: 5px;
    border-width: 2px;
    border-style: solid;
    height: 20%;
    margin-top: 4%;
    justify-content: center;
    position: relative;
    width: 14%;
    background: linear-gradient(to right, #fda870 50%, rgb(228, 225, 219) 50%);
    background-size: 200% 100%;
    background-position: right bottom;
    transition: all .5s ease-out;
    margin-left: 43%;
    margin-right: 43%;
}

a.link1{
    top:50%;
    left:50%;
    position: absolute;
    transform: translate(-50%, -50%);
    color: rgb(0, 0, 0);
    font-weight: bold;
    break-inside: auto;
    line-height: 20px;
}

.button:hover{
    background-position: left bottom;
    height :22%;
    transition: 1s;
    border-color: #fda870;
}

a.link1:hover{
    color: white;
    transition: 1s;
}

.footer{
    display: inline-flex;
    flex-direction: column;
    width: 100%;
    margin-top: 5%;
}

.copyright{
    display: inline-block;
    text-align: center;
    margin-top: 3%;
    margin-bottom: 3%;
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

    <div class=container1>
    <?php 
    if(isset($_SESSION['id'])){
      include_once("include/navigation2.php");
    }
    else{
      include_once("include/navigation.php");
    }

?>

    <div class="div1">
        <div class="innerDiv1">
        <div class="Title1">Stress</div>
        <div class="Description1">Stress is a response from our body towards external factors that will alter an existing equilibrium. There are two major elements for this definition, which is first, a tension which is presumably caused by some outer force pulling towards the system, and secondly, this tension will be treated as a threat to the normal equilibrium of the particular system. This tension is assumed to cause harm unless some processes can compensate or reduce the disequilibrium brought by the tension.
            <div class="button">
                <a class="link1" href="#div2">
                    Discover More
                </a>
            </div>
        </div>
    </div>
</div>
    
<div id="div2">
    <div class="innerDiv2">
        <div class="Title2">
            Response to Stress
        </div>
        <div class="Description2">
            As a response to stress, our eye behavior will be affected by the stress such as eye blinks pattern. Eye blinking can be divided into three different groups as spontaneous, reflex, and voluntary. Among these three, spontaneous blink is uniquely different compare to others as it can represent an information processing function. Humans tend to increase their spontaneous blink rate when there are stressful stimuli towards them. However, a decrease in spontaneous blink rate also has been found when humans are under stress when solving demanding tasks or exposed to external visual stimuli which indicates that spontaneous blink rate is reduced to maximize the amount of information received when perceiving the visual stimuli.
        </div>
    </div>
    <div class="Picture1">

    </div>

</div>

<div class="div3">
    <div class="Title3">Fun Facts About Stress</div>
        <div class="innerContainerA">
            <div class="card1">
                <div class="smallIcon">
                    <i class="gg-bolt"></i>
                </div>
                    <div class="smallDescription">
                        Stress is a natural reaction to a threatening situation and enables us to react quickly in the face of danger. It can also help to motivate us to make positive changes in our lives and get things done.
                    </div>
            </div>
            <div class="card2">
                <div class="smallIcon">
                    <i class="gg-danger"></i>
                </div>
                    <div class="smallDescription">
                        Stress has many different symptoms and not everybody will experience it in the same way. Some people are more affected by emotional symptoms such as worry, restlessness and irritability, while others have more physical symptoms such as headaches, muscle tension or digestive issues.
                    </div>
            </div>
            <div class="card3">
                <div class="smallIcon">
                    <i class="fa fa-medkit"></i>
                </div>
                    <div class="smallDescription">
                        Eating a healthy, balanced diet, taking regular exercise and using various relaxation techniques can all help to reduce stress and improve your physical and emotional well-being.
                    </div>
            </div>
        </div>
        <div class="innerContainerA">
            <div class="card4">
                <div class="smallIcon">
                    <i class="gg-smile-mouth-open"></i>
                </div>
                    <div class="smallDescription">
                        A certain type of stress, known as 'eustress,' is actually necessary and beneficial for a balanced and exciting life. Eustress is the type of stress you experience when you're riding a roller-coaster (if you enjoy fast rides), are playing a fun game, or are falling in love.
                    </div>
            </div>
            <div class="card5">
                <div class="smallIcon">
                    <i class="gg-thermostat"></i>
                </div>
                    <div class="smallDescription">
                        Stress can make you feel hot. This is caused by a rise in blood pressure. You may get hot in situations where you're nervous too, such as when you have to give a presentation. 
                    </div>
            </div>
            <div class="card6">
                <div class="smallIcon">
                    <i class="gg-drop"></i>
                </div>
                    <div class="smallDescription">
                        Being stressed can make you sweat. Stress-related sweat is usually a follow-up to excessive body heat from stress. You might sweat from your forehead, armpits, and groin area.
                    </div>
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
</div>

</body>