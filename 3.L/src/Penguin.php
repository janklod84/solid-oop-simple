<?php 
namespace SOLID;


/**
 * Дочерний класс от Bird
 * Изменяет поведение.
 * Нарушает принцип LSP
*/

class Penguin extends Bird
{

     public function fly()
     {
     	 // die('i cant fly ((('); // не типичное поведение - die или exit
           return 'i cant fly ((('; // не типичное поведение - возвращаем строку
     }


     public function swim()
     {
     	$swimSpeed = 4;
     	return $swimSpeed;
     }
}