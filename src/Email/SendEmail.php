<?php

namespace App\Email;

use App\Interfaces\EmailAdapter;
use App\Email\Adapters\Mailgun\Adapter as Mailgun;
use App\Email\Adapters\Mailgun\SES as SES;

const VERSION = 1.0;

class SendEmail
{
    public function send(EmailAdapter $adapter): void
    {
        $adapter->process();
    }
}