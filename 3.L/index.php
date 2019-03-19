<?php 

require_once __DIR__.'/vendor/autoload.php';

use SOLID\{
	Bird, 
	Duck, 
	Penguin,
	BirdRun
};


/**
 * SOLID 
 * L - Принцип подстановки Барбары Лисков
 * Liskov Substitution Principe, LSP
*/



// $bird = new Bird();
// $bird = new Duck();
$bird = new Penguin();

$birdRun = new BirdRun($bird);
$birdRun->run();
