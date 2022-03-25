<?php
    include_once("include/session.php");

    if (isset($_POST['login'])){
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            include_once('include/config.php');

            $email = $_POST['email'];
            $password = $_POST['password'];
        
            $qry = "SELECT * FROM user";
            $result = $conn->query($qry);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $emailCorrect = false;
            $passwordCorrect = false;

            while($row = $result->fetch()) {
                if ($email == $row['email']) {
                    $emailCorrect = true;
                }

                if ($password == $row['password']) {
                    $passwordCorrect = true;
                }

                if ($emailCorrect && $passwordCorrect) {
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['name'] = $row['username'];
                    
                    $username = $row['username'];

                    header("Location:home.php?name=$username");

                    break;
                }

                else{
                    echo '<script>alert("Your email or password is invalid!")</script>';
                    header("Location:login.php");
                    
                }
            }
        }
    }

    
    
?>


<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">

    <title>َLogin</title>

    <link rel="stylesheet" href="css/login.css">

    

  </head>

  <body>
  <?php 
      include_once("include/navigation.php");
?>
    <div id="app">
    <div class="box">
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" >
    <div class="logo"> </div>
    <h1 data-text="Login">Login</h1>

    <input type="email" name="email" id ="email" placeholder="Email" pattern=".{3,40}" required title="Please enter valid email">

    <input type="password" name="password" id="password" placeholder="Password" pattern=".{3,20}" required title="Please enter minimum 3 and maximum 20 characters">
    <text class="signup">Do not have an account?</text> <a href="signup.php">Sign Up</a>
    <input type="submit" name="login" value="Login">
    
</form>
</div>
</div>
  </body>


  
</html>

