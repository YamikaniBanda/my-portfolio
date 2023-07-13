<?php
session_start();
$dbname = new mysqli("localhost", "root", "","mybase");
 
if(isset($_POST['login_friend'])){
	
	$password = $_POST['password'];
	$username=  $_POST['studentname'];
	
$run = mysqli_query($dbname, "SELECT  `studentname`, `password` FROM `friends` WHERE `studentname`='$username' AND `password`='$password' ");


$row = mysqli_fetch_array($run);

$all_count = mysqli_query($dbname,"SELECT * FROM friends;");

$count = 0;


while($res_row = mysqli_fetch_assoc($all_count))
{
	$count++;
}

if($row['studentname'] == $username AND $row['password'] == $password){
						}

}

?>

<!DOCTYPE html>
<html>
	<head>
		<title> PROJECT INFO</title>
	</head>
	<body>
		<p> student ID: <?php echo $_SESSION['id'];?></p>
		<p> Welcome <?php echo $username;?></p>
		<p> Total users in the system <?php echo $count;?></p>
		<p> Your position is <?php echo$_SESSION['id'];?>
	</body>

</html>