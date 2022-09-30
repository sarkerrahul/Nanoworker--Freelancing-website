<?php

	

    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
	$DATABASE_HOST = 'localhost';
	$DATABASE_USER = 'root';
	$DATABASE_PASS = '';
	$DATABASE_NAME = 'phplogin';

    $con = mysqli_connect("localhost","root","","LoginSystem");

	   // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
