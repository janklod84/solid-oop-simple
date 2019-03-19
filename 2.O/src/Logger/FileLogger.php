<?php 
namespace SOLID\Logger;

use SOLID\LoggerInterface;


class FileLogger implements LoggerInterface 
{

	  private function saveToFile($message)
	  {
           // ...
	  }
      
      // save message to file
	  public function log($message)
	  {
	  	   // ...
	  	   $this->saveToFile($message);
	  }
}

