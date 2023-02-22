<?php
    //Include libraries
    include('../vendor/autoload.php');
    //Create instance of MongoDB client
    $mongoClient = (new MongoDB\Client);

    //Select a database
    $db = $mongoClient->Details;
    //Select a collection
    $collection = $db->Customers;
    
    $cust_array = json_decode($_POST['param2']);

    // Define the filter and update operations
    $filter = [ 'Email' => $cust_array[2] ];
    $update = [
        '$set' => [
            'Surname' => $cust_array[0],
            'Name' => $cust_array[1],
            'Password' => $cust_array[3],
            'Phone' => $cust_array[4],
            'Address' => $cust_array[5],
        ],
    ];

    // Update the first document that matches the filter
    $result = $collection->updateOne($filter, $update);