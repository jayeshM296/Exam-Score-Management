<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ranks of student</title>
  </head>
  <body>
    <center>
      <p><a href="index.html">Home</a></p>
    </center>
  </body>
</html>
<?php
  require 'connection.php';
  echo "<center>";
  if (isset($_POST['submit']))
     {   $Std      = $_POST['Std'];
         $TestType = $_POST['TestType'];

         $query = "SELECT *,(Hindi+Marathi+Maths+Science+Social_Studies+English) as Total,
         round((((Hindi+Marathi+Maths+Science+Social_Studies+English)*100)/120),2) as Percentage,
         round((((Hindi+Marathi+Maths+Science+Social_Studies+English)*100)/600),2) as Percent
         from student inner join marks on student.Roll_No=marks.Roll_No AND student.Std=marks.Std WHERE marks.Std = '$Std' AND TestType= '$TestType'";

         $res=mysqli_query($conn, $query);
         $rs=mysqli_query($conn, $query);
         $r=mysqli_query($conn, $query);
         echo mysqli_error($conn);
         echo "<table><tr><th>Rankers</th></tr>";
          while ($row = mysqli_fetch_array( $res ))
          {
            echo "<tr>";
            if($row['Percentage'] >= 80.00){
            echo '<td><br>' . $row['Name']  . '</td>';
            echo "</tr>";
          }
          echo "</table>";
        }
        echo "<table><tr><th>Achievers</th></tr>";
         while ($rowe = mysqli_fetch_array( $r ))
         {
           echo "<tr>";
           if((($rowe['Percentage'] < 80.00) && ($rowe['Percentage'] > 40.00)))
           {
           echo '<td><br>' . $rowe['Name']  . '</td>';
           echo "</tr>";
         }
         echo "</table>";
       }
        echo "<table><tr><th>Defaulters</th></tr>";
         while ($rw = mysqli_fetch_array( $rs ))
         {
           echo "<tr>";
           if($rw['Percentage'] < 40.00){
           echo '<td><br>' . $rw['Name']  . '</td>';
           echo "</tr>";
         }
         echo "</table>";
       }
     }

     echo"</center>";
 ?>
