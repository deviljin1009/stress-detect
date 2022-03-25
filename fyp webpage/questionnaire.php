<?php

include_once("include/config.php");
include_once("include/session.php");

  $blink = $_SESSION['blinks'];
  $method = $_SESSION['method'];

  if (isset($_POST['submit'])){
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $id =$_SESSION['id'];
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];
        $q4 = $_POST['q4'];
        $q5 = $_POST['q5'];
        $q6 = $_POST['q6'];
        $q7 = $_POST['q7'];
        $q8 = $_POST['q8'];
        $q9 = $_POST['q9'];
        $q10 = $_POST['q10'];

        $score = $q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8+$q9+$q10;
        
        if($score<=13){
            $stress='low';
        }
        elseif($score>13 && $score<=26){
            $stress="moderate";
        }
        else{
            $stress="high";
        }

        $sql = "INSERT INTO questionnairehistory(q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,score,stressLevel,userID) VALUES('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$score','$stress','$id')";
        $conn->exec($sql);

        header("Location:progress.php?stress=$stress");

    }
}
    
        
?>

<head>

    <meta charset="utf-8">

    <title>Questionnaire</title>

    <link rel="stylesheet" href="css/questionnaire.css">

</head>

<body>

<div class="box">
<div class="header">Please Answer the Questionnaire below to complete the Stress Detecting Process</div>
<div class="frame">

<form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <h2>Perceived Stress Scale</h2>
    <div class=question>
    <label for="q1">l. In the last month, how often have you been upset because of something that
 happened unexpectedly?</label>
    <select id="q1" name="q1" >
    <option value="0">Never</option>
    <option value="1">Almost Never</option>
    <option value="2">Sometimes</option>
    <option value="3">Fairly Often</option>
    <option value="4">Very Often</option>
    </select>
    <label for="q2">2. In the last month, how often have you felt that you were unable to control the
 important things in your life?</label>
    <select id="q2" name="q2">
    <option value="0">Never</option>
    <option value="1">Almost Never</option>
    <option value="2">Sometimes</option>
    <option value="3">Fairly Often</option>
    <option value="4">Very Often</option>
    </select>
    <label for="q3">3. In the last month, how often have you felt nervous and stressed?</label>
    <select id="q3" name="q3">
    <option value="0">Never</option>
    <option value="1">Almost Never</option>
    <option value="2">Sometimes</option>
    <option value="3">Fairly Often</option>
    <option value="4">Very Often</option>
    </select>
    <label for="q4">4. In the last month, how often have you felt confident about your ability to handle
 your personal problems?</label>
    <select id="q4" name="q4">
    <option value="4">Never</option>
    <option value="3">Almost Never</option>
    <option value="2">Sometimes</option>
    <option value="1">Fairly Often</option>
    <option value="0">Very Often</option>
    </select>
    <label for="q5">5. In the last month, how often have you felt that things were going your way?
</label>
    <select id="q5" name="q5">
    <option value="4">Never</option>
    <option value="3">Almost Never</option>
    <option value="2">Sometimes</option>
    <option value="1">Fairly Often</option>
    <option value="0">Very Often</option>
    </select>
    <label for="q6">6. In the last month, how often have you found that you could not cope with
 all the things that you had to do?</label>
    <select id="q6" name="q6">
    <option value="0">Never</option>
    <option value="1">Almost Never</option>
    <option value="2">Sometimes</option>
    <option value="3">Fairly Often</option>
    <option value="4">Very Often</option>
    </select>
    <label for="q7">7. In the last month, how often have you been able to control irritations in
 your life?</label>
    <select id="q7" name="q7">
    <option value="4">Never</option>
    <option value="3">Almost Never</option>
    <option value="2">Sometimes</option>
    <option value="1">Fairly Often</option>
    <option value="0">Very Often</option>
    </select>
    <label for="q8">8. In the last month, how often have you felt that you were on top of things?</label>
    <select id="q8" name="q8">
    <option value="4">Never</option>
    <option value="3">Almost Never</option>
    <option value="2">Sometimes</option>
    <option value="1">Fairly Often</option>
    <option value="0">Very Often</option>
    </select>
    <label for="q9">9. In the last month, how often have you been angered because of things that
 happened that were outside of your control?</label>
    <select id="q9" name="q9">
    <option value="0">Never</option>
    <option value="1">Almost Never</option>
    <option value="2">Sometimes</option>
    <option value="3">Fairly Often</option>
    <option value="4">Very Often</option>
    </select>
    <label for="q10">10. In the last month, how often have you felt difficulties were piling up so high that
 you could not overcome them?</label>
    <select id="q10" name="q10">
    <option value="0">Never</option>
    <option value="1">Almost Never</option>
    <option value="2">Sometimes</option>
    <option value="3">Fairly Often</option>
    <option value="4">Very Often</option>
    </select>
</div>
    <input type="submit" name="submit" value="Submit">  
    </form>
</div>


</div>
</div>
</body>