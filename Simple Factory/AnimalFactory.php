<?php
class AnimalFactory
{
    public static function CreateAnimal($type)
    {
        switch ($type){
            case 'dog':
                return new Dog();
            case 'cat':
                return new Cat();
            default:
                return new \Exception('Invalid Animal Type');
        }
    }
}