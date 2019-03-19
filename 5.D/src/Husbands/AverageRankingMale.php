<?php 
namespace SOLID\Husbands;


class AverageRankingMale
{
       
       private $wife;


       public function __construct(Wife $wife)
       {
       	     $this->wife = $wife;
       }

       
	   public function eat()
	   {
	   	   $food  = $this->wife->getFood();
	   	   // ... eat
	   }
}