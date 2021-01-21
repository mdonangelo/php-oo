<?php

namespace App\Classes;

use App\Traits\Press;

class Order
{

    use Press;

    private Client $cli;
    private Product $prod;

    public function __construct(Client $client, Product $product)
    {
        $this->cli = $client;
        $this->prod = $product;
    }

    public function getProduct(): Product
    {
        return $this->prod;
    }
}