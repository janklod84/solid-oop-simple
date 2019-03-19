<?php  
namespace SOLID\Transformers;

use SOLID\{
      CarTransformerInterface,
      PlaneTransformerInterface,
      ShipTransformerInterface
};


class SuperTransformer 
implements 
CarTransformerInterface, 
PlaneTransformerInterface,
ShipTransformerInterface
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