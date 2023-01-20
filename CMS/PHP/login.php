<?php
	
include("common.php");

output_header("Login");
output_styles("login.css");

?>
<body style="background-image: url('../Assets/background.jpg');" width: 100%; height: 100%;>
<h1 > KartFlip </h1>
<div id="Login">
	<h2 id = "wel">  Login </h2>
</div>
<div class="form_container">
	<!-- Input box asking for username -->
	<form id ="f1">
		<!-- <label>Username: </label> -->
		<input type="text" id="username" placeholder="USERNAME">
		<br><br>
	</form>

	<!-- Input box asking for password -->
	<form id ="f2">
		<!-- <label>Password : </label> -->
		<input type="password" id="password" placeholder="PASSWORD">
		<br><br>
	</form>
	
	<div class="LButton">
		<button type="submit">Login</button>
	</div>
</div>
		
<?php

output_footer();