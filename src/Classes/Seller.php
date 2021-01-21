<?php

namespace App\Classes;

class Seller
{
    public float $salesAmount = 0;
    protected static float $bonus = 1.2;
    protected static float $kickback = 2.5;

    private static function kickback(bool $hasBonus): float
    {
        if($hasBonus) {
            return self::$kickback * self::$bonus;
        }

        return self::$kickback;
    }

    public static function calculateKickback(bool $hasBonus, float $value): float
    {
        $percentKickback = static::kickback($hasBonus) / 100;

        return $percentKickback * $value;
    }

    public function addSell(float $value): void
    {
        $this->salesAmount = $this->salesAmount + $value;
    }

    public function myKickback(): float
    {
        return static::calculateKickback(true, $this->salesAmount);
    }
}