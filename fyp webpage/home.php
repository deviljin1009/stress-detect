<?php
include_once("include/config.php");
include_once("include/session.php");

?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="EXTRESS">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    
</head>

<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:100');
@import url('https://css.gg/profile.css');
@import url('https://css.gg/copyright.css');
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

@property --rotate {
  syntax: "<angle>";
  initial-value: 132deg;
  inherits: false;
}

body, html{
    margin: 0;
    padding: 0;
    font-family: 'Montserrat',sans-serif;
}

.container1{
    font-family: 'Montserrat',sans-serif;
    width: 100%;
    height: 850px;
    background-image:url("https://images.pexels.com/photos/2174623/pexels-photo-2174623.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50% 50%;
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

a.navigation{
    margin-right: 5%;
    text-decoration: none;
    color: rgb(255, 255, 255);
    cursor: pointer;
    font-weight: bold;
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
    border-width: 0;
}

.Title{
    font-size: 20px;
    font-weight: bold;
    text-transform: capitalize;
    padding-top: 10%;
    margin-left: 35px;
    width: fit-content;
}

.Description{
    font-size: 15px;
    font-weight: bold;
    text-transform: capitalize;
    width: 44%;
    text-align: justify;
    padding-top: 20px;
    margin-left: 35px;
}

a{
    color:rgb(0, 0, 0);
    text-decoration: none;
    font-weight: bold;
}

.Link a{
    color: rgb(51, 46, 46);
    text-decoration: none;
    position: absolute;
    top: 45%;
    left: 350px;
    transform: translate(-50%,-50%);
    z-index: 2;
}

.Link a:hover{
    color:rgb(0, 0, 0);
	font-size: large;
}

.cube{
	position: relative;
	z-index: 0;
}
.blur{
	position: absolute;
	filter: blur(20px);
	z-index: -1;
}
.cube,.blur{
	width: 120px;
	max-width: 130px;
	height: 40px;
	max-height: 50px;
	border-radius: 20px;
	display: flex;
	justify-content: center;
	align-items: center;
	overflow: hidden;
    top: 45%;
    position: absolute;
    left: 350px;
    transform: translate(-50%, -50%);
}
.cube::before,.blur::before{
	content: "";
	width: 300%;
	height: 300%;
	background: linear-gradient(
		rgb(97, 97, 97) 20%,
		transparent 45% 55%,
		#626163 80%
	);
	position: absolute;
	animation: animate 6s infinite linear;
}
.cube::after{
	content: "";
	background:rgba(0, 0, 0, 0);
	border-radius: 18px;
	position: absolute;
    
}
@keyframes animate{
	0%{
		transform: rotate(0deg);
	}
	100%{
		transform: rotate(360deg);
	}
}

.grid{
    padding-top: 3%;
    grid-template-rows: repeat(2, auto);
    width: 100%;
    height: 700px;
    grid-gap: 10px 10px;
}

.contain1{
    display:inline-flex;
    width: 100%;
}

.dividerTop{
    width: 100px;
    height: 2px;
    background-color: #ff497c;
    margin-bottom: 1.2rem;
    display: inline-block;
    position: absolute;
}
#dividerBottom{
    width: 100px;
    height: 2px;
    background-color: #ff497c;
    margin-top: 600px;
    display: inline-block;
    position: absolute;
    right: 3%;
}

.innerContainer1{
    background: #191c29;
    width: 30%;
    margin-left: 1.5%;
    border-radius: 8px;
    color: rgb(255, 255, 255);
    margin-top: 2%;
    
}
.innerContainer2{
    background: #191c29;
    width: 30%;
    margin-left: 3%;
    margin-right: 3%;
    border-radius: 8px;
    color: rgb(255, 255, 255);
    margin-top: 2%;
    
}
.innerContainer3{
    background: #191c29;
    width: 30%;
    margin-right: 1.5%;
    border-radius: 8px;
    color: rgb(255, 255, 255);
    margin-top: 2%;
    
}

.innerContainer1:hover{
    background: #fda870;
    transform: scale(1.05);
    transition: 1s;
}
.innerContainer2:hover{
    transform: scale(1.05);
    background: #219c9c;
    transition: 1s;
}
.innerContainer3:hover{
    transform: scale(1.05);
    background: #ff497c;
    transition: 1s;
}


.contain2{
    display:inline-flex;
    width: 100%;
    height: 200px;
}


.image1{
    width: 240px;
    height: 240px;
    background-image: url("https://idtxs3.imgix.net/si/40000/76/39.jpg?w=1200&h=627&fit=fill&bg=ffffff&border=0&q=50");
    background-position: 50% 50%;
    background-size: cover;
    margin: 8px auto 0;
    border-radius: 50% !important;
    margin-top: 40px;
}

.image2{
    width: 240px;
    height: 240px;
    background-image: url("https://i2.wp.com/www.sociograph.info/wp-content/uploads/2019/03/eye-4063134_1280.jpg?fit=1280%2C766&ssl=1");
    background-position: 50% 50%;
    background-size: cover;
    margin: 8px auto 0;
    border-radius: 50% !important;
    margin-top: 40px;
}

.image3{
    width: 240px;
    height: 240px;
    background-image: url("https://images.pexels.com/photos/551588/pexels-photo-551588.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
    background-position: 50% 50%;
    background-size: cover;
    margin: 8px auto 0;
    border-radius: 50% !important;
    margin-top: 40px;
}

.innerDescription{
    text-align: justify;
    padding-top: 40px;
    font-family: 'Montserrat',sans-serif;
    font-size: 16px;
    width:fit-content;
    padding-left: 15px;
    padding-right: 15px;
}

.innerButton{
    text-align: center;
    margin-top: 40px;
    align-items: center;
    margin-bottom: 40px;
    
}

.yellowButton{
    position: relative;
    color: white;
    font-family: 'Montserrat',sans-serif;
    font-weight: bold;
    transform: perspective(1px) translateZ(0);
    transition: all 0.3s ease-in-out ;
    border-width: 2px;
    border-color: #fda870;
    border-style: solid;
    border-radius: 2px;
    
}
.pinkButton{
    position: relative;
    color: white;
    font-family: 'Montserrat',sans-serif;
    font-weight: bold;
    transform: perspective(1px) translateZ(0);
    transition: all 0.3s ease-in-out ;
    border-width: 2px;
    border-color: #ff497c;
    border-style: solid;
    border-radius: 2px;
}
.cyanButton{
    position: relative;
    color: white;
    font-family: 'Montserrat',sans-serif;
    font-weight: bold;
    transform: perspective(1px) translateZ(0);
    transition: all 0.3s ease-in-out ;
    border-width: 2px;
    border-color: #219c9c;
    border-style: solid;
    border-radius: 2px;
    
}
.innerButton a.pinkButton{
    width: 150px;
    height: 30px;
}

.innerButton a.yellowButton:hover,.pinkButton:hover,a.cyanButton:hover{
    border-color: #191c29;
}

.footer{
    display: inline-flex;
    flex-direction: column;
    width: 100%;
}

.copyright{
    display: inline-block;
    text-align: center;
    margin-top: 3%;
    margin-bottom: 3%;
}

.smallicon{
    margin:3%;
    width: fit-content;
    height: fit-content;
    margin-right: 1%;
    margin-left: 40%;
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


@keyframes spin {
  0% {
    --rotate: 0deg;
  }
  100% {
    --rotate: 360deg;
  }
}

</style>

<body>

<div class="container1">
<?php 
    if(isset($_SESSION['id'])){
      include_once("include/navigation2.php");
    }
    else{
      include_once("include/navigation.php");
    }

?>
    

<div class="Title">Understanding your current stress level is the first step in taking control</div>
<div class="Description">Stress management is a wide spectrum of techniques and psychotherapies aimed at controlling a person's level of stress, especially chronic stress, usually for the purpose of and for the motive of improving everyday functioning. Stress produces numerous physical and mental symptoms which vary according to each individual's situational factors. These can include a decline in physical health as well as depression. The process of stress management is named as one of the keys to a happy and successful life in modern society. Life often delivers numerous demands that can be difficult to handle, but stress management provides a number of ways to manage anxiety and maintain overall well-being.</div>
<div class="cube"></div>
<div class="Link"> 
    <a href="include/detect.php">Get Started</a>
</div>
<div class="blur"></div>
</div>

<div class="grid">
        <div class="contain1">
            <div class="dividerTop"></div>
            <div class="innerContainer1">
                <div class="image3"></div>
                <div class="innerDescription">Stress is a feeling of emotional or physical tension. It can come from any event or thought that makes you feel frustrated, angry, or nervous. Stress is your body's reaction to a challenge or demand. In short bursts, stress can be positive, such as when it helps you avoid danger or meet a deadline.</div>
                <div class="innerButton">
                    <a class="yellowButton" href="stress.php">
                        Explore More
                    </a>
                </div>
            </div>
            <div class="innerContainer2">
                <div class="image2"></div>
                <div class="innerDescription">Eye tracking is a sensor technology that makes it possible for a computer or other device to know where a person is looking. An eye tracker can detect the presence, attention and focus of the user. It allows for unique insights into human behavior and facilitates natural user interfaces in a broad range of devices.</div>
                <div class="innerButton">
                    <a class="cyanButton" href="eyetracking.php">
                        Explore More
                    </a>
                </div>
            </div>
            <div class="innerContainer3">
                <div class="image1"></div>
                <div class="innerDescription">Eye tracking technology enables new forms of interactions in VR, with benefits to hardware manufacturers, software developers, end users and research professionals. VR is a simulated experience that can be similar to or completely different from the real world. Applications of virtual reality include entertainment, education and business.</div>
                <div class="innerButton">
                    <a class="pinkButton" href="vr.php">
                        Explore More
                    </a>
                </div>
            </div> 
            <div id="dividerBottom"></div>      
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