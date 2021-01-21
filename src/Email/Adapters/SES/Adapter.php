<?php

namespace App\Email\Adapters\SES;

use App\Email\Adapters\BaseAdapter;

class Adapter extends BaseAdapter
{
    public function process(): void
    {
        echo "Processign with SES adapter";
    }
}