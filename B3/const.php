<?php 
class MyClass{
    const PI = 3.14;

    public function getPi(){
        return self::PI; // MyClass::PI
    }
}

$myClass = new MyClass();
echo $myClass->getPi();