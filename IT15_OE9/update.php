<?php
    require_once('connect.php');

    if(isset ($_POST['update'])){
       
        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $gender = $_POST['gender']; 
        $email = $_POST['email'];
        $birthdate = $_POST['birthdate'];
        $address = $_POST['address']; 
        $id = $_GET['id'];
      
        $pass = $_POST['pass'];
        $query = "UPDATE users_tbl SET first_name ='$firstname', last_name ='$lastname', birthdate = '$birthdate', email='$email', address =' $address', pass='$pass' WHERE id=$id ";

        $result = $con->query($query);
     
        if($result == TRUE){ 
            echo "<script> alert('Record successfully updated...') </script>";
            
            
        }else{
            echo "<script> alert('Error updating...') </script>".$con->error;
        }
    }
        
    if(isset($_GET['id'])){
        $id = $_GET['id']; 

        //query
        $q = "SELECT * FROM users_tbl WHERE id = '$id' "; 

        //execute the query
        $result = $con->query($q);

        if( $result -> num_rows > 0){
            while($row = $result->fetch_assoc()){
                $firstname = $row['first_name' ];
                $lastname = $row['last_name'];
                $gender = $row['gender'];
            
                $email = $row['email'];
                $birthdate = $row['birthdate'];
                $address = $row['address'];
            }
?>

<!-- HTML form to update the single student record -->
<html>
<head>
    <title>Student record list</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
    <body>
        <div class="container">
        <h3> Update Student Record</h3>
        <form action="" method="post">
            <fieldset>
                <legend>Student information:</legend>
                First Name: <input type="text" name="first_name" value="<?php echo $firstname?>" ></br></br>
                Last Name: <input type="tet" name="last_name" value="<?php echo $lastname?>"></br></br>
                Email: <input type="text" name="email" value="<?php echo $email?>"></br></br>
                Date of Birth: <input type="date" name="birthdate" value="<?php echo $birthdate?>"></br></br>
                Address: <input type="text" name="address" value="<?php echo $address?>"></br></br>
                Password: <input type="text" name="pass" value="<?php echo $pass?>"></br></br>
                <input type = "submit" value = "Update" name = "update">
            </fieldset>
        </form>
        </div>
    </body>
</html>

<?php

        }
         else{
              header ('Location: view.php');
         }
        }
?>