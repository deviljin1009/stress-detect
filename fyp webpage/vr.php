<?php
include_once("include/config.php");
include_once("include/session.php");

?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Virtual Reality (VR)">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:100');
@import url('https://css.gg/profile.css');
@import url('https://css.gg/bot.css');
@import url('https://css.gg/band-aid.css');
@import url('https://css.gg/bulb.css');
@import url('https://css.gg/spinner-two.css');
@import url('https://css.gg/bolt.css');
@import url('https://css.gg/designmodo.css');
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
@import url('https://css.gg/copyright.css');

body, html{
    margin: 0;
    padding: 0;
    scroll-behavior: smooth;
    font-family: 'Montserrat',sans-serif;
}

.container1{
    font-family: 'Montserrat',sans-serif;
    width: 100%;
    height: 100%;
    
}
.div1{
    display: inline-flex;
    flex-direction: row;
    height: 700px;
}

.desc{
    display: inline-flex;
    flex-direction: column;
    width: 33%;
    margin-left: 8%;
    padding-top: 10%;
    margin-right: 10%;
    
}

.picture1{
    background-image:url("https://arpost.co/wp-content/uploads/2018/10/going-beyond-sights-and-sounds-latest-VR-trends.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50% 50%;
    width: 500px;
    height: 535px;
    flex: 2;
    margin-top: 10%;
    margin-right: 5%;
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

.Title{
    font-size: 20px;
    font-weight: bold;
    text-transform: capitalize;
    margin-left: 35px;
    width: fit-content;
    letter-spacing: 0.55px;
    color: #ff497c;
    font-weight: bolder;
}

.Description{
    font-size: 15px;
    font-weight: bold;
    width: fit-content;
    text-align: justify;
    padding-top: 40px;
    margin-left: 35px;
    letter-spacing: 2px;
    line-height: 23px;
    font-weight: bold;
    color: rgb(0, 0, 0);
}

.button{
    border-radius: 3px;
    border-width: 2px;
    border-style: solid;
    height: 40px;
    margin-top: 6%;
    margin-left: 40%;
    justify-content: center;
    position: relative;
    width: 100px;
    background: linear-gradient(to right, #ff497c 50%, white 50%);
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

.button:hover{
    background-position: left bottom;
    width: 120px;
    transition: 1s;
    border-color: #ff497c;
}

a.link1:hover{
    color: white;
    transition: 1s;
}

.div2{
    background-color: #ff497c;
    margin-right: 5%;
    margin-left: 6%;
    border-top-left-radius: 5px;
    display: inline-flex;
    flex-direction: row;
}
.picture2{
    background-image:url("https://media.istockphoto.com/photos/african-american-man-in-vr-glasses-watching-360-degree-video-with-picture-id1153003853?b=1&k=20&m=1153003853&s=170667a&w=0&h=jFdj394AhGPFrfk-D4HVCWOiamN7gkWZsp04h_E7xLI=");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50% 50%;
    width: 753px;
    height: 535px;
    flex: 2;
    
}

.desc2{
    display: inline-flex;
    flex-direction: column;
    width: 38.5%;
    padding-left: 7%;
    padding-top: 5%;
    margin-right: 4%;
}

.Title2{
    font-size: 20px;
    font-weight: bold;
    text-transform: capitalize;
    margin-left: 5px;
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
    color: rgb(255, 255, 255);
}

#div3{
    margin-right: 5%;
    margin-left: 6%;
    display: inline-flex;
    flex-direction: column;
}

.Title3{
    font-size: 30px;
    font-weight: bold;
    text-transform: capitalize;
    width: fit-content;
    letter-spacing: 0.55px;
    color: #ff497c;
    font-weight: bolder;
    text-align: center;
    margin-top: 3%;
    margin-left: 40%;
    margin-right: 40%;
    
}

.Description3{
    font-size: 15px;
    font-weight: bold;
    width: fit-content;
    text-align: justify;
    padding-top: 40px;
    margin-left: 5px;
    letter-spacing: 2px;
    line-height: 25px;
    font-weight: bold;
    color: #000000;
    margin-left: 4%;
    margin-right: 4%;
}

.innerContainer1{
    width: fit-content;
    margin-top: 3%;
    margin-left: 5%;
    margin-right: 5%;
    border-radius: 7px;
    border-width: 2px;
    border-style: solid;
    background-color: rgba(226, 225, 225, 0.856);
    border: white;
}
.innerContainer2{
    width: fit-content;
    margin-top: 3%;
    margin-left: 5%;
    margin-right: 5%;
    border-radius: 7px;
    border-width: 2px;
    border-style: solid;
    background-color: rgba(173, 173, 173, 0.856);
    border: white;
}
.innerContainer3{
    width: fit-content;
    margin-top: 3%;
    margin-left: 5%;
    margin-right: 5%;
    border-radius: 7px;
    border-width: 2px;
    border-style: solid;
    background-color: rgba(110, 110, 110, 0.856);
    border: white;
}
.innerContainer4{
    width: fit-content;
    margin-top: 3%;
    margin-left: 5%;
    margin-right: 5%;
    border-radius: 7px;
    border-width: 2px;
    border-style: solid;
    background-color: rgba(63, 62, 62, 0.856);
    border: white;
    margin-bottom: 3%;
}

.innerDescription1{
    margin-top: 2%;
    margin-bottom: 2%;
    margin-left: 3%;
    margin-right: 3%;
    line-height: 25px;
    font-weight: bold;
    text-align: justify;
    color: rgb(0, 0, 0);
}

.innerDescription2{
    margin-top: 2%;
    margin-bottom: 2%;
    margin-left: 3%;
    margin-right: 3%;
    line-height: 25px;
    font-weight: bold;
    text-align: justify;
    color: rgb(0, 0, 0);
}

.innerDescription3{
    margin-top: 2%;
    margin-bottom: 2%;
    margin-left: 3%;
    margin-right: 3%;
    line-height: 25px;
    font-weight: bold;
    text-align: justify;
    color: rgb(196, 196, 196);
}

.innerDescription4{
    margin-top: 2%;
    margin-bottom: 2%;
    margin-left: 3%;
    margin-right: 3%;
    line-height: 25px;
    font-weight: bold;
    text-align: justify;
    color: rgb(255, 255, 255);
}

#div4{
    margin-right: 5%;
    margin-left: 6%;
    border-top-left-radius: 5px;
    background-image: rgba(128, 123, 122, 0.384);
}

.Title4{
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

.div5{
    margin-top: 5%;
    display: inline-flex;
    flex-direction: row;
    width: 100%;
}

.video1{
    margin-left: 5%;
    width: 1000px;
    height: fit-content;
}

.innerDiv{
    display: inline-flex;
    flex-direction: column;
    align-items: center;
}

.Title5{
    font-weight: bold;
    font-size: 30px;
    text-align: center;
}

.videoDescription{
    margin-top: 3%;
    margin-left: 3%;
    margin-right: 3%;
    text-align: justify;
    line-height: 30px;
    font-weight: bold;
    color: #ff497c;
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
<?php 
    if(isset($_SESSION['id'])){
      include_once("include/navigation2.php");
    }
    else{
      include_once("include/navigation.php");
    }

?>
        <div class="div1">
        <div class="desc">
        <div class="Title">Discover new possibilities with eye tracking in VR</div>
        <div class="Description">Eye tracking technology enables new forms of interactions in VR, with benefits to hardware manufacturers, software developers, end users and research professionals. Virtual Reality (VR) is the use of computer technology to create a simulated environment. Unlike traditional user interfaces, VR places the user inside an experience. Instead of viewing a screen in front of them, users are immersed and able to interact with 3D worlds. By simulating as many senses as possible, such as vision, hearing, touch, even smell, the computer is transformed into a gatekeeper to this artificial world. The only limits to near-real VR experiences are the availability of content and cheap computing power.</div>
        <div class="button">
            <a class="link1" href="#div3">
                Discover More
            </a>
        </div>
        </div>
        <div class="picture1"></div>
        </div>
        <div class="div2">
            <div class="picture2"></div>
            <div class="desc2">
                <div class="Title2">Experience of VR</div>
                <div class="Description2">Currently, standard virtual reality systems use either virtual reality headsets or multi-projected environments to generate realistic images, sounds and other sensations that simulate a user's physical presence in a virtual environment. A person using virtual reality equipment is able to look around the artificial world, move around in it, and interact with virtual features or items. The effect is commonly created by VR headsets consisting of a head-mounted display with a small screen in front of the eyes, but can also be created through specially designed rooms with multiple large screens. Virtual reality typically incorporates auditory and video feedback, but may also allow other types of sensory and force feedback through haptic technology.</div>
            </div>

        </div>
        <div id="div3">
            <div class="Title3">History of VR</div>
            <div class="Description3">The exact origins of virtual reality are disputed, partly because of how difficult it has been to formulate a definition for the concept of an alternative existence. The development of perspective in Renaissance Europe created convincing depictions of spaces that did not exist, in what has been referred to as the "multiplying of artificial worlds". Other elements of virtual reality appeared as early as the 1860s. Antonin Artaud took the view that illusion was not distinct from reality, advocating that spectators at a play should suspend disbelief and regard the drama on stage as reality. The first references to the more modern concept of virtual reality came from science fiction.</div>
                <div class="innerContainer1"> 
                    <div class="innerDescription1">Sir Charles Wheatstone was the first to describe stereopsis in 1838 and was awarded the Royal Medal of the Royal Society in 1840 for his explanation of binocular vision, a research which led him to construct the stereoscope. The research demonstrated that the brain combines two photographs (one eye viewing each) of the same object taken from different points to make the image appear to have a sense of depth and immersion (3-dimensional). This technology enabled Wheatstone to create the earliest type of stereoscope. It used a pair of mirrors at 45 degree angles to the user's eyes, each reflecting a picture located off to the side.</div>
                </div>
                <div class="innerContainer2"> 
                    <div class="innerDescription2">Ivan Sutherland, a computer scientist, presented his vision of the Ultimate Display. The concept was of a virtual world viewed through an HMD which replicated reality so well that the user would not be able to differentiate from actual reality. This included the user being able to interact with objects. This concept featured computer hardware to form the virtual world and to keep it functioning in real-time. His paper is seen as the fundamental blueprint for VR. Sutherland, with his student Bob Sproull, created the first virtual reality HMD, named The Sword of Damocles. This head-mount connected to a computer rather than a camera and was quite primitive as it could only show simple virtual wire-frame shapes. These 3D models changed perspective when the user moved their head due to the tracking system. It was never developed beyond a lab project because it was too heavy for users to comfortably wear; they had to be strapped in because it was suspended from the ceiling.</div>
                </div>
                <div class="innerContainer3"> 
                    <div class="innerDescription3">In 1991, Antonio Medina, a NASA scientist, designed a VR system to drive the Mars robot rovers from Earth in supposed real-time despite signal delays between the planets. This system is called "Computer Simulated Teleoperation". The Virtuality Group launched Virtuality. These were VR arcade machines where gamers could play in a 3D gaming world. This was the first mass-produced VR entertainment system. A Virtuality pod featured VR headsets and real-time immersive stereoscopic 3D images. Some of the machines could be networked together for multi-player games. Eventually some of the very popular arcade games, like Pac-Man, had VR versions.</div>
                </div>
                <div class="innerContainer4">
                    <div class="innerDescription4">Facebook bought the Oculus VR company for $2 billion. This was a defining moment in VR's history because VR gained momentum rapidly after this. Virtual reality has significantly progressed and is now being used in a variety of ways, from providing immersive gaming experiences, to helping treat psychological disorders, to teaching new skills and even taking terminally ill people on virtual journeys. VR has many applications and with the rise in smartphone technology VR will be even more accessible.</div>
                </div>
            </div>

        <div class="div4">
            <div class="Title4">Fun Facts About VR</div>
                <div class="innerContainerA">
                    <div class="card1">
                        <div class="smallIcon">
                            <i class="gg-bulb"></i>
                        </div>
                            <div class="smallDescription">
                                There is no scientific evidence that Virtual Reality can provoke constant brain damage to adults and kids. There are only some symptoms such as dizziness, depression, and collapse that appear while the VR experience.
                            </div>
                    </div>
                    <div class="card2">
                        <div class="smallIcon">
                            <i class="gg-band-aid"></i>
                        </div>
                            <div class="smallDescription">
                                VR isn’t all fun and games, the technology is now used to treat many different disorders such as anxiety, PTSD, and has helped people recover from strokes.
                            </div>
                    </div>
                    <div class="card3">
                        <div class="smallIcon">
                            <i class="gg-bot"></i>
                        </div>
                            <div class="smallDescription">
                                VR is very costly, not everyone can afford it. Such facts about virtual reality have definitely appeared for a reason and have the right to exist. It would be naive to think and convince somebody that VR is dirt cheap.
                            </div>
                    </div>
                </div>
                <div class="innerContainerA">
                    <div class="card4">
                        <div class="smallIcon">
                            <i class="gg-bolt"></i>
                        </div>
                            <div class="smallDescription">
                                One of the most popular VR headsets on the market today includes PlayStation VR (PSVR). It was secretly developed by a small group of Sony engineers in a lab and supervisors didn't know about it until it was complete.
                            </div>
                    </div>
                    <div class="card5">
                        <div class="smallIcon">
                            <i class="gg-designmodo"></i>
                        </div>
                            <div class="smallDescription">
                                Virtual Reality has a cousin which is Augmented Reality (AR), it basically overlays virtual elements onto the real world in your surroundings. You can interact with these elements just like in VR. 
                            </div>
                    </div>
                    <div class="card6">
                        <div class="smallIcon">
                            <i class="gg-spinner-two"></i>
                        </div>
                            <div class="smallDescription">
                                One of the most intriguing facts about VR is that it's a work in progress. It is not complete or finished by any means and yet the technology has seen multitude of real world applications in a range of industries. Government and military are one of the largest investors in Virtual Reality.
                            </div>
                    </div>
                </div>
        </div>

        <div class="div5">
            <div class="video1">
                <video width="800px" height="400px" autoplay muted loop>
                    <source src="VR_Intro.mp4" type="video/mp4">
                </video>
            </div>
            <div class="innerDiv">
            <div class="Title5">VR in Gaming</div>
            <div class="videoDescription">Virtual reality gaming is the application of a three-dimensional (3-D) artificial environment to computer games. Virtual reality environments are created with VR software and presented to the user in such a way that they supercede the real-world environment, creating suspension of disbelief and helping the user experience the VR  environment as real. At its simplest, a VR game might involve a 3-D image that can be explored interactively on a computing device by manipulating keys, mouse or touchscreen. More sophisticated and immersive examples include VR headsets, wrap-around display screens and VR rooms augmented with wearable computers and sensory components, such as scents and haptics devices for tactile feedback.</div>
            
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

