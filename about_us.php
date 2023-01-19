<?php
// include common.php as it contains the header and footer... website has a constant header and footer throughout

include ('common.php');
$title = "About Us";
//Ouputs the header for the page and opening body tag

outputHeader($title);
outputNav();
?>
<!-- content of about us page -->
    <div class="abtus">
        <!-- adding an image to make it look more appealing -->
        <div class="photo">
            <img src="media/abtlogo.avif">
            <div class="about-text">
                <!-- heading and details on the game -->
                <h1><strong>About Us</strong></h1>
                <p>If you would like to experience the best of online shopping in Mauritius, 
                    you are at the right place. KartFlip is the ultimate destination for Tech, being host to a wide array of merchandise. 
                    It is time to redefine your style statement with our treasure-trove of trendy tech items.
                    You can shop online at KartFlip from the comfort of your home and get your order delivered right to your doorstep.</p>
            </div>

        </div>
    </div>
<?php
OutputFooter();
?>