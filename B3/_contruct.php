<?php 

class MyClass{
    public $name;
    public $age;
    public function __construct($name, $age ){ 
        $this->name = $name;
        $this->age = $age;
        echo "Hello " . $this->name ."\n" . $this->age;
       
    } 
}
$myClass = new MyClass("PHP",10);