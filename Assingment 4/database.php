<?php
	
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="mybase";
	
	
$conn = mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn){
		die("Connection failed:".mysqli_connect_error());
	}

$sql = "CREATE DATABASE mybase";
	if(mysqli_query($conn, $sql)){
		echo "Database is created successfully";}
	else{ echo "Error creating database:" .mysqli_error($conn);}

$sql = "CREATE TABLE friends(
			studentid INT(10) PRIMARY KEY,
			studentname VARCHAR(100) NOT NULL,
			projectid INT(10) NOT NULL,
			skills VARCHAR(100) NOT NULL,
			contactdetails VARCHAR(100) NOT NULL,
			password VARCHAR(100) NOT NULL,
			sessionid INT (10),
		)";
	
	if(mysqli_query($conn,$sql)){
		echo"Table created successfully";
	}
	else{echo"Error creating table:" .mysqli_error($conn);}
	mysqli_close($conn);
?>


