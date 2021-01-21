<?php

namespace App\Classes;

// ao utilizar final nenhuma outra classe poderá extender a classe microwave
final class Microwave extends HouseholdAppliance
{
    public string $description = "Microondas em geral";
    public int $watts;

    public function __construct(string $title, int $volts, int $watts)
    {
        parent::__construct($title, $volts);
        $this->defineWatts($watts);
    }

    public function defineWatts(int $watts): void
    {
        $this->watts = $watts;
    }

    public function details(): void
    {
        // O parent permite que chamemos o método da classe pai
        parent::details();
        echo "Watts: " . $this->watts;
    }
}