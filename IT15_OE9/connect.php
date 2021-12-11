<?php

DEFINE('DB_HOST', 'localhost');
DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', '');
DEFINE('DB_NAME', 'it15_database');

 $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die ("Could not connect to Database");

?>