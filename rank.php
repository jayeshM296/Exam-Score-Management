<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display ranks</title>
  </head>
  <body>
    <center>
      <p><a href="index.html">Home</a></p>
    <form action="postrank.php" method="post">
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
    </select>
    <br>
    <button type="submit" name="submit">Submit</button>
    </form>
   </center>
    </body>
    </html>
