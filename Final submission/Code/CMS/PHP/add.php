<?php
	
include("common.php");

output_header("Add product");
output_styles("add.css");
output_header2();
outputNav();
output_header3();

?>

		<h1 > Add Product: </h1>
		
	    <!-- Input box asking for model -->
        <div class="form_container">
            <form id="form" action="add_backend.php" method="post">
                <div class="container">
                    <label for="section">Section :</label>

                    <select name="section" id="section">
                        <option value="Television">Television</option>
                        <option value="Phone">Phone</option>
                        <option value="Speaker">Speaker</option>
                    </select>
                </div>
                <!-- <label>Image: </label> -->
                <input type="text" name="image" id="model" placeholder="IMAGE LINK">
                <br><br>
                
                <!-- <label>Model: </label> -->
                <input type="text" name="model" id="model" placeholder="MODEL">
                <br><br>
                
                <!-- <label>Product ID: </label> -->
                <input type="text" name="id" id="PId" placeholder="PRODUCT ID">
                <br><br>
            
                <!-- <label>Price: </label> -->
                <input type="number" name="price" id="price" placeholder="PRICE">
                <br><br>

                <!-- <label>Price: </label> -->
                <input type="number" name="quantity" id="quantity" placeholder="QUANTITY">
                <br>
            
                <div class="AddButton">
                    <button id="btn_submit" type="submit">Add product</button>
                </div>
            </form>
        </div>

        <script src="../JavaScript/add.js"></script>

<?php

output_footer();