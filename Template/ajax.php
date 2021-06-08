<?php
// Require MySQL Connection
require ('../Database/DBController.php');

// Require Product Class
require ('../Database/Product.php');

//DBController Object
$db = new DBController();

//Product Object
$product= new Product($db);

if (isset($_POST['itemid'])){
    $result =$product->getProduct($_POST['itemid']);
    echo json_encode($result);
}