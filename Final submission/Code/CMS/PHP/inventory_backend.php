<?php
    //Include libraries
    include('../../vendor/autoload.php');
    //Create instance of MongoDB client
    $mongoClient = (new MongoDB\Client);

    //Select a database
    $db = $mongoClient->Details;
    //Select a collection
    $collection = $db->Products;

    
    $cursor = $collection->find();

    foreach ($cursor as $prod) {
        $prod_array[] = [
            $prod['Product ID'],
            $prod['Section'],
            $prod['Model'],
            $prod['Quantity'],
            $prod['Price'],
        ];
    } 
    echo json_encode($prod_array);

    