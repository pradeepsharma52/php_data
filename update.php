<?php 
include "config.php";
    if (isset($_POST['edit'])) {
        $name = $_POST['name'];
        $id = $_POST['id'];
        $email = $_POST['email'];
        $contact=$_POST['contact'];
        $gender = $_POST['gender']; 
        $sql = "UPDATE student_data SET `name`='$name',`email`='$email',contact='$contact',`gender`='$gender' WHERE `id`='$user_id'"; 
        $result = $conn->query($sql); 
        if ($result == TRUE) {
            echo "Record updated successfully.";
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    } 
if (isset($_GET['id'])) {
    $id = $_GET['id']; 
    $sql = "SELECT * FROM student_data WHERE id='$id'";
    $result = $conn->query($sql); 
    if ($result->num_rows > 0) {        
        while ($row = $result->fetch_assoc()) {
            $first_name = $row['name'];
            $email = $row['email'];
            $contact = $row['contact'];
            $gender = $row['gender'];
            $id = $row['id'];
        } 
    ?>
        <h2>User Update Form</h2>
        <form action="" method="post">
          <fieldset>
            <legend>Personal information:</legend>
            First name:<br>
            <input type="text" name="name" value="<?php echo $first_name; ?>">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <br>
            Email:<br>
            <input type="email" name="email" value="<?php echo $email; ?>">
            <br>
            Contact:<br>
            <input type="text" name="contact" value="<?php echo $contact; ?>">
            <br>
            Password:
            <br>
            Gender:<br>
            <input type="radio" name="gender" value="Male" <?php if($gender == 'Male'){ echo "checked";} ?> >Male
            <input type="radio" name="gender" value="Female" <?php if($gender == 'Female'){ echo "checked";} ?>>Female
            <br><br>
            <input type="submit" value="Update" name="update">
          </ieldset>
        </form> 
        </body>
        </html> 
    <?php
    } else{ 
        header('Location: view.php');
    } 
}
?> 