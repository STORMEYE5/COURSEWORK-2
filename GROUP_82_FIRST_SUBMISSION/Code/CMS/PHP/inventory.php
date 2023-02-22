<?php
	//Include the PHP functions to be used on the page
	include("common.php");

	// Output header
	output_header("Product details");
    // Output style sheet
	output_styles("inventory.css");
	output_header2();
    // Output navigation bar
	outputNav();
	output_header3();
?>
	<!-- Contents of page -->
	<h1>Product Details </h1>
	
	<!-- Table of products -->
	<table height= "50%" width = "100%" border = "5" cellspacing="10" align = "right" color=D56653 >
			<tr>
				<td colspan="5" bgcolor = "black" align = "center"> Products </td>
			</tr>
			<tr>
				<td>--Section-- </td>
				<td>--Model-- </td>
				<td>--Stock-- </td>
				<td>--Price(Rs)-- </td>
			</tr>
			<tr>
				<td> Phone </td>
				<td>Iphone 12 </td>
				<td>7</td>
				<td>89 000</td>
				
			</tr>	
			<tr>
				<td>  </td>
				<td> Samsung R8 </td>
				<td> 12 </td>
				<td>40 000</td>
			</tr>
			<tr>
				<td> </td>
				<td> Huawei Y9</td>
				<td> 9 </td>
				<td>9 000</td>
			</tr
			<tr>
				<td> Television </td>
				<td> Samsung LED </td>
				<td> 7 </td>
				<td>45 000</td>
			</tr>
			<tr>
				<td>  </td>
				<td> LG  </td>
				<td> 11 </td>
				<td>38 999</td>
			</tr>
			<tr>
				<td> Speaker </td>
				<td> JBL Partybox</td> 
				<td> 4 </td>
				<td>51 870</td>
			</tr>
			<tr>
				<td> </td>
				<td> Logitech Z101</td> 
				<td> 4 </td>
				<td> 6 000</td>
			</tr>
			
		</table>

<?php
    // Output footer
	output_footer();