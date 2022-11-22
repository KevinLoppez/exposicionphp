<?php

use App\Invoice;

require_once __DIR__. '/../vendor/autoload.php';

$invoice = new Invoice();

$str = serialize($invoice);

$invoice2 = unserialize($str);

var_dump($invoice,$invoice2, $invoice ===$invoice2);