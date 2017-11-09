<?php


include "Animal.php";
include "Cat.php";

ini_set('display_errors', 1);



$cat = new Cat ('garfield');
$cat->getName () === 'garfield';
echo $cat->meow();
$cat->meow () === 'Cat garfield is saying meow';