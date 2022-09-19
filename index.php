<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/CGILogo.png" />
    <title>Login</title>
  </head>
<body>
<form class="" action="index.php" method="post">
  <table>
    <caption> <img id="UserLogo" src="images/UserLogo.png" alt="unavailable"></caption>
    <tr>
      <td id="error">
        <?php
        if(@$_GET['empty']){
          echo $_GET['empty'];
        }
        if(@$_GET['incorrect']){
          echo $_GET['incorrect'];
        }
        ?>
      </td>
    </tr>
    <tr>
      <td><input id="username" type="text" name="username" placeholder="USERNAME" tabindex="1"></td>
    </tr>
    <tr>
      <td><input id="password" type="password" name="password" placeholder="PASSWORD" tabindex="2"></td>
    </tr>
    <tr>
      <td>
        <div class="submit_wrapper">
          <input id="submit_button" type="submit" name="LOGIN" value="LOGIN" tabindex="3">
        </div>
      </td>
    </tr>
  </table>
</form>
</body>

<?php
session_start();
$servername = 'localhost';
$user = 'root';
$pass  = '';
$db = 'cgi';
// Create connection
$conn = new mysqli($servername, $user , $pass, $db);
// Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo @$_SESSION["cgiuser"];


//login attempt
  if (isset($_POST['LOGIN'])) {
  $username   = $_POST['username'];
  $password  = $_POST['password'];
    // $sql  ="SELECT * FROM user where username = '$username' and password = md5('$passsword')";
    $sql  = "SELECT * FROM user where username = '$username' and password = '$password'";
    $sqlLogin = mysqli_query($conn,$sql);

    if($_POST['username'] && $_POST['password']){
      if (mysqli_num_rows($sqlLogin)==1) {
        $_SESSION["cgiuser"] = $username;
        $UN =$_SESSION["cgiuser"]; 
        header('Location: home.php');
      }
      else{
        header('Location: index.php?incorrect=*Incorrect Username or Password');
      }
    }
    else{
      header('Location:  index.php?empty=*Please fill in the blanks');
    }
  }


  ?>


</html>
