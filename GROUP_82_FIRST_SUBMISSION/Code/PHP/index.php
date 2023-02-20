<?php
    // include common.php as it contains the header and footer... website has a constant header and footer throughout
    include ('common.php');

    //Ouputs the header for the page and opening body tag
    //Output header and navigation 
    outputHeader("KartFlip");
    outputNav();
?>

    <!-- Content of home page -->
    <div class="home"> 
        <div class="para">
            <h3>Welcome to KartFlip. Your Favourite Shopping Website.</h3>
        </div>
    </div>

    <!-- Image recommendations -->
    <div class="slider">
        <div class="images">
            <input type="radio" name="slide" id="img1" checked>
            <input type="radio" name="slide" id="img2">
            <input type="radio" name="slide" id="img3">
            <input type="radio" name="slide" id="img4">

            <img src="../media/80per.jpg" class="m1" alt="img1" style="width: 700px;height:400px;">
            <img src="../media/laptop.webp" class="m2" alt="img2" style="width:700px;height:400px;">
            <img src="../media/phone.jpg" class="m3" alt="img3" style="width:700px;height:400px;">
            <img src="../media/speaker.jpg" class="m4" alt="img4" style="width:700px;height:400px;">
        </div>
        <div class="dots">
            <label for="img1"></label>
            <label for="img2"></label>
            <label for="img3"></label>
            <label for="img4"></label>
        </div>
    </div>

<?php
    //Output the footer
    OutputFooter();
?>