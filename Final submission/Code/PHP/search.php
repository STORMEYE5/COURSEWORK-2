<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->

<?php
// include common.php as it contains the header and footer... website has a constant header and footer throughout

include('common.php');
$title = "Products";
//Ouputs the header for the page and opening body tag

outputHeader($title);
outputNav();
?>

<script src="../JavaScript/sort.js"></script>
<link rel="stylesheet" href="../CSS/search_style.css">

<div class="form">
<div class="example">
    <form class="example2" action="search.php" method="get">
        <input type="text" placeholder="Search.." name="search">
        <input type="submit" value="➢" class="btn1">
    </form>
    <button onclick="sortProducts()">SORT ASCENDING PRICE</button>
</div>
<div>
    

<?php

    require('../vendor/autoload.php');

    $mongoClient = (new MongoDB\Client);
    $db = $mongoClient->Details;
    $product = $db->Products;

    // Get the search query from the user
    if (isset($_GET['search'])) {
        $search_query = $_GET['search'];
    } else {
        $search_query = '';
    }

    if (!empty($search_query)) {
        $results = $product->find(
            ['Model' => ['$regex' => $search_query, '$options' => 'i']]
        );
    } else {
        $results = $product->find();
      }

      echo '<div id="product-card">';
      foreach ($results as $product) {
          echo '<div class="product-card">';
          echo '<h2 class="product-name">' . $product['Model'] . '</h2>';
          echo '<p class="product-description">' . $product['Section'] . '</p>';
          echo '<p class="product-price"> $' . $product['Price'] . '</p>';
          echo '<img src="' . $product['Image'] . '" style="height:100px; width:100px"</img>';
          echo '</div>';
        }
        echo '</div>';

        ?>
  
</div>
</div>

<script src="../JavaScript/sort.js"></script>
<link rel="stylesheet" href="../CSS/sort_style.css">
<?php

    // include('../../vendor/autoload.php');
    require '../vendor/autoload.php';
    // Establish MongoDB connection
    $mongoClient = (new MongoDB\Client);
    $db = $mongoClient->Details;
    //Select a collection
    $collection = $db->Products; // assuming $db is your MongoDB instance
    $products = $collection->find();

// foreach ($products as $product) {
//     echo '<div id="products">';
//     echo '<h2 class="product-name">' . $product['Model'] . '</h2>';
//     echo '<p class="product-description">' . $product['Section'] . '</p>';
//     echo '<p class="product-price"> $' . $product['Price'] . '</p>';
//     echo '<img src="' . $product['Image'] . '" style="height:100px; width:100px"</img>';
//     echo '</div>';
// }
// echo '</div>';

?>

