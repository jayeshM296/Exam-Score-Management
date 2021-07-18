
<!DOCTYPE HTML>
<html>
<head>
<title>Student Marks</title>
</head>
<body>
  <center>
    <p><a href="index.html">Home</a></p>
    <p><a href="addmarks.php">Insert New student marks</a></p>
    <h1>Student marks details</h1>
<?php

require 'connection.php';

$result = mysqli_query($conn, "SELECT *,(Hindi+Marathi+Maths+Science+Social_Studies+English) as Total,
          round((((Hindi+Marathi+Maths+Science+Social_Studies+English)*100)/120),2) as Percentage,
          round((((Hindi+Marathi+Maths+Science+Social_Studies+English)*100)/600),2) as Percent from student
          inner join marks on student.Roll_No=marks.Roll_No AND student.Std=marks.Std");

echo "<table border='1' cellpadding='5'>";
echo "<tr>
<th>Name</th>
<th>Std</th>
<th>Roll_No</th>
<th>Test Type</th>
<th>Hindi</th>
<th>Marathi</th>
<th>Maths</th>
<th>Science</th>
<th>Social Studies</th>
<th>English</th>
<th>Total</th>
<th>Percentage</th>
<th>Edit</th>
<th>Delete</th>
</tr>";

while($row = mysqli_fetch_array( $result ))
{
echo "<tr>";
echo '<td>' . $row[1]  . '</td>';
echo '<td>' . $row[6]  . '</td>';
echo '<td>' . $row[7] . '</td>';
echo '<td>' . $row[10] . '</td>';
echo '<td>' . $row[11] . '</td>';
echo '<td>' . $row[12] . '</td>';
echo '<td>' . $row[13] . '</td>';
echo '<td>' . $row[14] . '</td>';
echo '<td>' . $row[15] . '</td>';
echo '<td>' . $row[16] . '</td>';
echo '<td>' . $row['Total']. '</td>';
if($row[10] == '1st Unit' || $row[10] == '2nd Unit' || $row[10] == '3rd Unit' || $row[10] == '4th Unit'){
  echo '<td>' . $row['Percentage']. '</td>';
}else{
  echo '<td>' . $row['Percent']. '</td>';
}
echo '<td><b><a href="editmarks.php?id=' . $row['id'] . '">Edit</a></b></td>';
echo '<td><b><a href="Deletemarks.php?id=' . $row['id'] . '">Delete</a></b></td>';
echo "</tr>";
}

echo "</table>";
?>
  </center>
</body>
</html>
