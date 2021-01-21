<?php

namespace App\Classes;

class Representative extends Seller
{
    protected static function kickback(bool $hasBonus): float
    {
        if($hasBonus) {
            return (parent::$kickback * parent::$bonus) + 1;
        }

        return parent::$kickback + 1;
    }
}