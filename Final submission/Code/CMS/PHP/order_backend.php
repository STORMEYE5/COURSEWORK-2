<?php
    //Include libraries
    include('../../vendor/autoload.php');
    //Create instance of MongoDB client
    $mongoClient = (new MongoDB\Client);

    //Select a database
    $db = $mongoClient->Details;
    //Select a collection
    $collection = $db->Order;

    $customerId = json_decode($_GET['param1']);

    $findCriteria = [
        "Customer ID" => $customerId,
    ];
    
    $cursor = $collection->find($findCriteria);

    $customer_array = array();

    foreach ($cursor as $cust_id) {
        $customer_array[] = [
            $cust_id['Order ID'],
            $cust_id['Customer ID'],
            $cust_id['Date'],
            (int)$cust_id['Price']
        ];
    } 

    echo json_encode($customer_array);
