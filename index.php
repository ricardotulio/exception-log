<?php

require_once("vendor/autoload.php");

use PagarMe\A;
use PagarMe\ApplicationAspectKernel;

$aspectKernel = ApplicationAspectKernel::getInstance();
$aspectKernel->init(array(
        'cacheDir' => __DIR__ . '/tmp/',
        'includePaths' => array(
            __DIR__ . '/src/'
        ),
        'debug' => true
));

$a = new A();
$a->outroMetodo();