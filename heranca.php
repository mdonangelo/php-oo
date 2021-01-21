<?php

require_once "autoload/psr-4.php";

use App\Classes\Product;
use App\Classes\HouseholdAppliance;
use App\Classes\Microwave;

$produto = new Product("Cerveja");
  
$produto->price = 3.20;
$produto->defineBarCode("00011321");

$produto->details();

var_dump($produto);


$eletronico = new HouseholdAppliance("Geladeira", 220);

$eletronico->price = 900;
$eletronico->defineBarCode("03218");
$eletronico->defineVolts(110);

$eletronico->details();

var_dump($eletronico);


$microondas = new Microwave("Microondas", 110, 60);

$microondas->price = 300;
$microondas->defineBarCode("348190");
$microondas->defineVolts(110);
$microondas->defineWatts(300);

$microondas->details();

var_dump($microondas);

