<?php
	//Include the PHP functions to be used on the page
	include("common.php");

	// Output header
	output_header("Login");
    // Output style sheet
	output_styles("login.css");
?>

	<!-- Contents of page -->
	<body style="background-image: url('../Assets/background.jpg');" width: 100%; height: 100%;>
	<h1> KartFlip </h1>
	<div id="Login">
		<h2 id = "wel">  Login </h2>
	</div>
	<div class="form_container">
		<!-- Input box asking for username -->
		<form id ="f1">
			<input type="text" id="username" placeholder="USERNAME">
			<br><br>
		</form>

		<!-- Input box asking for password -->
		<form id ="f2">
			<input type="password" id="password" placeholder="PASSWORD">
			<br><br>
		</form>
		
		<div class="LButton">
			<button type="submit">Login</button>
		</div>
	</div>
		
<?php
    // Output footer
	output_footer();