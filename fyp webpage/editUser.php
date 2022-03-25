<?php
include_once("include/config.php");
include_once("include/session.php");

?>

<head>

</head>

<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:100');


body, html{
    margin: 0;
    padding: 0;
    scroll-behavior: smooth;
    font-family: 'Montserrat',sans-serif;
}
.container{
    background: #0a0a0a;
    height: 100vh;
    width: 100%;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background:linear-gradient(rgb(228, 218, 218), rgba(189, 178, 178, 0.9)),  url("https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/0f57ce83-c7df-40bd-8332-d04ca17322f5/d1bed6i-b7bb32d0-89cf-49ae-8211-992c26e928cd.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzBmNTdjZTgzLWM3ZGYtNDBiZC04MzMyLWQwNGNhMTczMjJmNVwvZDFiZWQ2aS1iN2JiMzJkMC04OWNmLTQ5YWUtODIxMS05OTJjMjZlOTI4Y2QuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.jdcIqmb4wtFbR5yTXIwD1_jNLNYLDGNVQM4qtS29Ob8");
    background-size: cover;
    background-position: center;
    z-index: 1;
}


a{
 top: 2%;
 left: 85%;
 font-size: 20px;
 color: white;
 font-weight: 500;
 text-decoration: none;
 position: absolute;
}

a:hover{
  color: #0a0a0a;
}

h1{
 font-size: 30px;
 color: #fff;
 text-transform: uppercase;
 font-weight: 300;
 text-align: center;
 padding-bottom: 20px;
 font-family: 'Montserrat', sans-serif;
 font-weight: bold;
}

.box input[type = "text"],.box input[type = "email"],.box input[type = "password"]{

 border:0;
 background: none;
 display: block;
 margin: 20px auto;
 text-align: center;
 border: 2px solid #ffffff;
 padding: 14px 10px;
 width: 200px;
 outline: none;
 color: white;
 border-radius: 24px;
 transition: 0.25s;

}

.box input[type = "text"]:focus,.box input[type = "email"]:focus,.box input[type = "password"]:focus{

 border-color: #71d3da;

}

.box input[type = "submit"]{

 border:0;
 background: none;  
 display: block;
 margin: 25px auto;
 text-align: center;
 border: 2px solid #2ecc71;
 padding: 14px 20px;
 outline: none;
 color: white;
 border-radius: 24px;
 transition: 0.25s;
 cursor: pointer;

}

.box input[type = "submit"]:hover{

 background: #2ecc71;

}

.box{
  width: 300px;
  padding: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  background-color: rgb(90, 83, 83);
  text-align: center;
  border-radius: 25px;
  transform: translate(-50%,-50%);
  opacity: 0.8;
  box-shadow: #574747;
  
}

</style>

<body>
<div class="container">

<?php
                    
  $id = $_SESSION['id'];
  $qry = "SELECT * FROM `user` WHERE `id` = $id";
  $result = $conn->query($qry);
  $result->setFetchMode(PDO::FETCH_ASSOC);
  $edit = false;
  $row = $result->fetch();
    $username = $row['username'];
    $email = $row['email'];
    $gender = $row['gender'];
    $height = $row['height'];
    $weight = $row['weight'];
    $password = $row['password'];

    if (isset($_POST['edit'])){
      $id = $_SESSION['id'];
      $qry = "SELECT * FROM user WHERE id =$id";
      $result = $conn->query($qry);
      $result->setFetchMode(PDO::FETCH_ASSOC);
      $row = $result->fetch();
  
      $usernameDuplicate = false;
      $emailDuplicate = false;
      $rptPassword="";
      $allInputValid = true;

      $newUsername = $_POST['username'];
      $newEmail = $_POST['email'];
      $newGender = $_POST['gender'];
      $newWeight = $_POST['weight'];
      $newHeight = $_POST['height'];;
      $newPassword = $_POST['password'];
      $rptPassword = $_POST['rptPassword'];
      
      $qry = "SELECT * FROM `user` WHERE `id` = $id";
      $result = $conn->query($qry);
      $result->setFetchMode(PDO::FETCH_ASSOC);
      while ($row = $result->fetch()) {
    if ($newUsername == $row['username'] && $newUsername != $username) {
        $usernameDuplicate = true;
    }
  
    if ($newEmail == $row['email'] && $newEmail != $email) {
        $emailDuplicate = true;
    }
  
    if ($emailDuplicate) {
      $err = "Email is already registered";
      $allInputValid = false;
      $newEmail = "error";
    }
  
    if ($usernameDuplicate) {
      $err = "Username is already used";
      $allInputValid = false;
    }
  
    if ($newPassword != $rptPassword) {
    $err = "Password does not match";
    $allInputValid = false;
    }
  }
  
    if($allInputValid){
    $sql = "UPDATE user SET username='$newUsername',email='$newEmail', password='$newPassword', gender='$newGender', height='$newHeight', weight='$newWeight' WHERE id=$id";
    $conn->exec($sql);
    $edit = true;
    header("Location:profile.php");
    }else{
    
      $errorMessage = "Your ".$err." !";
      echo errorMessage($errorMessage);
    }
  
  
  }

?>

<script>
    function errorMessage(err) {
  if (confirm("Your ".err." !")) {
    window.location='editUser.php';
  } else {
    window.location='profile.php';
  }
}
</script>


<form method="POST" class="box" >
    <h1>Edit Profile</h1>
      <a href="profile.php">&#10006 </a>
    <input type="text" name="username" placeholder="Username" value="<?php echo "$username"?>" pattern=".{3,20}" required title="Please at least enter 3 to 20 characters">
    <input type="email" name="email" placeholder="Email" value=<?php echo "$email"?> pattern=".{10,30}" required title="Please enter 10 to 30 characters">
    <input type="text" name="gender" placeholder="Gender" value=<?php echo "$gender"?> list="Gender" required>
    <datalist id="Gender">
        <option> Male</option>
        <option> Female</option>
        <option> Others</option>
      </datalist>
    <input type="text" name="weight" placeholder="Weight(kg)" min="20" max="200" value=<?php echo"$weight"?> required>
    <input type="text" name="height" placeholder="Height(cm)" min="80" max="220" value=<?php echo"$height"?> required>
    <input type="password" name="password" placeholder="Password" value=<?php echo"$password"?> pattern=".{3,20}" required title="Please enter 3 to 20 characters">
    <input type="password" name="rptPassword" placeholder="Repeat Password" value=<?php echo"$password"?> pattern=".{3,20}" required title="Please enter 3 to 20 characters">
    <input type="submit" name="edit" value="EDIT">
    </form>
</div>
</body>