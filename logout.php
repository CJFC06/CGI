<?php
session_start();
  unset($_SESSION["cgiuser"]);
  unset($_SESSION["cgipass"]);
  header('Location: index.php');
?>
