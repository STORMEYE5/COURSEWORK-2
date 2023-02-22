<?php

function output_header($title){
    echo <<< END
<!DOCTYPE html>
<html>
    <header>
    <title>$title</title>
END;
}

function output_styles($styles){
    echo '<link rel="stylesheet" type="text/css" href="../CSS/'.$styles.'">';
    echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>';
}

function output_header2(){
    echo <<< END
    <nav class="navbar">
            <ul>
END;
}
                
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
