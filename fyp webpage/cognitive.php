<?php

include_once("include/config.php");
include_once("include/session.php");

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

        $sql = "INSERT INTO cognitivescale(q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,score,userID) VALUES('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$score','$id')";
        $conn->exec($sql);

        header("Location:home.php");

    }
}
    
        
?>

<head>

    <meta charset="utf-8">

    <title>Cognitive and Affective Mindful Scale</title>

    <link rel="stylesheet" href="css/cognitive.css">

</head>

<body>

<div class="box">
<div class="header">Please Proceed to Answer the Questionnaire Below for Letting Us Understand Your Cognitive and Affective Mindful Scale</div>
<div class="frame">

<form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <h2>Perceived Stress Scale</h2>
    <div class=question>
    <label for="q1">l. It is easy for me to concentrate on what I am doing. </label>
    <select id="q1" name="q1" >
    <option value="1">Almost Never</option>
    <option value="2">Sometimes</option>
    <option value="3">Fairly Often</option>
    <option value="4">Very Often</option>
    </select>
    <label for="q2">2. I can tolerate emotional pain.</label>
    <select id="q2" name="q2">
    <option value="1">Almost Never</option>
    <option value="2">Sometimes</option>
    <option value="3">Fairly Often</option>
    <option value="4">Very Often</option>
    </select>
    <label for="q3">3. I can accept things I cannot change.</label>
    <select id="q3" name="q3">
    <option value="1">Almost Never</option>
    <option value="2">Sometimes</option>
    <option value="3">Fairly Often</option>
    <option value="4">Very Often</option>
    </select>
    <label for="q4">4. I can usually describe how I feel at the moment in considerable detail.</label>
    <select id="q4" name="q4">
    <option value="1">Almost Never</option>
    <option value="2">Sometimes</option>
    <option value="3">Fairly Often</option>
    <option value="4">Very Often</option>
    </select>
    <label for="q5">5. I am easily distracted.</label>
    <select id="q5" name="q5">
    <option value="4">Almost Never</option>
    <option value="3">Sometimes</option>
    <option value="2">Fairly Often</option>
    <option value="1">Very Often</option>
    </select>
    <label for="q6">6. It’s easy for me to keep track of my thoughts and feelings.</label>
    <select id="q6" name="q6">
    <option value="1">Almost Never</option>
    <option value="2">Sometimes</option>
    <option value="3">Fairly Often</option>
    <option value="4">Very Often</option>
    </select>
    <label for="q7">7. I try to notice my thoughts without judging them. </label>
    <select id="q7" name="q7">
    <option value="1">Almost Never</option>
    <option value="2">Sometimes</option>
    <option value="3">Fairly Often</option>
    <option value="4">Very Often</option>
    </select>
    <label for="q8">8. I am able to accept the thoughts and feelings I have.</label>
    <select id="q8" name="q8">
    <option value="1">Almost Never</option>
    <option value="2">Sometimes</option>
    <option value="3">Fairly Often</option>
    <option value="4">Very Often</option>
    </select>
    <label for="q9">9. I am able to focus on the present moment.</label>
    <select id="q9" name="q9">
    <option value="1">Almost Never</option>
    <option value="2">Sometimes</option>
    <option value="3">Fairly Often</option>
    <option value="4">Very Often</option>
    </select>
    <label for="q10">10. I am able to pay close attention to one thing for a long period of time.</label>
    <select id="q10" name="q10">
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