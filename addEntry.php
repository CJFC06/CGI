<?php
include ("session.php");

$name = $_POST['name'];
$description = $_POST['description'];
$reason = $_POST['reason'];
$target = $_POST['target'];
$completed = $_POST['completed'];
$query = "INSERT INTO entries (name, description, reason, target_date, completed_date)
          VALUES ('$name', '$description', '$reason', '$completed', '$completed')";

if ($name || $description || $reason || $target || $completed != null ) {
$data = mysqli_query($conn, $query);
  header('Location: career.php');
}
else {
  header('Location: career.php');
}

?>
