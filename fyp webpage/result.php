<?php
include_once("include/config.php");
include_once("include/session.php");


$blinkPre= $_SESSION['blinks'] ;
$blinkAlt = $blinkPre*0.8;
$method = $_SESSION['method'];
$stress = $_SESSION['stress'];
$userID=$_SESSION['id'];

date_default_timezone_set("Asia/Kuala_Lumpur");
$date = date_create();
$currentDate = date_format($date,"Y-m-d H:i:s");
$currentTime = date("H:i:s");

if($method==1){
    $interaction="Article";
    $blinkPost = $blinkAlt/2;
}
else if($method==2){
    $interaction="Interaction1";
    $blinkPost = $blinkAlt*2;
}
else if($method==3){
    $interaction="Interaction2";
    $blinkPost = $blinkAlt*1.5;
}
else{
    $interaction="Error";
}


$sql = "INSERT INTO stresshistory(date,time,stressLevel,method,eyeBlinkRate,userID) VALUES('$currentDate','$currentTime','$stress','$interaction','$blinkPost','$userID')";
$conn->exec($sql);

?>

<head>

    <meta charset="utf-8">

    <title>Instruction</title>

    <link rel="stylesheet" href="css/result.css">

</head>

<body>

<div class="box">
<div class="header">Your Stress Level Based On Perceived Stress Scale Is</div>
<?php
if($stress=='high'){

echo "<div class=\"result\">High </div>";
echo "<div class=\"blink\">(Eye Blink / min)  : ".$blinkPost." </div>";
echo "<div class=\"description\">You are Experiencing High Level of Stress, Try to Relieve or Reduce Your Stress by Conducting Some Leisure Activities.</div>";
}
else if($stress=='moderate'){
echo "<div class=\"result\">Moderate</div>";
echo "<div class=\"blink\">(Eye Blink / min)  : ".$blinkPost." </div>";
echo "<div class=\"description\">Conduct Some Activities to Relieve Your Stress. Expressing Your Stress to Family or Friends is also an Alternative Ways to Relieve It.</div>";
}
else if($stress=='low'){
    echo "<div class=\"result\">Normal</div>";
    echo "<div class=\"blink\">(Eye Blink / min)  : ".$blinkPost." </div>";
    echo "<div class=\"description\">Your Stress Level is Normal. It is Common that Human will decrease their eye blinking rate when tends to perceive more information from outside.</div>";
}
?>
<div class="button">
<a class="retake" href="decisionPanel.php">Retake</a>
<a class="home" href="cognitive.php">Proceed</a>

</div>
</div>
</body>