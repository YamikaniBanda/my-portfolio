<!DOCTYPE html>
	<html>
		<header>
			<title>student REGISTRATION</title>
			<link rel="stylesheet" type="text/css" href="style.css">
		</header>
		<body>
			<div class="header"> <h2>REGISTER<h2> </div>
			<form method="post" action="studentprocessor.php">
				
			<div class="input-group"> 
				<label>student ID</label>
				<input type="text" name="studentid" > 
			</div>
			<div class="input-group"> 
				<label>student NAME</label>
				<input type="text" name="studentname" > 
			</div>
			<div class="input-group">
				<label>PASSWORD</label>
				<input type="password" name="password">
			</div>
			<div class="input-group">
				<label>CONFIRM PASSWORD</label>
				<input type="password" name="password">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="reg_student">sign up</button>
			</div>
			<p>friend already? <a href="login.php">SIGN IN</a></p>
				
			</form>
		</body>
	</html>