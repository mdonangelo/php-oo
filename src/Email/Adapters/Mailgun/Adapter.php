<?php

namespace App\Email\Adapters\Mailgun;

use App\Email\Adapters\BaseAdapter;

class Adapter extends BaseAdapter
{
    public function process(): void
    {
        echo "Processign with mailgun adapter";
    }
}