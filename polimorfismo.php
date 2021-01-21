<?php

require_once "autoload/psr-4.php";

use App\Email\SendEmail;
use App\Email\Adapters\Mailgun\Adapter as Mailgun;
use App\Email\Adapters\SES\Adapter as SES;
use App\Email\Adapters\BaseAdapter as Base;

$email = new SendEmail();
$mailgun = new Mailgun();
$ses = new SES();
$base = new Base();

$email->send($mailgun);
$email->send($ses);
$email->send($base);