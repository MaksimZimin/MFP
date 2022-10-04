<?php

require 'vendor\autoload.php';
use Core\Router;

$res = new Router();
$res->run();

echo '<br>';

use Core\Router_1;

$res = new Router_1();
$res->getRun();

echo '<br>';

$result = new Router_1;
$result->setRun([1, 2, ["a", "b", "c"]]);
$result->getRun();

?>