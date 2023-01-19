<?php
// include common.php as it contains the header and footer... website has a constant header and footer throughout

include ('common.php');
$title = "Game Page";
//Ouputs the header for the page and opening body tag

outputHeader($title);
outputNav();
?>
<!-- heading of game page -->
<div class="howtoplay">
        <!-- details on how to play game -->
        <h1><strong>How to Play The Game</strong></h1>
        <p>The player should be clicking on the Play Game button on the Home page. <br>
            Then the latter is redirected to the main game page. <br>
            The player is expected to control the movement of the spaceship using the W, A, D & K keys . <br>
            W - To move in the Upwards direction<br>
            A - To move to the left<br>
            D -  To move to the right<br>
            K - To fire the bullets and shoot asteroids<br>
        </p>
    </div>
    <div class="block-glow">
        <canvas id="gameCanvas" width="760" height="570"></canvas>
        <!-- <h1>This is My Game Page</h1> -->
    </div>


    
    <script type="module" src="game.js"></script>
<?php
OutputFooter();
?>
