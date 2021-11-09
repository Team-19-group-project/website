<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<!-- Loads the css code needed to add style to each page, changing this file would have an impact on all pages-->
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>	    
		<h1 class="game_Title" align="center">+Three</h1>
		<!-- Navigation bar provides the ability to change pages-->
		<div class="navbar">
            <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="Register.php">Register</a></li>
		    <li><a class = "active"href="Login.php">Login</a></li>
            </ul>
		</div>
		
		<!--Login Form-->
		<div class="login">
			<h1>Login to +Three</h1>
			<form action="Login.php" method="post">
			    <label for="username">Username</label> 
				<input type="text" name="username" placeholder="Enter Username">
				<label for="psw">Password</label>
				<input type="password" name="psw" placeholder="Enter Password">
				<p>Not registered? <a href="Register.php">Sign up here</a></p>
				<input type="submit"  name = "login_User">
			</form>
		</div>
	</body>
</html>