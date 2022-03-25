<?php
include_once("include/session.php");

$usernameErr = $emailErr = $heightErr = $weightErr = $passwordErr =  "";
$rptPasswordErr = "Repeat Password";

$name = $email = $password = $rptPassword = "";

$height = $weight = 0 ;

$signUp = false;

if (isset($_POST['signup'])){
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        include_once('include/config.php');
    
        $name = $_POST['username'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        $rptPassword = $_POST['repeatPassword'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
    
        $qry = "SELECT * FROM user";
        $result = $conn->query($qry);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $allInputValid = true;

        $usernameDuplicate = false;
        $emailDuplicate = false;
        while($row = $result->fetch()) {
            if ($name == $row['name']) {
                $usernameDuplicate = true;
            }

            if ($email == $row['email']) {
                $emailDuplicate = true;
            }
        }

        if ($emailDuplicate) {
            $emailErr = "Email is already registered";
            $allInputValid = false;
        }

        if ($usernameDuplicate) {
            $usernameErr = "Username is already used";
            $allInputValid = false;
        }

        if ($password != $rptPassword) {
          $rptPasswordErr = "Password does not match";
          $allInputValid = false;
        }

        if ($height >220 ||$height<80) {
          $heightErr = "Please enter valid Height(cm)";
          $allInputValid = false;
          }

        if ($weight >150 || $height<20) {
          $weightErr = "Please enter valid Weight(kg)";
          $allInputValid = false;
          }
     

      if ($allInputValid){
          $sql = "INSERT INTO user(name,email,password,gender,height,weight) VALUES('$name','$email','$password','$gender','$height','$weight')";

          $conn->exec($sql);

          $signUp = true;
      }
    }
  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">

    <title>Sign Up</title>

    <link rel="stylesheet" href="css/signup.css">

  </head>

  <body>
    <div id="app">
    <?php
      if ($signUp){
      include('include/signupPopup.php');
     }
    ?>
    <div class="box">
    


    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <div class="logo"> </div>
    <h1 data-text="SignUp">Sign Up</h1>

    <input type="text" name="username" id="username" value="<?php echo $usernameErr ?>" placeholder="Username" pattern=".{3,20}" required title="Please at least enter 3 to 20 characters">
    <input type="text" name="gender" placeholder="Gender" list="Gender" required>
    <datalist id="Gender">
        <option> Male</option>
        <option> Female</option>
        <option> Others</option>
      </datalist>
    <input type="number" name="height" value= "<?php echo $heightErr ?>" placeholder="height(cm)" min="80" max="220" required title="Please enter a valid height(cm)">
    <input type="number" name="weight" value="<?php echo $weightErr ?>" placeholder="height(kg)" min="20" max="200" required title="Please enter a valid weight(kg)">
    <input type="email" name="email" id="email" value="<?php echo $emailErr ?>" placeholder="Email" pattern=".{10,30}" required title="Please enter 10 to 30 characters">
    <input type="password" name="password" id="password" placeholder="Password" pattern=".{3,20}" required title="Please enter 3 to 20 characters">
    <input type="password" name="repeatPassword" id="repeatpassword" placeholder="<?php echo $rptPasswordErr ?>" pattern=".{3,20}" required title="Please enter 3 to 20 characters">
    <input type="submit" name="signup" value="Sign Up">  
    </form>



</div>
</div>
  </body>
  </html>