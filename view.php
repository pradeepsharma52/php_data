<?php 
include "config.php";
$sql = "SELECT * FROM student_data";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>student data view</h2>
<table class="table">
    <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>email</th>
        <th>Contact</th>
        <th>Gender</th>
    </tr>
    </thead>
    <tbody> 
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
        ?>
                    <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['contact']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                    </tr>                       
        <?php       }
            }
        ?>                
    </tbody>
</table>
    </div> 
</body>
</html>