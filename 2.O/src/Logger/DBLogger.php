<?php 
namespace SOLID\Logger;

use SOLID\LoggerInterface;


class DBLogger implements LoggerInterface 
{

	  private function saveToDB($message)
	  {
           // ...
	  }
      
      // save message to Database
	  public function log($message)
	  {
	  	   // ...
	  	   $this->saveToDB($message);
	  }
}