<?php

// Function to output first part of header
function output_header($title){
    echo <<< END
<!DOCTYPE html>
<html>
    <header>
    <title>$title</title>
END;
}

// Function to output the styles list
function output_styles($styles){
    echo <<< END
    link rel="stylesheet" type="text/css" href="../CSS/$styles";
END;
}

// Function to output the second part of the header
function output_header2(){
    echo <<< END
    <nav class="navbar">
        <ul>
END;
}

// Function to output the navigation bar
function outputNav()
{
    //Array of pages to link to
    $navname = array("View/Delete orders","Delete product","Add product","View all products");
    $navLinks = array("order.php","delete.php","add.php","inventory.php");
    echo '<ul>';
    // output navigation
    $count = 0;
    foreach ($navLinks as $linkName) {
        echo <<< END
        <li><a href="$linkName"> $navname[$count]</a></li>;
END;
        $count++;
    }
}

// Function to output the third part of the header
function output_header3(){
    echo <<< END
                <div class="login">
                    <a>KartFlip</a>
                </div>
            </ul>
        </nav>
    </header>
    <body style="background-image: url('../Assets/background.jpg');" width: 100%; height: 100%;>
END;
}

// Function to output the footer of the page
function output_footer(){
    echo <<< END
        <div class="footer">
			<h4>~Page is accessible to staff only~</h4>
		    <a class="copyright"> Copyright © 2023 KartFlip. All Rights Reserved.</a>
		</div>
	</body>
</html>
END;
}
