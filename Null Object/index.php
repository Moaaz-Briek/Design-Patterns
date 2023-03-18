<?php
include "autoload.php";
function getAnimal($animalType) {
    if ($animalType === "dog") {
        return new Dog();
    } else if ($animalType === "cat") {
        return new Cat();
    } else {
        return new NullAnimal();
    }
}

$animal = getAnimal("cat");
$animal->makeSound(); // echos "Meow!"

$animal = getAnimal("dog");
$animal->makeSound(); // echoes "Woof!"

$animal = getAnimal("mouse");
$animal->makeSound(); // !!!!!!

