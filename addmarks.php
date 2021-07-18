<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add Student Marks</title>
  </head>
  <body>
    <center>
      <p><a href="index.html">Home</a></p>
      <h2>Add new Student Marks</h3>
        <h3>NOTE: For Unit Test marks are out of 20 and for Semester marks are out of 100</h3>
      <form action="" method="post">
        <p>Enter Std</p>
        <input type="number" name="Std" min="0" max="10" placeholder="Enter Standard">
        <p>Enter Roll Number</p>
        <input type="number" name="Roll_No" placeholder="Enter Roll No">
        <p>Select Test Type</p>
        <select id="TestType" name="TestType">
        <option value="0">--Select Test Type--</option>
        <option value="1st Unit">1st Unit </option>
        <option value="2nd Unit">2nd Unit</option>
        <option value="3rd Unit">3rd Unit</option>
        <option value="4th Unit">4th Unit</option>
        <option value="1st Sem">1st Sem</option>
        <option value="2nd Sem">2nd Sem</option>
        </select>
        <p>Enter Hindi Marks</p>
        <input type="number" name="Hindi" placeholder="Enter Hindi marks" min="0" max="100">
        <p>Enter Marathi Marks</p>
        <input type="number" name="Marathi" placeholder="Enter Marathi marks" min="0" max="100">
        <p>Enter Maths Marks</p>
        <input type="number" name="Maths" placeholder="Enter Maths marks" min="0" max="100">
        <p>Enter Science Marks</p>
        <input type="number" name="Science" placeholder="Enter Science Marks" min="0" max="100">
        <p>Enter Social Studies Marks</p>
        <input type="number" name="Social_Studies" placeholder="Enter Social studies marks" min="0" max="100">
        <p>Enter English marks</p>
        <input type="number" name="English" placeholder="Enter English marks" min="0" max="100">
        <br>
        <button name="submit">Submit</button>
      </form>
    </center>
    <?php
      require 'connection.php';
      if (isset($_POST['submit']))
         {
             $Std            = $_POST['Std'];
             $Roll_No        = $_POST['Roll_No'];
             $TestType       = $_POST['TestType'];
             $Hindi          = $_POST['Hindi'];
             $Marathi        = $_POST['Marathi'];
             $Maths          = $_POST['Maths'];
             $Science        = $_POST['Science'];
             $Social_Studies = $_POST['Social_Studies'];
             $English        = $_POST['English'];

             $result_1 = mysqli_query($conn, "SELECT * FROM marks WHERE Roll_No='$Roll_No' AND Std='$Std' AND TestType='$TestType'");
             $count = mysqli_num_rows($result_1);
             if($count == 0)
             {
             $query = "INSERT INTO marks(TestType,Hindi,Marathi,Maths,Science,Social_Studies,English,Roll_No,Std)
             VALUES('$TestType','$Hindi','$Marathi','$Maths','$Science','$Social_Studies','$English','$Roll_No','$Std')";
             if (mysqli_query($conn, $query))
                 {
                 header("Location: Studentmarks.php");
                 }
                 else
                 {
                 header("Location: Studentmarks.php");
                 }
              }
              else
               {
                  echo "<center><b>The student marks for $TestType with roll number $Roll_No in standard $Std is already present</b></center>" ;
               }
         }
     ?>
  </body>
</html>
