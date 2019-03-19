<?php 
namespace SOLID;

/**
 * SOLID 
 * I - Принцип разделения интерфейса.
 * Interface Segregation Principe, ISP
*/

interface TransformerInterface
{
	  public function toCar();
	  public function toPlane();
	  public function toShip();
}