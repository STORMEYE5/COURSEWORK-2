<?php
    //Include libraries
    include('../vendor/autoload.php');
    //Create instance of MongoDB client
    $mongoClient = (new MongoDB\Client);

    //Select a database
    $db = $mongoClient->Details;
    //Select a collection
    $collection = $db->Products;

    $product = $_GET['param1'];

    $findCriteria = [
        "Product ID" => $product,
    ];

    $cursor = $collection->find($findCriteria);

    $response = array();

    foreach ($cursor as $prod) {
        $response = array(
            'Image' => $prod['Image'],
            'Model' => $prod['Model'],
            'Quantity' => 1,
            'Product ID' => $prod['Product ID'],
            'Price' => $prod['Price'],
            'Section' => $prod['Section'],
        );
    }

    echo json_encode($response);