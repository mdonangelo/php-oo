<?php

require_once "autoload/psr-4.php";

use \App\Classes\Product;

$prod = new Product("Cerveja");
$prod->defineBarCode("31290");
$prod->definePrice(2.50);

echo $prod->returnDetails();