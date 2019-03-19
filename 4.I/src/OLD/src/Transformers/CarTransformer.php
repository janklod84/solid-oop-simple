<?php  
namespace SOLID\Transformers;

use SOLID\TransformerInterface;
use Exception;


class CarTransformer implements TransformerInterface
{
      public function toCar()
      {
          echo 'transform to car';
      }


      public function toPlane()
      {
          throw new Exception('I cant tranform to plane');
      }


      public function toShip()
      {
      	throw new Exception('I cant tranform to ship');
      }
}