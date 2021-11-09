<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
	    <title>Register</title>
		<!-- Loads the css code needed to add style to each page, changing this file would have an impact on all pages-->
	    <link href="css/style.css" rel="stylesheet">
	</head>
    <body>
		<h1 class="game_Title" align="center">+3</h1>
		<!-- Navigation bar provides the ability to change pages-->
	    <div class="navbar">
            <ul>
            <li><a href="index.php">Home</a></li>
            <li><a class="active" href="Register.php">Register</a></li>
		    <li><a href="Login.php">Login</a></li>
            </ul>
		</div>
		
		<!--Register Form-->
		<div class="registerForm">
		    <h1 align="center"> Register to be a +3 player</h1>
		    <form action="Register.php" method="post">					
			    <label for="name">Full Name</label>
                <input type="text" name="name" placeholder="Enter Name">
				<label for="Email">Email Address</label>
                <input type="text" name="Email" placeholder="Enter Email Address">
				<label for="phoneNum">Phone Number</label>
                <input type="text" name="phoneNum" placeholder="Enter Phone Number">
                <label for="psw">Password</label>
                <input type="password" name="psw" placeholder="Enter Password">
                <label for="pswConfirm">Confirm Password</label>
                <input type="password" name="pswConfirm" placeholder="Confirm Password">
				<p>Already a member? <a href="Login.php">Log in here</a></p>
				<input type="submit" name="reg_Player">
            </form>
	    </div>
    </body>
</html>

