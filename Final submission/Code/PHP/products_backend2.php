<?php
    //Include libraries
    include('../vendor/autoload.php');
    //Create instance of MongoDB client
    $mongoClient = (new MongoDB\Client);

    //Select a database
    $db = $mongoClient->Details;
    //Select a collection
    $collection = $db->Products;
    
    $product_key = json_decode($_POST['param2']);

    $findCriteria = [
        "Product ID" => $product_key[0],
    ];

    $cursor = $collection->find($findCriteria);

    $prod_array = array();

    foreach($cursor as $prod){
        $prod_array[] = [
            $prod['Quantity'],
            $prod['Amount sold'],
        ];
    }

    $prod_array[0][0] -= $product_key[1];
    $prod_array[0][1] += $product_key[1];
    // Define the filter and update operations
    $filter = [ 'Product ID' => $product_key[0] ];
    $update = [
        '$set' => [
            'Quantity' => (int)$prod_array[0][0],
            'Amount sold' => (int)$product_key[1]
        ],
    ];

    // Update the first document that matches the filter
    $result = $collection->updateOne($filter, $update);

    // echo json_encode($prod_array);
    