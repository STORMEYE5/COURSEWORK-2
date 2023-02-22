<?php
    //Include libraries
    include('../../vendor/autoload.php');
    //Create instance of MongoDB client
    $mongoClient = (new MongoDB\Client);

    //Select a database
    $db = $mongoClient->Details;
    //Select a collection
    $collection = $db->Products;
    
    $product_array = json_decode($_POST['param2']);

    // Define the filter and update operations
    $filter = [ 'Product ID' => $product_array[0] ];
    $update = [
        '$set' => [
            'Section' => $product_array[1],
            'Model' => $product_array[2],
            'Quantity' => (int)$product_array[3],
            'Price' => (int)$product_array[4],
        ],
    ];

    // Update the first document that matches the filter
    $result = $collection->updateOne($filter, $update);