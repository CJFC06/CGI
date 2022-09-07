<?php
include ("session.php");

$rownum = $_GET['rn'];
$query = "DELETE FROM entries WHERE id ='$rownum'";
$data = mysqli_query($conn, $query);

if ($data) {
  header('Location: career.php');
}
?>
