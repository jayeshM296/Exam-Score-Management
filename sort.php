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
    <p>Select standard</p>
    <select name="Std">
      <option value="0">--Select Standard--</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select>
    <p>Select Type of Exam</p>
    <select name="TestType">
     <option value="0">--Select Test Type--</option>
     <option value="1st Unit">1st Unit </option>
     <option value="2nd Unit">2nd Unit</option>
     <option value="3rd Unit">3rd Unit</option>
     <option value="4th Unit">4th Unit</option>
     <option value="1st Sem">1st Sem</option>
     <option value="2nd Sem">2nd Sem</option>
    </select>
    <p>Select Subject</p>
    <select name="sortby">
     <option value="0">--Select Subject--</option>
     <option value="Hindi">Hindi</option>
     <option value="Marathi">Marathi</option>
     <option value="Maths">Maths</option>
     <option value="Science">Science</option>
     <option value="Social_Studies">Social_Studies</option>
     <option value="English">English</option>
     <option value="Total">Total</option>
     <option value="Percentage">Percentage</option>
    </select>
    <br>
    <button type="submit" name="submit">Submit</button>
    </form>


<?php
  require 'connection.php';
  if (isset($_POST['submit']))
     {   $Std      = $_POST['Std'];
         $TestType = $_POST['TestType'];
         $sortby   = $_POST['sortby'];

         $query = "SELECT *,(Hindi+Marathi+Maths+Science+Social_Studies+English) as Total,
         round((((Hindi+Marathi+Maths+Science+Social_Studies+English)*100)/120),2) as Percentage,
         round((((Hindi+Marathi+Maths+Science+Social_Studies+English)*100)/600),2) as Percent from student inner join marks
         on student.Roll_No=marks.Roll_No AND student.Std=marks.Std WHERE marks.Std = '$Std' AND TestType= '$TestType' ORDER BY $sortby DESC ";
         $res=mysqli_query($conn, $query);
         echo mysqli_error($conn);
         echo "<table border='1' cellpadding='5'>
               <tr>
               <th>Name</th>
               <th>Std</th>
               <th>TestType</th>
               <th>$sortby</th>
               </tr>";
         while ($row = mysqli_fetch_array( $res ))
             {
               echo "<tr>";
               echo '<td>' . $row[1]  . '</td>';
               echo '<td>' . $row[8]  . '</td>';
               echo '<td>' . $row[10]  . '</td>';
               if($sortby == 'Hindi'){echo '<td>' . $row[11]  . '</td>';}
               if($sortby == 'Marathi'){echo '<td>' . $row[12] . '</td>';}
               if($sortby == 'Maths'){echo '<td>' . $row[13] . '</td>';}
               if($sortby == 'Science'){echo '<td>' . $row[14] . '</td>';}
               if($sortby == 'Social_Studies'){echo '<td>' . $row[15] . '</td>';}
               if($sortby == 'English'){echo '<td>' . $row[16] . '</td>';}
               if($sortby == 'Total'){echo '<td>' . $row['Total'].'</td>';}
               if($sortby == 'Percentage'){
               if($row[10] == '1st Unit' || $row[10] == '2nd Unit' || $row[10] == '3rd Unit' || $row[10] == '4th Unit'){
                 echo '<td>' . $row['Percentage']. '</td>';
               }else{
                 echo '<td>' . $row['Percent']. '</td>';
               }
             }
               echo "</tr>";
             }
             echo "</table>";
     }

 ?>

</center>
</body>
</html>
