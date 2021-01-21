<?php

namespace App\Classes;

class HouseholdAppliance extends Product
{
    public string $description = "Eletrodomésticos em geral";
    public int $volts;

    public function __construct(string $title, int $volts)
    {
        parent::__construct($title);
        $this->defineVolts($volts);
    }

    public function defineVolts(int $volts): void
    {
        if($volts === 110 || $volts === 220) {
            $this->volts = $volts;
        }
    }

    public function details(): void
    {
        // O parent permite que chamemos o método da classe pai
        parent::details();
        echo "Voltagem: " . $this->volts;
    }

}