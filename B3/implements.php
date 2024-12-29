<?php 
interface AnimalInterface{
    public function sound();
    public function move();
}
class Cat implements AnimalInterface{
    public function sound(){
        echo "Meow" . PHP_EOL;
    }
    public function move(){
        echo "Move" . PHP_EOL;
    }
}
echo '<pre>';
$cat = new Cat();
$cat->sound();
$cat->move();