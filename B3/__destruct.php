<?php 
class MyClass{

    private $name;

    public function __construct(){
        echo "Hello\n";
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function __destruct(){
        echo "Goodbye\n";
    }
}
echo "<pre>";
$myClass = new MyClass();
$myClass->setName("PHP");
echo $myClass->getName();