<?php

namespace App\Email\Adapters;
use App\Interfaces\EmailAdapter;

class BaseAdapter implements EmailAdapter
{
    public function process(): void
    {
        echo "Processign with base adapter";
    }
}