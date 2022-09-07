<?php
session_start();
if (isset($_POST['logout'])) {
  unset($_SESSION['User']);
  unset($_SESSION['Pass']);
  header('Location: index.php');
} ?>
