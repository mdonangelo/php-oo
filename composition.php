<?php

require_once "autoload/psr-4.php";

$client = new \App\Classes\Client;
$client->setId(1);
$client->setAge(25);
$client->setName("Matheus");
$client->setAddress("Campinas");

$product = new \App\Classes\Product("Alexa");
$product->definePrice(300);
$product->defineBarCode("3213");

$order = new App\Classes\Order($client, $product);

$order->getProduct()->details();

var_dump($order);


// TRAIT

$client->detailsNew();
$order->detailsNew();