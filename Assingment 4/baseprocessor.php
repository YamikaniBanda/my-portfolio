<?php
session_start();
$host='localhost';
$username='root';
$password='';
$dbname='mybase';
$conn = mysqli_connect($host,$username,$password,$dbname) or die("unable to connect to database" .mysqli_error($conn));


if(isset($_POST['reg_friend'])){
$studentid=$_POST['studentid'];
$username=$_POST['studentname'];
$projectid=$_POST['projectid'];
$skills=$_POST['skills'];
$contactdetails=$_POST['contactdetails'];
$password=$_POST['password'];
$_SESSION['id'] = $studentid;


	$query="INSERT INTO friend(studentid,studentname,password,sessionid) VALUES('$studentid','$username','$password',{$_SESSION['id']})";
	$result=mysqli_query($conn,$query) or die("Data entry failed" .mysqli_error($conn));
	

	if($result){
		echo "registration successful";
	}
}


?>