<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
	    <title>Home</title>
		<!-- Loads the css code needed to add style to each page, changing this file would have an impact on all pages-->
	    <link href="css/style.css" rel="stylesheet">
	</head>
    <body>
		<h1 class="game_Title" align="center">+Three</h1>
		<!-- Navigation bar provides the ability to change pages-->
	    <div class="navbar">		
        <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="Register.php">Register</a></li>
		<li><a href="Login.php">Login</a></li>
		<li><a href="about.php">About Us</a></li>
		<li><a href="download.php">Download</a></li>
        </ul>
		</div>
		<h1 class="aston_Title" align="center"> The Newest Card Game Launching Soon....</h1>
		
		<!--Slideshow template used from w3schools.com-->		
		<div class="slideshow-container">
			<div class="mySlides fade">
				<img src="Images/menu_game.jpeg" alt="Game Menu" style="width:750px;height:400px;float:center;">
			</div>
			<div class="mySlides fade">
				<img src="Images/gameplay.jpeg" alt="Gameplay" style="width:750px;height:400px;float:center;">
			</div>
			<div class="mySlides fade">
				<img src="Images/coming_soon.png" alt="Coming Soon"style="width:750px;height:400px;float:center;">
			</div>
			<div style="text-align:center">
				<span class="dot"></span> 
				<span class="dot"></span> 
				<span class="dot"></span>
            </div>	
		</div> 
		
		<h1 class="game_Title" align="center"> Rules of the game</h1>
		
		<div class="grid-container">
			<div class="cards">
				<h1 align="center">Layout of the game</h1>
				<p>Age: 16+</p>
				<p>Maximum Players: 2</p>
				<button class="collapsible">More information</button>
	            <div class="collapsible_content" style="display: none;">
		            <p>- Playable online</p>
					<p>- 100 cards to play with</p>
					<p>- Each player has 8 cards</p>
		        </div>
		    </div>
			<div class="img">
			    <img src="Images/game_table.png" alt="Game Table" style="width:300px;height:250px; display: block; margin-left: auto; margin-right: auto; padding-top: 30px">
		    </div>
		</div>
			
		<div class="grid-container">
			<div class="cards">
				<br>
				<br>
				<h1 align="center">Same Number & Same Colour</h1>
				<button class="collapsible">More information</button>
	            <div class="collapsible_content" style="display: none;">
		            <p> If you have cards with same numbers and same colour, you can throw all of them at once. But not if the colour or numbers are differents</p>
		        </div>
		    </div>
			<div class="img">
			    <img src="Images/yellow_5.png" alt="Yellow 5 card" style="width:300px;height:250px; display: block; margin-left: auto; margin-right: auto; padding-top: 30px">
		    </div>
		</div>
		
		<div class="grid-container">
			<div class="cards">
				<br>
				<br>
				<h1 align="center">Change Number card</h1>
				<button class="collapsible">More information</button>
	            <div class="collapsible_content" style="display: none;">
		            <p> If you throw a change number card, you can choose the number that you want, and if the other player doesn’t have it, they will have to pick one card and miss their turn</p>
		        </div>
		    </div>
			<div class="img">
			    <img src="Images/change_number.png" alt="Change number card" style="width:300px;height:250px; display: block; margin-left: auto; margin-right: auto; padding-top: 30px">
		    </div>
		</div>

		<div class="grid-container">
			<div class="cards">
				<br>
				<br>
				<h1 align="center">+Three Card</h1>
				<button class="collapsible">More information</button>
	            <div class="collapsible_content" style="display: none;">
		            <p> When you throw a +Three card you will have the power to choose the colour and number that you want, if the other player has the number and the colour you chose, then you will have to pick 2 cards and if they dont have it they will have to pick 3 cards, if the player doesn’t have another +3 card to stack</p>
		        </div>
		    </div>
			<div class="img">
			    <img src="Images/plus_3.png" alt="Plus 3 card" style="width:300px;height:250px; display: block; margin-left: auto; margin-right: auto; padding-top: 30px">
		    </div>
		</div>
	
    </body>
	<!--Allows JavaScript to run for relevant functions-->
	<script src="JavaScript/script.js"></script>
</html>

