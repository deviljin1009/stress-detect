<?php
include_once("include/config.php");
include_once("include/session.php");
?>

<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:100');
@import url('https://css.gg/copy.css');
@import url('https://css.gg/bot.css');
@import url('https://css.gg/controller.css');
body{
    margin: 0;
    padding: 0;
    font-family: 'Montserrat', sans-serif;
    background: #a79a92;
  }

  .container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
  }

  .box{
    align-items: center;
    text-align: center;
    display: inline-flex;
    flex-direction: column;
    padding: 50px;
    border-radius:10px;
    background-color:#e7cccc;
  }
  .section1{
    display: inline-flex;
    flex-direction: column;
    margin-bottom: 5%;
    align-items: center;
    text-align: center;
  }
  .section2{
    display: inline-flex;
    flex-direction: column;
    margin-bottom: 5%;
    align-items: center;
    text-align: center;
  }
  .section3{
    display: inline-flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
  }
  

  .smallIcon{
    margin:3%;
    width: fit-content;
    
}

.smallDescription{
    margin-top: 2%;
    margin-bottom: 3%;
    text-align: justify;
    align-items: center;
    vertical-align: center;
    font-weight: bold;
    font-family: 'Montserrat', sans-serif;
}

a.select{
    padding:3%;
    text-decoration: none;
    color: rgb(255, 255, 255);
    display:inline-block;
    border-radius: 10px;
    background-color: white;
    color: black;
}

a.select:hover{
    transform: scale(1.08);
    background-color: #7CB9E8;
}


</style>

<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">

    <title>َLogin</title>

    
    <link rel="stylesheet" href="css/navigation.css">

    

  </head>

  <body>
  <?php 
      include_once("include/navigation2.php");
?>
    <div class ="container">
    <div class="box">
      <div class="section1">
    <div class="smallIcon">
      <i class="gg-copy"></i>
    </div>
    <div class="smallDescription">
      Eye Tracking Through Articles
    </div>
    <?php echo" <a class=\"select\" href=\"preInstruct.php?path=1\">Select</a>" ?>
</div>
<div class="section2">
    <div class="smallIcon">
      <i class="gg-bot"></i>
    </div>
    <div class="smallDescription">
      Eye Tracking Through Interaction 1
    </div>
    <?php echo" <a class=\"select\" href=\"preInstruct.php?path=2\">Select</a>" ?>
</div>
<div class="section3">
    <div class="smallIcon">
      <i class="gg-controller"></i>
    </div>
    <div class="smallDescription">
      Eye Tracking Through Interaction 2
    </div>
    <?php echo" <a class=\"select\" href=\"preInstruct.php?path=3\">Select</a>" ?>
</div>
    </div>
    </div>

  </body>


  
</html>