<?php
session_start();
$servername = 'localhost';
$user = 'root';
$pass  = '';
$db = 'cgi';
$conn = new mysqli($servername, $user , $pass, $db);


// Create connection  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  // }
  // $username   = @$_SESSION['User'];
  // $passsword  = @$_SESSION['Pass'];
  // $sql  ="SELECT * FROM user where username = '$username' and password = '$passsword'";
  // $sqlLogin   = mysqli_query($conn,$sql);
  //
  // if(mysqli_num_rows($sqlLogin)!=1){
  //   header('Location: index.php' );
  }
 ?>
