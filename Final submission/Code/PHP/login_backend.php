<?php
    //Include libraries
    include('../vendor/autoload.php');
    //Create instance of MongoDB client
    $mongoClient = (new MongoDB\Client);

    //Select a database
    $db = $mongoClient->Details;
    //Select a collection
    $collection = $db->Customers;

    $email = $_GET['param1'];
    $password = $_GET['param2'];

    $findCriteria = [
        "Email" => $email,
    ];

    $cursor = $collection->find($findCriteria);

    foreach ($cursor as $cust) {
        if ($password == $cust['Password']) {
            // echo "Received parameters: param1=$username, param2=$password"; 
            // Prepare the success response as an associative array
            $response = array(
                'success' => true,
                'Surname' => $cust['Surname'],
                'Name' => $cust['Name'],
                'Email' => $cust['Email'],
            );

            // Encode the response as JSON and echo it
            echo json_encode($response);
        } else {
            // Prepare the error response as an associative array
            $response = array('success' => false);

            // Encode the response as JSON and echo it
            echo json_encode($response);
        }
    }
