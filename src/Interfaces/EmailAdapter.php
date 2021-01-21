<?php

namespace App\Interfaces;

interface EmailAdapter
{
    public function process(): void;
}