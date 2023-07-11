<?php 

    $host = "localhost";	
    $user = "root";
    $password = "";
    $database = "isp_sample";
    $port = "3306";

	$link = mysqli_connect($host,$user,$password,$database);
	if (!$link) 
    {
    die("Connection failed: " . mysqli_connect_error());
    }

?>