<?php
// Require MySQL Connection
require('Database/DBController.php');

// Require Product Class
require('Database/Product.php');

// Require Cart Class
require('Database/Cart.php');

//DBController Object
$db = new DBController();

//Product Object
$product= new Product($db);
$product_shuffle = $product->getData();

//Cart Object
$Cart = new Cart($db);
