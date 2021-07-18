<?php
function valid($id, $Name, $Phone_No, $Gender, $Mail_Id, $Roll_No, $Std, $error)
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

<p>Name</p>
<input type="text" name="Name" value="<?php echo $Name; ?>" />

<p>Phone_No</p>
<input type="number" name="Phone_No" value="<?php echo $Phone_No; ?>" />

<p>Gender</p>
<input type="text" name="Gender" value="<?php echo $Gender; ?>" />

<p>Mail_Id</p>
<input type="email" name="Mail_Id" value="<?php echo $Mail_Id; ?>" />

<p>Roll_No</p>
<input type="number" name="Roll_No" value="<?php echo $Roll_No; ?>" />

<p>Std</p>
<input type="number" name="Std" value="<?php echo $Std; ?>" />

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
$Name = $_POST['Name'];
$Phone_No = $_POST['Phone_No'];
$Gender = $_POST['Gender'];
$Mail_Id = $_POST['Mail_Id'];
$Roll_No = $_POST['Roll_No'];
$Std = $_POST['Std'];


if ($Name == '' || $Phone_No == '' || $Gender == '' || $Mail_Id == '' || $Roll_No == '' || $Std == '')
{

$error = 'ERROR: Please fill in all required fields!';


valid($id, $Name, $Phone_No,$Gender,$Mail_Id, $Roll_No, $Std, $error);
}
else
{

mysqli_query($conn, "UPDATE student SET Name='$Name', Phone_No='$Phone_No', Gender='$Gender' , Mail_id='$Mail_Id', Roll_No='$Roll_No', Std='$Std'  WHERE id='$id'");

header("Location: StudentDetails.php");
}
}
}
else
{

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM student WHERE id=$id");
$row = mysqli_fetch_array($result);

if($row)
{
$Name = $row['Name'];
$Phone_No = $row['Phone_No'];
$Gender = $row['Gender'];
$Mail_Id = $row['Mail_Id'];
$Roll_No = $row['Roll_No'];
$Std = $row['Std'];
valid($id, $Name, $Phone_No, $Gender, $Mail_Id, $Roll_No, $Std,'');
}
}
}
?>
