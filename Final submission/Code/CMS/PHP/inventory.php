<?php
	
include("common.php");

output_header("Product details");
output_styles("inventory.css");
output_header2();
outputNav();
output_header3();

?>
<div class="container">
	<h1>Product Details </h1>

	<button id="update_button">UPDATE</button>
	
	<table id="prod_table" height= "50%" width = "100%" border = "5" cellspacing="10" align = "right" color=D56653 >
			<tr>
				<td colspan="5" bgcolor = "black" align = "center"> Products </td>
			</tr>
			<tr>
				<td>--Product ID-- </td>
				<td>--Section-- </td>
				<td>--Model-- </td>
				<td>--Stock-- </td>
				<td>--Price-- </td>
			</tr>			
		</table>

</div>

	<div class="form_container">
		<form id="search_form">
			<input type="text" id="product_id" placeholder="PRODUCT ID" autocomplete="off">
			<button id="close_form">
				X
			</button>
		</form>
		<button type="submit" id="submit_btn" style="justify-content: center;">Submit</button>
	</div>

	<script src="../JavaScript/inventory.js"></script>

<?php

output_footer();