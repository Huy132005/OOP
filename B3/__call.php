<?php 
class MyClass{
    public function __call($method, $args){
        echo "Call $method with " . implode(", ", $args) . "\n";
    }
}

$myClass = new MyClass();
$myClass->h(1,2,3,4,5);