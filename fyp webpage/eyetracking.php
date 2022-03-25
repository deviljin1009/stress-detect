<?php
include_once("include/config.php");
include_once("include/session.php");

?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Eye Tracking Technology">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:100');
@import url('https://css.gg/profile.css');
@import url('https://css.gg/copyright.css');
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

body, html{
    margin: 0;
    padding: 0;
    font-family: 'Montserrat',sans-serif;
    scroll-behavior: smooth;
}

.container1{
    font-family: 'Montserrat',sans-serif;
    width: 100%;
    height: 650px;
    background-image:url("https://cdn.aarp.net/content/dam/aarp/health/conditions_treatments/2017/03/1140-eyes-health-aarp.jpg");
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

.div1{
    text-align: center;
    margin-left: 8%;
    display: inline-flex;
    flex-direction: column;
    height: 400px;
    margin-top: 8%;
    width: 500px;
    align-items: center;
    align-content: center;
    background: white;
}

.title1{
    font-size: 20px;
    font-weight: bold;
    text-transform: capitalize;
    padding-left: 10px;
    width: fit-content;
    letter-spacing: 0.55px;
    color: #000000;
    font-weight: bolder;
    margin-top: 3%;
    color: #219c9c;
}

.description1{
  text-align: justify;
  margin-top: 3%;
  padding-left: 10px;
  padding-right: 10px;
  line-height: 25px;
  font-weight: bold;
}

.button{
    border-radius: 3px;
    border-width: 2px;
    border-style: solid;
    height: 40px;
    margin-top: 6%;
    justify-content: center;
    position: relative;
    width: 100px;
    background: linear-gradient(to right, #219c9c 50%, white 50%);
    background-size: 200% 100%;
    background-position: right bottom;
    transition: all .5s ease-out;
}

a.link1{
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    color: rgb(0, 0, 0);
    font-weight: bold;
    
}

a.link1:hover{
    color: white;
    transition: 1s;
}

.button:hover{
    background-position: left bottom;
    width: 120px;
    transition: 1s;
    border-color: #219c9c;
}

a{
  font-weight: bold;
  text-decoration: none;
}

.div2{
    width: 100%;
    display: flex;
    margin-top: 4%;
    text-align: center;
    display: inline-flex;
    flex-direction: column;
    align-items: center;
}


.desc2{
    display: inline-flex;
    flex-direction: column;
    padding-left: 7%;
    padding-right: 7%;
    text-align: center;
    align-items: center;
    background: linear-gradient(to right, #000000 50%, white 50%);
    background-size: 200% 100%;
    background-position: right bottom;
    transition: all .5s ease-out;
}
.desc2:hover{
    background-position: left bottom;
    transition: 1s;
    border-color: #219c9c;
}
.desc2:hover .Title2{
   color: #68e7f8;
   transition: 0.75s;
}

.Title2{
    font-size: 25px;
    font-weight: bold;
    text-transform: capitalize;
    width: fit-content;
    letter-spacing: 0.55px;
    color: #000000;
    font-weight: bolder;
}

.Description2{
    font-size: 15px;
    font-weight: bold;
    width: fit-content;
    text-align: justify;
    padding-top: 40px;
    margin-left: 5px;
    letter-spacing: 2px;
    line-height: 25px;
    font-weight: bold;
    color: #60d4e4;
}

.containerA{
  display: inline-flex;
  flex-direction: row;
  margin-top: 3%;
  text-align: center;
  align-items: center;
  width: 100%;
}

.cardA{
  display: inline-flex;
  flex-direction: column;
  text-align: center;
  align-items: center;
  width: 50%;
  height: 70%;
}
.cardB{
  display: inline-flex;
  flex-direction: column;
  text-align: center;
  align-items: center;
  width: 50%;
  height: 70%;
}
.cardPic1{
  background-image: url("https://media.imotions.com/images/20190411124442/Eye-Tracking-screen-based.jpg");
  background-position: 50% 50%;
  background-repeat: no-repeat;
  background-size: cover;
  width: 400px;
  height: 400px;
  border-radius: 50%;
  margin: 4%;
  align-items: center;
}
.cardPic2{
  background-image: url("https://media.imotions.com/images/20190411124441/eye-tracking-glasses.jpg");
  background-position: 50% 50%;
  background-repeat: no-repeat;
  background-size: cover;
  width: 400px;
  height: 400px;
  border-radius: 50%;
  margin: 4%;
}
.imgText{
  transition: .5s ease;
  opacity: 0;
  text-align: center;
  font-size: 25px;
  color: rgb(105, 224, 253);
  font-weight: bold;
  margin-top: 45%;
}
.cardPic1:hover,.cardPic2:hover{
  opacity: 0.7;
}
.cardPic1:hover .imgText,.cardPic2:hover .imgText{
opacity: 1 !important;
}
.cardDescription{
  margin: 3%;
  margin-left: 6%;
  margin-right: 6%;
  text-align: justify;
  align-items: center;
  font-weight: bold;
  line-height: 25px;
  width:70%;
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

#div4{
    margin-right: 5%;
    margin-left: 6%;
    border-top-left-radius: 5px;
    background-image: rgba(128, 123, 122, 0.384);
}

.Title4{
    font-size: 26px;
    font-weight: bold;
    text-transform: capitalize;
    letter-spacing: 0.55px;
    color: #000000;
    font-weight: bolder;
    margin-top: 3%;
    background-image: linear-gradient(to top, rgb(208, 173, 255), rgba(255, 255, 255, 0.5));
    background-repeat: no-repeat;
    background-position: 0% 10%;
    margin-left: 40%;
    margin-right: 40%;
    width: fit-content;
    text-align: center;
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
    width: 10%;
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



        <div class="div1">
            <div class="title1">Definition of Eye Tracking</div>
            <div class=description1>Eye tracking refers to the process of measuring where we look, also known as our point of gaze. These measurements are carried out by an eye tracker, that records the position of the eyes and the movements they make. Near-infrared light is directed towards the center of the eyes (pupil), causing detectable reflections in both the pupil and the cornea (the outer-most optical element of the eye). These reflections – the vector between the cornea and the pupil – are tracked by an infrared camera. This is the optical tracking of corneal reflections, known as pupil center corneal reflection (PCCR).</div>
            <div class="button" >
              <a class="link1" href="#path">
                  Discover More
              </a>
          </div>
          </div>
          </div>

        <div class="div2" id="path">
          <div class="desc2">
            <div class="title2">Eye Trackers</div>
            <div class="description2">Eye-tracking devices construct a dataset by recording coordinates many times a second. That dataset can then be visualised and interpreted to expose behaviour that is otherwise invisible, including: what user sees and what they don't see, engaging or comprehensible an element that might had been, distracting, useful or contradictory an element might have been.</div>
          </div>
          <div class="containerA">
            <div class="cardA">
              <div class="cardPic1">
                <div class="imgText">
                  Screen-based Device
                </div>
              </div>
              <div class="cardDescription">Screen-based devices require respondents to sit in front of a monitor and interact with screen-based content. Although these devices track the eyes only within certain limits (the so-called headbox), the freedom of movement is still sufficiently large for respondents to be relatively unrestricted (at least in terms of a normal range of movement while watching screen-based stimuli).</div>
            </div>
            <div class="cardB">
              <div class="cardPic2">
                <div class="imgText">
                  Mobile Device
                </div>
              </div>
              <div class="cardDescription">As the name implies, mobile devices are fitted near the eyes (usually mounted onto eyeglass frames) and allow respondents to move freely. Clearly, this is a plus if your study design requires performing tasks in a natural environment. On the downside, the glasses could potentially shift during the recording if there is a large amount of movement (such as within sports).</div>
              </div>
          </div>
        </div>


          <div class="div4">
            <div class="Title4">Eye Tracking Application</div>
                <div class="innerContainerA">
                    <div class="card1">
                        <div class="smallIcon">
                            <i class="fa fa-flask"></i>
                        </div>
                            <div class="smallDescription">
                              Eye tracking can help you discover differences in information gathering and learning strategies. It can also help to identify social interaction patterns between teacher and students. Eye tracking is a great tool to study visual attention and social interaction in all learning settings.
                            </div>
                    </div>
                    <div class="card2">
                        <div class="smallIcon">
                            <i class="fa fa-medkit"></i>
                        </div>
                            <div class="smallDescription">
                              Eye tracking in combination with conventional research methods can be instrumental in diagnosing diseases such as Attention Deficit Hyperactivity Disorder (ADHD), Autism Spectrum Disorder (ASD), Obsessive Compulsive Disorder (OCD), Schizophrenia, Parkinson’s and Alzheimer’s disease.
                            </div>
                    </div>
                    <div class="card3">
                        <div class="smallIcon">
                            <i class="fa fa-gamepad"></i>
                        </div>
                            <div class="smallDescription">
                              Eye tracking has also been introduced to the gaming industry which now enables game developers to get better customer insights into the gaming experience. Such information is invaluable to the game designers as it allows them to modify the games for better user engagement and create features that push the boundaries of reality.
                            </div>
                    </div>
                </div>
                <div class="innerContainerA">
                  <div class="card4">
                      <div class="smallIcon">
                          <i class="fa fa-car"></i>
                      </div>
                          <div class="smallDescription">
                            Automotive research has embraced eye tracking glasses for a long time to gauge driver’s visual attention. It helps them to analyze responses both with respect to navigation and layout of dashboards. This insight can be critical to automobile companies in this highly competitive environment where all of them are striving for market leadership.
                          </div>
                  </div>
                  <div class="card5">
                      <div class="smallIcon">
                          <i class="fa fa-futbol-o"></i>
                      </div>
                          <div class="smallDescription">
                            Application of Eye tracking technology can better analyse an athlete’s individual performance by identifying a correlation between their area of focus, visual search patterns, hand-eye coordination and the individual’s actions during a game. It can allow us to compare strategies of expert athletes and novices by understanding their gaze patterns which in turn can lead to superior performance.
                          </div>
                  </div>
                  <div class="card6">
                      <div class="smallIcon">
                          <i class="fa fa-eye"></i>
                      </div>
                          <div class="smallDescription">
                            Currently, the field of Virtual Reality is plagued by the limitations of expressions. Integration of Eye Tracking with VR can help augment the research to help develop more real avatars which respond to users’ emotional reactions like blinking. It will significantly enhance the VR experience for customers for allowing avatars to reflect our eye movements.
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
        

</body>