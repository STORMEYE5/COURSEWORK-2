<?php
	//Include the PHP functions to be used on the page
    include("common.php");

    // Output header
    output_header("Add product");
    // Output style sheet
    output_styles("add.css");
    output_header2();
    // Output navigation bar
    outputNav();
    output_header3();
?>
    <!-- Contents of page -->
    <h1 > Add Product: </h1>

    <!-- Section selector -->
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
            <input type="text" id="model" placeholder="MODEL">
            <br><br>
        </form>
        
        <form id ="PId">
            <input type="text" id="model" placeholder="PRODUCT ID">
            <br><br>
        </form>
        
        <form id ="price">
            <input type="text" id="model" placeholder="PRICE">
            <br><br>
        </form>
        
        <div class="AddButton">
            <button type="submit">Add product</button>
        </div>
    </div>

<?php
    // Output footer
    output_footer();
    