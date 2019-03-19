<?php 
namespace SOLID\Husbands;


class HighRankingMale
{
       
       private $foodProvider;


       public function __construct(FoodProviderInterface $foodProvider)
       {
       	     $this->foodProvider = $foodProvider;
       }


	   public function eat()
	   {
	   	   $food  = $this->foodProvider->getFood();
	   	   // ... eat
	   }
}