<?php 

require_once __DIR__.'/vendor/autoload.php';

/**
 * SOLID 
 * S - Принцип единственный обязанности (ответственности)
 * Single responsibility principle
*/

$logger  = new \SOLID\Logger();
$product = new \SOLID\Product($logger);
$product->setPrice(10);
