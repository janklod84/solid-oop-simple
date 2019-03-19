<?php  
namespace SOLID\Transformers;

use SOLID\TransformerInterface;
use Exception;


class CarTransformer implements CarTransformerInterface
{
      public function toCar()
      {
          echo 'transform to car';
      }

}