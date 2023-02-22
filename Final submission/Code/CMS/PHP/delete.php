<?php
	
include("common.php");

output_header("Delete product");
output_styles("delete.css");
output_header2();
outputNav();
output_header3();

?>
	
	<h1 > Delete Product: </h1>		
	    <!-- Input box asking for model -->
		<div class="form_container">			
			<form action="delete_backend.php" method="get" id ="PId">
                <!-- <label>Product ID: </label> -->
                <input type="text" name="id" id="model" placeholder="PRODUCT ID">
                <br><br>
				<div class="DeleteButton">
					<button type="submit">Delete product</button>
				</div>
            </form>
		</div>
			
<?php

output_footer();