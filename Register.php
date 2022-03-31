<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
	    <title>Register</title>
		<!-- Loads the css code needed to add style to each page, changing this file would have an impact on all pages-->
	    <link href="css/style.css" rel="stylesheet">
		<script src="JavaScript/register.js"></script>
	</head>
    <body>
		<h1 class="game_Title" align="center">+Three</h1>
		<!-- Navigation bar provides the ability to change pages-->
	    <div class="navbar">
            <ul>
            <li><a href="index.php">Home</a></li>
            <li><a class="active" href="Register.php">Register</a></li>
		    <li><a href="Login.php">Login</a></li>
			<li><a href="about.php">About Us</a></li>
			<li><a href="download.php">Download</a></li>
            </ul>
		</div>
		
		<!--Register Form-->
		<div class="registerForm">
		    <h1 align="center"> Register to be a +Three player</h1>
		    <form>					
				<label for="name">Username</label>
                <input type="text" name="username" placeholder="Enter Username">
				<label for="Email">Email Address</label>
                <input type="text" name="Email" placeholder="Enter Email Address">
                <label for="psw">Password</label>
                <input type="password" name="psw" placeholder="Enter Password">
                <label for="pswConfirm">Confirm Password</label>
                <input type="password" name="pswConfirm" placeholder="Confirm Password">
				<p>Already a player? <a href="Login.php">Log in here</a></p>
				<button onclick="registerUser()">Register</button>
            </form>
	    </div>
    </body>
</html>

