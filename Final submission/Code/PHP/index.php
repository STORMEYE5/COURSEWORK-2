<?php
// include common.php as it contains the header and footer... website has a constant header and footer throughout
include ('common.php');
$title = "KartFlip";
//Ouputs the header for the page and opening body tag

//Output header and navigation 
outputHeader($title);
outputNav();
?>
<!-- content of home page
    <div class="home"> 
        <div class="para">
            <h3>Welcome to KartFlip. Your Favourite Shopping Website.</h3>
        </div>
    </div>

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
    </div> -->
  
<div style="position: relative; z-inex:1; top:100px">  
    <marquee direction="right" class ="re-title">! TOP 3 BEST SELLER !</marquee>
<div class="table"> 

            
<?php
        //Include libraries
        require('../vendor/autoload.php');
        
        //Create instance of MongoDB client
        $mongoClient = (new MongoDB\Client);

        //Select a database
        $db = $mongoClient->Details;
        $collection=$db->Products;

        $filter = [];
        $options = ['sort' => ['Amount sold' => -1]];     //Sorting product in descending order
        $resultArray = $collection->find($filter,$options)->toArray();

        //Selecting top 3 items sold
        $slicedArray=array_slice($resultArray,0,3);      

        // Displaying each item
        foreach ($slicedArray as $document){
            
                $ProductName= $document['Model'];
                $ProductPrice= $document['Price'];
                $ProductQty= $document['Quantity'];
                $ProductAmt=  $document['Amount sold'];
                $ProductImg= $document['Image'];
                echo'<div class="item">';
                echo'<img src="'.$ProductImg.'" alt="Product 1">';
                echo'<p>Model: '.$ProductName.'</p>';
                echo'<p>Price: '.$ProductPrice.'</p>';
                echo'</div>';
        }          
?>

</div>
<div class="re-button">
            <a href="products.php" >
                <button class="reebutton">
                    View all products
                </button>
            </a>
</div>
<?php
    //Output the footer

OutputFooter();
?>