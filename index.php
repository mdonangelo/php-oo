<?php

require_once "autoload/psr-4.php";

use \App\Classes\Product;

$product1 = new Product("Brahma");
$product1->description = "Cerveja brasileira";
$product1->price = 2.50;

var_dump($product1);

