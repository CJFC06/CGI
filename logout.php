<?php
session_start();
  unset($_SESSION["cgiuser"]); 
  header('Location: index.php');
?>
