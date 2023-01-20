<?php
	
include("common.php");

output_header("Delete product");
output_styles("delete.css");
output_header2();
outputNav();
output_header3();

?>
	
	<h1 > Delete Product: </h1>
		<div class="container">
			<label for="section">Section :</label>

			<select name="section" id="section">
			  <option value="Television">Television</option>
			  <option value="Phone">Phone</option>
			  <option value="Speaker">Speaker</option>
			</select>
		</div>
		
	    <!-- Input box asking for model -->
		<div class="form_container">			
			    <form id ="PId">
                <!-- <label>Product ID: </label> -->
                <input type="text" id="model" placeholder="PRODUCT ID">
                <br><br>
            </form>
			
			<div class="DeleteButton">
				<button type="submit">Delete product</button>
			</div>
		</div>
			
<?php

output_footer();