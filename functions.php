<?php


require ('database/controllerDB.php');

require ('database/productDB.php');

require ('database/cartDB.php');



$db = new controllerDB();

$product = new productDB($db);
$product_shuffle = $product->getData();

$cartSum = new cartDB($db);

