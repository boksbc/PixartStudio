<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use Pixel\core\bootstrap\Bootstrap;

require __DIR__ . '/../vendor/autoload.php';

$app = new Bootstrap();

// Start Web Routing
$app->boot();
