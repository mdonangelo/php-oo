<?php

require_once "autoload/psr-4.php";

$c = new \App\Classes\Client;
$c->setId(2);
$c->setName("Matheus");
$c->setAge(25);
$c->setPhone("19 987654321");
$c->setAddress("Campinas");

var_dump($c);