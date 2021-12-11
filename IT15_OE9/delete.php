<?php 
require_once('connect.php');
if(isset($_GET['id'])){ 
    $id = $_GET['id'];

    $query = "DELETE FROM `users_tbl` WHERE id = '$id' LIMIT 1";
    $result = $con->query($query);

    if($result == TRUE){ 
echo "<script> alert('Student Record Successfully DELETED')</script>";  
     include('view.php');
    }else{
        echo "<script> alert('Error!')</script>".$con->error;

    }
}
?>