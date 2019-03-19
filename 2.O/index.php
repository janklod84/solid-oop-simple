<?php 

require_once __DIR__.'/vendor/autoload.php';

use SOLID\Logger\DBLogger;
use SOLID\Product;

/**
 * SOLID 
 * O - Принцип открытости / закрытости
 * Open / closed principle
*/


$logger  = new DBLogger();
$product = new Product($logger);
$product->setPrice(10);
