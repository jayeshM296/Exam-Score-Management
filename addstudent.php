<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add Student</title>
  </head>
  <body>
    <center>
      <p><a href="index.html">Home</a></p>
      <h3>Add new Student Details</h3>
      <form action="" method="post">
        <p>Enter Student Name</p>
        <input type="text" name="Name" placeholder="Enter Name">
        <p>Enter 10 digit Phone Number</p>
        <input type="text" name="Phone_No" pattern="[1-9]{1}[0-9]{9}" placeholder="Enter Phone_No">
        <p>Enter Gender</p>
        <select name="Gender">
          <option value="0">--Select Gender--</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
        <p>Enter Email Address</p>
        <input type="email" name="Mail_Id" placeholder="Enter Mail_Id">
        <p>Enter Roll Number</p>
        <input type="number" name="Roll_No" placeholder="Enter Roll_No">
        <p>Enter Standard Number</p>
        <input type="number" name="Std" placeholder="Enter Standard">
        <br>
        <button name="submit">Submit</button>
      </form>
    </center>
    <?php
      require 'connection.php';
      if (isset($_POST['submit']))
         {
             $Name     = $_POST['Name'];
             $Phone_No = $_POST['Phone_No'];
             $Gender   = $_POST['Gender'];
             $Mail_Id  = $_POST['Mail_Id'];
             $Roll_No  = $_POST['Roll_No'];
             $Std      = $_POST['Std'];
             $result_1 = mysqli_query($conn, "SELECT * FROM student WHERE Roll_No='$Roll_No' AND Std='$Std'");
             $count = mysqli_num_rows($result_1);
             if($count == 0)
             {
             $query = "INSERT INTO student(Name,Phone_No,Gender,Mail_Id,Roll_No,Std) VALUES('$Name','$Phone_No','$Gender','$Mail_Id','$Roll_No','$Std')";
                if (mysqli_query($conn, $query))
                 {
                 header("Location: StudentDetails.php");
                 }
                 else
                 {
                 header("Location: StudentDetails.php");
                 }
             }
             else
             {
                echo "<center><b>The student with roll number $Roll_No is already present in standard $Std</b></center>" ;
             }
         }
     ?>
  </body>
</html>
