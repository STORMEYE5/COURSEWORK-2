<?php
    //Include libraries
    include('../../vendor/autoload.php');
    //Create instance of MongoDB client
    $mongoClient = (new MongoDB\Client);

    //Select a database
    $db = $mongoClient->Details;
    //Select a collection
    $collection = $db->Products;

    $prod_ID = json_decode($_GET['param1']);

    $findCriteria = [
        "Product ID" => $prod_ID,
    ];

    $cursor = $collection->find($findCriteria);

    $prod_array = array();

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
    