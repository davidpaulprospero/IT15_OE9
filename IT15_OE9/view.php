<?php 
require_once('connect.php');
echo "<script>alert ('You are in view page')</script>";

$query = "SELECT * FROM users";

$result = $con->query($query);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Student Record List</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    </head>
    <body>
        <div class="container">
            <h1>Student Records</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Address</th>
                        <th>Registration Date</th>
                    </tr>
                </thead>
        </div>
    </body>

<?php
if($result->num_rows > 0 ){
    while($row = $result ->fetch_assoc()){ 
    ?>
    <tr>
        <td><?php echo $row['first_name']?></td>
        <td><?php echo $row['last_name']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['date_of_birth']?></td>
        <td><?php echo $row['addres']?></td>
        <td><?php echo $row['reg_date']?></td>
        <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id'];?>">Update</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
    </tr>
    <?php
    }
}
?>
</table>
</html>