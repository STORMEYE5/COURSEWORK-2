<?php
//Ouputs the header for the page

function outputHeader($title)
{
    echo '
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>'.$title.'</title>
    <link rel="stylesheet" href="style.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/277bace957.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="header">
            <div class="container">
                <div class="navibar">
                    <div class="icon">
                        <h2 class="logo"><span>Kart</span>Flip</h2>
                    </div>
                    <div class="fas fa-search" id = "searchbutton"></div>
                    <div class="fas fa-shopping-cart" id = "cartbutton"></div>

                
            </div>    

                    <nav>

                    

    ';
}

/* Ouputs the navigation bar
    The selected class is applied to the page that matches the page name variable */
function outputNav()
{
    //Array of pages to link to
    $navname = array("Home","Products","Login","Sign Up");
    $navLinks = array("index.php","products.php","login.php","sign_up.php");
    echo '<ul>';
    // output navigation
    $count = 0;
    foreach ($navLinks as $linkName) {
        echo '<li><a href="'. $linkName. '">'. $navname[$count].'</a></li>';
        $count++;
    }
    echo '</ul>
    </nav>
</div>
</div>

</div>
</header>';
        
}
// output footer
function outputFooter()
{
    echo '
    <footer>
        <div class="footer-content">
            <h3><span>Kart</span>Flip</h3>
            <p>Use Secure Sites: It is proper netiquette to use secure websites whenever possible.</p>
            <ul class="socials">
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
            </ul>
        </div>
        <div class="abt">
            <a href="about_us.php" class="aboutpage">About Us</a>
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy; 2022 KartFlip Designed by <strong>Web Group</strong></p>
 
        </div>
    </footer>
 </body>
 </html>';
}


?>
