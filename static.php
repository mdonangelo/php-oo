<?php

require_once "autoload/psr-4.php";

use  App\Classes\Seller;
use  App\Classes\Representative;


// echo Seller::calculateKickback(true, 1000);
// echo Representative::calculateKickback(true, 1000);

$seller = new Seller();
$seller->addSell(100000);
echo $seller->myKickback();
