<!DOCTYPE html>
<?php
include ("session.php");

$rownum = $_GET['rn'];
$query = "SELECT * FROM entries WHERE id ='$rownum'";
$data = mysqli_query($conn, $query);
if ($data->num_rows > 0) {
  // output data if checked
  while($row = $data->fetch_assoc()) {
  $name = $row["name"];
  $desc = $row["description"];
  $id = $row["id"];
  $reason = $row["reason"];
  $target = $row["target_date"];
  $completed = $row["completed_date"];
  }
}
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Modify</title>
    <style media="screen">
    *{
      font-family: sans-serif;
    }
    table{
      margin: auto;
      margin-top: 10%;
    }
    td{
        padding: 5px;
        font-size: 15px;
        width: 200px;
        padding: 10px;
        text-align: center;
    }
    input{
      text-align: center;
      border: 0;
      height: 50px;
      width: 200px
      font-size:15px;
    }
    </style>
  </head>
  <body>
    <form class="" action="" method="post">

    <table>
      <tr >
        <td><h3>ID</h3> </td>
        <td><h3>NAME</h3> </td>
        <td><h3>DESCRIPTION</h3> </td>
        <td><h3>REASON</h3> </td>
        <td><h3>TARGET DATE</h3> </td>
        <td><h3>COMPLETED DATE</h3></td>
      </tr>

      <tr>
        <td><?php echo $id;?></td>
        <td><input type="text" name="name" value="<?php echo $name;?>" ></td>
        <td><input type="text" name="description" value="<?php echo $desc;?>" placeholder=""></td>
        <td><input type="text" name="reason" value="<?php echo $reason;?>" placeholder=""> </td>
        <td><input type="text" name="target" value="<?php echo $target;?>" placeholder=""></td>
        <td><input type="text" name="completed" value="<?php echo $completed;?>" placeholder=""></td>

      </tr>

    </table>
    <table>
      <tr>
        <td><input type="submit" name="update" value="UPDATE"> </td>
      </tr>
    </table>

  </form>
  <?php
  $namess = @$_POST['name'];
  $descss = @$_POST['description'];
  $reasonss = @$_POST['reason'];
  $targetss = @$_POST['target'];
  $completedss = @$_POST['completed'];
  if (isset($_POST['update'])) {
    $data = mysqli_query($conn, "UPDATE entries
                         SET name = '$namess', description = '$descss', reason = '$reasonss', target_date = '$targetss', completed_date = '$completedss'
                         WHERE id =  '$id' ");
                         header("Location: career.php");

  }


 ?>


  </body>
</html>
