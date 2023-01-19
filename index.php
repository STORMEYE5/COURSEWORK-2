<?php
// include common.php as it contains the header and footer... website has a constant header and footer throughout
include ('common.php');
$title = "KartFlip";
//Ouputs the header for the page and opening body tag
    
//Output header and navigation 
outputHeader($title);
outputNav();
?>
<!-- content of home page -->
    <div class="home"> 
        <div class="para">
            <h3>Welcome to KartFlip. Your Favourite Shopping Website.</h3>
        </div>
    </div>

<?php
    //Output the footer

OutputFooter();
?>
