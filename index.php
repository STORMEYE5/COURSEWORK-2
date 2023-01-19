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
        <!-- video being played with a brief demo of the game -->
        <!-- <div class="videowrap">
            <iframe src="media/video.mp4" type="video/mp4" controls width = "800" height="550"></iframe>
        </div> -->
        <!-- heading and "play game" button -->
        <div class="para">
            <h3>Welcome to KartFlip. Your Favourite Shopping Website.</h3>
            <!-- <a href="game.php" class="button">Play Game</a> -->
        </div>
    </div>

<?php
    //Output the footer

OutputFooter();
?>
