<?php 
class Animal
{
    public function sound(){
        echo "Animal sound" . PHP_EOL;
    }
}
class Dog extends Animal
{
    // public function sound(){
    //     echo "bank" .PHP_EOL;
    // }
}
class Cat extends Animal
{
    public function sound(){
        echo "Meow" .PHP_EOL;
    }
}
echo '<pre>';
$dog = new Dog();
$dog->sound();

$cat = new Cat();
$cat->sound();