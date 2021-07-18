<?php
function valid($id, $TestType, $Hindi, $Marathi, $Maths, $Science, $Social_Studies, $English, $Roll_No, $Std, $error)
{
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Edit Records</title>
</head>
<body>

<form action="" method="post">
  <center>
<input type="hidden" name="id" value="<?php echo $id; ?>"/>

<h3>Edit Records</h3>

<p>Enter Standard</p>
<input type="number" name="Std" min="0" max="10" value="<?php echo $Std; ?>"/>

<p>Enter Roll No</p>
<input type="number" name="Roll_No" value="<?php echo $Roll_No; ?>"/>

<p>TestType</p>
<input type="text" name="TestType" value="<?php echo $TestType; ?>" />

<p>Hindi</p>
<input type="number" name="Hindi" min="0" max="100" value="<?php echo $Hindi; ?>" />

<p>Marathi</p>
<input type="number" name="Marathi" min="0" max="100" value="<?php echo $Marathi; ?>" />

<p>Maths</p>
<input type="number" name="Maths" min="0" max="100" value="<?php echo $Maths; ?>" />

<p>Science</p>
<input type="number" name="Science" min="0" max="100" value="<?php echo $Science; ?>" />

<p>Social_Studies</p>
<input type="number" name="Social_Studies" min="0" max="100" value="<?php echo $Social_Studies; ?>" />

<p>English</p>
<input type="number" name="English" min="0" max="100" value="<?php echo $English; ?>" />

<br>
<input type="submit" name="submit" value="Edit Records">

</center>
</form>
</body>
</html>
<?php
}
require 'connection.php';

if (isset($_POST['submit']))
{

if (is_numeric($_POST['id']))
{

$id = $_POST['id'];
$Std = $_POST['Std'];
$Roll_No = $_POST['Roll_No'];
$TestType = $_POST['TestType'];
$Hindi = $_POST['Hindi'];
$Marathi = $_POST['Marathi'];
$Maths = $_POST['Maths'];
$Science = $_POST['Science'];
$Social_Studies = $_POST['Social_Studies'];
$English = $_POST['English'];

if ($TestType == '' || $Hindi == '' || $Marathi == '' || $Maths == '' || $Science == ''
    || $Social_Studies == '' || $English == '' || $Roll_No == '' || $Std == '')
{

$error = 'ERROR: Please fill in all required fields!';


valid($id, $TestType, $Hindi, $Marathi, $Maths, $Science, $Social_Studies, $English, $Roll_No, $Std, $error);
}
else
{

mysqli_query($conn, "UPDATE marks SET TestType='$TestType', Hindi='$Hindi' , Marathi='$Marathi', Maths='$Maths', Science='$Science', Social_Studies='$Social_Studies', English='$English', Roll_No='$Roll_No', Std='$Std'  WHERE id='$id'");

header("Location: Studentmarks.php");
}
}
}
else
{

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM marks WHERE id=$id");
$row = mysqli_fetch_array($result);

if($row)
{
$Std = $row['Std'];
$Roll_No = $row['Roll_No'];
$TestType = $row['TestType'];
$Hindi = $row['Hindi'];
$Marathi = $row['Marathi'];
$Maths = $row['Maths'];
$Science = $row['Science'];
$Social_Studies = $row['Social_Studies'];
$English = $row['English'];

valid($id, $TestType, $Hindi, $Marathi, $Maths, $Science, $Social_Studies, $English, $Roll_No, $Std,'');
}
}
}
?>
