<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
	    <title>Home</title>
		<!-- Loads the css code needed to add style to each page, changing this file would have an impact on all pages-->
	    <link href="css/style.css" rel="stylesheet">
	</head>
    <body>
		<h1 class="game_Title" align="center">+3</h1>
		<!-- Navigation bar provides the ability to change pages-->
	    <div class="navbar">		
        <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="Register.php">Register</a></li>
		<li><a href="Login.php">Login</a></li>
        </ul>
		</div>
		<h1 class="aston_Title" align="center"> The Newest Card Game Launching Soon....</h1>
		
		<!--Slideshow template used from w3schools.com-->		
		<div class="slideshow-container">
			<div class="mySlides fade">
				<img src="Images/cards.jpg" alt="Cards" style="width:750px;height:400px;float:center;">
			</div>
			<div class="mySlides fade">
				<img src="Images/card_game.jpg" alt="Card Game" style="width:750px;height:400px;float:center;">
			</div>
			<div class="mySlides fade">
				<img src="Images/coming_soon.jpg" alt="Coming Soon"style="width:750px;height:400px;float:center;">
			</div>
			<div style="text-align:center">
				<span class="dot"></span> 
				<span class="dot"></span> 
				<span class="dot"></span>
            </div>	
		</div> 
	
    </body>
	<!--Allows JavaScript to run for relevant functions-->
	<script src="JavaScript/script.js"></script>
</html>

