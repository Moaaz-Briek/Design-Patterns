<?php

include "autoload.php";
$dog = AnimalFactory::CreateAnimal('dog');
$cat = AnimalFactory::CreateAnimal('cat');
$dog->makeSound();
$cat->makeSound();