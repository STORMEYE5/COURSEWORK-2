<?php
	//Include the PHP functions to be used on the page	
	include("common.php");

	// Output header
	output_header("Delete product");
	// Output style sheet
	output_styles("delete.css");
	output_header2();
	// Output navigation bar
	outputNav();
	output_header3();
?>
	<!-- Contents of page -->
	<h1 > Delete Product: </h1>		
	    <!-- Input box asking for model -->
		<div class="form_container">			
			<form id ="PId">
                <input type="text" id="model" placeholder="PRODUCT ID">
                <br><br>
            </form>
			
			<div class="DeleteButton">
				<button type="submit">Delete product</button>
			</div>
		</div>
			
<?php
	// Output footer
	output_footer();