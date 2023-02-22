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
	<form id="f1">
	<!-- Input box asking for username -->
		<!-- <label>Username: </label> -->
		<input type="text" name="username" id="username" placeholder="USERNAME">
		<br><br>

	<!-- Input box asking for password -->
		<!-- <label>Password : </label> -->
		<input type="password" name="password" id="password" placeholder="PASSWORD">
		<br><br>
	
	<div class="LButton">
		<button type="submit" id="submit">Login</button>
	</div>
	</form>
</div>

<script src="../JavaScript/login.js"></script>
		
<?php

output_footer();