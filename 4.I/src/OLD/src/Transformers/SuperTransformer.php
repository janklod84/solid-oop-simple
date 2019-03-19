<?php  
namespace SOLID\Transformers;

use SOLID\TransformerInterface;


class SuperTransformer implements CarTransformerInterface,
{
      public function toCar()
      {
      	  echo 'transform to car';
      }


      public function toPlane()
      {
      	   echo 'transform to plane';
      }


      public function toShip()
      {
      	  echo 'transform to ship';
      }
}