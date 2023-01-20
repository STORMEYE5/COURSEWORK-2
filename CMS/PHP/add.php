<?php
	
include("common.php");

output_header("Add product");
output_styles("add.css");
output_header2();
outputNav();
output_header3();

?>

		<h1 > Add Product: </h1>
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
            <form id ="Model">
                <!-- <label>Model: </label> -->
                <input type="text" id="model" placeholder="MODEL">
                <br><br>
            </form>
			
            <form id ="PId">
                <!-- <label>Product ID: </label> -->
                <input type="text" id="model" placeholder="PRODUCT ID">
                <br><br>
            </form>
			
            <form id ="price">
                <!-- <label>Price: </label> -->
                <input type="text" id="model" placeholder="PRICE">
                <br><br>
            </form>
			
			<div class="AddButton">
				<button type="submit">Add product</button>
			</div>
        </div>

<?php

output_footer();