<?php
require 'connection.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Details</title>
  </head>
  <body>

<!-- View Student Details -->

    <center>
      <p><a href="index.html">Home</a></p>
      <p><a href="addstudent.php">Insert New student</a></p>
      <h3>Student Details</h3>
      <?php
        $query="select * from student";
        $res=mysqli_query($conn, $query);
        echo "<table border='1' cellpadding='5'>
              <tr>
              <th>Name</th>
              <th>Phone No</th>
              <th>Gender</th>
              <th>Mail Id</th>
              <th>Roll No</th>
              <th>Standard</th>
              <th>Edit</th>
              <th>Delete</th>
              </tr>";
        while($row=mysqli_fetch_array($res)){
          echo "<tr>";
          echo '<td>' . $row['Name'] . '</td>';
          echo '<td>' . $row['Phone_No'] . '</td>';
          echo '<td>' . $row['Gender'] . '</td>';
          echo '<td>' . $row['Mail_Id']  . '</td>';
          echo '<td>' . $row['Roll_No']  . '</td>';
          echo '<td>' . $row['Std']  . '</td>';
          echo '<td><a href="editstudent.php?id=' . $row['id'] . '">Edit</a></td>';
          echo '<td><a href="deletestudent.php?id=' . $row['id'] . '">Delete</a></td>';
          echo "</tr>";        }
         echo "</table>";
       ?>
    </center>
  </body>
</html>
