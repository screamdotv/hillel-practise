<?php
require 'vendor/autoload.php';
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

// Create the logger
$logger = new Logger('my_logger');
// Now add some handlers
$logger->pushHandler(new StreamHandler(__DIR__.'/my_app.log', Level::Debug));
$logger->pushHandler(new FirePHPHandler());

// You can now use your logger
$logger->info('My logger is now ready');

$file = file_get_contents('./my_app.log');

echo $file . PHP_EOL;