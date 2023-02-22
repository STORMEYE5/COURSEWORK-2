<?php
//Include libraries
include('../../vendor/autoload.php');
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->Details;
//Select a collection
$collection = $db->Products;

$section = $_POST['section'];
$iameg = $_POST['image'];
$model= filter_input(INPUT_POST, 'model', FILTER_SANITIZE_STRING);
$id= filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
$price= filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_INT);
$quantity= filter_input(INPUT_POST, 'quantity', FILTER_SANITIZE_NUMBER_INT);

$data=[
    "Image" => $image,
    "Model" => $model,
    "Product ID" => $id,
    "Price" => (int)$price,
    "Quantity" => (int)$quantity,
    "Section" => $section
];

$insertresult = $collection -> insertOne($data);

echo '<script>window.location.replace("inventory.php")</script>';