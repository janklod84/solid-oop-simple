<?php 
namespace SOLID;

/**
 * Одна объязанность логировать сообщение
 * @package Logger
*/
class Logger 
{
	  public function log($message)
	  {
	  	   // ...
	  	   $this->saveToFile($message);
	  }

	  private function saveToFile($message)
	  {
           // ...
	  }
}