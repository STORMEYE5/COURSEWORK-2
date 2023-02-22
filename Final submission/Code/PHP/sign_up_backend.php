<?php
    //Include libraries
    include('../vendor/autoload.php');
    //Create instance of MongoDB client
    $mongoClient = (new MongoDB\Client);

    //Select a database
    $db = $mongoClient->Details;
    //Select a collection
    $collection = $db->Customers;

    $json_data = file_get_contents('php://input');

    // Parse the JSON data into a PHP object
    $data = json_decode($json_data, true);

    //Create a PHP array with our search criteria
    $findCriteria = [
        "Email" => $data[2],
    ];

    //Find all of the customers that match this criteria
    $cursor = $collection->count($findCriteria);

    if ($cursor == 0) {
        $data = [
            "Surname" => $data[0],
            "Name" => $data[1],
            "Email" => $data[2],
            "Password" => $data[3],
            "Phone" => $data[4],
            "Address" => $data[5]
        ];
        $insertresult = $collection -> insertOne($data);

        // Prepare the error response as an associative array
        $response = array('success' => true);

        // Encode the response as JSON and echo it
        echo json_encode($response);
    } else {
        // Prepare the error response as an associative array
        $response = array('success' => false);

        // Encode the response as JSON and echo it
        echo json_encode($response);
    }

