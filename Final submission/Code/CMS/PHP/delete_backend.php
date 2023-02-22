<?php
//Include libraries
include('../../vendor/autoload.php');
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->Details;
//Select a collection
$collection = $db->Products;

$id= $_GET['id'];

//Create a PHP array with our search criteria
$deleteCriteria = [
    "Product ID" => $id,
];

$insertresult = $collection -> deleteOne($deleteCriteria);

echo '<script>window.location.replace("inventory.php")</script>';