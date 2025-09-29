<?php

use resources\library\Counter;

define('PATH', dirname(__FILE__, 2));

require_once PATH . '/vendor/autoload.php';

$name = 'Rosa Fortuna';

$counter = new Counter();

var_dump($counter->start(10, 5));
var_dump("Hello {$name}! Wellcome to this app.");
