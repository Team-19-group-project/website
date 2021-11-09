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
		
		<div class="grid-container">
			<div class="cards">
				<h1 class="aston_Title" align="center">Rules of the Game</h1>
				<p>Age: 16+</p>
				<p>Maximum Players: 4</p>
				<button class="collapsible">More information</button>
	            <div class="collapsible_content" style="display: none;">
		            <p>- Playable online</p>
					<p>- 100 cards to play with</p>
					<p>- Each player has 8 cards</p>
		        </div>
		    </div>
			<div class="img">
			    <img src="Images/shuffled_cards.jpeg" alt="Deck of shuffled cards" style="width:300px;height:250px; display: block; margin-left: auto; margin-right: auto; padding-top: 30px">
		    </div>
		</div>
		
		<div class="grid-container">
			<div class="cards">
				<h1 class="aston_Title" align="center">Odd Number thrown</h1>
				<button class="collapsible">More information</button>
	            <div class="collapsible_content" style="display: none;">
		            <p> A player cannot throw the same number and it must be an even number, that is greater or lower by 1 For example, if 5 is thrown 4 or 6 can be thrown</p>
		        </div>
		    </div>
			<div class="img">
			    <img src="Images/5_card.png" alt="5 Of Spades" style="width:300px;height:250px; display: block; margin-left: auto; margin-right: auto; padding-top: 30px">
		    </div>
		</div>
		
		
		
		
		
	
    </body>
	<!--Allows JavaScript to run for relevant functions-->
	<script src="JavaScript/script.js"></script>
</html>

