<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display marks</title>
  </head>
  <body>
    <center>
      <p><a href="index.html">Home</a></p>
    <form action="" method="post">
      <p>Enter Student Name</p>
      <input type="text" name="Name" placeholder="Enter Name">
      <button type="submit" name="submit">Submit</button>
    </form>
    <?php
      require 'connection.php';
      if (isset($_POST['submit']))
         {   $Name      = $_POST['Name'];

             $query = "SELECT *,(Hindi+Marathi+Maths+Science+Social_Studies+English) as Total,
             round((((Hindi+Marathi+Maths+Science+Social_Studies+English)*100)/120),2) as Percentage,
             round((((Hindi+Marathi+Maths+Science+Social_Studies+English)*100)/600),2) as Percent from student
             inner join marks on student.Roll_No=marks.Roll_No AND student.Std=marks.Std WHERE Name='$Name' ";
             $res=mysqli_query($conn, $query);
             echo "<table border='1' cellpadding='5'>
                   <tr>
                   <th>Name</th>
                   <th>Std</th>
                   <th>TestType</th>
                   <th>Hindi</th>
                   <th>Marathi</th>
                   <th>Maths</th>
                   <th>Science</th>
                   <th>Social Studies</th>
                   <th>English</th>
                   <th>Total Marks</th>
                   <th>Percentage</th>
                   </tr>";
             while ($row = mysqli_fetch_array( $res ))
                 {
                   echo "<tr>";
                   echo '<td>' . $row[1]  . '</td>';
                   echo '<td>' . $row[6]  . '</td>';
                   echo '<td>' . $row[10] . '</td>';
                   echo '<td>' . $row[11] . '</td>';
                   echo '<td>' . $row[12] . '</td>';
                   echo '<td>' . $row[13] . '</td>';
                   echo '<td>' . $row[14] . '</td>';
                   echo '<td>' . $row[15] . '</td>';
                   echo '<td>' . $row[16]  . '</td>';
                   echo '<td>' . $row['Total'].'</td>';
                   if($row[10] == '1st Unit' || $row[10] == '2nd Unit' || $row[10] == '3rd Unit' || $row[10] == '4th Unit'){
                     echo '<td>' . $row['Percentage']. '</td>';
                   }else{
                     echo '<td>' . $row['Percent']. '</td>';
                   }
                   echo "</tr>";
                 }
         }
     ?>
  </center>
  </body>
  </html>
