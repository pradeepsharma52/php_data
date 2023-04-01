<?php 
include "config.php";
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $contact=$_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $sql = "INSERT INTO student_data(name, email, contact, gender) VALUES ('$name','$email','$contact','$gender')";
    $result = $conn->query($sql);
    if ($result == TRUE) {
      echo "New record created successfully.";
    }else{
      echo "Error:". $sql . "<br>". $conn->error;
    } 
    $conn->close(); 
  }
?>
<!DOCTYPE html>
<html>
<body>
<h2>student data</h2>
<form action="" method="POST">
  <fieldset>
    <legend>Personal information:</legend>
    First name:<br>
    <input type="text" name="name">
    <br>
    Email:<br>
    <input type="email" name="email">
    <br>
    contact: <br>
    <input type="contact" name="contact"><br>
    Password:<br>
    <input type="password" name="password">
    <br>
    Gender:<br>
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
    <br><br>
    <input type="submit" name="submit" value="submit">
  </fieldset>
</form>
</body>
</html>