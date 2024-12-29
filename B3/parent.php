<?php 
class BaseClass{
    public function sayHello(){
        echo "Hello";
    }
}
class DerivedClass extends BaseClass{
    public function sayHello(){
        parent::sayHello();
        echo "Xin chao";
    }
}
$child = new DerivedClass();
$child->sayHello();