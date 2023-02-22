<?php
    //Include libraries
    include('../vendor/autoload.php');
    //Create instance of MongoDB client
    $mongoClient = (new MongoDB\Client);

    //Select a database
    $db = $mongoClient->Details;
    //Select a collection
    $collection = $db->Customers;

    $data = $_GET['param1'];

    //Create a PHP array with our search criteria
    $findCriteria = [
        "Email" => $data,
    ];

    //Find all of the customers that match this criteria
    $cursor = $collection->find($findCriteria);

    $response = array();

    foreach ($cursor as $cust) {
        $response = [
            $cust['Surname'],
            $cust['Name'],
            $cust['Email'],
            $cust['Password'],
            $cust['Phone'],
            $cust['Address'],
        ];

        // Encode the response as JSON and echo it
        echo json_encode($response);
    }

