<?php

namespace App\Classes;

use App\Interfaces\Printing;
use App\Interfaces\Retornable;

class Product implements Printing, Retornable
{
    // Private: apenas podemos acessar na mesma classe
    // Protected: podemos acessar em classes que extendem
    // Public: pode ser acessado de qualquer lugar

    public const LAW = 1050;

    private string $title;
    public string $description = "Produtos em geral";
    private float $price;
    private string $barCode;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    // final impede que outras classes filhas sobreescrevam o método
    final public function defineBarCode (string $code): void
    {
        $this->barCode = $code;
    }

    public function accessBarCode (): string
    {
        return "<br>" . $this->barCode;
    }

    public function definePrice(float $price): void
    {
        if($price > 0) {
            $this->price = $price;
        }
    }


    public function details(): void
    {
        echo "<br>Product name: " . $this->title;
        echo "<br>Price product: " . $this->price;
        echo "<br>Description product: " . $this->description;
        echo $this->accessBarCode();
    }

    public function returnDetails(): string
    {
        $saida = "<br>Product name: " . $this->title;
        $saida .= "<br>Price product: " . $this->price;
        $saida .= "<br>Description product: " . $this->description;
        $saida .= $this->accessBarCode();

        return $saida;
    }
}
