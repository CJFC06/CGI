<!DOCTYPE html>
<?php include ("session.php"); ?>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/career.css">
    <title>Career Objectives</title>
  </head>
  <body>

      <header>
        <nav>
          <ul class="nav_links">
            <li><a href="home.php">HOME</a></li>
            <li><a href="career.php">career objective</a></li>
            <li>
              <form class="" action="logout.php" method="post">
              <input type="submit" name="logout" value="LOGOUT"></input>
              </form>
            </li>
          </ul>
        </nav>
      </header>
     <table>
       <caption><h1>Career Objectives</h1></caption>
       <tr id="title">
         <td><h4>ID</h4> </td>
         <td><h4>NAME</h4> </td>
         <td><h4>DESCRIPTION</h4> </td>
         <td><h4>REASON</h4> </td>
         <td><h4>TARGET DATE</h4> </td>
         <td><h4>COMPLETED DATE</h4> </td>
         <td></td>

       </tr>
       <?php
       $view_query = mysqli_query($conn, "SELECT * FROM entries");
        while($row = mysqli_fetch_assoc($view_query)){
          echo
          "<tr>
           <td class='id'>".$row["id"]."</td>
           <td class='name'>".$row["name"]."</td>
           <td class='description'>".$row["description"]."</td>
           <td class='reason'>".$row["reason"]."</td>
           <td class='targetDate'>".$row["target_date"]."</td>
           <td class='completedDate'>".$row["completed_date"]."</td>
           <td ><a href='edit.php?rn=$row[id]'><div class='edit'>MODIFY</div></a>
           <a href='delete.php?rn=$row[id]'><div class='delete'>DELETE</div></a></td>
           </tr>
          ";
        }
        ?>
     </table>
    <form class="" action="addEntry.php" method="post">
     <table id="addTable">
       <caption><h3>Add Entry</h3></caption>
       <tr >
         <td><h6>NAME</h6> </td>
         <td><h6>DESCRIPTION</h6> </td>
         <td><h6>REASON</h6> </td>
         <td><h6>TARGET DATE</h6> </td>
         <td><h6>COMPLETED DATE</h6> </td>
       </tr>
       <tr>
         <td><input type="text" name="name"></td>
         <td><input type="text" name="description"></td>
         <td><input type="text" name="reason"> </td>
         <td><input type="date" name="target"></td>
         <td><input type="date" name="completed"></td>
       </tr>

       <tr>
         <td></td>
         <td></td>
         <td><input id="addBtn" type="submit" name="addBtn" value="ADD"> </td>
         <td></td>
         <td></td>
       </tr>
     </table>
    </form>
  </body>
</html>
