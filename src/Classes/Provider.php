<?php

namespace App\Classes;

class Provider
{
    public const COUNTRY = "Brasil";
    public string $companyName;
    public string $fantasyName;
    public string $cnpj;

    public function auth(object $user): void
    {
        if($user->name == "name 1" && $user->password = "123") {
            echo "Authorized";
        }else {
            echo "Blocked";
        }
    }
}