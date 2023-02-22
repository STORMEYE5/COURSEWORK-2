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
    <link rel="stylesheet" href="../CSS/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/277bace957.js" crossorigin="anonymous"></script>
    <script src="../JavaScript/common.js"></script>
    </head>
    <body>
        <header>
            <div class="header">
                <div class="container">
                    <div class="navibar">
                        <div class="icon">
                            <h2 class="logo"><span>Kart</span>Flip</h2>
                        </div>
                        <div class="fas fa-search" id = "searchbutton" onclick="search_product()"></div>
                        <div class="fas fa-shopping-cart" id = "cartbutton" onclick="display_personal_cart()"></div>
                        <div class="fas fa-user" id="profile-icon" onclick="check_login()"></div>
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
            <div class="icons">
                <a href="#" class="icon facebook">
                  <span><i class="fab fa-facebook-f"></i></span>
                </a>
                <a href="#" class="icon twitter">
                  <span><i class="fab fa-twitter"></i></span>
                </a>
                <a href="#" class="icon instagram">
                  <span><i class="fab fa-instagram"></i></span>
                </a>
            </div>
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
